<?php
namespace Home\Controller;
use Think\Controller;
class CommentsController extends Controller{
    //书评
    public function book_comments()
    {
        if (isset($_SESSION['user_id'])) {
            if (IS_POST) {
                $story_id = $_POST['story_id'];
                $author_id = $_POST['author_id'];
                $com_content = $_POST['com_content'];
                $com_id = $_POST['com_id']; //读者评论另一个读者的评论时的另一个读者id
                //获取当前时间
                date_default_timezone_set('PRC');//设置中国时区
                $time = date('Y-m-d h:i:s', time());

                //获取json文件内容
                $json_string = file_get_contents("./Public/json/info.json");
                $data = json_decode($json_string, true);
                $array = array($_SESSION['user_id'], $com_content, array(), array(), $time);//评论信息数组

                if ($com_id) {
                    var_dump($data);
                } else {
                    $data[$author_id][$story_id]["书评"][] = $array; //存入数据
                    //数组转换为json格式字符串并存入json文件
                    $json_strings = json_encode($data);
                    file_put_contents("./Public/json/info.json", $json_strings);
                    echo "<script>location='" . U('StoryShow/readerStoryShow/s_id/' . $story_id) . "'</script>";
                }
            }
        }else{
            echo "<script>alert('请登录！');location='".U('User/login')."'</script>";
        }
    }

    //点赞
    public function like(){
        if(isset($_SESSION['user_id'])) {
            $author_id = $_GET['author_id']; //书作者id
            $book_id = $_GET['story_id'];//书id
            $com_id = $_GET['com_id'];//评论者id
            $com_content = $_GET['com_content']; //评论者内容
            //获取json文件内容
            $json_string = file_get_contents("./Public/json/info.json");
            $data = json_decode($json_string, true);

            $comments = $data[$author_id][$book_id]["书评"];//获取书评论信息

            $count = count($data[$author_id][$book_id]["书评"]);//统计

            for ($i = 0; $i < $count; $i++) {
                if ($comments[$i][0] == $com_id and $comments[$i][1] == $com_content) {//找到评论者
                    if (!in_array($_SESSION['user_id'], $comments[$i][2])) {
                        $comments[$i][2][] = $_SESSION['user_id'];
                        $data[$author_id][$book_id]["书评"][$i][2] = $comments[$i][2]; //点赞信息存入数据数组
                        //数组转换为json格式字符串并存入json文件
                        $json_strings = json_encode($data);
                        file_put_contents("./Public/json/info.json", $json_strings);
                        echo "<script>location='" . U('StoryShow/readerStoryShow/s_id/' . $book_id) . "'</script>";
                    } else {
                        echo "<script>alert('已点赞!');history.go(-1);</script>";

                    }
                }
            }
        }else{
            echo "<script>alert('请登录！');location='".U('User/login')."'</script>";
        }

    }


}
