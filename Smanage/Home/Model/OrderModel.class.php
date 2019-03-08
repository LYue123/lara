<?php

namespace Home\Model;

use Think\Model;

class OrderModel extends Model
{
    protected $_validate = array(

        array('s_password', '/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,22}$/', '密码为6至22位数字加字母 请重新输入！', 0),
        array('s_password1', '/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,22}$/', '密码为6至22位数字加字母 请重新输入！', 0),
        array('s_password2', '/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,22}$/', '密码为6至22位数字加字母 请重新输入！', 0),
        array('s_password', 'require', '密码不得为空'),
        array('s_password1', 'require', '密码不得为空'),
        array('s_password2', 'require', '密码不得为空'),
        array('s_nation', 'require', '民族不得为空'),
        array('s_sex', 'require', '性别不得为空'),
        array('s_major', 'require', '专业不得为空'),
        array('s_class', 'require', '班级不得为空'),
        array('s_password', 's_password2', '两次密码输入不同', 2, 'confirm'),

    );

    protected $_auto = array(
        array('s_password', 'md5', 3, 'function'),
        array('s_password', '', 2, 'ignore'),
    );

}

