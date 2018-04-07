<?php
header('Content-Type: text/html; charset=UTF-8');
include('ssocheck.php');
if (!isset($_COOKIE['username']) || !isset($_COOKIE['usersign'])) {
    header('Location: ./login.php');
    exit();
}
echo '欢迎回来，您已作为：'.$_COOKIE['username'].' 登录。<a href="logout.php" target="_self">点此</a>登出！';
