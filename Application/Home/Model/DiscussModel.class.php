<?php
namespace Home\Model;
use Think\Model;
class DiscussModel extends Model{
    /**
     * 添加留言
     */
    public function insert(){
        //输入过滤
        $this->filter(array('poster','mail','win_moments'),'htmlspecialchars');
        $this->filter(array('win_moments'),'nl2br');
        //接收输入数据
        $data['poster'] = $_POST['poster'];
        $data['mail'] = $_POST['mail'];
        $data['comment'] = $_POST['comment'];
        //为其他字段赋值
        $data['date'] = date('Y-m-d H:i:s');
        //拼接sql语句
        $sql = "insert into `win_moments` set ";
        foreach($data as $k=>$v){
            $sql .= "`$k`=:$k,";
        }
        $sql = rtrim($sql,',');//去掉最右边的逗号
        //通过预处理执行SQL
        $this->db->execute($sql,$data,$flag);
        //返回是否执行成功
        return $flag;
    }
    /**
     * 留言列表
     */
    public function getAll($limit){
        //获得排序参数
        $order = '';
        if(isset($_GET['sort']) && $_GET['sort']=='desc'){
            $order = 'order by id desc';
        }
        //拼接SQL
        $sql = "select `poster`,`comment`,`date` from `win_moments` $order limit $limit";
        //查询结果
        $data = $this->db->fetchAll($sql);
        return $data;
    }
//    /**
//     * 留言总数
//     */
//    public function getNumber(){
//        $data = $this->db->fetchRow("select count(*) from `win_moments`");
//        return $data['count(*)'];
//    }
}
