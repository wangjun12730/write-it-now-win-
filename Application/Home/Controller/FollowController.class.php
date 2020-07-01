<?php
namespace Home\Controller;
use Think\Controller;

class FollowController extends Controller
{
    //关注作者
    public function follow(){
        if(IS_POST){
            $model = M('follow'); //实例化模型对象
            $data = $model->create(); //获取表单提交的数据
            $res = $model->add(); //插入数据进数据表
            if($res){
                $this->success('关注成功！',U('Index/showAuthor/author/'.$_POST['author_id']),0.5);

            }else{
                $this->error('关注失败!','','0.5');
            }
        }
    }
    //取消关注
    public function unfollow(){
        if(IS_POST){
            $model = M('follow'); //实例化模型对象
            $res = $model->where(array('author_id'=>$_POST['author_id'],'fan_id'=>$_POST['fan_id']))->delete(); //删除数据表数据
            if($res){
                $this->success('取消关注成功！',U('Index/showAuthor/author/'.$_POST['author_id']),0.5);
            }else{
                $this->error('系统错误!','',0.5);
            }
        }
    }
}


