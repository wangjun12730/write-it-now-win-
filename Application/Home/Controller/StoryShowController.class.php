<?php
namespace Home\Controller;
use Think\Controller;

class StoryShowController extends Controller
{
    //读者方小说显示,每页只显示一章小说
    public function readerStoryShow(){
        $this->dispaly();
    }
    //小说首页,及其目录
    public function storyInfo(){

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
            $res = $model->where('story_id='.$s_id)->select();//查询小说的所有章节
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
                $res1 = M('stories_1000_section_0')->where('story_id='.$res['story_id'])->select(); //查询该小说所有章节信息

                //设置章节切换信息变量
                $this->assign('pre_section',"上一章");
                $this->assign('next_section',"下一章");

                if($res1) {
                    $now = array_search($res, $res1); //获取当前章节在所有章节数组中的位置
                    $count = count($res1);//计数
                    if ($now > 0 and $now < $count-1){
                        $this->assign('pre', $res1[$now - 1]['id']);//获取上一章id,并分配变量
                        $this->assign('next', $res1[$now + 1]['id']);//获取下一章id,并分配变量
                    }elseif($now==0){//已到首章
                        $this->assign('pre_section',"已为首章");//将$pre_section设为已为首章
                        $this->assign('pre', $section_id);
                        $this->assign('next', $res1[$now + 1]['id']);
                    }elseif ($now == $count-1){//已到尾章
                        $this->assign('next_section',"已为尾章");//将$next_section设为已为尾章
                        $this->assign('pre', $res1[$now - 1]['id']);
                        $this->assign('next', $section_id);
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
//            $type = $_POST['is_doing'];
//            if ($type =="完结"){
//                $res = M('stories_1000')->where('id = 1')->setField('is_doing',1); //设置栏目为完结
//            }
            //向小说审核表上传相关内容
            $model = M('stories_check');
            $data = array("section"=>$_POST['section'],"title"=>$_POST['title'],"content"=>$_POST['content'],"story_id"=>$_POST['story_id'],"story_name"=>$_POST['story_name'],"user_id"=>$_POST['user_id'],"user_name"=>$_POST['user_name'],"type"=>"上传");
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
            //向小说审核表上传相关内容
            $model = M('stories_check');
            $data = array("section_id"=>$_POST['section_id'],"section"=>$_POST['section'],"title"=>$_POST['title'],"content"=>$_POST['content'],"story_id"=>$_POST['story_id'],"story_name"=>$_POST['story_name'],"user_id"=>$_POST['user_id'],"user_name"=>$_POST['user_name'],"type"=>"更新");
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
