<?php
namespace Admin\Controller;
//商品分类控制器
class TagController extends CommonController{
    public function index(){
        //获得数据
        $data['data'] = M('tag')->select();
        //视图
        $this->assign($data);
        $this->display();
    }


}