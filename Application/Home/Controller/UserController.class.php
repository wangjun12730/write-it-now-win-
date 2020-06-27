<?php
namespace Home\Controller;
use Think\Controller;
use Think\Image;

class UserController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        $allow_action=array(  //ָ������Ҫ����¼�ķ����б�
            'login','captcha','register'
        );
        if ($this->userInfo===false && !in_array(ACTION_NAME,$allow_action)){
            $this->error('���ȵ�¼��',U('User/login'));
        }
    }
    //�û���¼
    public function login(){
        //�����
        if (IS_POST){
            //�ж���֤��
            $this->checkVerify(I('post.captcha'));
            //�ж��û���������
            $name=I('post.user','','');
            $pwd=I('post.pwd','','');
            $rst=D('member')->checkUser($name,$pwd);
            if ($rst!==true){
                $this->error($rst);
            }
            $this->success('��¼�ɹ������Ժ�',U('Index/index'));
            return;
        }
        $this->display();
    }
    //�˳�
    public function logout(){
        session('[destroy]');
        $this->success('�˳��ɹ�',U('Index/index'));
    }

//ע�����û�
    public function register()
    {
        if (IS_POST) {
            $this->checkVerify(I('post.captcha'));
            $rst = $this->create('member', 'add');
            if ($rst === false) {
                $this->error($rst->getError());
            }
            $this->success('�û�ע��ɹ�', U('Index/index'));
            return;
        }
        $this->display();
    }

//������֤��
    public function captcha()
    {
        $verify = new\Think\Verify();
        return $verify->entry();
    }

//�����֤��
    private function checkVerify($code, $id = '')
    {
        $verify = new \Think\Verify();
        $rst = $verify->check($code, $id);
        if ($rst !== true) {
            $this->error('��֤����������');
        }
    }

    //����������ҳ
    public function index(){
        $this->display();
    }

    //�޸ĸ���ǩ��
    public function signEdit(){

    }

    //�鿴������Ŀ
    public function column(){
        $mid=$this->userInfo['mid'];
        $data['column']=D('member')->getColumn($mid);
        $this->assign($data);
        $this->display();
    }
    //�޸���Ŀ
    public function columnEdit(){
        if (IS_POST){
            $mid=$this->userInfo['mid'];
            $rst=$this->create('member','save',2,"mid=$mid");
            if ($rst===false){
                $this->error('�޸�ʧ��');
            }
            $this->redirect('User/column');
            return;
        }
        $this->column();
    }

}