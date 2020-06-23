<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class UserController extends Controller {
    //展示所有用户
    public function showAll(){
        $model = M('members');
        $res = $model->order('id')->select();
        if($res){
            $this->assign('result',$res);
        }else{
            $this->assign('empty',1);
        }
        $this->display();
    }

    //搜索用户
    public function searchUser(){
        $this->assign('search',0); //当没有点击搜索时，分配变量$search,值为0
        if(IS_POST){
            $content = $_POST['content']; //获取搜索内容
            $model = M('members'); //实例化模型对象
            $res1 = $model->where('id='.$content)->find(); //搜索id
            $res2 = $model->where("name='".$content."'")->select(); //搜索名字
            if($res1){
                $this->assign('res1',$res1);

            }
            if($res2){
                $this->assign('res2',$res2);
            }
            if(!$res1 and !$res2){
                $this->assign('empty',1); //如果没有查到值，则分配empty
            }
            $this->assign('search',1);
        }
        $this->display();
    }

    //查看被封禁用户
    public function showBanUser(){
        $model = M('members');
        $res = $model->where('is_ban is not null')->order('id')->select();
        if($res){
            $this->assign('result',$res);
        }else{
            $this->assign('empty',1);
        }
        $this->display();
    }

    //封禁用户
    public function banUser(){
        if(IS_POST){
            $id = $_POST['id']; //获取用户id
            $ban_time = $_POST['ban_time'];
            $res = M('members')->where('id='.$id)->setField("is_ban",$ban_time);
            if($res){
                $this->success('设置成功!',U('Admin/user/showAll'),1);
            }else{
                $this->error('设置失败','',1);
            }
        }
    }
    //解封用户
    public function deblocking(){
        $id = $_GET['user_id']; //获取用户id
        $res = M('members')->where('id='.$id)->setField('is_ban',null); //设置is_ban字段为0
        if($res){
            $this->success('解封成功!',U('Admin/user/showBanUser'),1);
        }else{
            $this->error('解封失败!','',1);
        }
    }

}