<?php

namespace Home\Controller;
header("content-type:text/html;charset=UTF-8");
use Think\Controller;
use Think\Model;

class UserController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function register()
    {
        if (IS_POST)                   //第一次跳转网页一般都是用get方法  如果不是get方法就会转到模板页
        {
            $user = new \Home\Model\UserModel('Student');
            $email = I('s_email');
            $name = I('s_user');
            $data = $user->create();
            if ($data) {
                $key = md5(rand());
                $data['key'] = $key;
                $res = $user->add($data);          //增加成功返回主键
                think_send_mail("$email", "$name", "尊敬的{$name} 欢迎使用邮箱验证方式，请点击下面的链接进行邮箱的验证！", "http://localhost/Cms/index.php/Home/User/verifymail/id/{$res}/key/{$key}");
            } else
                $this->error($user->getError(), U('User/register'), 3);
        } else
            $this->display();
    }


    public function login()
    {
        if (IS_POST)           //第一次跳转网页一般都是用get方法  如果不是get方法就会转到模板页
        {
            $user = new Model('Student');
            $code = I('ValidateCode');
            $map['s_no'] = I('s_no');
            $map['s_password'] = md5(I('s_password'));
            $student = $user->where($map)->find();
            $flag = check_verify($code);
            if ($flag != 0) {
                if ($student) {
                    if ($student['type'] == 1) {
                        session('s_no', I('s_no'));
                        $this->success('登录成功', U('Order/index'), 3);
                    } else {
                        $this->error('邮箱验证未通过 请验证后登录！', U('Index/index'), 3);
                    }
                } else {
                    $this->error('密码错误或账号不存在 请重新登录', U('Index/index'), 3);
                }
            } else {
                $this->error('验证码错误 请重新填写！', U('Index/index'), 3);
            }
        } else
            $this->display();
    }

    public function verifycode()
    {
        $config = array(
            'fontSize' => 30,    // 验证码字体大小
            'length' => 3,       // 验证码位数
            'useNoise' => false,
            'useCurve' => false,
            'codeSet' => '0123456789',
        );
        $Verify = new\Think\Verify($config);
        $Verify->entry();
    }

    public function verifymail($id, $key)
    {
        $user = new Model('Student');
        $map['id'] = $id;
        $student = $user->where($map)->find();
        if ($student['key'] == $key) {
            $newkey = md5(rand());
            $data['type'] = 1;
            $data['key'] = $newkey;
            $user->where($map)->save($data);
            $this->success("验证成功，赶快去登陆吧！", U("index/index"), 3);
        } else {
            $this->error("验证失败！请联系管理员！", U("index/index"), 3);
        }
    }

}
