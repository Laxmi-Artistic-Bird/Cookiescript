<?php
setcookie('useraction', 'true', time() + 3600, '/', '.'.$domain, isset($_SERVER['HTTPS']), true);
?>