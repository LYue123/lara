<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>完善信息</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }

        #one {
            text-align: center;
            line-height: 10px;
            margin: 100px auto;
        }

        h1 {
            text-align: center;
            line-height: 10px;
        }

        #div1 {
            position: absolute;
            right: 10px;
        }

        #p2 {
            position: absolute;
            right: 10px;
        }
    </style>
</head>
<body>
<h1><font face="verdana"> 完善信息 </font></h1>
<p id="p2"> 欢迎您 <?php echo ($user->s_user); ?></p><br>
<br/>

<div id="one">
    <form action="<?php echo U('Order/addsdata');?>" method="post">
        学号： <input type="text" name="s_no" value="<?php echo ($user->s_no); ?>" readonly> *
        <br><br/>
        姓名： <input type="text" name="s_user" value="<?php echo ($user->s_user); ?>" readonly>*
        <br><br/>
        邮箱： <input type="text" name="s_email" value="<?php echo ($user->s_email); ?>" readonly>*
        <br><br/>
        民族： <input type="text" name="s_nation" value="<?php echo ($user->s_nation); ?>"/>&nbsp;&nbsp;
        <br><br/>
        性别： <input type="text" name="s_sex" value="<?php echo ($user->s_sex); ?>"/>&nbsp;&nbsp;
        <br><br/>
        专业： <input type="text" name="s_major" value="<?php echo ($user->s_major); ?>"/>&nbsp;&nbsp;
        <br><br/>
        班级： <input type="text" name="s_class" value="<?php echo ($user->s_class); ?>"/>&nbsp;&nbsp;
        <br><br/>
        <p>带*号的为注册数据不能修改</p>
        <br/>
        <input id="ip1" type="submit" value="确认"/>

    </form>
</div>

<div id="div1"><a href="<?php echo U('Order/index');?>">返回个人信息</a></div>
</body>
</html>