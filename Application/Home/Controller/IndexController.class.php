<?php
namespace Home\Controller;
class IndexController extends CommonController {
    //前台首页
    public function index(){
        //栏目总览，显示随机显示9个数据
        $res1 = M('stories_1000')->limit(9)->order('rand()')->select();
        if($res1){
            $this->assign('overview',$res1);
        }

        //完本精品
        $res2 = M('stories_1000')->where(array("is_doing"=>'1'))->limit(9)->order('rand()')->select();
        if($res2){
            $this->assign('finish',$res2);
        }

        //最新更新章节
        $res3 = M('stories_1000_section_0')->limit(20)->order('update_time desc')->select();
        if($res3){
            $model = M('stories_1000');//实例化模型对象
            $count = count($res3);  //统计$res3个数
            for($i=0;$i<$count;$i++){
                $tag = $model->where('id='.$res3[$i]['story_id'])->getField('tag'); //获取该章节所属小说频道标签
                $res3[$i]['tag'] = $tag; //将获取的频道标签存进数组
            }
            $this->assign('update',$res3);
        }

        //单日排行榜
        $res4 = M('stories_1000')->limit(10)->order('click_day_count desc')->select(); //获取单日点击量最高的10位
        if($res4){
            $this->assign('day_count',$res4);
        }

        //周排行榜
        $res5 =  M('stories_1000')->limit(10)->order('click_week_count desc')->select(); //获取单周点击量最高的10位
        if($res5){
            $this->assign('week_count',$res5);
        }

        //月排行榜
        $res6 =  M('stories_1000')->limit(10)->order('click_month_count desc')->select(); //获取月点击量最高的10位
        if($res6){
            $this->assign('month_count',$res6);
        }

        //总排行榜
        $res7 =  M('stories_1000')->limit(10)->order('click_total_count desc')->select(); //获取月点击量最高的10位
        if($res7){
            $this->assign('total_count',$res7);
        }

        //频道分类
        //玄幻
        $res8 = M('stories_1000')->where("tag='玄幻'")->limit(5)->order('rand()')->select();
        if($res8){
            $this->assign('res8',$res8);
        }
        //都市
        $res9 = M('stories_1000')->where("tag='都市'")->limit(5)->order('rand()')->select();
        if($res9){
            $this->assign('res9',$res9);
        }
        //历史
        $res10 = M('stories_1000')->where("tag='历史'")->limit(5)->order('rand()')->select();
        if($res10){
            $this->assign('res10',$res10);
        }
        //军事
        $res11 = M('stories_1000')->where("tag='军事'")->limit(5)->order('rand()')->select();
        if($res11){
            $this->assign('res11',$res11);
        }
        //武侠
        $res12 = M('stories_1000')->where("tag='武侠'")->limit(5)->order('rand()')->select();
        if($res12){
            $this->assign('res12',$res12);
        }
        //科技
        $res13 = M('stories_1000')->where("tag='科技'")->limit(5)->order('rand()')->select();
        if($res13){
            $this->assign('res13',$res13);
        }
        //恐怖
        $res14 = M('stories_1000')->where("tag='恐怖'")->limit(5)->order('rand()')->select();
        if($res14){
            $this->assign('res14',$res14);
        }
        //悬疑
        $res15 = M('stories_1000')->where("tag='悬疑'")->limit(5)->order('rand()')->select();
        if($res15){
            $this->assign('res15',$res15);
        }
        //穿越
        $res16 = M('stories_1000')->where("tag='穿越'")->limit(5)->order('rand()')->select();
        if($res16){
            $this->assign('res16',$res16);
        }
        //游戏
        $res17 = M('stories_1000')->where("tag='游戏'")->limit(5)->order('rand()')->select();
        if($res17){
            $this->assign('res17',$res17);
        }
        //二次元
        $res18 = M('stories_1000')->where("tag='二次元'")->limit(5)->order('rand()')->select();
        if($res18){
            $this->assign('res18',$res18);
        }

        $this->display();
    }

    //搜索界面
    public function search(){
        $kw = I('get.kw'); //获取搜索关键字
        //查询作者表
        $author = M('members')->where("name='".$kw."'")->select();
        if($author){
            $count = count($author); //统计查询到的作者数
            for($i=0;$i<$count;$i++){
                //查询相关数组
                $authorbook = M('stories_1000')->where('user_id='.$author[$i]['id'])->select();

                if($authorbook){
                    $count1 = count($authorbook);//统计每个作者的书籍数
                }
                $author[$i]['bookcount'] = $count1; //将每个作者书籍数存进作者信息数组
                $author[$i]['authorbook'] = $authorbook; //将作者书籍存入作者信息数组
            }
            $this->assign('count',1);//将count设为1表示已查询到数据
            $this->assign('is_author',1); //设置1表示已查询到作者
            //查询作者书籍
            $this->assign('author',$author);
        }else {
            //查询小说表
            $map['name'] = array('like', '%' . $kw . '%');//定义模糊查询的关键词
            $book = M('stories_1000')->where($map)->select();
            if ($book) {
                $count = count($book); //统计查询到书的数目
                for ($i = 0; $i < $count; $i++) {//获取每本书最新章节信息
                    $new_section = M('stories_1000_section_0')->where('story_id=' . $book[$i]['id'])->order('id desc')->find();
                    $book[$i]['new_section'] = $new_section; //将最新章节信息存进书信息数组
                }
                $this->assign('count', $count);
                $this->assign('book', $book);
            } else {
                $this->assign('count', 0); //没查询到书和作者则将分配count为0

                //推荐书籍
                $res = M('stories_1000')->limit(6)->order('rand()')->select();
                if ($res) {//获取推荐书籍最新章节信息
                    for ($i = 0; $i < 6; $i++) {
                        $new_section = M('stories_1000_section_0')->where('story_id=' . $res[$i]['id'])->order('id desc')->find();
                        $res[$i]['new_section'] = $new_section;//将最新章节信息存进推荐书信息数组
                    }
                }
                $this->assign('res', $res);
            }
        }
        $this->display();
    }

    //查看作者
    public function showAuthor(){
        $id = $_GET['author']; //获取的作者id
        $res1 = M('members')->where('id='.$id)->find();//获取作者信息
        if($res1){
            $this->assign('author_info',$res1);
        }
        //获取作者所创小说信息
        $res2 = M('stories_1000')->where('user_id='.$id)->select();
        if($res2){
            $story_count = count($res2); //计算作者总小说数
            $font_count = 0; //统计作者单本小说的总字数
            for ($i=0;$i<$story_count;$i++){
                //读者查看该本书籍是否被收藏
                $res7 = M('collection')->where(array('story_id'=>$res2[$i]['id'],'follower_id'=>$_SESSION['user_id']))->find();
                if($res7){
                    //如果被收藏，则设置is_collection为 1
                    $is_collection = 1;

                }else{
                    //如果未被收藏，则设置is_collection为0
                    $is_collection = 0;
                }
                $res2[$i]['is_collection'] = $is_collection; //将该本书籍是否被读者收藏信息变量$is_collection存入相关数组

                $font_count += $res2[$i]['font_count'];//计算作者创作的总字数
                $newsection = M('stories_1000_section_0')->where('story_id='.$res2[$i]['id'])->order('id desc')->find(); //查询该本小说最新章节内容
                $res2[$i]['newsection'] = $newsection; //将最新章节信息存进结果数组
            }
            $this->assign('story_count',$story_count);
            $this->assign('font_count',$font_count);
            $this->assign('story_info',$res2);
        }

        //查看作者关注信息
        $res3 = M('follow')->where('fan_id='.$id)->select();
        if($res3){
            $followcount = count($res3);//统计作者关注数
            $this->assign('followcount',$followcount);
        }else{
            $this->assign('followcount',0);//没有关注，则设置关注数为0
        }

        //查看作者粉丝
        $res4 = M('follow')->where('author_id='.$id)->select();
        if($res4){
            $fancount = count($res4);
            $this->assign('fancount',$fancount);
        }else{
            $this->assign('fancount',0);
        }

        //查看作者收藏数
        $res5 = M('collection')->where('follower_id='.$id)->select();
        if($res5){
            $collcount = count($res5);
            $this->assign('collcount',$collcount);
        }else{
            $this->assign('collcount',0);
        }

        //读者查询是否关注该作者
        $res6 = M('follow')->where(array('author_id='.$id,"fan_id=".$_SESSION['user_id']))->find();
        if($res6){
            $this->assign('is_follow',1);
        }else{
            $this->assign('is_follow',0);
        }

        $this->display();
    }

    //查看作者收藏小说
    public function followStory(){
        $id = $_GET['author'];//获取作者id
        $model = M('collection');
        $res = $model->where('follower_id='.$id)->select();
        if($res){
            $count = count($res); //统计收藏数
            for($i=0;$i<$count;$i++){
                //读者查看该书籍是否被自己收藏
                $res1 = M('collection')->where(array('story_id'=>$res[$i]['story_id'],'follower_id'=>$_SESSION['user_id']))->find();
                if($res1){
                    //如果被收藏，则设置is_collection为 1
                    $is_collection = 1;
                }else{
                    //如果未被收藏，则设置is_collection为0
                    $is_collection =  0;
                }

                $collection = M('stories_1000')->where('id='.$res[$i]['story_id'])->find();//获取被收藏小说信息
                $newsection = M('stories_1000_section_0')->where('story_id='.$collection['id'])->order('id desc')->find();//获取被收藏小说最新章节
                $collection['is_collection'] = $is_collection; //将读者是否收藏信息收藏该本小说信息存进数组
                $collection['newsection'] = $newsection; //最新章节信息存进小说信息数组
                $res[$i]['collection'] = $collection;//添加进数据数组
            }
            $this->assign('count',$count);
            $this->assign('res',$res);
        }

        //统计作者粉丝数量
        $res2 = M('follow')->where('author_id='.$id)->select();
        if($res2){
            $fans_count = count($res2);
            $this->assign('fans_count',$fans_count);
        }else{
            $this->assign('fans_count',0);
        }

        //统计作者关注数量
        $res3 = M('follow')->where('fan_id='.$id)->select();
        if($res3){
            $follow_count = count($res3);
            $this->assign('follow_count',$follow_count);
        }else{
            $this->assign('follow_count',0);
        }

        //获取作者信息
        $res4 = M('members')->where('id='.$id)->find();
        if($res4){
            $this->assign('author',$res4);
        }

        $this->assign('author_id',$id);
        $this->display();
    }
    //查看作者关注
    public function follow(){
        $id = $_GET['author'];
        //查询作者的关注
        $model = M('follow');
        $res = $model->where('fan_id='.$id)->select();
        if($res){
            $count = count($res); //统计关注数
            for($i=0;$i<$count;$i++){

                $followed = M('members')->where('id='.$res[$i]['author_id'])->find();//获取被作者关注者信息
                $res[$i]['followed'] = $followed;//添加进数据数组
            }
            $this->assign('count',$count);
            $this->assign('res',$res);
        }else{
            $this->assign('count',0);
        }

        //统计作者粉丝数量
        $res1 = M('follow')->where('author_id='.$id)->select();
        if($res1){
            $fans_count = count($res1);
            $this->assign('fans_count',$fans_count);
        }else{
            $this->assign('fans_count',0);
        }

        //查看作者收藏数
        $res2 = M('collection')->where('follower_id='.$id)->select();
        if($res2){
            $collcount = count($res2);
            $this->assign('collcount',$collcount);
        }else{
            $this->assign('collcount',0);
        }

        //获取作者信息
        $res3 = M('members')->where('id='.$id)->find();
        if($res3){
            $this->assign('author',$res3);
        }

        $this->assign('author_id',$id);
        $this->display();
    }
    //查看作者粉丝
    public function fans(){
        $id = $_GET['author'];
        //查询作者的关注
        $model = M('follow');
        $res = $model->where('author_id='.$id)->select();
        if($res){
            $count = count($res); //统计粉丝数
            for($i=0;$i<$count;$i++){
                $fan = M('members')->where('id='.$res[$i]['fan_id'])->find();//获取粉丝信息
                $res[$i]['fan'] = $fan;//添加进数据数组
            }
            $this->assign('count',$count);
            $this->assign('res',$res);
        }

        //统计作者关注数量
        $res1 = M('follow')->where('fan_id='.$id)->select();
        if($res1){
            $follow_count = count($res1);
            $this->assign('follow_count',$follow_count);
        }else{
            $this->assign('follow_count',0);
        }

        //查看作者收藏数
        $res2 = M('collection')->where('follower_id='.$id)->select();
        if($res2){
            $collcount = count($res2);
            $this->assign('collcount',$collcount);
        }else{
            $this->assign('collcount',0);
        }

        $this->assign('author_id',$id);
        $this->display();
    }

    //测试json
    public function test(){

        $json_string = file_get_contents("./Public/json/info.json");
        $data = json_decode($json_string, true);
        $comments = $data[10018][16]["书评"][1];
        var_dump($comments);
    }
}