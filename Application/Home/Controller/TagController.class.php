<?php
namespace Home\Controller;
use Think\Controller;
 class TagController extends Controller{

     //板块标签分类
     public function tag(){
         $type = $_GET['type']; //获取频道类型
         switch ($type){
             case '都市':
                 $this->assign('tag','都市');
                 $this->assign('bg','dushi.jpg');

                 //新书推荐
                 $newbook = M('stories_1000')->where("tag='".$type."'")->limit(9)->order('create_time desc')->select();
                 $this->assign('newbook',$newbook);

                 //人气书籍(本周人气)
                 $hot_book = M('stories_1000')->where(array('tag'=>$type))->limit(9)->order('click_week_count desc')->select();
                 $this->assign('hot_book',$hot_book);

                 //完本特辑
                $ending_book = M('stories_1000')->where(array('tag'=>$type,'is_doing'=>'1'))->limit(9)->order('click_total_count desc')->select();
                $this->assign('ending_book',$ending_book);
                 break;
             case '游戏':
                 $this->assign('tag','游戏');
                 $this->assign('bg','youxi.jpg');
                 //新书推荐
                 $newbook = M('stories_1000')->where("tag='".$type."'")->limit(9)->order('create_time desc')->select();
                 $this->assign('newbook',$newbook);

                 //人气书籍(本周人气)
                 $hot_book = M('stories_1000')->where(array('tag'=>$type))->limit(9)->order('click_week_count desc')->select();
                 $this->assign('hot_book',$hot_book);

                 //完本特辑
                 $ending_book = M('stories_1000')->where(array('tag'=>$type,'is_doing'=>'1'))->limit(9)->order('click_total_count desc')->select();
                 $this->assign('ending_book',$ending_book);
                 break;
             case '武侠':
                 $this->assign('tag','武侠');
                 $this->assign('bg','wuxia.jpg');

                 //新书推荐
                 $newbook = M('stories_1000')->where("tag='".$type."'")->limit(9)->order('create_time desc')->select();
                 $this->assign('newbook',$newbook);

                 //人气书籍(本周人气)
                 $hot_book = M('stories_1000')->where(array('tag'=>$type))->limit(9)->order('click_week_count desc')->select();
                 $this->assign('hot_book',$hot_book);

                 //完本特辑
                 $ending_book = M('stories_1000')->where(array('tag'=>$type,'is_doing'=>'1'))->limit(9)->order('click_total_count desc')->select();
                 $this->assign('ending_book',$ending_book);
                 break;
             case '玄幻':
                 $this->assign('tag','玄幻');
                 $this->assign('bg','xuanhuan.jpg');

                 //新书推荐
                 $newbook = M('stories_1000')->where("tag='".$type."'")->limit(9)->order('create_time desc')->select();
                 $this->assign('newbook',$newbook);

                 //人气书籍(本周人气)
                 $hot_book = M('stories_1000')->where(array('tag'=>$type))->limit(9)->order('click_week_count desc')->select();
                 $this->assign('hot_book',$hot_book);

                 //完本特辑
                 $ending_book = M('stories_1000')->where(array('tag'=>$type,'is_doing'=>'1'))->limit(9)->order('click_total_count desc')->select();
                 $this->assign('ending_book',$ending_book);
                 break;
             case '军事':
                 $this->assign('tag','军事');
                 $this->assign('bg','junshi.jpg');

                 //新书推荐
                 $newbook = M('stories_1000')->where("tag='".$type."'")->limit(9)->order('create_time desc')->select();
                 $this->assign('newbook',$newbook);

                 //人气书籍(本周人气)
                 $hot_book = M('stories_1000')->where(array('tag'=>$type))->limit(9)->order('click_week_count desc')->select();
                 $this->assign('hot_book',$hot_book);

                 //完本特辑
                 $ending_book = M('stories_1000')->where(array('tag'=>$type,'is_doing'=>'1'))->limit(9)->order('click_total_count desc')->select();
                 $this->assign('ending_book',$ending_book);
                 break;
             case '穿越':
                 $this->assign('tag','穿越');
                 $this->assign('bg','chuanyue.jpg');

                 //新书推荐
                 $newbook = M('stories_1000')->where("tag='".$type."'")->limit(9)->order('create_time desc')->select();
                 $this->assign('newbook',$newbook);

                 //人气书籍(本周人气)
                 $hot_book = M('stories_1000')->where(array('tag'=>$type))->limit(9)->order('click_week_count desc')->select();
                 $this->assign('hot_book',$hot_book);

                 //完本特辑
                 $ending_book = M('stories_1000')->where(array('tag'=>$type,'is_doing'=>'1'))->limit(9)->order('click_total_count desc')->select();
                 $this->assign('ending_book',$ending_book);
                 break;
             case '恐怖':
                 $this->assign('tag','恐怖');
                 $this->assign('bg','kongbu.jpg');

                 //新书推荐
                 $newbook = M('stories_1000')->where("tag='".$type."'")->limit(9)->order('create_time desc')->select();
                 $this->assign('newbook',$newbook);

                 //人气书籍(本周人气)
                 $hot_book = M('stories_1000')->where(array('tag'=>$type))->limit(9)->order('click_week_count desc')->select();
                 $this->assign('hot_book',$hot_book);

                 //完本特辑
                 $ending_book = M('stories_1000')->where(array('tag'=>$type,'is_doing'=>'1'))->limit(9)->order('click_total_count desc')->select();
                 $this->assign('ending_book',$ending_book);
                 break;
             case '科技':
                 $this->assign('tag','科技');
                 $this->assign('bg','keji.jpg');

                 //新书推荐
                 $newbook = M('stories_1000')->where("tag='".$type."'")->limit(9)->order('create_time desc')->select();
                 $this->assign('newbook',$newbook);

                 //人气书籍(本周人气)
                 $hot_book = M('stories_1000')->where(array('tag'=>$type))->limit(9)->order('click_week_count desc')->select();
                 $this->assign('hot_book',$hot_book);

                 //完本特辑
                 $ending_book = M('stories_1000')->where(array('tag'=>$type,'is_doing'=>'1'))->limit(9)->order('click_total_count desc')->select();
                 $this->assign('ending_book',$ending_book);
                 break;
             case '悬疑':
                 $this->assign('tag','悬疑');
                 $this->assign('bg','xuanyi.jpg');

                 //新书推荐
                 $newbook = M('stories_1000')->where("tag='".$type."'")->limit(9)->order('create_time desc')->select();
                 $this->assign('newbook',$newbook);

                 //人气书籍(本周人气)
                 $hot_book = M('stories_1000')->where(array('tag'=>$type))->limit(9)->order('click_week_count desc')->select();
                 $this->assign('hot_book',$hot_book);

                 //完本特辑
                 $ending_book = M('stories_1000')->where(array('tag'=>$type,'is_doing'=>'1'))->limit(9)->order('click_total_count desc')->select();
                 $this->assign('ending_book',$ending_book);
                 break;
             case '历史':
                 $this->assign('tag','历史');
                 $this->assign('bg','lishi.jpg');

                 //新书推荐
                 $newbook = M('stories_1000')->where("tag='".$type."'")->limit(9)->order('create_time desc')->select();
                 $this->assign('newbook',$newbook);

                 //人气书籍(本周人气)
                 $hot_book = M('stories_1000')->where(array('tag'=>$type))->limit(9)->order('click_week_count desc')->select();
                 $this->assign('hot_book',$hot_book);

                 //完本特辑
                 $ending_book = M('stories_1000')->where(array('tag'=>$type,'is_doing'=>'1'))->limit(9)->order('click_total_count desc')->select();
                 $this->assign('ending_book',$ending_book);
                 break;
         }
         $this->display();
     }

     //完结标签版块
     public function endingStory(){
         $this->assign('tag','完结');
         $this->assign('bg','wanjie.jpg');

         //人气书籍
         $hot_book = M('stories_1000')->where("is_doing = '1'")->limit(9)->order('click_total_count desc')->select();
         $this->assign('hot_book',$hot_book);

         //完本总览
         $ending_book = M('stories_1000')->where("is_doing = '1'")->order('create_time')->select();
         $this->assign('ending_book',$ending_book);
         $this->display();
     }

     //小说总览

     public function allStory(){
         $this->assign('tag','总览');
         $this->assign('bg','zonglan.jpg');

         //人气书籍
         $hot_book = M('stories_1000')->limit(9)->order('click_total_count desc')->select();
         $this->assign('hot_book',$hot_book);

         //总览
         $all_book = M('stories_1000')->order('create_time')->select();
         $this->assign('all_book',$all_book);
         $this->display();
     }

 }
