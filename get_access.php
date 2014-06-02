<?php
$access_granted = true;
include_once("users.php");
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    include("error404.php");
    exit();
}
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
if ($users[$username] != $password || $username == "") {
    include("error403.php");
    exit();
}
echo md5($key_phrase.$username);
?>