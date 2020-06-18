<?php
namespace Admin\Controller;
use Think\Controller;

class CheckController extends Controller
{
    //需要审核的列表
    public function checkList(){
        $model = M('StoriesCheck');
        $result = $model->select();
        $this->assign('result',$result);
        $this->display();
    }
    //上传审核通过
    public function checkAddIs(){
        $id = $_GET['s_id'];//获取相关小说章节id
        $result1 = M('stories_check')->where("id=".$id)->find();//查询记录
        $model = M('stories_1000_section_0');
        $data = array("section"=>$result1['section'],"content"=>$result1['content'],"story_id"=>$result1['story_id'],"story_name"=>$result1['story_name'],"user_id"=>$result1['user_id'],"user_name"=>$result1['user_name'],"update_time"=>$result1['time']);
        $res = $model->add($data);
        if($res){
            echo "<script>alert('数据添加成功!')</script>";
            $result1 =M('stories_check')->where("id=".$id)->delete();//删除记录
            if($result1){
                echo "<script>alert('删除成功!');location='__MODULE__/Check/checkList'</script>";
            }
        }else{
            echo "<script>alert('数据添加失败!');location='__MODULE__/Check/checkList'</script>";
        }

    }
    //更新审核通过
    public function checkUpdateIs(){
        $id = $_GET['s_id'];//获取审核id
        $result1 = M('stories_check')->where("id=".$id)->find();//查询记录
        $model = M('stories_1000_section_0');
        $data = array("section"=>$result1['section'],"content"=>$result1['content'],"story_id"=>$result1['story_id'],"story_name"=>$result1['story_name'],"user_id"=>$result1['user_id'],"user_name"=>$result1['user_name'],"update_time"=>$result1['time']);
        $res = $model->save($data);
        if($res){
            echo "<script>alert('数据更新成功!')</script>";
            $result1 =M('stories_check')->where("id=".$id)->delete();//删除记录
            if($result1){
                echo "<script>alert('删除成功!');location='__MODULE__/Check/checkList'</script>";
            }
        }else{
            echo "<script>alert('数据更新失败!');location='__MODULE__/Check/checkList'</script>";
        }
    }

    //审核拒绝
    public function checkNot(){

    }
}