<?php
session_start();
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
            margin:0;
            padding: 0;
        }
        form{
            width: 400px;
            height: 100px;
            margin:100px auto;
        }
        .input{
            width: 300px;
            height: 60px;
            line-height: 30px;
            margin-top:20px;
        }
        .input input{
            width: 300px;
            height: 30px;
            border-radius: 6px;
            float:left;
        }
        .zi{
            font-size: 12px;
            color: red;
        }
    </style>
</head>
<body>
<form action="denglu.php">
    <h2>登录页</h2>
    <div class="input">
        账号：<input type="text" name="username" autocomplete="off"/>
        <div class="zi"></div>
    </div>
    <div class="input">
        密码：<input type="text" name="password"/>
        <div class="zi"></div>
    </div>
    <br />
    <br />
    <input type="submit" value="登录" name="deng"/>
    还没有账号？<a href="reg.php">点击注册</a>
</form>
</body>
</html>