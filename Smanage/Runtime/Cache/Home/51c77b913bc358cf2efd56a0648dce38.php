<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>修改密码</title>
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

        #p1 {
            position: relative;
            left: -1.2%;
        }

        /*#p2 {*/
        /*position: relative;*/
        /*left: 0%;*/
        /*}*/

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
<h1><font face="verdana"> 修改密码 </font></h1>
<p id="p2"> 欢迎您 <?php echo ($user->s_user); ?></p><br>
<br/>

<div id="one">
    <form action="<?php echo U('Order/modifypass');?>" method="post">
        <p>原密码：<input type="password" name="s_password1"/></p>
        <p>新密码：<input type="password" name="s_password2"/></p>
        <p id="p1">确认新密码：<input type="password" name="s_password"/></p>
        <!--<p id="p2">验证码：<input type="text" name="ValidateCode"/></p>-->
        <!--<img id="img1" src="<?php echo U('User/verifycode');?>" style="cursor: pointer" title="看不清，点击换一张" alt="看不清，点击换一张"-->
        <!--onclick="this.src=this.src+'?time='" + Math.random()>-->
        <br/>
        <br/>
        <input id="ip1" type="submit" value="确认"/>

    </form>
</div>

<div id="div1"><a href="<?php echo U('Order/index');?>">返回个人信息</a></div>
</body>
</html>