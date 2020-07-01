<?php
namespace Home\Controller;
use Think\Controller;

class MessageController extends Controller{
    //查看消息列表
    public function messageList(){
        //查询用户信息
        $user = M('members')->where('id='.$_SESSION['user_id'])->find();
        if($user){
            $this->assign('user',$user);
        }
        $model = M('messages');
        $res = $model->where('user_id='.$_SESSION['user_id'])->order("create_time desc")->select();

        if($res){
            $_SESSION['messages'] = count($res);//将消息数更新进会话
            $this->assign('result',$res);
        }else{
            $_SESSION['messages'] = 0; //未查到消息，则向消息数会话设置为0
            $this->assign('empty',"1");//分配一个$empty变量,用于判断审核数是否为空
        }
        $this->display();
    }

    //删除消息
    public function deleteMessage(){
        $model = M('messages');
        $res = $model->where('id='.$_GET['m_id'])->delete();
        if($res){
            $_SESSION['messages'] -= 1; //消息会话数减1
        }
        $this->success('删除成功！',U('messageList'),1);
    }
}
