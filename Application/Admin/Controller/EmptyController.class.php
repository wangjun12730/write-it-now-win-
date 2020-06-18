<?php
namespace Admin\Controller;
use Think\Controller;
class EmptyController extends Controller{
    public function _empty(){
        $this->error('系统繁忙，请稍后再试!','',5);
    }
}
