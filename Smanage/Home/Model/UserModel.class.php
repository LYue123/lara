<?php

namespace Home\Model;

use Think\Model;

class UserModel extends Model
{
    protected $_validate = array(

        array('s_no', '/[0-9]{10}$/', '学号为10位整数'),
        array('s_user', 'require', '姓名不得为空'),
        array('s_password', 'require', '密码不得为空'),
        array('s_password1', 'require', '密码不得为空'),
        array('s_email', 'require', '邮箱不得为空'),
//        array('s_password', '/^([a-zA-Z0-9@*#]{6,22})$/', '密码格式错误请重新输入！', 0),
        array('s_password', '/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,22}$/', '密码为6至22位数字加字母 请重新输入！', 0),
        array('s_no', '', '该学号以被注册', 1, 'unique'),
//        array('s_email', '', '该邮箱以被注册', 1, 'unique'),
        array('s_password', 's_password1', '两次密码输入不同', 2, 'confirm'),
        array('s_email', 's_email', '两次邮箱输入不同', 2, 'confirm'),
    );

    protected $_auto = array(
        array('s_password', 'md5', 3, 'function'),
    );
}

