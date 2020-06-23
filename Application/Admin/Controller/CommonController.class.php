<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
    //构造函数，同时检查管理员是否登录
    public function __construct(){
        parent::__construct();
        //检查管理员是否登录
        $this->checkUser();
    }
    //检查管理员是否登录
    private function checkUser(){
        if(!session('?admin_name')){
            $this->error('请登录',U('Login/index'));
        }
    }

}