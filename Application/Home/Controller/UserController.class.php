<?php
namespace Home\Controller;
use Think\Controller;
use Think\Image;

class UserController extends Controller
{
    //登录
    public function login(){
        if (IS_POST){
            //检测验证码
            $this->checkVerify(I('post.captcha'));
            //检测账号密码是否正确
            $tel=I('post.tel','','');
            $pwd=md5(I('post.pwd','',''));
            $rst=D('Members')->checkUser($tel,$pwd);
            if ($rst!==true){
                $this->error($rst);
            }
            $members = M('members')->where('tel='.$tel)->find();//查询用户信息
            //将获取的用户信息存入会话
            $_SESSION['user_id'] =$members['id'];
            $_SESSION['user_name'] = $members['name'];
            //获取用户栏目数
            $members1 = M('stories_1000')->where('user_id='.$members['id'])->select();
            if(is_array($members1)){//判断是否获取到栏目
                $_SESSION['story_count'] = count($members1);  //如果有栏目则将栏目数存入会话
            }else{
                $_SESSION['story_count'] = "0"; //没有栏目，则将栏目数会话设置为0
            }
            //获取用户消息数
            $members2 = M('messages')->where('user_id='.$members['id'])->select();
            if(is_array($members2)){//判断是否获取到消息
                $_SESSION['messages'] = count($members2);  //如果有消息则将消息数存入会话
            }else{
                $_SESSION['messages'] = "0"; //没有消息，则将消息会话设置为0
            }
            //获取用户审核章节数，并存入会话
            $members3 = M('stories_check')->where(array('user_id'=>$members['id'],"is_check"=>"0"))->select();
            if(is_array($members3)){//判断是否获取到审核数
                $_SESSION['check'] = count($members3);  //如果有审核则将审核数存入会话
            }else{
                $_SESSION['check'] = "0"; //没有审核，则将审核会话设置为0
            }
            $this->success('登录成功！',U('User/index'));
            return;
        }
        $this->display();
    }
    //退出登录
    public function logout(){
        session('[destroy]');
        $this->success('退出成功!',U('Index/index'));
    }

    //注册账户
    public function register()
    {
        if (IS_POST) {
            $this->checkVerify(I('post.captcha'));
            $model = M('members');
            $result =$model->where('tel='.$_POST['tel'])->find();//查询是否此账号已被注册
            if(!$result) {
                $data = array("name"=>I('post.name'),"tel"=>I('post.tel'),"pwd"=>md5(I('post.pwd')));
                $rst = $model->add($data);
                if ($rst === false) {
                    $this->error($rst->getError());
                }
                $this->success('注册成功!', U('Home/User/login'));
                return;
            }else{
                $this->error("此账号已经存在");
            }
        }
        $this->display();
    }

//验证码
    public function captcha()
    {
        $verify = new\Think\Verify();
        return $verify->entry();
    }

//验证码验证
    private function checkVerify($code, $id = '')
    {
        $verify = new \Think\Verify();
        $rst = $verify->check($code, $id);
        if ($rst !== true) {
            $this->error('验证码错误！');
        }
    }

    //个人中心首页
    public function index(){
        //查询用户信息
        $user = M('members')->where('id='.$_SESSION['user_id'])->find();
        if($user){
            $this->assign('user',$user);
        }
        //查询用户栏目数
        $model = M('stories_1000');
        $res = $model->where("user_id=".$_SESSION['user_id'])->select();
        if($res){
            $this->assign('result',$res);
        }
        $this->display();
    }

   //创建栏目
    public function createStory(){
        if(IS_POST){
            $model = M('stories_1000');
            if(!empty($_FILES['file']['tmp_name'])){
                $file = $_FILES['file'];//得到传输的数据
                //得到文件名称
                $name=$file['name'];
                $type=strtolower(substr($name,strrpos($name, '.')+1));//得到文件类型并转换为小写
                $allow_type=array('jpg','jpeg','gif','png');//定义允许上传的类型
                if(!in_array($type, $allow_type)){//判断文件类型是否被允许上传
                    //如果不允许，则直接返回错误信息;
                    echo "<script>alert('图片的类型错误!');location=".U('User/index')."</script>";
                }
                //判断是否是通过HTTP POST上传的
                if(!is_uploaded_file($file['tmp_name'])) {
                    echo "<script>alert('图片上传方式错误!');location='".U('User/index')."'</script>";
                }
                $data = array("name"=>$_POST['name'],"info"=>$_POST['info'],"tag"=>$_POST['tag'],"user_id"=>$_POST['user_id'],"user_name"=>$_POST['user_name'],"picture"=>"image/story/".$_SESSION['user_id'].$file['name']);
                $res = $model->add($data);
                if($res){
//                if(file_exists($file))
//                {
//                    unlink($picture_path);//删除原文件
//                }
                    $_SESSION['story_count'] += 1;
                    //移动文至相应的文件夹
                    if(move_uploaded_file($file['tmp_name'], "Public/image/story/".$_SESSION['user_id'].$file['name'])){
                    }else{
                        echo "<script>alert('移动图片失败！');location='".U('User/index')."'</script>";
                    }
                    echo "<script>alert('数据上传成功!');location='".U('User/index')."'</script>";
                }else{
                    echo "<script>alert('上传数据库失败!');location='".U('User/index')."'</script>";
                }
            }else{
                echo "<script>alert('请选择图片!');history.go(-1)</script>";
            }
        }
    }

    //删除栏目
    public function deleteStory(){
        $story_id = $_GET['s_id'];
        //删除栏目
        $res1 = M('stories_1000')->where('id='.$story_id)->delete();
        //删除栏目所有的章节
        $res2 = M('stories_1000_section_0')->where('story_id='.$story_id)->delete();

        if ($res2===0 and $res1){
            $_SESSION['story_count'] -=1;
            echo "<script>alert('删除栏目成功!');location='".U('User/index')."'</script>";
        }else{

            echo "<script>alert('删除栏目失败!');location='".U('User/index')."'</script>";
        }
    }
    //修改栏目
    public function alterStory(){
        //查询用户信息
        $user = M('members')->where('id='.$_SESSION['user_id'])->find();
        //查询小说信息
        $id = $_GET['s_id'];
        $res = M('stories_1000')->where('id='.$id)->find();
        if($res){
            $this->assign('res',$res);
        }
        $this->assign('user',$user);
        $this->display();
    }
    //修改栏目信息提交
    public function subAlterStory(){
        if(!empty($_FILES['file']['tmp_name'])){
            $file = $_FILES['file'];//得到传输的数据
            //得到文件名称
            $name=$file['name'];
            $type=strtolower(substr($name,strrpos($name, '.')+1));//得到文件类型并转换为小写
            $allow_type=array('jpg','jpeg','gif','png');//定义允许上传的类型
            if(!in_array($type, $allow_type)){//判断文件类型是否被允许上传
                //如果不允许，则直接返回错误信息;
                echo "<script>alert('图片的类型错误!');location=".U('User/index')."</script>";
            }
            //判断是否是通过HTTP POST上传的
            if(!is_uploaded_file($file['tmp_name'])) {
                echo "<script>alert('图片上传方式错误!');location='".U('User/index')."'</script>";
            }
            if($_POST['is_doing']=='完结'){
                $is_doing="1";
            }else{
                $is_doing = "0";
            }
            $data = array("is_doing"=>$is_doing,"id"=>$_POST['id'],"name"=>$_POST['name'],"info"=>$_POST['info'],"tag"=>$_POST['tag'],"picture"=>"image/story/".$_SESSION['user_id'].$file['name']);
            $model = M('stories_1000');
            $res = $model->save($data);
            if($res){
//                if(file_exists($file))
//                {
//                    unlink($picture_path);//删除原文件
//                }
                //移动文至相应的文件夹
                if(move_uploaded_file($file['tmp_name'], "Public/image/story/".$_SESSION['user_id'].$file['name'])){
                }else{
                    echo "<script>alert('移动图片失败！');location='".U('User/index')."'</script>";
                }
                echo "<script>alert('修改图片和数据成功!');location='".U('User/index')."'</script>";
            }else{
                echo "<script>alert('修改图片和数据失败!');location='".U('User/index')."'</script>";
            }
        }else{
            if($_POST['is_doing']=='完结'){
                $is_doing="1";
            }else{
                $is_doing = "0";
            }
            $model = M('stories_1000');
            $data = array("is_doing"=>$is_doing,"id"=>$_POST['id'],"name"=>$_POST['name'],"info"=>$_POST['info'],"tag"=>$_POST['tag']);
            $res = $model->save($data);
            if($res){
                echo "<script>alert('修改数据成功！');location='".U('User/index')."'</script>";
            }else{
                echo "<script>alert('修改数据成功！');location='".U('User/index')."'</script>";
            }
        }
    }
    //修改用户资料
    public function alterUserInfo(){
        if(IS_POST){
            $model = M('members');
            $data= $model->create();
            $res = $model->save();
            if($res){
                echo "<script>alert('修改资料成功');location='".U('User/index')."'</script>";
            }
        }
    }
    //修改用户密码
    public function alterUserPwd(){
        if(IS_POST){
            $model = M('members');
            //查询旧密码是否正确
            $res1 = $model->where(array("id"=>$_POST['id'],"pwd"=>md5($_POST['opwd'])))->find();
            if(!$res1){
                echo "<script>alert('旧密码输入错误!');history.go(-1)</script>";
            }
            $data = array("id"=>$_POST['id'],"pwd"=>md5($_POST['pwd']));

            $res2 = $model->save($data);
            if($res2){
                echo "<script>alert('修改密码成功!');location='".U('User/index')."'</script>";
            }else{
                echo "<script>alert('修改密码失败!');location='".U('User/index')."'</script>";
            }
        }
    }

    //修改用户头像
    public function alterUserPicture(){
        if(!empty($_FILES['file']['tmp_name'])){
            $picture_path=$_POST['picture_path']; //原图片路径
            $file = $_FILES['file'];//得到传输的数据
            //得到文件名称
            $name=$file['name'];
            $type=strtolower(substr($name,strrpos($name, '.')+1));//得到文件类型并转换为小写
            $allow_type=array('jpg','jpeg','gif','png');//定义允许上传的类型
            if(!in_array($type, $allow_type)){//判断文件类型是否被允许上传
                //如果不允许，则直接返回错误信息;
                echo "<script>alert('图片的类型错误!');location=".U('User/index')."</script>";
            }
            //判断是否是通过HTTP POST上传的
            if(!is_uploaded_file($file['tmp_name'])) {
                echo "<script>alert('图片上传方式错误!');location='".U('User/index')."'</script>";
            }
            $model = M('members'); //创建用户模型
            $res = $model->where("id=".$_POST['id'])->setField('picture',"image/user/".$_POST['id'].$file['name']);
            if($res){
//                if(file_exists($file))
//                {
//                    unlink($picture_path);//删除原文件
//                }
                //移动文至相应的文件夹
                if(move_uploaded_file($file['tmp_name'], "Public/image/user/".$_POST['id'].$file['name'])){
                }else{
                    echo "<script>alert('移动图片失败！');location='".U('User/index')."'</script>";
                }
                echo "<script>alert('数据上传成功!');location='".U('User/index')."'</script>";
            }else{
                echo "<script>alert('图片路径上传数据库失败!');location='".U('User/index')."'</script>";
            }
        }else{
            echo "<script>alert('上传图片失败!');location='".U('User/index')."'</script>";
        }
    }


}