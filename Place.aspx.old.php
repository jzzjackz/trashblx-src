<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/main.php';
if (!isset($_GET["placeId"])){
exit('Place id not set');
}
if(!(int)$_GET["placeId"]){
exit('DO NOT TRY EVER TO MAKE SQL INJECTION KIDS, THIS MUST BE A LESSION');
}

if (isset($_GET["placeId"]))
  {
    /* define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'rblx15');
    define('DB_PASSWORD', 'A*yBH]mXYNC14]ed');
    define('DB_NAME', 'rblx15');
    $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $query = mysqli_query($con,'select gameName,gameDesc,port,gameIp,owner from games where gameId="'.$_GET['placeId'].'"');
    $row = mysqli_fetch_array($query); */

    $FindGames = $pdo->prepare('select * from games where gameId="'.(int)$_GET['placeId'].'"');
    $FindGames->execute();
    $row = $FindGames->fetch(PDO::FETCH_ASSOC);
}
if(!$row)
{
  exit("place doesnt exist");
}else{
if (isset($_COOKIE['_ROBLOSECURITY'])){
exit(header('Location: trsblx-player-rb14:1+launchmode:play+gameinfo:'.$_COOKIE['_ROBLOSECURITY'].'+launchtime:17020401369379+placelauncherurl:http%3A%2F%2Fwww.rb14.us.to%2FGame%2FPlaceLauncher.ashx%3FplaceId%3D'.(int)$_GET['placeId'].'+browsertrackerid:197870394468'));
}
}