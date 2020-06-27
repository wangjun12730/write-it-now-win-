<?php
namespace Admin\Model;
use Think\Model;
class CheckModel extends Model{
    public function textCheck(Request $request){
        //���ݰ�ȫʶ��  $data['content']ΪҪ�����ı�����
        $data['content'] = htmlspecialchars($request->post('content'));
        $content = $data['content'];
        $output = $this->curlText($content);//ֻ�е�$output->errcode==0ʱ���ͨ��
        if($output->errcode!=0){
            return json(['code' => 500,'msg'=>'���ݺ���Υ��Υ�����ݣ����޸ĺ����ύ']);
            die;
        }
    }
    public function getAccessToken(){
        $token_file = json_decode(file_get_contents('token.json'));
        //��Ч��������»�ȡ
        if($token_file->expires_time<time()){
            $appid     = $this->APPID;     //���С����appid
            $appsecret = $this->APPSERRET; //���С����appsecret
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
//����ı��Ƿ���Υ�����ݣ�Ƶ�����ƣ����� appId ��������Ϊ 1000 ��/���ӣ�100,000 ��/�죩
    private function curlText($content){
        $ACCESS_TOKEN = $this->getAccessToken();
        $url = "https://api.weixin.qq.com/wxa/msg_sec_check?access_token=".$ACCESS_TOKEN;
        $file_data = '{ "content":"'.$content.'" }';//$content(��Ҫ�����ı����ݣ����520KB)
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch , CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $file_data);
        $output = curl_exec($ch);//���������ȡ���
        $output=json_decode($output,false);
        curl_close($ch);//�رջỰ
        return $output;//���ؽ��
    }
}

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/6/17
 * Time: 12:31
 */