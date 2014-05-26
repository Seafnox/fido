<?php
header($_SERVER["SERVER_PROTOCOL"]." 403 Forbidden");
header("Status: 403 Forbidden");
$_SERVER['REDIRECT_STATUS'] = 403;
echo "The page requested by you: \"".$_SERVER['REQUEST_URI']."\" is forbidden on this server.";
?>
