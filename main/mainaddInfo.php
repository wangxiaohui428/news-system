<?php
include "../public/session.php";
include "../public/db.php";
include  "../public/functions.php";
$cid=$_POST["pid"];
$stitle=$_POST["stitle"];
$scon=$_POST["scon"];
$username=$_SESSION["username"];
$sql="insert into shows (stitle,scon,cid,username) value ('$stitle','$scon','$cid','$username')";
$db->query($sql);
if($db->affected_rows>0) {
    $message = "添加成功！";
    $url = "mainadd.php";
    include "yanchi.html";
    exit;
}
else{
    $message="添加失败！";
    $url="mainadd.php";
    include "yanchi.html";
    exit;
}

$cid=$_GET["id"];
$pid=$_POST["pid"];
$cname=$_POST["cname"];
$sql="update category set cname='$cname',pid='$pid' where cid=".$cid;
$db->query($sql);
if($db->affected_rows>0){
    $message="修改成功！";
    $url="insertc.php";
    include "yanchi.html";
    exit;
}
?>