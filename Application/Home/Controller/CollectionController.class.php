<?php
namespace Home\Controller;
use Think\Controller;

class CollectionController extends Controller{
    //读者收藏小说进书架
    public function collection(){
        if(IS_POST){
            $model = M('collection'); //实例化模型对象
            $data = $model->create(); //获取表单提交的数据
            $res = $model->add(); //插入数据进数据表
            if($res){
                $this->success('收藏成功，您可以进入个人中心收藏夹查看收藏的栏目！',U('StoryShow/readerStoryShow/s_id/'.$_POST['story_id']),1);

            }else{
                $this->error('收藏失败!','',1);
            }
        }
    }

    //读者取消收藏
    public function uncollection(){
        if(IS_POST){
            $model = M('collection');
            $res = $model->where(array('author_id'=>$_POST['author_id'],'story_id'=>$_POST['story_id'],'follower_id'=>$_POST['follower_id']))->delete();
            if($res){
                $this->error('取消收藏成功！','',1);
            }else{
                $this->error('您没有收藏该小说!','',1);
            }
        }
    }
}