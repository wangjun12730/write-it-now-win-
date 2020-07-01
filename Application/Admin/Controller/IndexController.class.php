<?php
namespace Admin\Controller;
//后台控制器
class IndexController extends CommonController{
    //后台首页
    public function index(){
        $this->display();
    }

    //修改密码
    public function alterpwd(){
        $this->display();
    }

    //修改密码确认
    public function alterPwdOk(){
        if(IS_POST){
            //判断旧密码是否正确
            $opwd = I('post.opwd');
            $res1 = M('admin')->where(array("name"=>$_SESSION['admin_name'],'pwd'=>$opwd))->find();
            if(!$res1){
                $this->error('原密码错误','',100);
            }
            //将新密码存入数据库
            $data = array("id"=>$res1['id'],"pwd"=>I('post.pwd'));
            $res2 = M('admin')->save($data);
            if($res2){
                $this->success('修改成功',U('Admin/Index/index'),1);
            }
        }
    }

}