<?php
	if(isset ($_POST ['train'])){
	$worker = mysqli_real_escape_string($con, $_POST ['worker']);
    $worker = htmlspecialchars( $worker );
    $worker = trim( $worker );
		$farmer = mysqli_real_escape_string($con, $_POST ['farmer']);
    $farmer = htmlspecialchars( $farmer );
    $farmer = trim( $farmer );
		$enfieldman = mysqli_real_escape_string($con, $_POST ['enfieldman']);
     $enfieldman = htmlspecialchars( $enfieldman );
    $enfieldman = trim( $enfieldman );
		$gunner = mysqli_real_escape_string($con, $_POST ['gunner']);
     $gunner = htmlspecialchars( $gunner );
    $gunner = trim( $gunner );
		$soldier = mysqli_real_escape_string($con, $_POST ['soldier']);
     $soldier = htmlspecialchars( $soldier );
    $soldier = trim( $soldier );
    $sergeant= mysqli_real_escape_string($con, $_POST ['sergeant']);
     $sergeant = htmlspecialchars( $sergeant );
    $sergeant = trim( $sergeant );
		$gendef = mysqli_real_escape_string($con, $_POST ['gendef']);  
     $gendef = htmlspecialchars( $gendef );
    $gendef = trim( $gendef );
		if(isset ($_POST ['fisherman'])){
		$fisherman = mysqli_real_escape_string($con, $_POST ['fisherman']);
      $fisherman = htmlspecialchars( $fisherman );
    $fisherman = trim( $fisherman );
		}else{
			$fisherman = 0;
		} 
		$food_needed = (10 * $farmer) + (15 * $worker) + (20 * $enfieldman) + (25 * $gunner) + (50000 * $gendef) + (30 * $fisherman)  + (100000 * $sergeant) + (30 * $soldier);
		if($worker < 0 || $farmer < 0 || $enfieldman < 0 || $gunner < 0 || $gendef < 0 || $fisherman < 0 || $soldier < 0 || $sergeant < 0){
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
			$unit['enfieldman'] += $enfieldman;
			$unit['gunner'] += $gunner;
			$unit['gendef'] += $gendef;
			$unit['fisherman'] += $fisherman;
			$unit['soldier'] += $soldier;
      $unit['sergeant'] += $sergeant;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_unit = mysqli_query($con,"UPDATE `unit` SET
										`worker`='".$unit['worker']."',
										`farmer`='".$unit['farmer']."',
										`enfieldman`='".$unit['enfieldman']."',
										`gunner`='".$unit['gunner']."',
										`tfarmer`='".$unit['tfarmer']."',
										`gendef`='".$unit['gendef']."',
										`fisherman`='".$unit['fisherman']."',
										`soldier`='".$unit['soldier']."',
                    `sergeant`='".$unit['sergeant']."'
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
		$enfieldman = mysqli_real_escape_string($con, $_POST ['enfieldman']);
     $enfieldman = htmlspecialchars( $enfieldman );
    $enfieldman = trim( $enfieldman );
		$gunner = mysqli_real_escape_string($con, $_POST ['gunner']);
     $gunner = htmlspecialchars( $gunner );
    $gunner = trim( $gunner );
		$soldier = mysqli_real_escape_string($con, $_POST ['soldier']);
     $soldier = htmlspecialchars( $soldier );
    $soldier = trim( $soldier );
    $sergeant= mysqli_real_escape_string($con, $_POST ['sergeant']);
     $sergeant = htmlspecialchars( $sergeant );
    $sergeant = trim( $sergeant );
		$gendef = mysqli_real_escape_string($con, $_POST ['gendef']);  
     $gendef = htmlspecialchars( $gendef );
    $gendef = trim( $gendef );
		$tfarmer = mysqli_real_escape_string($con, $_POST ['tfarmer']);
		$tfarmer = htmlspecialchars( $tfarmer );
    $tfarmer = trim( $tfarmer );
		if(isset ($_POST ['fisherman'])){
		$fisherman = mysqli_real_escape_string($con, $_POST ['fisherman']);
      $fisherman = htmlspecialchars( $fisherman );
    $fisherman = trim( $fisherman );
		}else{
			$fisherman = 0;
		}
		$food_gained = (8 * $farmer) + (11 * $worker) + (15 * $enfieldman) + (19 * $gunner) + (80 * $tfarmer) + (23 * $fisherman) + (26 * $soldier) + (40000 * $sergeant) + (20000 * $gendef);
		if($worker < 0 || $farmer < 0 || $enfieldman < 0 || $gunner < 0 || $tfarmer < 0 || $fisherman < 0 || $soldier < 0 || $sergeant < 0 || $gendef < 0){
		echo $lang['YOU_MUST_UNTRAIN_POSITIVE_UNITS'];
		}elseif($worker > $unit['worker'] || $farmer > $unit['farmer'] ||
				$enfieldman > $unit['enfieldman'] || $gunner > $unit['gunner'] ||
				$tfarmer > $unit['tfarmer'] || $fisherman > $unit['fisherman'] ||
				$soldier > $unit['soldier'] || $sergeant > $unit['sergeant'] ||
				$gendef > $unit['gendef']){
			echo $lang['YOU_DONT_HAVE_UNITS_FOR_UNTRAIN'];
		}else{
			$unit['worker'] -= $worker;
			$unit['farmer'] -= $farmer;
			$unit['enfieldman'] -= $enfieldman;
			$unit['gunner'] -= $gunner;
			$unit['tfarmer'] -= $tfarmer;
			$unit['fisherman'] -= $fisherman;
			$unit['soldier'] -= $soldier;
      $unit['sergeant'] -= $sergeant;
			$unit['gendef'] -= $gendef;
			
			$update_unit = mysqli_query($con,"UPDATE `unit` SET
										`worker`='".$unit['worker']."',
										`farmer`='".$unit['farmer']."',
										`enfieldman`='".$unit['enfieldman']."',
										`gunner`='".$unit['gunner']."',
										`tfarmer`='".$unit['tfarmer']."',
										`fisherman`='".$unit['fisherman']."',
										`soldier`='".$unit['soldier']."',
                    `sergeant`='".$unit['sergeant']."',
										`gendef`='".$unit['gendef']."'
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
	?><hr>
	<center><h2><?php echo $lang['TRAIN_UNITS']; ?></h2></hr></center>
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
			<td>(<?php echo $can1; ?>)ks</td>
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
			<td>(<?php echo $can2; ?>)ks</td>
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
				<td>(<?php echo $can5; ?>)ks</td>
				<?php
				}
				?>
			</tr>
		<tr>
			<td><a href="faq/rifleman.php"><img src="images/enfieldman.png"></a></td>
			<td><?php echo $lang['RIFLEMAN']; ?></td>
			<td><?php echo number_format($unit['enfieldman']); ?></td>
			<td><center>20 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="enfieldman"></td>
			<?php
			if($can3 > 0){
			?>
			<td>(<?php echo $can3; ?>)ks</td>
			<?php
			}
			?>
			<td><img src="images/enfield.png" title="Enfield"><img src="images/delisle.png" title="Delisle CC"></td>
		</tr>
		<tr>
			<td><a href="faq/machinegunner.php"><img src="images/gunner.png"></a></td>
			<td><?php echo $lang['MACHINEGUNNER']; ?></td>
			<td><?php echo number_format($unit['gunner']); ?></td>
			<td><center>25 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="gunner"></td>
			<?php
			if($can4 > 0){
			?>
			<td>(<?php echo $can4; ?>)ks</td>
			<?php
			}
			?>
			<td><img src="images/bren.png" title="Bren"><img src="images/vickers.png" title="Vickers"><img src="images/lewis.png" title="Lewis"></td>
		</tr>
		<tr>
			<td><a href="faq/soldier.php"><img src="images/soldier.png"></a></td>
			<td><?php echo $lang['SOLDIER']; ?></td>
			<td><?php echo number_format($unit['soldier']); ?></td>
			<td><center>30 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="soldier"></td>
			<?php
			if($can8 > 0){
			?>
			<td>(<?php echo $can8; ?>)ks</td>
			<?php
			}
			?>
			<td><img src="images/sten.png" title="Sten"><img src="images/bar.png" title="BAR"></td>
		</tr>
    
    <tr>
			<td><a href="faq/sergeant.php"><img src="images/sergeant.png"></a></td>
			<td><?php echo $lang['SERGEANT']; ?></td>
			<td><?php echo number_format($unit['sergeant']); ?></td>
			<td><center>100000 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="sergeant"></td>
			<?php
			if($can6 > 0){
			?>
			<td>(<?php echo $can6; ?>)ks</td>
			<?php
			}
			?>
      <td></td>
      
		</tr>
    <tr>
			<td><a href="faq/general.php"><img src="images/gendef.png"></a></td>
			<td><?php echo $lang['GENERAL']; ?></td>
			<td><?php echo number_format($unit['gendef']); ?></td>
			<td><center>50000 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="gendef"></td>
				<?php
			if($can7 > 0){
			?>
			<td>(<?php echo $can7; ?>)ks</td>
			<?php
			}
			?>
		</tr>


	
		
		
			
		
	</table>
 <center><button type="submit" name="train" class="btn btn-success"><?php echo $lang['TRAIN']; ?>!</button></center>
	</form>
	<hr />
  <center><h2><?php echo $lang['UNTRAIN_UNITS']; ?></h2> <hr></center><br />
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
				<td>Rybár</td>
				<td><?php echo number_format($unit['fisherman']); ?></td>
				<td><center>12<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
				<td><input type="text" name="fisherman"></td>
			</tr>
		<tr>
			<td><a href="faq/rifleman.php"><img src="images/enfieldman.png"></a></td>
			<td><?php echo $lang['RIFLEMAN']; ?></td>
			<td><?php echo number_format($unit['enfieldman']); ?></td>
			<td><center>8<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="enfieldman"></td>
		</tr>
		<tr>
			<td><a href="faq/machinegunner.php"><img src="images/gunner.png"></a></td>
			<td><?php echo $lang['MACHINEGUNNER']; ?></td>
			<td><?php echo number_format($unit['gunner']); ?></td>
			<td><center>10<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="gunner"></td>
		</tr>
		<tr>
			<td><a href="faq/soldier.php"><img src="images/soldier.png"></a></td>
			<td><?php echo $lang['SOLDIER']; ?></td>
			<td><?php echo number_format($unit['soldier']); ?></td>
			<td><center>12<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="soldier"></td><td>
		</tr>
		
		
    <tr>
			<td><a href="faq/sergeant.php"><img src="images/sergeant.png"></a></td>
			<td><?php echo $lang['SERGEANT']; ?></td>
			<td><?php echo number_format($unit['sergeant']); ?></td>
			<td><center>40000<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="sergeant"></td>
		</tr>
    <tr>
			<td><a href="faq/general.php"><img src="images/gendef.png"></a></td>
			<td><?php echo $lang['GENERAL']; ?></td>
			<td><?php echo number_format($unit['gendef']); ?></td>
			<td><center>20000<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="gendef"></td>
		</tr>
		
		
		
	</table>  
<center><button type="submit" name="untrain" class="btn btn-danger"><?php echo $lang['UNTRAIN']; ?>!</button></center>
	</form>