<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/main.php';
if(!isset($_COOKIE['_ROBLOSECURITY']) || !isset($_SESSION['user'])){
	header("location: /");
}
$charapp = $_POST["charapp"];
if(!str_contains($charapp,"rb14.us.to/asset") && !empty($charapp)){
	die('charapp must have the asset link. if you also though that sql injecting is possible, you are def stupid');
}elseif(str_contains($charapp, "'") || str_contains($charapp, '"')){
	die('r/shittyhackers');
}
 $update = "UPDATE users
            SET charapp = '".$charapp."', HeadColor = ".(int)$_POST['hcolor'].", TorsoColor = ".(int)$_POST['tcolor'].", LeftArmColor = ".(int)$_POST['lacolor'].", RightArmColor = ".(int)$_POST['racolor'].", LeftLegColor = ".(int)$_POST['llcolor'].", RightLegColor=".(int)$_POST['rlcolor']."
            WHERE userid = ".$_SESSION['user']["id"];
    $stmt = $pdo->prepare($update);
    $stmt->execute();
	exit("your avatar has been applied!");
	