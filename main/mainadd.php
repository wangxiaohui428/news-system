<?php
include "../public/session.php";
include "../public/db.php";
include "../public/functions.php";
$tree=new abc();
$tree->tree(0,1,$db,"category");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
<form action="mainaddInfo.php" method="post">
    上级分类<select name="pid">
        <option value="0">一级分类</option>
        <?php
        echo $tree->str;
        ?>
    </select><br/><br/>
    标题<input type="text" name="stitle" value="" /><br/>
    内容<br/><textarea name="scon" rows="" cols=""></textarea><br/><br/>
    <input type="submit" name="" id="" value="提交" />
</form>
</body>
</html>
