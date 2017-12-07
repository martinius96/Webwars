<?php
	if(isset ($_POST ['train'])){
		$worker = mysqli_real_escape_string($con, $_POST ['worker']);
    $worker = htmlspecialchars( $worker );
    $worker = trim( $worker );
		$farmer = mysqli_real_escape_string($con, $_POST ['farmer']);
    $farmer = htmlspecialchars( $farmer );
    $farmer = trim( $farmer );
		$strelec = mysqli_real_escape_string($con, $_POST ['strelec']);
    $strelec = htmlspecialchars( $strelec );
    $strelec = trim( $strelec );
		$gulometcik = mysqli_real_escape_string($con, $_POST ['gulometcik']);
    $gulometcik = htmlspecialchars( $gulometcik );
    $gulometcik = trim( $gulometcik );
		$vojak = mysqli_real_escape_string($con, $_POST ['vojak']);
    $vojak = htmlspecialchars( $vojak );
    $vojak = trim( $vojak );
    $serzant = mysqli_real_escape_string($con, $_POST ['serzant']);
    $serzant = htmlspecialchars( $serzant );
    $serzant = trim( $serzant );
		$generalobrany = mysqli_real_escape_string($con, $_POST ['generalobrany']);  
    $generalobrany = htmlspecialchars( $generalobrany );
    $generalobrany = trim( $generalobrany );
		if(isset ($_POST ['fisherman'])){
			$fisherman = mysqli_real_escape_string($con, $_POST ['fisherman']);
      $fisherman = htmlspecialchars( $fisherman);
    $fisherman = trim( $fisherman );
		}else{
			$fisherman = 0;
		} 
		$food_needed = (10 * $farmer) + (15 * $worker) + (20 * $strelec) + (25 * $gulometcik) + (50000 * $generalobrany) + (30 * $fisherman)  + (100000 * $serzant) + (30 * $vojak);
		if($worker < 0 || $farmer < 0 || $strelec < 0 || $gulometcik < 0 || $generalobrany < 0 || $fisherman < 0 || $vojak < 0 || $serzant < 0 || $vojak < 0){
		echo $lang['YOU_MUST_TRAIN_POSITIVE_UNITS'];
		}elseif($stats['food'] < $food_needed){
				echo $lang['YOU_DONT_HAVE_FOOD'];
		}else{
			$unit['worker'] += $worker;
			for($f = 0; $f < $farmer; $f++){
				if($stats['floor'] >= 7){
					$tf = rand(1,100);
				}else{
					$tf = rand(1,400);
				}
				if($tf == 1){
					$unit['tfarmer'] += 1;
					$stats['rank'] += 1;
				}else{
					$unit['farmer'] += 1;
				}
			}
			$unit['strelec'] += $strelec;
			$unit['gulometcik'] += $gulometcik;
			$unit['generalobrany'] += $generalobrany;
			$unit['fisherman'] += $fisherman;
			$unit['vojak'] += $vojak;
      $unit['serzant'] += $serzant;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_unit = mysqli_query($con,"UPDATE `unit` SET
										`worker`='".$unit['worker']."',
										`farmer`='".$unit['farmer']."',
										`strelec`='".$unit['strelec']."',
										`gulometcik`='".$unit['gulometcik']."',
										`tfarmer`='".$unit['tfarmer']."',
										`generalobrany`='".$unit['generalobrany']."',
										`fisherman`='".$unit['fisherman']."',
										`vojak`='".$unit['vojak']."',
                    `serzant`='".$unit['serzant']."'
										
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['food'] -= $food_needed;
			$update_food = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("../global/update_stats.php");
			echo $lang['YOU_HAVE_TRAINED_YOUR_UNITS'];
			                 
		}
	}elseif(isset ($_POST ['untrain'])){
$worker = mysqli_real_escape_string($con, $_POST ['worker']);
    $worker = htmlspecialchars( $worker );
    $worker = trim( $worker );
		$farmer = mysqli_real_escape_string($con, $_POST ['farmer']);
    $farmer = htmlspecialchars( $farmer );
    $farmer = trim( $farmer );
		$strelec = mysqli_real_escape_string($con, $_POST ['strelec']);
    $strelec = htmlspecialchars( $strelec );
    $strelec = trim( $strelec );
		$gulometcik = mysqli_real_escape_string($con, $_POST ['gulometcik']);
    $gulometcik = htmlspecialchars( $gulometcik );
    $gulometcik = trim( $gulometcik );
		$vojak = mysqli_real_escape_string($con, $_POST ['vojak']);
    $vojak = htmlspecialchars( $vojak );
    $vojak = trim( $vojak );
    $serzant = mysqli_real_escape_string($con, $_POST ['serzant']);
    $serzant = htmlspecialchars( $serzant );
    $serzant = trim( $serzant );
		$generalobrany = mysqli_real_escape_string($con, $_POST ['generalobrany']);  
    $generalobrany = htmlspecialchars( $generalobrany );
    $generalobrany = trim( $generalobrany );
		if(isset ($_POST ['fisherman'])){
			$fisherman = mysqli_real_escape_string($con, $_POST ['fisherman']);
      $fisherman = htmlspecialchars( $fisherman);
    $fisherman = trim( $fisherman );
		}else{
			$fisherman = 0;
		}
		$food_gained = (8 * $farmer) + (11 * $worker) + (15 * $strelec) + (19 * $gulometcik) + (80 * $tfarmer) + (23 * $fisherman) + (26 * $vojak) + (40000 * $serzant) + (20000 * $generalobrany);
		if($worker < 0 || $farmer < 0 || $strelec < 0 || $gulometcik < 0 || $tfarmer < 0 || $fisherman < 0 || $vojak < 0 || $serzant < 0 || $generalobrany < 0){
		echo $lang['YOU_MUST_UNTRAIN_POSITIVE_UNITS'];
		}elseif($worker > $unit['worker'] || $farmer > $unit['farmer'] ||
				$strelec > $unit['strelec'] || $gulometcik > $unit['gulometcik'] ||
				$tfarmer > $unit['tfarmer'] || $fisherman > $unit['fisherman'] ||
				$vojak > $unit['vojak'] || $serzant > $unit['serzant'] ||
				$generalobrany > $unit['generalobrany']){
			echo $lang['YOU_DONT_HAVE_UNITS_FOR_UNTRAIN'];
		}else{
			$unit['worker'] -= $worker;
			$unit['farmer'] -= $farmer;
			$unit['strelec'] -= $strelec;
			$unit['gulometcik'] -= $gulometcik;
			$unit['tfarmer'] -= $tfarmer;
			$unit['fisherman'] -= $fisherman;
			$unit['vojak'] -= $vojak;
      $unit['serzant'] -= $serzant;
			$unit['generalobrany'] -= $generalobrany;
			
			$update_unit = mysqli_query($con,"UPDATE `unit` SET
										`worker`='".$unit['worker']."',
										`farmer`='".$unit['farmer']."',
										`strelec`='".$unit['strelec']."',
										`gulometcik`='".$unit['gulometcik']."',
										`tfarmer`='".$unit['tfarmer']."',
										`fisherman`='".$unit['fisherman']."',
										`vojak`='".$unit['vojak']."',
                    `serzant`='".$unit['serzant']."',
										`generalobrany`='".$unit['generalobrany']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['food'] += $food_gained;
			$update_food = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("../global/update_stats.php");
			echo $lang['YOU_UNTRAINED_UNITS'];
		}
	}  
	$can1 = floor($stats['food'] / 10);
	$can2 = floor($stats['food'] / 15);
	$can3 = floor($stats['food'] / 20);
	$can4 = floor($stats['food'] / 25);
	$can5 = floor($stats['food'] / 30);
	$can6 = floor($stats['food'] / 100000);
	$can7 = floor($stats['food'] / 50000);
	$can8 = floor($stats['food'] / 30);
  ?> <hr>
	<center><h2><?php echo $lang['TRAIN_UNITS']; ?></h2></center><hr>
	<br />
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table width="100%"cellpadding="2" cellspacing="5">
		<tr>
			<td><b><?php echo $lang['AVATAR']; ?></b></td>
			<td><b><?php echo $lang['UNIT']; ?></b></td>
			<td><b><?php echo $lang['AVAILABLE']; ?></b></td>
			<td><b><?php echo $lang['PRICE']; ?></b></td>
			<td><b><?php echo $lang['TRAIN']; ?></b></td>
			<td><b><?php echo $lang['YOU_CAN_TRAIN']; ?></b></td>
			<td><b><?php echo $lang['AVAILABLE_WEAPONS']; ?></b></td>
		</tr>
		<tr>
			<td><a href="faq/farmer.php"><img src="images/farmer.png"></a></td>
			<td><?php echo $lang['FARMER']; ?></td>
			<td><?php echo number_format($unit['farmer']); ?></td>
			<td><center>10 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="farmer"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)<?php echo $lang['PIECES']; ?></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td><a href="faq/miner.php"><img src="images/miner.png"></a></td>
			<td><?php echo $lang['MINER']; ?></td>
			<td><?php echo number_format($unit['worker']); ?></td>
			<td><center>15 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="worker"></td>
			<?php
			if($can2 > 0){
			?>
			<td>(<?php echo $can2; ?>)<?php echo $lang['PIECES']; ?></td>
			<?php
			}   
			?>
		</tr>
    		<tr>
				<td><a href="faq/fisherman.php"><img src="images/fisherman.png"></a></td>
				<td><?php echo $lang['FISHERMAN']; ?></td>
				<td><?php echo number_format($unit['fisherman']); ?></td>
				<td><center>30 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
				<td><input type="text" name="fisherman"></td>
				<?php
				if($can5 > 0){
				?>
				<td>(<?php echo $can5; ?>)<?php echo $lang['PIECES']; ?></td>
				<?php
				}
				?>
			</tr>
		<tr>
			<td><a href="faq/rifleman.php"><img src="images/strelec.png"></a></td>
			<td><?php echo $lang['RIFLEMAN']; ?></td>
			<td><?php echo number_format($unit['strelec']); ?></td>
			<td><center>20 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="strelec"></td>
			<?php
			if($can3 > 0){
			?>
			<td>(<?php echo $can3; ?>)<?php echo $lang['PIECES']; ?></td>
			<?php
			}
			?>
			<td><img src="images/kar98.png" title="KAR98"><img src="images/puskavz24.png" title="Puška vz 24"></td>
		</tr>
		<tr>
			<td><a href="faq/machinegunner.php"><img src="images/gulometcik.png"></a></td>
			<td><?php echo $lang['MACHINEGUNNER']; ?></td>
			<td><?php echo number_format($unit['gulometcik']); ?></td>
			<td><center>25 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="gulometcik"></td>
			<?php
			if($can4 > 0){
			?>
			<td>(<?php echo $can4; ?>)<?php echo $lang['PIECES']; ?></td>
			<?php
			}
			?>
			<td><img src="images/gulometvz24.png" title="MG 42"></td>
		</tr>
		<tr>
			<td><a href="faq/soldier.php"><img src="images/vojak.png"></a></td>
			<td><?php echo $lang['SOLDIER']; ?></td>
			<td><?php echo number_format($unit['vojak']); ?></td>
			<td><center>30 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="vojak"></td>
			<?php
			if($can8 > 0){
			?>
			<td>(<?php echo $can8; ?>)<?php echo $lang['PIECES']; ?></td>
			<?php
			}
			?>
			<td><img src="images/mp40.png" title="MP38"><img src="images/pps43.png" title="PPS43"><img src="images/zk383.png" title="ZK383"></td>
		</tr>
    
    <tr>
			<td><a href="faq/sergeant.php"><img src="images/serzant.png"></a></td>
			<td><?php echo $lang['SERGEANT']; ?></td>
			<td><?php echo number_format($unit['serzant']); ?></td>
			<td><center>3000 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="serzant"></td>
			<?php
			if($can6 > 0){
			?>
			<td>(<?php echo $can6; ?>)<?php echo $lang['PIECES']; ?></td>
			<?php
			}
			?>
      <td></td>
      
		</tr>
    <tr>
			<td><a href="faq/general.php"><img src="images/generalobrany.png"></a></td>
			<td><?php echo $lang['GENERAL']; ?></td>
			<td><?php echo number_format($unit['generalobrany']); ?></td>
			<td><center>2500 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="generalobrany"></td>
				<?php
			if($can7 > 0){
			?>
			<td>(<?php echo $can7; ?>)<?php echo $lang['PIECES']; ?></td>
			<?php
			}
			?>
		</tr>


	
		
		
			
		
	</table>
 <center><button type="submit" name="train" class="btn btn-success"><?php echo $lang['TRAIN']; ?>!</button></center>
	</form>
	<hr />
  <center><h2><?php echo $lang['UNTRAIN_UNITS']; ?></h2><hr></center><br />
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table width="100%" cellpadding="2" cellspacing="4">
		<tr>
			<td><b><?php echo $lang['AVATAR']; ?></b></td>
			<td><b><?php echo $lang['UNIT']; ?></b></td>
			<td><b><?php echo $lang['AVAILABLE']; ?></b></td>
			<td><b><?php echo $lang['OFFER']; ?></b></td>
			<td><b><?php echo $lang['UNTRAIN']; ?></b></td>
		</tr>
		<tr>
			<td><a href="faq/farmer.php"><img src="images/farmer.png"></a></td>
			<td><?php echo $lang['FARMER']; ?></td>
			<td><?php echo number_format($unit['farmer']); ?></td>
			<td><center>4<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="farmer"></td>
		</tr>
		<tr>
			<td><a href="faq/miner.php"><img src="images/miner.png"></a></td>
			<td><?php echo $lang['MINER']; ?></td>
			<td><?php echo number_format($unit['worker']); ?></td>
			<td><center>6<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="worker"></td>
		</tr>
    	<tr>
				<td><a href="faq/fisherman.php"><img src="images/fisherman.png"></a></td>
				<td><?php echo $lang['FISHERMAN']; ?></td>
				<td><?php echo number_format($unit['fisherman']); ?></td>
				<td><center>12<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
				<td><input type="text" name="fisherman"></td>
			</tr>
		<tr>
			<td><a href="faq/rifleman.php"><img src="images/strelec.png"></a></td>
			<td><?php echo $lang['RIFLEMAN']; ?></td>
			<td><?php echo number_format($unit['strelec']); ?></td>
			<td><center>8<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="strelec"></td>
		</tr>
		<tr>
			<td><a href="faq/machinegunner.php"><img src="images/gulometcik.png"></a></td>
			<td><?php echo $lang['MACHINEGUNNER']; ?></td>
			<td><?php echo number_format($unit['gulometcik']); ?></td>
			<td><center>10<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="gulometcik"></td>
		</tr>
		<tr>
			<td><a href="faq/soldier.php"><img src="images/vojak.png"></a></td>
			<td><?php echo $lang['SOLDIER']; ?></td>
			<td><?php echo number_format($unit['vojak']); ?></td>
			<td><center>12<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="vojak"></td><td>
		</tr>
		
		
    <tr>
			<td><a href="faq/sergeant.php"><img src="images/serzant.png"></a></td>
			<td><?php echo $lang['SERGEANT']; ?></td>
			<td><?php echo number_format($unit['serzant']); ?></td>
			<td><center>40000<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="serzant"></td>
		</tr>
    <tr>
			<td><a href="faq/general.php"><img src="images/generalobrany.png"></a></td>
			<td><?php echo $lang['GENERAL']; ?></td>
			<td><?php echo number_format($unit['generalobrany']); ?></td>
			<td><center>20000<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="generalobrany"></td>
		</tr>
		
		
		
	</table>  
<center><button type="submit" name="untrain" class="btn btn-danger"><?php echo $lang['UNTRAIN']; ?>!</button></center>
	</form>