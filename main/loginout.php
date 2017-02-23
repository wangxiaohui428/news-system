<?php
    include "../public/session.php";
    unset($_SESSION["is_login"]);
    unset($_SESSION["username"]);
    $message="退出登录";
    $url="login.php";
    include "yanchi.html";
?>