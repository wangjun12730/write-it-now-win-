<?php
namespace Admin\Controller;
//��Ʒ���������
class TagController extends CommonController{
    public function index(){
        //�������
        $data['data'] = M('tag')->select();
        //��ͼ
        $this->assign($data);
        $this->display();
    }


}