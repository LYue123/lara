<?php

namespace Home\Controller;
header("content-type:text/html;charset=UTF-8");
use Think\Controller;
use Home\Controller\CommonController;
use Think\Model;
use Think\Upload;

class OrderController extends CommonController
{
    public function index()
    {
        $user = new Model('Student');
        $map['s_no'] = session('s_no');
        $user->where($map)->find();
        $this->assign('user', $user);
        $this->display();
    }

    public function modifypass()
    {

        if (IS_POST)                   //第一次跳转网页一般都是用get方法  如果不是get方法就会转到模板页
        {
            $user = new \Home\Model\OrderModel('Student');
            $map['s_no'] = session('s_no');
            $student = $user->where($map)->find();
            $pass['s_password'] = md5(I('s_password1'));
            if ($pass['s_password'] == $student['s_password']) {
                if ($user->create()) {
                    $user->where($map)->save();
                    $this->error('密码修改成功 请重新登录', U('User/login'), 3);
                } else
                    $this->error($user->getError(), U('Order/modifypass'), 3);
            } else
                $this->error('密码输入错误 请重新输入', U('Order/modifypass'), 3);
        } else {
            $user = new Model('Student');
            $map['s_no'] = session('s_no');
            $user->where($map)->find();
            $this->assign('user', $user);
            $this->display();
        }
    }

    public function addsdata()
    {
        if (IS_POST) {
            $user = new \Home\Model\OrderModel('Student');
            $map['s_no'] = session('s_no');
            if ($user->create()) {
                $data = I();
                $user->where($map)->save($data);  //修改信息的话 一定要给save传参  指定save修改什么
                $this->success('修改成功 正在返回个人信息页', U('Order/index'), 3);
            } else {
                $this->error($user->getError(), U('Order/addsdata'), 3);
            }

        } else {
            $user = new Model('Student');
            $map['s_no'] = session('s_no');
            $user->where($map)->find();
            $this->assign('user', $user);
            $this->display();
        }
    }

    public function uphead()
    {
        $this->display();
    }


    public function upload()
    {
        $upload = new Upload();
        $upload->maxSize = 3145728;       //设置允许上传文件的最大大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');   //设置允许上传文件的种类
        $upload->savePath = '/Student/head/';     //上传到/Cms/Uploads/Student/head
        $info = $upload->upload();
        if (!$info) {
            $this->error($upload->getError());
        } else {
//            $headpath = '/Cms/Uploads' . $info[0]['savepath'] . $info[0]['savename'];
            $user = new Model('Student');
            $data['head'] = '/Cms/Uploads' . $info[0]['savepath'] . $info[0]['savename'];
            $map['s_no'] = session('s_no');
            $user->where($map)->save($data);

        }
    }

    public function score()
    {
        $user = new \Home\Model\RelevantModel('Student');
        $map['s_no'] = session('s_no');
//        $user->relation(true)->find();
        $data = $user->relation(true)->where($map)->find();
//        $data = $user->relation('Subject')->find();
//        $data = $user->relation('Test')->find();
        $data = $user->relationGet("Subject");
//        var_dump($data);
        $sum = 0;
        foreach ($data as $key => $value) {
            foreach ($value as $key1 => $value1) {
                $sum = $value1 + $sum;
            }
        }
        $this->assign('data', $data);
        $this->assign('sum', $sum);
        $this->display();
    }

}