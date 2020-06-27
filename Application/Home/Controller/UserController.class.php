<?php
namespace Home\Controller;
use Think\Controller;
use Think\Image;

class UserController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        $allow_action=array(  //指定不需要检查登录的方法列表
            'login','captcha','register'
        );
        if ($this->userInfo===false && !in_array(ACTION_NAME,$allow_action)){
            $this->error('请先登录。',U('User/login'));
        }
    }
    //用户登录
    public function login(){
        //处理表单
        if (IS_POST){
            //判断验证码
            $this->checkVerify(I('post.captcha'));
            //判断用户名和密码
            $name=I('post.user','','');
            $pwd=I('post.pwd','','');
            $rst=D('member')->checkUser($name,$pwd);
            if ($rst!==true){
                $this->error($rst);
            }
            $this->success('登录成功，请稍后',U('Index/index'));
            return;
        }
        $this->display();
    }
    //退出
    public function logout(){
        session('[destroy]');
        $this->success('退出成功',U('Index/index'));
    }

//注册新用户
    public function register()
    {
        if (IS_POST) {
            $this->checkVerify(I('post.captcha'));
            $rst = $this->create('member', 'add');
            if ($rst === false) {
                $this->error($rst->getError());
            }
            $this->success('用户注册成功', U('Index/index'));
            return;
        }
        $this->display();
    }

//生成验证码
    public function captcha()
    {
        $verify = new\Think\Verify();
        return $verify->entry();
    }

//检查验证码
    private function checkVerify($code, $id = '')
    {
        $verify = new \Think\Verify();
        $rst = $verify->check($code, $id);
        if ($rst !== true) {
            $this->error('验证码输入有误');
        }
    }

    //个人中心首页
    public function index(){
        $this->display();
    }

    //修改个人签名
    public function signEdit(){

    }

    //查看个人栏目
    public function column(){
        $mid=$this->userInfo['mid'];
        $data['column']=D('member')->getColumn($mid);
        $this->assign($data);
        $this->display();
    }
    //修改栏目
    public function columnEdit(){
        if (IS_POST){
            $mid=$this->userInfo['mid'];
            $rst=$this->create('member','save',2,"mid=$mid");
            if ($rst===false){
                $this->error('修改失败');
            }
            $this->redirect('User/column');
            return;
        }
        $this->column();
    }

}