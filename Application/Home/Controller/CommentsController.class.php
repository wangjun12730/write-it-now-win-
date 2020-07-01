<?php
namespace Home\Controller;
use Think\Controller;
class CommentsController extends Controller{
    //书评
    public function book_comments(){
        if(IS_POST){
            $story_id = $_POST['story_id'];
            $author_id = $_POST['author_id'];
            $com_content = $_POST['com_content'];
            $com_id = $_POST['com_id']; //读者评论另一个读者的评论时的另一个读者id
            //获取当前时间
            date_default_timezone_set('PRC');//设置中国时区
            $time =  date('Y-m-d h:i:s', time());

            //获取json文件内容
            $json_string = file_get_contents("./Public/json/info.json");
            $data = json_decode($json_string, true);
            $array = array($_SESSION['user_id'],$com_content,array(),array(),$time);//评论信息数组

            if($com_id){
                var_dump($data);
            }else{
                $data[$author_id][$story_id]["书评"][] = $array; //存入数据
                //数组转换为json格式字符串并存入json文件
                $json_strings = json_encode($data);
                file_put_contents("./Public/json/info.json",$json_strings);
                echo "<script>location='".U('StoryShow/readerStoryShow/s_id/'.$story_id)."'</script>";
            }
        }
    }



}
