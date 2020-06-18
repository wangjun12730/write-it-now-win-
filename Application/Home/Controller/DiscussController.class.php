<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class DiscussController extends Controller {

    public function showAll(){
        $user_model=M('user');
        //导入分页助手类
        import('Org.Util.Page');
        $total= $user_model->count();
        $page=new Page($total,8);
        $page->setConfig("header",'个用户');
        $pageControl=$page->show();
        $users=$user_model->limit("$page->firstRow,$page->listRows")->order("id desc")->select();
        $this-> assign('users',$users);
        $this-> assign('pageControl', $pageControl);
        $this-> display();        
    }
    
	/**
	 * 留言列表
	 */
	public function listAction(){
		//实例化comment模型
		$commentModel = new \Home\Model\DiscussModel();
		//取得留言总数
		$num = $commentModel->getNumber();
		//取得所有留言数据
		$data = $commentModel->getAll($page->getLimit());
		//载入视图文件
		require './Application/Home/View/disscuss_list.html';
	}
	
		/**
	 * 发表留言
	 */
	public function addAction(){
		//判断是否是POST方式提交
		if(empty($_POST)){
			return false;
		}
		//实例化comment模型
		$commentModel = new \Home\Model\DiscussModel();
		//调用insert方法
		$pass = $commentModel->insert();
	}
}