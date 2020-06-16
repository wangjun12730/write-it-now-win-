<?php
namespace Admin\Controller; //��ͬƽ̨�����������ռ䲻ͬ
use Think\Controller;
class CommonController extends Controller{
    //���췽��
    public function __construct(){
        parent::__construct();
        //��¼���
        $this->checkUser();
    }
    //����¼
    private function checkUser(){
        if(!session('?admin_name')){
            $this->error('���¼',U('Login/index'));
        }
    }
    /**
     * �������ݴ�������
     * @param string $tablename ����
     * @param string $func ��������
     * @param int $type ��֤ʱ��
     * @param string/array $where ��ѯ����
     * @return mixed �������
     */
    protected function create($tablename,$func,$type=1,$where=array()){
        $Model = D($tablename);
        if(!$Model->create(I('post.'),$type)){
            $this->error($Model->getError());
        }
        return $Model->where($where)->$func();
    }
}