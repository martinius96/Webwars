
<?php 
    error_reporting(0);
 include("functions.php");
     error_reporting(0);
  session_start();
  error_reporting(0);
$stats_get = mysqli_query($con,"SELECT * FROM `stats` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
$stats = mysqli_fetch_assoc($stats_get);

$unit_get = mysqli_query($con,"SELECT * FROM `unit` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
$unit = mysqli_fetch_assoc($unit_get);

$user_get = mysqli_query($con,"SELECT * FROM `user` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
$user = mysqli_fetch_assoc($user_get);

$weapon_get = mysqli_query($con,"SELECT * FROM `weapon` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
$weapon = mysqli_fetch_assoc($weapon_get);

$working_get = mysqli_query($con,"SELECT * FROM `working` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
$working = mysqli_fetch_assoc($working_get);

$timer_get = mysqli_query($con,"SELECT * FROM `timer` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
$timer = mysqli_fetch_assoc($timer_get);

$daily_get = mysqli_query($con,"SELECT * FROM `daily` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
$daily = mysqli_fetch_assoc($daily_get);

$ranking_get = mysqli_query($con,"SELECT * FROM `ranking` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
$ranking = mysqli_fetch_assoc($ranking_get);

$id_get = mysqli_query($con,"SELECT MAX(`id`) FROM `ranking`") or die(mysqli_error($con));
$id = mysqli_fetch_assoc($id_get);

$chat_get = mysqli_query($con,"SELECT * FROM `chat`") or die(mysqli_error($con));
$chat = mysqli_fetch_assoc($chat_get);

$mailbox_get = mysqli_query($con,"SELECT * FROM `mailbox` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
$mailbox = mysqli_fetch_assoc($mailbox_get);

$mayor_get = mysqli_query($con,"SELECT * FROM `stats` WHERE `id`='".$_SERVER['QUERY_STRING']."'") or die(mysqli_error($con));
$mayor = mysqli_fetch_assoc($mayor_get);

$guild_get = mysqli_query($con,"SELECT * FROM `guild` WHERE `id`='".$stats['guild']."'") or die(mysqli_error($con));
$guild = mysqli_fetch_assoc($guild_get);

$g_get = mysqli_query($con,"SELECT * FROM `guild` WHERE `id`='".$_SERVER['QUERY_STRING']."'") or die(mysqli_error($con));
$g = mysqli_fetch_assoc($g_get);


if(isset($_POST['attack1'])){
	$attacked_user_get = mysqli_query($con,"SELECT * FROM `user` WHERE `id`='".$_POST['attack1']."'") or die(mysqli_error($con));
	$attacked_user = mysqli_fetch_assoc($attacked_user_get);
}

?>