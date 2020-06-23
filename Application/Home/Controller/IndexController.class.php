<?php
namespace Home\Controller;
class IndexController extends CommonController {
    //前台首页
    public function index(){
        //获得分类列表
//        $data['cate']=D('category')->getList();
//        //获得推荐商品
//        $data['best']=M('goods')->field(
//            'gid,gname,price,thumb' //取出商品id，商品名，商品价格，商品图片
//        )->where(array(
//            'is_best'=>'yes',   //是推荐商品
//            'status'=>'yes',   //已上架
//            'recycle'=>'no',     //不在回收站中
//        ))->limit(5)->select();
        //视图

        $this->display();
    }
    public function shouye(){
        

        $this->display();
    }
    public function bookshelf(){
        $this->display();
    }

}