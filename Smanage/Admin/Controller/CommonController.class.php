<?php

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
    public function _initialize()
    {
        $t_no = session('t_no');
        if (!isset($t_no)) {
            $this->error('对不起，您还没有登录！没有权限', U('Admin/index/login'), 3);
        }
    }

    public function destroysession()
    {
        if (session('?t_no')) {
            session(null);
            $this->success("注销成功，正在返回登录界面", U("Admin/index/login"), 3);
        } else
            redirect(U("Admin/index/login"));
    }
}