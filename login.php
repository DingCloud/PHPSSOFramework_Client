<?php
$ssoLoginUrl = 'http://sso.local.dingstudio.cn/index.php?action=login&callbackUrl='.urlencode('http://app1.local.dingstudio.cn/login.php');
if (!isset($_COOKIE['mysso_sign']) || !isset($_COOKIE['mysso_user'])) {
    header('Location: '.$ssoLoginUrl);
    exit();
}
else {
    setcookie('username', $_COOKIE['mysso_user'], time() + 3600, '/', $_SERVER['HTTP_HOST']);
    setcookie('usersign', $_COOKIE['mysso_sign'], time() + 3600, '/', $_SERVER['HTTP_HOST']);
    header('Location: ./index.php');
}

