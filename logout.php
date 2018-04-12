<?php
include('config.php');
$ssoLogoutUrl=ssoUrl.'?action=logout';

header('Location: '.$ssoLogoutUrl);
