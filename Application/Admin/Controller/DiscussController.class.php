<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class DiscussController extends Controller {

    public function showAll(){
        $user_model=M('user');
        //导入分页助手类
        import('Org.Util.Page');
        $total= $user_model->count();
        $page=new Page($total,8);
        $page->setConfig("header",'个留言');
        $pageControl=$page->show();
        $users=$user_model->limit("$page->firstRow,$page->listRows")->order("id desc")->select();
        $this-> assign('users',$users);
        $this-> assign('pageControl', $pageControl);
        $this-> display();

    }

    //实现留言删除功能
    public function del()
    {
        $user=M('user');
        $id=$_GET['id'];
        $user->where("id=$id")->delete();
        $this->redirect('showAll');//重定向到控制器的方法  display是本控制的方法
    }


}
