<?php
// Real time rencder
require $_SERVER['DOCUMENT_ROOT'].'/config/main.php';

header("content-type: image/png");

use TrashBlx\Core\SoapUtils;
if(!isset($_GET['uID'])){
	die("insert atleast a value to render your user. ?uID=your user id");
}elseif(!is_int((int)$_GET['uID'])){
	die('average RCE executor... tsk tsk tsk.');
}

$soapUtils = new SoapUtils();

$render = $soapUtils->renderUser($_GET['uID']);
$decrypted = base64_decode($render[0]);
exit($decrypted);