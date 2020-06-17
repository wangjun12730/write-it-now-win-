<?php
namespace Admin\Model;
use Think\Model;
class CheckModel extends Model{
    public function textCheck(Request $request){
        //内容安全识别  $data['content']为要检测的文本内容
        $data['content'] = htmlspecialchars($request->post('content'));
        $content = $data['content'];
        $output = $this->curlText($content);//只有当$output->errcode==0时审核通过
        if($output->errcode!=0){
            return json(['code' => 500,'msg'=>'内容含有违法违规内容，请修改后再提交']);
            die;
        }
    }
    public function getAccessToken(){
        $token_file = json_decode(file_get_contents('token.json'));
        //有效期外才重新获取
        if($token_file->expires_time<time()){
            $appid     = $this->APPID;     //你的小程序appid
            $appsecret = $this->APPSERRET; //你的小程序appsecret
            $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=' . $appid . '&secret=' . $appsecret;
            $token_json = file_get_contents($url);
            $token_json = json_decode($token_json);
            $token_file->access_token = $token_json->access_token;
            $token_file->expires_time = time()+7200;
            $access_token = $token_json->access_token;
            file_put_contents('token.json', json_encode($token_file));
        }else{
            $access_token = $token_file->access_token;
        }
        return $access_token;
    }
//检测文本是否含有违禁内容（频率限制：单个 appId 调用上限为 1000 次/分钟，100,000 次/天）
    private function curlText($content){
        $ACCESS_TOKEN = $this->getAccessToken();
        $url = "https://api.weixin.qq.com/wxa/msg_sec_check?access_token=".$ACCESS_TOKEN;
        $file_data = '{ "content":"'.$content.'" }';//$content(需要检测的文本内容，最大520KB)
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch , CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $file_data);
        $output = curl_exec($ch);//发送请求获取结果
        $output=json_decode($output,false);
        curl_close($ch);//关闭会话
        return $output;//返回结果
    }
}

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/6/17
 * Time: 12:31
 */