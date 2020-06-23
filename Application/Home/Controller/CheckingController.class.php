<?php
namespace Home\Controller;
use Think\Controller;

class CheckingController extends Controller{
    //审核申请列表
    public function checkingList(){
        //查询用户信息
        $user = M('members')->where('id='.$_SESSION['user_id'])->find();
        if($user){
            $this->assign('user',$user);
        }
        $model = M('stories_check');
        $res = $model->where(array("user_id"=>$_SESSION['user_id'],"is_check"=>"0"))->order('time desc')->select();
        if($res){
            $_SESSION['check'] = count($res); //将审核数存进会话
            $this->assign('result',$res);
        }else{
            $_SESSION['check'] = 0; //未查到审核信息,将审核会话设为0
            $this->assign('empty',"1");//分配一个$empty变量,用于判断审核数是否为空
        }
        $this->display();
    }
}
