<?php
function createCookie($name, $value, $expiryTime, $path) {
    setcookie($name, $value, time() + $expiryTime, $path);
}

$randomValue = md5(uniqid());
createCookie('test', $randomValue, 3600, '/');

header('Location: index.php');
exit;
?>