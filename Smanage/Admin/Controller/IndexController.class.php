<?php

namespace Admin\Controller;
header("content-type:text/html;charset=utf-8");
use Think\Controller;
use Think\Model;

class IndexController extends Controller
{
    public function index()
    {
//        echo 'hello world!';
        $this->display();
    }

    public function login()
    {
        if (IS_POST) {
            $user = new Model('Teacher');
            $code = I('ValidateCode');
            $map['t_no'] = I('t_no');
            $map['t_password'] = md5(I('t_password'));
            $teacher = $user->where($map)->find();
            $flag = check_verify($code);
            if ($flag != 0) {
                if ($teacher) {
                    session('t_no', I('t_no'));
                    $this->success('登录成功', U('Admin/Order/index'), 3);
                } else {
                    $this->error('密码错误或账号不存在 请重新登录', U('Admin/Index/index'), 3);
                }
            } else {
                $this->error('验证码错误 请重新填写！', U('Admin/Index/index'), 3);
            }
        } else {
            $this->display();
        }
    }
}