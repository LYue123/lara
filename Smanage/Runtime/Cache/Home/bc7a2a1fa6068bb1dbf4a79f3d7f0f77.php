<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>学生成绩</title>
    <style>
        #one {
            text-align: center;
            line-height: 30px;
            margin: 200px auto;
        }

        #div1 {
            position: absolute;
            right: 10px;
        }
    </style>
</head>
<body>
<div id="one">

    <form>
        <fieldset>
            <legend>成绩信息</legend>
            <!--设置输出四个成绩就换行-->
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 4 );++$i; echo ($arr["course"]); ?>：<?php echo ($arr["score"]); ?> &nbsp; &nbsp; &nbsp;
                <?php if(($mod) == "3"): ?><br/><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            <br/>
            总分：<?php echo ($sum); ?>
        </fieldset>
    </form>

</div>
<div id="div1"><a href="<?php echo U('Order/index');?>">返回个人信息</a></div>

</body>
</html>