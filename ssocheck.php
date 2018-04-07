<?php
$ssoLoginUrl = 'http://sso.local.dingstudio.cn/index.php?action=login&callbackUrl='.urlencode('http://app1.local.dingstudio.cn/login.php');
if (!isset($_COOKIE['mysso_sign']) || !isset($_COOKIE['mysso_user'])) {
    setcookie('username', '', time() - 3600, '/', $_SERVER['HTTP_HOST']);
    setcookie('usersign', '', time() - 3600, '/', $_SERVER['HTTP_HOST']);
    header('Location: '.$ssoLoginUrl);
    exit();
}