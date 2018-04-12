<?php
include('config.php');
$ssoLoginUrl=ssoUrl.'?action=login&callbackUrl='.urlencode(callbackUrl);

if(!isset($_COOKIE['mysso_sign']) || !isset($_COOKIE['mysso_user'])){
    setcookie('username','',time()-3600,'/',$_SERVER['HTTP_HOST']);
    setcookie('usersign','',time()-3600,'/',$_SERVER['HTTP_HOST']);
    header('Location: '.$ssoLoginUrl);
    exit();
}
