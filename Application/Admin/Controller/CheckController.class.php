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
        $id = $_GET['c_id'];//获取相关小说章节id
        $result1 = M('stories_check')->where("id=".$id)->find();//查询相关审核表记录
        $model = M('stories_1000_section_0');
        //向用户章节表中添加内容
        $data = array("title"=>$result1['title'],"section"=>$result1['section'],"content"=>$result1['content'],"story_id"=>$result1['story_id'],"story_name"=>$result1['story_name'],"user_id"=>$result1['user_id'],"user_name"=>$result1['user_name'],"update_time"=>$result1['time']);
        $res = $model->add($data);
        if($res){
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
        $id = $_GET['c_id'];//获取相关小说章节id
        $result1 = M('stories_check')->where("id=".$id)->find();//查询相关审核表记录
        $model = M('stories_1000_section_0');
        $data = array("title"=>$result1['title'],"id"=>$result1['section_id'],"section"=>$result1['section'],"content"=>$result1['content'],"story_id"=>$result1['story_id'],"story_name"=>$result1['story_name'],"user_id"=>$result1['user_id'],"user_name"=>$result1['user_name'],"update_time"=>$result1['time']);
        $res = $model->save($data);
        if($res){
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
}