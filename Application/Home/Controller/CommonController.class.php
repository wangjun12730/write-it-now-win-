<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
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
    protected $userInfo=false;  //�û���¼��Ϣ(δ��¼δfalse��
    //���췽��
    public function __construct()
    {
        parent::__construct();
        //��¼���
        $this->checkUser();
    }
    //����¼
    private function checkUser(){
        if (session('?user_id')){
            $userinfo=array(
                'mid'=>session('user_id'),
                'mname'=>session('user_name'),
            );
            $this->userInfo=$userinfo;     //�����¼�����Ϣ
            $this->assign($userinfo);    //Ϊģ������û���Ϣ����
        }
    }
}