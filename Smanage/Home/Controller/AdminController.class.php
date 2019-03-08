<?php

namespace Home\Controller;
header("content-type:text/html;charset=UTF-8");
use Think\Controller;

class UserController extends Controller
{
    public function register()
    {
        if (IS_POST)           //第一次跳转网页一般都是用get方法  如果不是get方法就会转到模板页
        {
            $user = new \Home\Model\UserModel('Student');
            $sid = I('Sid');
            $pass = I('password');
            $pass1 = I('password1');
            $data = $user->create();
            if ($data) {
                $map['Sid'] = $sid;
                $arr = $user->where($map)->find();
                if (!$arr) {
                    if ($pass == $pass1) {
//                        $data['password'] = md5($pass);
                        $user->add($data);
                        $this->success('注册成功', '../User/login', 3);
                    } else
                        $this->error('两次密码不同 请重新注册', '../User/register', 3);
                } else
                    $this->error('注册账号已存在 请重新注册', '../User/register', 3);
            } else
                $this->error($user->getError(), '../User/register', 3);
        } else
            $this->display();
    }

    public function login()
    {
        if (IS_POST)           //第一次跳转网页一般都是用get方法  如果不是get方法就会转到模板页
        {
            $user = new \Home\Model\UserModel('Student');
            $sid = I('Sid');
            $pass = I('password');
            $data = $user->create();
            if ($data) {
                $map['password'] = $pass;
                $map['Sid'] = $sid;
                $arr = $user->where($map)->find();
                if ($arr) {
                    $user->add($data);
                    session('Sid', $sid);
                    $this->success('登录成功', '../User/add', 3);
                } else
                    $this->error('密码输入错误', '../User/login', 3);
            } else
                $this->error($user->getError(), '../User/login', 3);
        } else
            $this->display();
    }

    public function add()
    {
        $this->display();
        echo "欢迎进入内容页面";
    }


}
