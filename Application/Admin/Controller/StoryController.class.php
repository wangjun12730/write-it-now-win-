<?php
namespace Admin\Controller;
use Think\Controller;

class StoryController extends Controller{
    //所有小说列表
    public function storyList(){
        $res = M('stories_1000')->order('id')->select();//查询系统所有小说
        if($res){
            $this->assign('res',$res);
        }else{
            $this->assign('empty',1);
        }
        $this->display();
    }

    //查看小说信息
    public function storyDetail(){
        $s_id = $_GET['s_id']; //获取小说Id;
        $story =  M('stories_1000')->where('id='.$s_id)->find();//查询相关小说信息
        if($story){
            $this->assign('story',$story);
        }
        $res2 = M('stories_1000_section_0')->where('story_id='.$s_id)->select(); //查询小说所有相关章节
        if($res2){
            $this->assign('res2',$res2);
        }else{
            $this->assign('empty',1);
        }
        $this->display();
    }

    //查看章节详细信息
    public function storySectionDetail(){
        $section_id = $_GET['section_id'];//获取小说章节id
        $model = M('stories_1000_section_0'); //实例化小说章节表模型;
        $res = $model->where('id='.$section_id)->find();//查询相关章节内容
        if($res) {
            $res1 = M('stories_1000_section_0')->where('story_id=' . $res['story_id'])->select(); //查询该小说所有章节信息

            //设置章节切换信息变量
            $this->assign('pre_section',"上一章");
            $this->assign('next_section',"下一章");

            if ($res1) {
                $now = array_search($res, $res1); //获取当前章节在所有章节数组中的位置
                $count = count($res1);//计数
                if ($now > 0 and $now < $count - 1) {
                    $this->assign('pre', $res1[$now - 1]['id']);//获取上一章id,并分配变量
                    $this->assign('next', $res1[$now + 1]['id']);//获取下一章id,并分配变量
                } elseif ($now == 0) {//已到首章
                    $this->assign('pre_section',"已为首章");//将$pre_section设为已为首章
                    $this->assign('pre', $section_id);
                    $this->assign('next', $res1[$now + 1]['id']);
                } elseif ($now == $count - 1) {//已到尾章
                    $this->assign('next_section',"已为尾章");//将$next_section设为已为尾章
                    $this->assign('pre', $res1[$now - 1]['id']);
                    $this->assign('next', $section_id);
                }
            }
            $story =  M('stories_1000')->where("id=".$res['story_id'])->find();//查找小说信息
            $this->assign('story',$story);
            $this->assign('result',$res);
        }

        $this->display();
    }

    //搜索栏目
    public function searchStory(){
        $this->assign('search',0); //当没有点击搜索时，分配变量$search,值为0
        if(IS_POST){
            $content = $_POST['content']; //获取搜索内容
            $model = M('stories_1000'); //实例化模型对象
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

}
