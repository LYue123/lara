<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>注册界面</title>
    <style>

        #one {
            text-align: center;
            line-height: 10px;
            margin: 80px auto;
        }

        #two {
            position: absolute;
            right: 10px;

        }

        #id1 {
            position: relative;
            left: -1.2%;
        }

        #id2 {
            position: relative;
            left: -1.2%;
        }

        #id3 {
            position: relative;
            left: -1.2%;
        }

        h1 {
            text-align: center;
            line-height: 100px;
        }
    </style>
</head>
<body>
<h1><font face="verdana"> 欢迎注册账号 </font></h1>
<div id="one">
    <form action="<?php echo U('User/register');?>" method="post">
        <p>学号 <input type="text" name="s_no"/></p>
        <p>姓名 <input type="text" name="s_user"/></p>
        <p>密码 <input type="password" name="s_password"/></p>
        <p id="id1">确认密码 <input type="password" name="s_password1"/></p>
        <p id="id2">验证邮箱 <input type="email" name="s_email"/></p>
        <p id="id3">确认邮箱 <input type="email1" name="s_email1"/></p>
        <input type="submit" value="确定"/>
    </form>
</div>

<div id="two"><a href="<?php echo U('User/login');?>">返回登录界面</a></div>
</body>
</html>