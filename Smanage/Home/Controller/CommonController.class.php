<?php

namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller
{
    public function _initialize()
    {
        $s_no = session('s_no');
        if (!isset($s_no)) {
            $this->error('对不起，您还没有登录！没有权限', U('User/login'), 3);
        }
    }

    public function destroysession()
    {
        if (session('?s_no')) {
            session(null);
            $this->success("注销成功，正在返回登录界面", U("User/login"), 3);
        } else
            redirect(U("User/login"));
    }
}