<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class UserController extends Controller {

    public function showAll(){
        $user_model=M('user');
        //导入分页助手类
        import('Org.Util.Page');
        $total= $user_model->count();
        $page=new Page($total,8);
        $page->setConfig("header",'个用户');
        $pageControl=$page->show();
        $users=$user_model->limit("$page->firstRow,$page->listRows")->order("id desc")->select();
        $this-> assign('users',$users);
        $this-> assign('pageControl', $pageControl);
        $this-> display();

    }
    //实现用户修改功能
    public function update()
    {
        header("Content-Type:text/html;charset=utf-8");
        $user=M('user');
        $id=$_GET['id'];
        $user_list=$user->where("id=$id")->save($_POST);
        $this->redirect('showAll');//重定向到控制器的方法  display是本控制的方法

    }

    public function showUpdate()
    {

        $user=M('user');
        $id=$_GET['id'];
        $user_list=$user->where("id=$id")->find();
        $this->assign('user_list',$user_list);
        $this->display('update');
    }

    //实现用户删除功能
    public function del()
    {
        $user=M('user');
        $id=$_GET['id'];
        $user->where("id=$id")->delete();
        $this->redirect('showAll');//重定向到控制器的方法  display是本控制的方法
    }


}