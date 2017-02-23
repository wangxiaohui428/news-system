<?php
    include "../public/session.php";
    include "../public/db.php";
    $cname=$_GET["cname"];
    $pid=$_GET["pid"];
    $db->query("insert into category (pid,cname) values ('$pid','$cname')");
    if($db->affected_rows>0){
        $message="添加成功";
        $url="categoryadd.php";
        include "yanchi.html";
    }else{
        $message="添加失败";
        $url="categoryadd.php";
        include "yanchi.html";
    }
?>

