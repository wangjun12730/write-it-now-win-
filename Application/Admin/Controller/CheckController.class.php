<?php
namespace Admin\Controller;
use Think\Controller;

class CheckController extends Controller
{
    //需要审核的列表
    public function checkList(){
        $model = M('StoriesCheck');
        $result = $model->where("is_check = '0'")->order('time desc')->select();
        if($result){
            $_SESSION['checking'] = count($result);  //设置checking会话变量的值为查询数
            for($i=0;$i<count($result);$i++) {
                @$result[$i]['content'] = htmlspecialchars($result[$i]['content']);
            }
            $this->assign('result',$result);
        }else{
            $_SESSION['checking'] = 0;   //设置checking会话变量的值为查询数
            $this->assign('empty',1);
        }
        $this->display();
    }

    //已审核的列表
    public function isCheckList(){
        $model = M('StoriesCheck');
        $result = $model->where("is_check = '1'")->order('time desc')->select();
        if($result){
            for($i=0;$i<count($result);$i++) {
                @$result[$i]['content'] = htmlspecialchars($result[$i]['content']);
            }
            $this->assign('result',$result);
        }else{
            $this->assign('empty',1);
        }

        $this->display();
    }
    //上传审核通过
    public function checkAddIs(){
        $id = $_GET['c_id'];//获取审核表相关小说章节的审核id
        $result1 = M('stories_check')->where("id=".$id)->find();//查询相关审核表记录
        $model = M('stories_1000_section_0');
        //向用户章节表中添加内容
        $data = array("create_time"=>$result1['time'],"font_count"=>$result1['font_count'],"title"=>$result1['title'],"section"=>$result1['section'],"content"=>$result1['content'],"story_id"=>$result1['story_id'],"story_name"=>$result1['story_name'],"user_id"=>$result1['user_id'],"user_name"=>$result1['user_name'],"update_time"=>$result1['time']);
        $res = $model->add($data);
        if($res){
            $model3 = M('stories_1000');
            //统计整本小说字数
            $result3 = $model3->where("id=".$result1['story_id'])->getField('font_count');
            $result3 += $result1['font_count'];//新总字数
            $res3 = $model3->where("id=".$result1['story_id'])->setField('font_count',$result3); //将新总字数更新进数据表
            //如果小说章节已经完结,则设置stories_1000数据表中小说完结标志
            if($result1['is_doing']==1){
                    $res4 = $model3->where("id=".$result1['story_id'])->setField('is_doing',$result1['is_doing']);//将小说设为完结
            }

            $_SESSION['checking'] -=  1; //checking会话变量减一
            //给用户发送通知内容(添加内容进用户消息数据表)
            $data2 = array("type"=>"通知","content"=>"您好，您".$result1['type']."的\"".$result1['story_name']."\"".$result1['section']."已审核通过","user_id"=>$result1['user_id'],"send_man"=>"管理员");
            $result2 = M('messages')->add($data2);
            //设置审核表中相关内容已被审核
            $result1 =M('stories_check')->where("id=".$id)->setField('is_check',"1");//删除记录
            if($result1 and $result2){
                $this->success('成功！',U('Check/checkList'),1);
            }
        }else{
            $this->error('失败！','',1);
        }

    }
    //更新审核通过
    public function checkUpdateIs(){
        $id = $_GET['c_id'];//获取审核表相关小说章节的审核id
        $result1 = M('stories_check')->where("id=".$id)->find();//查询相关审核表记录
        $model = M('stories_1000_section_0');
        $font_count = $model->where("id=".$result1['section_id']);//查询原章节字数
        $data = array("font_count"=>$result1['font_count'],"title"=>$result1['title'],"id"=>$result1['section_id'],"section"=>$result1['section'],"content"=>$result1['content'],"story_id"=>$result1['story_id'],"story_name"=>$result1['story_name'],"user_id"=>$result1['user_id'],"user_name"=>$result1['user_name'],"update_time"=>$result1['time']);
        $res = $model->save($data);
        if($res){
            //统计整本小说字数
            $result3 = M('stories_1000')->where("id=".$result1['story_id'])->getField('font_count');
            $result3 -= $font_count; //总字数减去原先字数
            $result3 += $result1['font_count'];//更新后新总字数
            $res3 = M('stories_1000')->where("id=".$result1['story_id'])->setField('font_count',$result3); //将新总字数更新进数据表
            if(!$res3){
                echo "<script>alert('更新总字数失败！')</script>";
            }

            $_SESSION['checking'] -=  1; //checking会话变量减一
            //给用户发送通知内容(更新内容进用户消息数据表)
            $data2 = array("type"=>"通知","content"=>"您好，您".$result1['type']."的\"".$result1['story_name']."\"".$result1['section']."已审核通过","user_id"=>$result1['user_id'],"send_man"=>"管理员");
            $result2 = M('messages')->add($data2);
            //设置审核表中相关内容已被审核
            $result1 =M('stories_check')->where("id=".$id)->setField('is_check',"1");//删除记录
            if($result1 and $result2){
                $this->success('成功！',U('Check/checkList'),1);
            }
        }else{
            $this->error('失败！','',1);
        }
    }
    //检查审核的文章类型是上传还是更新
    public function checkType(){
        $type = $_GET['type'];
        $c_id = $_GET['c_id'];
        if($type == "上传"){
            echo "<script>location='".U('Admin/Check/checkAddIs/c_id/'.$c_id)."';</script>";
        }elseif($type == '更新'){
            echo "<script>location='".U('Admin/Check/checkUpdateIs/c_id/'.$c_id)."';</script>";
        }else{
            echo "<script>alert('失败!')</script>";
        }
    }


    //审核拒绝
    public function checkNot(){
        $id = $_GET['c_id'];//获取审核id
        $result1 = M('stories_check')->where("id=".$id)->find();//查询相关审核记录
        //给用户发送通知内容(添加内容进用户消息数据表)
        $data2 = array("type"=>"通知","content"=>"您好，您".$result1['type']."的\"".$result1['story_name']."\"".$result1['section']."经审核有违章内容，请重新上传！","user_id"=>$result1['user_id'],"send_man"=>"管理员");
        $result2 = M('messages')->add($data2);
        //设置审核表中相关内容已被审核
        $result1 =M('stories_check')->where("id=".$id)->setField('is_check',"1");//删除记录
        if($result1 and $result2){
            $_SESSION['checking'] -=  1; //checking会话变量减一
            $this->success('成功！',U('Check/checkList'),1);
        }else{
            $this->error('失败！','',1);
        }
    }

    //删除审核信息
    public function deleteCheck(){
        $id = $_GET['c_id'];//获取审核id
        $res = M('stories_check')->where('id='.$id)->delete();
        if($res){
            $this->success('删除成功！',U('Check/isCheckList'),1);
        }else{
            $this->error('删除失败！','',1);
        }
    }

    //批量上传数据进数据库
    public  function upload()
    {
            $story_id = 45;
            $story_name = "万古圣尊";
            $user_id = 10037;
            $user_name = "巫法无天";
            //设置时区的方法

            date_default_timezone_set('prc');

            $time = date('Y-m-d h:i:s', time());

            $a = file_get_contents("E:\xiaoshuo\sheng.txt");
            $a = preg_replace('/\n|\r\n/', '<br/>', $a);
            $array = explode("()", $a);
            $n = 1;

            $model1 = M('stories_1000');
            $font_count = $model1->where('id=' . $story_id)->getField('font_count');
            foreach ($array as $val) {
                //过滤提交的content内容并统计字数
                $content = str_replace("<p>", '', $val);//过滤，将'<p>'替换为空
                $content = str_replace("</p>", '', $content);
                $content = str_replace("<br>", '', $content);
                $content = str_replace("<br />", '', $content);
                $content = str_replace(" ", '', $content);
                $count = mb_strlen($content, 'UTF-8');//统计次数

                $font_count += $count;
                $model = M('stories_1000_section_0');
                $data = array("create_time" => $time, "font_count" => $count, "title" => '', "section" => "第" . $n . "章", "content" => $val, "story_id" => $story_id, "story_name" => $story_name, "user_id" => $user_id, "user_name" => $user_name, "update_time" => $time);
                $res = $model->add($data);
                $n++;
            }
            $res2 = $model1->where('id=' . $story_id)->setField('font_count', $font_count);
            echo "<script>alert('成功!');</script>";
        }
}