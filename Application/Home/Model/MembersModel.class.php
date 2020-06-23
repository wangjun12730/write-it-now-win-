<?php
namespace Home\Model;
use Think\Model;
header("Content-Type:text/html;charset=utf-8");
class MembersModel extends Model
{
    public function checkUser($tel, $pwd)
    {
        $data = $this->where(array('tel' => $tel, "pwd" => $pwd))->find();
        if ($data === null) {
            return '账号或密码错误！';
        } else {
            //设置会话
            session('user_name', $data['name']);
            session('user_id', $data['id']);
            return true;
        }
    }
}