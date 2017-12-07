<?php
error_reporting(0); 
include ('../global/functions.php');
 include ('../global/safe.php'); 
session_start();
$t = file_get_contents("logs/odhlasenia.txt");
      $today = date("Y-m-d H:i:s");
      $t .= $today." Používate¾ ".$user['username']." "."sa odhlásil!"."\r\n";
      file_put_contents("logs/odhlasenia.txt",$t);
session_destroy();
header("Location: ../index.php");
echo 'Boli ste úspešne odhlásení' ;
 

?>
