<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
    /**
     * 公共数据创建方法
     * @param string $tablename 表名
     * @param string $func 操作方法
     * @param int $type 验证时机
     * @param string/array $where 查询条件
     * @return mixed 操作结果
     */
    protected function create($tablename,$func,$type=1,$where=array()){
        $Model = D($tablename);
        if(!$Model->create(I('post.'),$type)){
            $this->error($Model->getError());
        }
        return $Model->where($where)->$func();
    }
    protected $userInfo=false;  //用户登录信息(未登录未false）
    //构造方法
    public function __construct()
    {
        parent::__construct();
        //登录检查
        $this->checkUser();
    }
    //检查登录
    private function checkUser(){
        if (session('?user_id')){
            $userinfo=array(
                'mid'=>session('user_id'),
                'mname'=>session('user_name'),
            );
            $this->userInfo=$userinfo;     //保存登录后的信息
            $this->assign($userinfo);    //为模板分配用户信息变量
        }
    }
}