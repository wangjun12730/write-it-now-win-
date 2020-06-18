<?php
namespace Home\Model;
use Think\Model;
class MemberModel extends Model
{
    protected $insertFields = 'user,phone,email,pwd';
    protected $updateFields = 'user,phone,email,pwd';
    protected $_validate = array(
        array('user', 'require', '�û�������Ϊ��'),
        array('pwd', 'require', '���벻��Ϊ��'),
        array('user', '2,20', '�û���λ�����Ϸ���2~20λ��', 0, 'length'),
        array('pwd', '6,20', '����λ�����Ϸ���6~20λ��', 0, 'length'),
        array('user', '', '�û����Ѿ�����', 1, 'unique', 1),
        array('email', 'email', '�����ʽ����ȷ', 1, 'regex', 2),
        array('tel', 11, '�ֻ������ʽ����ȷ', 1, 'length', 2),
    );

    //������ܺ���
    private function password($pwd, $salt)
    {
        return md5(md5($pwd) . $salt);
    }

    //������ǰ�Ļص�����
    protected function _before_insert(&$data, $option)
    {
        $data['salt'] = substr(uniqid(), -6);
        $data['pwd'] = $this->password($data['pwd'], $data['salt']);
    }

    public function checkUser($name, $pwd)
    {
        $data = $this->field('mid.user,pwd,salt')->where(array('user' => $name))->find();
        if ($data === null) {
            return '�û���������';
        }
        if ($data['pwd'] == $this->password($pwd, $data['salt'])) {
            //������ȷ
            session('user_name', $name);
            session('user_id', $data['mid']);
            return true;
        }
        return '�������';
    }
}