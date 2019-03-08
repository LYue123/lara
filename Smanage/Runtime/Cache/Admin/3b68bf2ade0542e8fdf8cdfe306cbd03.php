<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<body>
<meta charset="utf-8">
<title>管理页面</title>
<style>
    html, body {
        /*margin: 0;*/
        /*padding: 0;*/
        text-align: center;
    }

    #one {
        text-align: center;
        line-height: 20px;
        margin: 200px auto;
    }


</style>

<body>
<a href="<?php echo U('Admin/Order/score');?>">查看成绩</a>
<a href="<?php echo U('Admin/Order/addscore');?>">添加成绩</a>
<a href="<?php echo U('Admin/Order/modifypass');?>">管理成绩</a>
<a href="<?php echo U('Admin/Common/destroysession');?>">注销用户</a>
<hr>
<hr>

<div id="one">
    <form>
        学号： <input type="text" name="s_no" value="<?php echo ($user->t_no); ?>" readonly>
        <br><br/>
        姓名： <input type="text" name="s_user" value="<?php echo ($user->t_user); ?>" readonly>
        <br><br/>
    </form>

</div>

</body>
</html>