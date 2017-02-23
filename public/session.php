<?php
    session_start();
    sleep(0.5);
    if(!isset($_SESSION["is_log"])){
    $message="没有登录";
    $url="login.php";
    include "yanchi.html";
    exit;
}