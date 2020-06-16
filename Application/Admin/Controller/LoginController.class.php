<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    //��̨��½ҳ
    public function index(){
        if(IS_POST){
            //�����֤��
            $rst = $this->checkVerify(I('post.verify'));
            if($rst===false){
                $this->error('��֤�����');
            }
            //����û�������
            if(I('post.admin_name')==C('USER_CONFIG.admin_name')&&
                I('post.admin_pwd')==C('USER_CONFIG.admin_pwd')){
                session('admin_name',C('USER_CONFIG.admin_name'));
                $this->success('��¼�ɹ������Ե�',U('Index/index'));
            }else{
                $this->error('��½ʧ�ܣ��û������������');
            }
            return;
        }
        $this->display();
    }
    //������֤��
    public function getVerify(){
        $verify = new \Think\Verify();
        return $verify->entry();
    }
    //�����֤��
    private function checkVerify($code,$id=''){
        $verify = new \Think\Verify();
        return $verify->check($code,$id);
    }
    //�˳�ϵͳ
    public function logout(){
        session('[destroy]');
        $this->success('�˳��ɹ�',U('Login/index'));
    }
}