<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    //登录
    public function index(){
        if(IS_POST){
            //判断验证码是否正确
            $rst = $this->checkVerify(I('post.verify'));
            if($rst===false){
                $this->error('验证码错误！');
            }

            //获取管理员表记录
            $res1 = M('admin')->where("name='".I('post.admin_name')."'")->find();

            //判断用户名和密码是否正确
            if(I('post.admin_name')==$res1['name']&&
                I('post.admin_pwd')==$res1['pwd']){


                //统计需要审核的消息数
                $res2 = M('stories_check')->where('is_check=0')->select();
                if(is_array($res2)){
                    session('checking',count($res2));  //如果有审核数设置checking会话为查询到的数目
                }else{
                    session('checking',0); //没有查到数据，则设置checking会话为0
                }
                session('admin_name',$res1['name']);

                $this->success('登录成功!',U('Index/index'));
            }else{
                $this->error('用户名或密码错误!');
            }
            return;
        }
        $this->display();
    }
    //获取验证码
    public function getVerify(){
        $verify = new \Think\Verify();
        return $verify->entry();
    }
    //验证码验证
    private function checkVerify($code,$id=''){
        $verify = new \Think\Verify();
        return $verify->check($code,$id);
    }
    //注销
    public function logout(){
        session('[destroy]');
        $this->success('注销成功',U('Login/index'));
    }
}