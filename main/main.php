<?php
    include "../public/session.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            margin:0;
            padding: 0;
        }
        .header{
            width: 100%;
            height: 100px;
            background: pink;
            border-bottom: 1px solid darkblue;
        }
        .header h1{
            text-align: center;
            line-height: 100px;
        }
        .main{
            width: 100%;
            height: 550px;
            background: plum;
        }
		.left{
            width: 30%;
            height: 100%;
            border-right: 1px solid black;
            /*margin-left: 30px;*/
            padding: 50px;
            float: left;
            background: palegoldenrod;
        }
        .right{
            width: 70%;
            height: 100%;
            float: left;
            background: palevioletred;
        }
        .right iframe{
            width: 100%;
            height: 100%;
        }
        .content{
            margin-left: 20px;
        }
        .title{
            cursor: pointer;
        }
    </style>
    <script src="../js/jquery.min.js"></script>
</head>
<body>
    <div class="header">
        <h1>
            <?php echo $_SESSION["username"]?>
            欢迎来到文化乐园
            <a href="loginout.php">退出</a>
        </h1>
    </div>
    <div class="main">
        <div class="left">
            <ul class="title">
                <li>用户管理
                    <ul class="content">
                        <li><a href="" target="right">添加用户</a></li>
                        <li><a href="" target="right">管理用户</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="title">
                <li>分类管理
                    <ul class="content">
                        <li><a href="categoryadd.php" target="right">添加分类</a></li>
                        <li><a href="insertc.php" target="right">管理分类</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="title">
                <li>内容管理
                    <ul class="content">
                        <li><a href="mainadd.php" target="right">添加内容</a></li>
                        <li><a href="maincon.php" target="right">管理内容</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right">
            <iframe src="" frameborder="0" name="right"></iframe>
        </div>
    </div>
</body>
<script>
    $(".title").click(function () {
        $(this).find(".content").toggle(100);
    })
    $("a").click(function (e) {
        e.stopPropagation();
    })
</script>
</html>