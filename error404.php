<?php
header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
header("Status: 404 Not Found");
$_SERVER['REDIRECT_STATUS'] = 404;
echo "The page requested by you: \"".$_SERVER['REQUEST_URI']."\", doesn't exists on this server.";
?>
