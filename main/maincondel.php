<?php
include "../public/session.php";
include "../public/db.php";
$id=$_GET["id"];
$sql="delete from shows where sid=".$id;
$db->query($sql);
if($db->affected_rows>0){
    $message="删除成功";
    $url="maincon.php";
    include "yanchi.html";
}else{
    $message="删除失败";
    $url="maincon.php";
    include "yanchi.html";
}
?>