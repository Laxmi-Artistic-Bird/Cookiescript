<?php
$domain = $_SERVER['HTTP_HOST'];
setcookie('useraction', 'true', time() + 3600, '/', '.'.$domain, isset($_SERVER['HTTPS']), true);
?>