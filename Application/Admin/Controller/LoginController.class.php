<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    //��̨��½ҳ
    public function index(){
        if(IS_POST){
            //判断验证码是否正确
            $rst = $this->checkVerify(I('post.verify'));
            if($rst===false){
                $this->error('验证码错误！');
            }
            //判断用户名和密码是否正确
            if(I('post.admin_name')==C('USER_CONFIG.admin_name')&&
                I('post.admin_pwd')==C('USER_CONFIG.admin_pwd')){
                session('admin_name',C('USER_CONFIG.admin_name'));
                $this->success('登录成功!',U('Index/index'));
            }else{
                $this->error('用户名或密码错误!');
            }
            return;
        }
        $this->display();
    }
    //������֤��
    public function getVerify(){
        $verify = new \Think\Verify();
        return $verify->entry();
    }
    //�����֤��
    private function checkVerify($code,$id=''){
        $verify = new \Think\Verify();
        return $verify->check($code,$id);
    }
    //�˳�ϵͳ
    public function logout(){
        session('[destroy]');
        $this->success('�˳��ɹ�',U('Login/index'));
    }
}