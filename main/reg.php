<?php
    $_SESSION=["ok"];
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
        .message{
            font-size: 12px;
            color: red;
        }
    </style>
    <script src="../js/jquery.min.js"></script>
</head>
<body>
    <form action="regInfo.php">
        <div class="input">
            用户名：<input type="text" name="username"/>
            <div class="message"></div>
        </div>
        <div class="input">
            密码：<input type="text" name="password"/>
            <div class="message"></div>
        </div>
        <br />
        <br />
        <input type="submit" value="注册" name="deng" disabled="disabled"/>
        <a href="login.php">点击登录</a>
    </form>
</body>
<script>
    var reg=/^\w{5,10}$/;
    var btn=$("input[type=submit]");
    $("input[name=username]").keyup(function () {
        var value=$(this).val();
        if(reg.test(value)){
            console.log(reg.test(value));
            $.ajax({
                url:"zhuce.php",
                data:{username:value},
                success:function (e) {
                    if(e=="ok"){
                        $("input[name=username]").attr("ok","ok");
                        $(".message").eq(0).html("格式正确").css("color","green");
                    }else if(e=="error"){
                        $(".message").eq(0).html("用户名重复").css("color","red");
                    }
                }
            })
        }else{
            $(".message").eq(0).html("格式错误").css("color","red");
        }
    });

    $("input[name=password]").keyup(function () {
        var value=$(this).val();
        if(reg.test(value)==true){
            $("input[name=password]").attr("ok","ok");
            $(".message").eq(1).html("格式正确").css("color","green");
            if($("input[name=username]").attr("ok")=="ok"){
                $(btn).removeAttr("disabled");
            }
        }else{
            $(".message").eq(1).html("格式错误").css("color","red");
        }
    });

</script>
</html>