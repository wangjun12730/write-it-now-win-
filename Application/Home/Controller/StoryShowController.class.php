<?php
namespace Home\Controller;
use Think\Controller;

class StoryShowController extends Controller
{
    //读者方单个小说信息及评论等显示
    public function readerStoryShow(){
        $s_id = $_GET['s_id'];//获取小说id
        $res = M('stories_1000')->where('id='.$s_id)->find();//查询记录
        if($res){
            $data = array('click_day_count'=>$res['click_day_count']+1,'click_week_count'=>$res['click_week_count']+1,'click_month_count'=>$res['click_month_count']+1,'click_total_count'=>$res['click_total_count']+1);
            $res1 = M('stories_1000')->where('id='.$s_id)->save($data);
            if(!$res1){
                echo "<script>alert('系统错误！');</script>";
            }
            //查看读者是否收藏该小说
            $res2 = M('collection')->where(array('story_id'=>$s_id,'follower_id'=>$_SESSION['user_id']))->find();
            if($res2){
                //如果已被收藏
                $this->assign('is_follow',1);  //设置is_follow为1
            }else{
                $this->assign('is_follow',0);  //未被收藏，则设为0
            }
            $this->assign('res',$res);
        }
        //判断读者是否收藏该书籍

        //精彩推荐部分显示内容,随机六个小说
        $res2 = M('stories_1000')->limit(6)->order('rand()')->select();
        if($res2){
            $this->assign('recom',$res2);
        }
        //最新章节
        $res3 = M('stories_1000_section_0')->where('story_id='.$s_id)->order('id desc')->find();//查看最新章节
        if($res3){
            $this->assign('newsection',$res3);
        }

        $this->display();
    }
    //读者方小说章节内容显示
    public function storyInfo(){
        $s_id = $_GET['s_id'];
        $story = M('stories_1000')->where('id='.$s_id)->find();//查找小说信息
        $this->assign('story',$story);//小说
        $allsection = M('stories_1000_section_0')->where('story_id='.$s_id)->order('id')->select();//查询小说所有章节信息
        if(isset($_GET['section'])){//如果有section参数，则获取id为section值的章节
            $res = M('stories_1000_section_0')->where(array('story_id'=>$s_id,'id'=>$_GET['section']))->find();
            $this->assign('res',$res);
        }else{
            //如果没有section参数则获取小说第一章
            $res = M('stories_1000_section_0')->where('story_id='.$s_id)->order('id')->find();//查询小说第一章
            $this->assign('res',$res);
        }

        //设置章节切换信息变量
        $this->assign('pre_section',"上一章");
        $this->assign('next_section',"下一章");

        $now = array_search($res, $allsection);//查询当前章节在小说所有章节中的位置
        $count = count($allsection); //统计所有章节数
        if($count == 1){//如果小说只有一章
            $this->assign('pre_section',"已为首章");//将$pre_section设为已为首章
            $this->assign('next_section',"已为尾章");//将$next_section设为已为尾章
            $this->assign('pre', $_GET['section']);  //设置上一章小说id为本章id
            $this->assign('next', $_GET['section']); //设置下一章小说id为本章id
        }else {
            if ($now > 0 and $now < $count - 1) {
                $this->assign('pre', $allsection[$now - 1]['id']);//获取上一章id,并分配变量
                $this->assign('next', $allsection[$now + 1]['id']);//获取下一章id,并分配变量
            } elseif ($now == 0) {//已到首章
                $this->assign('pre_section', "已为首章");//将$pre_section设为已为首章
                $this->assign('pre', $_GET['section']);
                $this->assign('next', $allsection[$now + 1]['id']);
            } elseif ($now == $count - 1) {//已到尾章
                $this->assign('next_section', "已为尾章");//将$next_section设为已为尾章
                $this->assign('pre', $allsection[$now - 1]['id']);
                $this->assign('next',$_GET['section']);
            }
        }

        $this->display();
    }
    //读者方小说目录显示
    public function sectionList(){
        $s_id = $_GET['s_id'];//获取小说id
        $story = M('stories_1000')->where('id='.$s_id)->find();//查询小说信息;
        $section = M('stories_1000_section_0')->where('story_id='.$s_id)->order('id')->select();//查询小说的所有章节
        $newsection = M('stories_1000_section_0')->where('story_id='.$s_id)->order('id desc')->find();//查询最新一章信息
        $this->assign('new',$newsection);

        if($section){
            $count = count($section);  //统计章节数
            $this->assign('count',$count);
        }
        $this->assign('story',$story);
        $this->assign('section',$section);
        $this->display();
    }





    //作者方小说显示
    public function authourStoryShow(){
        if(isset($_GET['s_id'])){
            $s_id = $_GET['s_id'];
            //查询用户信息
            $user = M('members')->where('id='.$_SESSION['user_id'])->find();
            if($user){
                $this->assign('user',$user);
            }
            $story = M('stories_1000')->where("id=".$s_id)->find();//查找小说信息
            if($story){
                $this->assign('story',$story);
            }
            $model = M('stories_1000_section_0'); //实例化小说章节表模型;
            $res = $model->where('story_id='.$s_id)->order('id')->select();//查询小说的所有章节
            if($res){
                $this->assign('result',$res);
            }else{
                $this->assign('empty',"1");
            }
        }
        $this->display();
    }
    //作者方小说单章内容显示
    public function authourStoryDetail(){
        if(isset($_GET['section_id'])){
            //查询用户信息
            $user = M('members')->where('id='.$_SESSION['user_id'])->find();

            $section_id = $_GET['section_id'];
            $model = M('stories_1000_section_0'); //实例化小说章节表模型;
            $res = $model->where('id='.$section_id)->find();//查询相关章节内容
            if($res){
                $res1 = M('stories_1000_section_0')->where('story_id='.$res['story_id'])->order('id')->select(); //查询该小说所有章节信息

                //设置章节切换信息变量
                $this->assign('pre_section',"上一章");
                $this->assign('next_section',"下一章");

                if($res1) {
                    $now = array_search($res, $res1); //获取当前章节在所有章节数组中的位置
                    $count = count($res1);//计数
                    if($count == 1){
                        $this->assign('pre_section',"已为首章");//将$pre_section设为已为首章
                        $this->assign('next_section',"已为尾章");//将$next_section设为已为尾章
                        $this->assign('pre', $section_id);  //设置上一章小说id
                        $this->assign('next', $section_id); //设置下一章小说id
                    }else {
                        if ($now > 0 and $now < $count - 1) {
                            $this->assign('pre', $res1[$now - 1]['id']);//获取上一章id,并分配变量
                            $this->assign('next', $res1[$now + 1]['id']);//获取下一章id,并分配变量
                        } elseif ($now == 0) {//已到首章
                            $this->assign('pre_section', "已为首章");//将$pre_section设为已为首章
                            $this->assign('pre', $section_id);
                            $this->assign('next', $res1[$now + 1]['id']);
                        } elseif ($now == $count - 1) {//已到尾章
                            $this->assign('next_section', "已为尾章");//将$next_section设为已为尾章
                            $this->assign('pre', $res1[$now - 1]['id']);
                            $this->assign('next', $section_id);
                        }
                    }
                }
                $story =  M('stories_1000')->where("id=".$res['story_id'])->find();//查找小说信息
                $this->assign('story',$story);
                $this->assign('result',$res);
                $this->assign('user',$user);
            }
        }
        $this->display();
    }

    //作者新建章节
    public function createSection(){
        //查询用户信息
        $user = M('members')->where('id='.$_SESSION['user_id'])->find();
        $s_id = $_GET['s_id']; //获取小说id
        $story = M('stories_1000')->where("id=".$s_id)->find();//查找小说信息
        $this->assign('story',$story);
        $this->assign('user',$user);
        $this->display();
    }
    //作者新建章节上传
    public function uploadSection(){
        if (IS_POST){
            $type = $_POST['is_doing'];
            if ($type =="完结"){
                $is_doing = 1;
            }else{
                $is_doing = 0;
            }

            //过滤提交的content内容并统计字数
            $content = str_replace("<p>",'',$_POST['content']);//过滤，将'<p>'替换为空
            $content = str_replace("</p>",'',$content);
            $content = str_replace("<br>",'',$content);
            $font_count = mb_strlen($content,'UTF-8');//统计次数

            //向小说审核表上传相关内容
            $model = M('stories_check');
            $data = array("is_doing"=>$is_doing,"font_count"=>$font_count,"section"=>$_POST['section'],"title"=>$_POST['title'],"content"=>$_POST['content'],"story_id"=>$_POST['story_id'],"story_name"=>$_POST['story_name'],"user_id"=>$_POST['user_id'],"user_name"=>$_POST['user_name'],"type"=>"上传");
            $res = $model->add($data);
            if ($res){
                $_SESSION['check'] += 1;
               echo "<script>alert('上传成功!等待管理员审核。。。');location='".U('StoryShow/authourStoryShow/s_id/'.$_POST['story_id'])."'</script>";
            }else{
                echo "<script>alert('失败!');</script>";
            }
        }
    }

    //作者修改章节
    public function alterSection(){
        //查询用户信息
        $user = M('members')->where('id='.$_SESSION['user_id'])->find();
        $s_id = $_GET['s_id']; //获取小说id
        $section_id = $_GET['section_id'];//获取小说章节id
        $section = M('stories_1000_section_0')->where('id='.$section_id)->find();//查询小说章节信息
        $story = M('stories_1000')->where("id=".$s_id)->find();//查找小说信息
        $this->assign('section',$section);
        $this->assign('story',$story);
        $this->assign('user',$user);
        $this->display();
    }

    //作者修改章节上传
    public function uploadAlterSection(){
        if(IS_POST){

            //过滤提交的content内容并统计字数
            $content = str_replace("<p>",'',$_POST['content']);//过滤，将'<p>'替换为空
            $content = str_replace("</p>",'',$content);
            $content = str_replace("<br>",'',$content);
            $font_count = mb_strlen($content,'UTF-8');//统计次数
            //向小说审核表上传相关内容
            $model = M('stories_check');
            $data = array("font_count"=>$font_count,"section_id"=>$_POST['section_id'],"section"=>$_POST['section'],"title"=>$_POST['title'],"content"=>$_POST['content'],"story_id"=>$_POST['story_id'],"story_name"=>$_POST['story_name'],"user_id"=>$_POST['user_id'],"user_name"=>$_POST['user_name'],"type"=>"更新");
            $res = $model->add($data);
            if ($res){
                $_SESSION['check'] += 1;
                echo "<script>alert('上传成功!等待管理员审核。。。');location='".U('Checking/checkingList/s_id')."'</script>";
            }else{
                echo "<script>alert('更新失败!');</script>";
            }
        }
    }
}
