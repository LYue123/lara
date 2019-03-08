<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理员登录</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }

        /*#one {*/
        /*text-align: center;*/
        /*line-height: 10px;*/
        /*margin: 10px auto;*/
        /*}*/

        #two {
            text-align: center;
            line-height: 10px;
            margin: 100px auto;
        }

        #p1 {
            position: relative;
            left: -0.5%;
        }

        #img1 {
            position: relative;
            left: 2%;
        }

        #ip1 {
            position: relative;
            left: 2%;
        }

        h1 {
            text-align: center;
            line-height: 10px;
        }
    </style>
</head>
<body>
<h1><font face="verdana"> 管理员登录界面 </font></h1>
<br/>
<hr>
<hr>

<div id="two">
    <form action="<?php echo U('Admin/index/login');?>" method="post">
        <p>账 号：<input type="text" name="t_no"/></p>
        <p>密 码：<input type="password" name="t_password"/></p>
        <p id="p1">验证码：<input type="text" name="ValidateCode"/></p>
        <img id="img1" src="<?php echo U('Home/User/verifycode');?>" style="cursor: pointer" title="看不清，点击换一张" alt="看不清，点击换一张"
             onclick="this.src=this.src+'?time='" + Math.random()>
        <br/>
        <br/>
        <input id="ip1" type="submit" value="登录"/>

    </form>
</div>


</body>
</html>