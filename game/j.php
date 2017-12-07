<meta charset=utf-8>
<?php
 include("../global/functions.php");
 session_start();
 include("../global/safe.php");
include("../common.php"); 
  

if(!isset($_SESSION['uid'])){
	echo "You must be logged in to view this page!";
}else{
	?><font id="m10"><?php echo htmlspecialchars($chat['msg10']); ?></font><?php
	?><font id="m9"><?php echo htmlspecialchars($chat['msg9']); ?></font><?php
	?><font id="m8"><?php echo htmlspecialchars($chat['msg8']); ?></font><?php
	?><font id="m7"><?php echo htmlspecialchars($chat['msg7']); ?></font><?php
	?><font id="m6"><?php echo htmlspecialchars($chat['msg6']); ?></font><?php
	?><font id="m5"><?php echo htmlspecialchars($chat['msg5']); ?></font><?php
	?><font id="m4"><?php echo htmlspecialchars($chat['msg4']); ?></font><?php
	?><font id="m3"><?php echo htmlspecialchars($chat['msg3']); ?></font><?php
	?><font id="m2"><?php echo htmlspecialchars($chat['msg2']); ?></font><?php
	?><font id="m1"><?php echo htmlspecialchars($chat['msg1']); ?></font><?php
	
	
}
?>