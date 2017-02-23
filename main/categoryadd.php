<?php
    include "../public/db.php";
    include "../public/session.php";
    include  "../public/functions.php";
    $tree=new abc();
    $tree->tree(0,1,$db,"category");
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
        form{
            width: 200px;
            height: 200px;
            position:fixed;
            left:0;right: 0;top:0;bottom: 0;
            margin:auto;
        }
    </style>
</head>
<body>
<form action="categoryaddInfo.php">
    上级标题：<select name="pid">
                <?php echo $tree->str ?>
            </select> <br/><br/>
    添加标题：<input type="text" name="cname"><br/><br/>
    <input type="submit" value="提交">
</form>
</body>
</html>