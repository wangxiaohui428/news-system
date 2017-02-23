<?php
    session_start();
    include "../public/db.php";
    $username=$_GET["username"];
    $password=md5($_GET["password"]);
    $result=$db->query("select * from user");
    while ($row=$result->fetch_assoc()){
        if($row["username"]==$username){
            if($row["password"]==$password){
                $_SESSION["is_log"]="yes";
                $_SESSION["username"]=$username;
                $message="登陆成功";
                $url="main.php";
                include "yanchi.html";
                exit;

            }
        }

    }
    $message="登陆失败";
    $url="login.php";
    include "yanchi.html";
?>