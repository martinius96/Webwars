<?php
include("../../common.php");
error_reporting(0);
	$bonus1 = 0;
	if((time() - $working['bonus']) >= 15000 && $stats['floor'] >= 5){
		$bonus = time();
		$working['bonus'] = $bonus;
		$stats['battery'] += 125;
		$stats['rank'] += 50;
		$bonus1 = 125;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 14400 && $stats['floor'] >= 5){
		$bonus = time();
		$working['bonus'] = $bonus;
		$stats['battery'] += 120;
		$stats['rank'] += 48;
		$bonus1 = 120;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 13800 && $stats['floor'] >= 5){
		$bonus = time();
		$working['bonus'] = $bonus;
		$stats['battery'] += 115;
		$stats['rank'] += 46;
		$bonus1 = 115;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 13200 && $stats['floor'] >= 5){
		$bonus = time();
		$working['bonus'] = $bonus;
		$stats['battery'] += 110;
		$stats['rank'] += 44;
		$bonus1 = 110;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 12600 && $stats['floor'] >= 5){
		$bonus = time();
		$working['bonus'] = $bonus;
		$stats['battery'] += 105;
		$stats['rank'] += 42;
		$bonus1 = 105;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 12000){
		$bonus = time();
		$working['bonus'] = $bonus;
		$stats['battery'] += 100;
		$stats['rank'] += 40;
		$bonus1 = 100;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 11400){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 11400);
		$stats['battery'] += 95;
		$stats['rank'] += 38;
		$bonus1 = 95;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 10800){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 10800);
		$stats['battery'] += 90;
		$stats['rank'] += 36;
		$bonus1 = 90;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 10200){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 10200);
		$stats['battery'] += 85;
		$stats['rank'] += 34;
		$bonus1 = 85;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 9600){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 9600);
		$stats['battery'] += 80;
		$stats['rank'] += 32;
		$bonus1 = 80;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 9000){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 9000);
		$stats['battery'] += 75;
		$stats['rank'] += 30;
		$bonus1 = 75;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 8400){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 8400);
		$stats['battery'] += 70;
		$stats['rank'] += 28;
		$bonus1 = 70;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 7800){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 7800);
		$stats['battery'] += 65;
		$stats['rank'] += 26;
		$bonus1 = 65;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 7200){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 7200);
		$stats['battery'] += 60;
		$stats['rank'] += 24;
		$bonus1 = 60;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 6600){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 6600);
		$stats['battery'] += 55;
		$stats['rank'] += 22;
		$bonus1 = 55;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 6000){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 6000);
		$stats['battery'] += 50;
		$stats['rank'] += 20;
		$bonus1 = 50;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 5400){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 5400);
		$stats['battery'] += 45;
		$stats['rank'] += 18;
		$bonus1 = 45;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 4800){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 4800);
		$stats['battery'] += 40;
		$stats['rank'] += 16;
		$bonus1 = 40;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 4200){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 4200);
		$stats['battery'] += 35;
		$stats['rank'] += 14;
		$bonus1 = 35;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 3600){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 3600);
		$stats['battery'] += 30;
		$stats['rank'] += 12;
		$bonus1 = 30;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 3000){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 3000);
		$stats['battery'] += 25;
		$stats['rank'] += 10;
		$bonus1 = 25;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 2400){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 2400);
		$stats['battery'] += 20;
		$stats['rank'] += 8;
		$bonus1 = 20;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 1800){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 1800);
		$stats['battery'] += 15;
		$stats['rank'] += 6;
		$bonus1 = 15;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 1200){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 1200);
		$stats['battery'] += 10;
		$stats['rank'] += 4;
		$bonus1 = 10;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}elseif((time() - $working['bonus']) >= 600){
		$bonus = time();
		$working['bonus'] = $bonus - (time() - $working['bonus'] - 600);
		$stats['battery'] += 5;
		$stats['rank'] += 2;
		$bonus1 = 5;
		$update_working = mysqli_query($con,"UPDATE `working` SET `bonus`='".$working['bonus']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}
	if($stats['floor'] >= 5){
		if($stats['battery'] > 125){
			$stats['battery'] = 125;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		}
	}else{
		if($stats['battery'] > 100){
			$stats['battery'] = 100;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		}
	}
	if($stats['apotion'] - time() <= 0){
		$stats['apotion'] = 0;
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `apotion`='".$stats['apotion']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		include("update_stats.php");
	}
	if($stats['dpotion'] - time() <= 0){
		$stats['dpotion'] = 0;
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `dpotion`='".$stats['dpotion']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		include("update_stats.php");
	}
	$bonus2 = floor((600 - (time() - $working['bonus'])) / 60);
	$bonus3 = (600 - (time() - $working['bonus']));
	if($bonus1 > 0){
		echo $lang['TIME_RESTORED'].': ' . $bonus1 . $lang['%_BATTERY'];
	}elseif($bonus2 > 0){
		echo $lang['CHARGING_BATTERY'].': ' . $bonus2 . " min";
    	$new = mysqli_query($con,"SELECT `username` FROM `user` ORDER BY `id` DESC") or die(mysqli_error($con));
	$newmayor = mysqli_fetch_assoc($new);
	}else{
		echo $lang['CHARGING_BATTERY'].': '. $bonus3 . " sek";
    
	}     ?>