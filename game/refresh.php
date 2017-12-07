<?php
 include("../global/functions.php");
 session_start();
 include("../global/safe.php");
include("../common.php"); 
  ?>

<table cellpadding="2" cellspacing="4">
	<tr>
		<td><font id="m10"><?php echo htmlspecialchars($chat['msg10']); ?></font></td>
	</tr>
	<tr>
		<td><font id="m9"><?php echo htmlspecialchars($chat['msg9']); ?></font></td>
	</tr>
	<tr>
		<td><font id="m8"><?php echo htmlspecialchars($chat['msg8']); ?></font></td>
	</tr>
	<tr>
		<td><font id="m7"><?php echo htmlspecialchars($chat['msg7']); ?></font></td>
	</tr>
	<tr>
		<td><font id="m6"><?php echo htmlspecialchars($chat['msg6']); ?></font></td>
	</tr>
	<tr>
		<td><font id="m5"><?php echo htmlspecialchars($chat['msg5']); ?></font></td>
	</tr>
	<tr>
		<td><font id="m4"><?php echo htmlspecialchars($chat['msg4']); ?></font></td>
	</tr>
	<tr>
		<td><font id="m3"><?php echo htmlspecialchars($chat['msg3']); ?></font></td>
	</tr>
	<tr>
		<td><font id="m2"><?php echo htmlspecialchars($chat['msg2']); ?></font></td>
	</tr>
	<tr>
		<td><font id="m1"><?php echo htmlspecialchars($chat['msg1']); ?></font></td>
	</tr>
</table>
<script type="text/javascript" src="js/j.js"></script>
<script type="text/javascript">
setInterval(function(){$("#m10").load("j.php #m10")},1000);
setInterval(function(){$("#m9").load("j.php #m9")},1000);
setInterval(function(){$("#m8").load("j.php #m8")},1000);
setInterval(function(){$("#m7").load("j.php #m7")},1000);
setInterval(function(){$("#m6").load("j.php #m6")},1000);
setInterval(function(){$("#m5").load("j.php #m5")},1000);
setInterval(function(){$("#m4").load("j.php #m4")},1000);
setInterval(function(){$("#m3").load("j.php #m3")},1000);
setInterval(function(){$("#m2").load("j.php #m2")},1000);
setInterval(function(){$("#m1").load("j.php #m1")},1000);
</script>