<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
include_once './Eleme.php';
$mobile = trim($_POST['mobile']) ? trim($_POST['mobile']) : '';
$url = trim($_POST['url']) ? trim($_POST['url']) : '';

$obj = new Eleme();
$res = $obj->getLuckyOne($url, $mobile);
header('Content-type: application/json');
echo json_encode($res);
