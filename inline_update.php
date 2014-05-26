<?php
$access_granted = true;
include_once("users.php");
if (!isset($_POST['hash']) || !isset($_POST['username'])) {
    $error = "Wrong username";
    include("error404.php");
    exit();
}
$username = strip_tags($_POST['username']);
$md5 = strip_tags($_POST['hash']);
if ($md5 != md5($key_phrase.$username)) {
    include("error403.php");
    echo md5($key_phrase.$username);
    exit();
}
if (!isset($_POST['editableID']) || !isset($_POST['data'])) {
    $error = "Wrong data";
    include("error404.php");
    exit();
}
$filename = strip_tags($_POST['editableID']);
$data = $_POST['data'];
$file = fopen("editable/".$filename.".html", "w");
if (!$file) {
    include("error403.php");
    exit();
}
$result = fwrite($file, $data);
if (!$result) {
    include("error403.php");
}
fclose($file);
?>