<?php

namespace Admin\Controller;

use Think\Controller;
use Think\Model;

class OrderController extends CommonController
{
    public function index()
    {
        $user = new Model('Teacher');
        $map['t_no'] = session('t_no');
        $user->where($map)->find();
        $this->assign('user', $user);
        $this->display();
    }

    public function score()
    {
        $user=new \Home\Model\RelevantModel('Student');
        $student=$user->relation(true)->select();
        

    }

    public function addscore()
    {
        $this->display();
    }
}
