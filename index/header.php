<?php
include "../public/db.php";
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
            padding: 0;
            margin:0;
            list-style: none;
        }
        a{
            text-decoration: none;
        }
        .header{
            width: 1200px;
            height: 200px;
            background: pink;
            margin:0 auto;
        }
        .header h1{
            line-height: 200px;
            text-align: center;
        }
        .nav{
            width: 1200px;
            height: auto;
            overflow: hidden;
            margin:0 auto;
            margin-top:5px;
        }
        .nav li{
            width: 20%;
            height: 100%;
            float: left;
            text-align: center;
            margin-right: 2px;
            background: plum;
            line-height: 40px;
        }
        .nav li a{
            display: block;
            width: 100%;
            height: 100%;
            font-size: 18px;
        }
        .nav .xiala{
            width: 100%;
            height:auto;
            overflow: hidden;
            background: hotpink;
            display: none;
        }
        .nav .xiala li{
            width: 100%;
            height: 10%;
            background: hotpink;
            border-bottom: 1px dashed black;
        }
        .nav .xiala li a{
            width: 100%;
            height: 100%;
        }
    </style>
    <script src="../js/jquery.min.js"></script>
</head>
<body>
<script>
    $(function () {
        $(".nav li").hover(function(){
            $(this).find(".xiala").slideDown(100);
        },function(){
            $(this).find(".xiala").slideUp(100);
        })
    })
</script>
    <div class="header">
        <h1><?php echo $_SESSION["username"]?>欢迎来到这里</h1>
    </div>
    <ul class="nav">
        <?php
        $result=$db->query("select * from category where pid=2");
        while($row=$result->fetch_assoc()){
            $pdcid=$row["cid"];
            ?>
            <li>
                <a href="category.php?id=<?php echo $row['cid']?>"><?php echo $row["cname"]?></a>
                <ul class="xiala">
                    <?php
                    $result1=$db->query("select * from category where pid=".$row["cid"]);
                    while($row1=$result1->fetch_assoc()){
                        ?>
                        <li class="yirujsxiao"><a href="list.php?id=<?php echo $row1['cid']?>"><?php echo $row1["cname"]?></a></li>
                    <?php }?>
                </ul>
            </li>

        <?php }?>

    </ul>
