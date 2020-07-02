<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class DiscussController extends Controller {

    public function showAll(){
        $stu_model=M('stu');
        //导入分页助手类
        import('Org.Util.Page');
        $total= $stu_model->count();
        $page=new Page($total,8);
        $page->setConfig("header",'个用户');
        $pageControl=$page->show();
        $stus=$stu_model->limit("$page->firstRow,$page->listRows")->order("id desc")->select();
        $this-> assign('stus',$stus);
        $this-> assign('pageControl', $pageControl);
        $this-> display('discuss_list');
    }

    //实现添加功能
    public function add()
    {   $stu=M('stu');
        $stuinfo['poster']=$_POST['poster'];
        $stuinfo['mail']=$_POST['mail'];
        $stuinfo['comment']=$_POST['comment'];
        $result = $stu->add($stuinfo);
        if(   $result)
        {
            $this->success('添加成功！！',U('Discuss/showAll'));
        }
        if( !$result)
        {
            $this->error('添加失败！！');
        }
    }


}