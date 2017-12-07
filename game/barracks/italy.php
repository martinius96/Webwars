<?php
	if(isset ($_POST ['train'])){
			$worker = mysqli_real_escape_string($con, $_POST ['worker']);
    $worker = htmlspecialchars( $worker );
    $worker = trim( $worker );
		$farmer = mysqli_real_escape_string($con, $_POST ['farmer']);
    $farmer = htmlspecialchars( $farmer );
    $farmer = trim( $farmer );
		$tiratore = mysqli_real_escape_string($con, $_POST ['tiratore']);
    $tiratore = htmlspecialchars( $tiratore );
    $tiratore = trim( $tiratore );
		$artigliere = mysqli_real_escape_string($con, $_POST ['artigliere']);
    $artigliere = htmlspecialchars( $artigliere );
    $artigliere = trim( $artigliere );
		$soldato = mysqli_real_escape_string($con, $_POST ['soldato']);
    $soldato = htmlspecialchars( $soldato );
    $soldato = trim( $soldato );
    $sergente = mysqli_real_escape_string($con, $_POST ['sergente']);
    $sergente = htmlspecialchars( $sergente );
    $sergente = trim( $sergente );
		$generale = mysqli_real_escape_string($con, $_POST ['generale']);
    $generale = htmlspecialchars( $generale );
    $generale = trim( $generale );  
		if(isset ($_POST ['fisherman'])){
			$fisherman = mysqli_real_escape_string($con, $_POST ['fisherman']);
      $fisherman = htmlspecialchars( $fisherman );
    $fisherman = trim( $fisherman );
		}else{
			$fisherman = 0;
		} 
		$food_needed = (10 * $farmer) + (15 * $worker) + (20 * $tiratore) + (25 * $artigliere) + (50000 * $generale) + (30 * $fisherman)  + (100000 * $sergente) + (30 * $soldato);
		if($worker < 0 || $farmer < 0 || $tiratore < 0 || $artigliere < 0 || $generale < 0 || $fisherman < 0 || $soldato < 0 || $sergente < 0){
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
			$unit['tiratore'] += $tiratore;
			$unit['artigliere'] += $artigliere;
			$unit['generale'] += $generale;
			$unit['fisherman'] += $fisherman;
			$unit['soldato'] += $soldato;
      $unit['sergente'] += $sergente;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_unit = mysqli_query($con,"UPDATE `unit` SET
										`worker`='".$unit['worker']."',
										`farmer`='".$unit['farmer']."',
										`tiratore`='".$unit['tiratore']."',
										`artigliere`='".$unit['artigliere']."',
										`tfarmer`='".$unit['tfarmer']."',
										`generale`='".$unit['generale']."',
										`fisherman`='".$unit['fisherman']."',
										`soldato`='".$unit['soldato']."',
                    `sergente`='".$unit['sergente']."'										
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
		$tiratore = mysqli_real_escape_string($con, $_POST ['tiratore']);
    $tiratore = htmlspecialchars( $tiratore );
    $tiratore = trim( $tiratore );
		$artigliere = mysqli_real_escape_string($con, $_POST ['artigliere']);
    $artigliere = htmlspecialchars( $artigliere );
    $artigliere = trim( $artigliere );
		$soldato = mysqli_real_escape_string($con, $_POST ['soldato']);
    $soldato = htmlspecialchars( $soldato );
    $soldato = trim( $soldato );
    $sergente = mysqli_real_escape_string($con, $_POST ['sergente']);
    $sergente = htmlspecialchars( $sergente );
    $sergente = trim( $sergente );
		$generale = mysqli_real_escape_string($con, $_POST ['generale']);
    $generale = htmlspecialchars( $generale );
    $generale = trim( $generale ); 
    $tfarmer = mysqli_real_escape_string($con, $_POST ['$tfarmer']);
    $tfarmer = htmlspecialchars( $tfarmer );
    $tfarmer = trim( $tfarmer );   
		if(isset ($_POST ['fisherman'])){
			$fisherman = mysqli_real_escape_string($con, $_POST ['fisherman']);
      $fisherman = htmlspecialchars( $fisherman );
    $fisherman = trim( $fisherman );
		}else{
			$fisherman = 0;
		}
		$food_gained = (8 * $farmer) + (11 * $worker) + (15 * $tiratore) + (19 * $artigliere) + (80 * $tfarmer) + (23 * $fisherman) + (26 * $soldato) + (23 * $sergente) + (26 * $generale);
		if($worker < 0 || $farmer < 0 || $tiratore < 0 || $artigliere < 0 || $tfarmer < 0 || $fisherman < 0 || $soldato < 0 || $sergente < 0 || $generale < 0){
		echo $lang['YOU_MUST_UNTRAIN_POSITIVE_UNITS'];
		}elseif($worker > $unit['worker'] || $farmer > $unit['farmer'] ||
				$tiratore > $unit['tiratore'] || $artigliere > $unit['artigliere'] ||
				$tfarmer > $unit['tfarmer'] || $fisherman > $unit['fisherman'] ||
				$soldato > $unit['soldato'] || $sergente > $unit['sergente'] ||
				$generale > $unit['generale']){
		echo $lang['YOU_DONT_HAVE_UNITS_FOR_UNTRAIN'];
		}else{
			$unit['worker'] -= $worker;
			$unit['farmer'] -= $farmer;
			$unit['tiratore'] -= $tiratore;
			$unit['artigliere'] -= $artigliere;
			$unit['tfarmer'] -= $tfarmer;
			$unit['fisherman'] -= $fisherman;
			$unit['soldato'] -= $soldato;
      $unit['sergente'] -= $sergente;
			$unit['generale'] -= $generale;
			
			$update_unit = mysqli_query($con,"UPDATE `unit` SET
										`worker`='".$unit['worker']."',
										`farmer`='".$unit['farmer']."',
										`tiratore`='".$unit['tiratore']."',
										`artigliere`='".$unit['artigliere']."',
										`tfarmer`='".$unit['tfarmer']."',
										`fisherman`='".$unit['fisherman']."',
										`soldato`='".$unit['soldato']."',
                    `sergente`='".$unit['sergente']."',
										`generale`='".$unit['generale']."'
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
	?>      <hr>
	<center><h2><?php echo $lang['TRAIN_UNITS']; ?></h2>   <hr>
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
			<td><a href="faq/rifleman.php"><img src="images/tiratore.png"></a></td>
			<td><?php echo $lang['RIFLEMAN']; ?></td>
			<td><?php echo number_format($unit['tiratore']); ?></td>
			<td><center>20 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="tiratore"></td>
			<?php
			if($can3 > 0){
			?>
			<td>(<?php echo $can3; ?>)<?php echo $lang['PIECES']; ?></td>
			<?php
			}
			?>
			<td><img src="images/kar98.png" title="KAR 98"><img src="images/carcano.png" title="Carcano"><img src="images/fucile.png" title="Fucile"></td>
		</tr>
		<tr>
			<td><a href="faq/machinegunner.php"><img src="images/artigliere.png"></a></td>
			<td><?php echo $lang['MACHINEGUNNER']; ?></td>
			<td><?php echo number_format($unit['artigliere']); ?></td>
			<td><center>25 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="artigliere"></td>
			<?php
			if($can4 > 0){
			?>
			<td>(<?php echo $can4; ?>)<?php echo $lang['PIECES']; ?></td>
			<?php
			}
			?>
			<td><img src="images/breda.png" title="Breda 30"></td>
		</tr>
		<tr>
			<td><a href="faq/soldier.php"><img src="images/soldato.png"></a></td>
			<td><?php echo $lang['SOLDIER']; ?></td>
			<td><?php echo number_format($unit['soldato']); ?></td>
			<td><center>30 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="soldato"></td>
			<?php
			if($can8 > 0){
			?>
			<td>(<?php echo $can8; ?>)<?php echo $lang['PIECES']; ?></td>
			<?php
			}
			?>
			<td><img src="images/ovp.png" title="OVP"><img src="images/baretta.png" title="Beretta M1918"></td>
		</tr>
    
    <tr>
			<td><a href="faq/sergeant.php"><img src="images/sergente.png"></a></td>
			<td><?php echo $lang['SERGEANT']; ?></td>
			<td><?php echo number_format($unit['sergente']); ?></td>
			<td><center>3000 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="sergente"></td>
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
			<td><a href="faq/general.php"><img src="images/generale.png"></a></td>
			<td><?php echo $lang['GENERAL']; ?></td>
			<td><?php echo number_format($unit['generale']); ?></td>
			<td><center>2500 <img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="generale"></td>
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
	<table width="100%"cellpadding="2" cellspacing="4">
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
			<td><a href="faq/rifleman.php"><img src="images/tiratore.png"></a></td>
			<td><?php echo $lang['RIFLEMAN']; ?></td>
			<td><?php echo number_format($unit['tiratore']); ?></td>
			<td><center>8<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="tiratore"></td>
		</tr>
		<tr>
			<td><a href="faq/machinegunner.php"><img src="images/artigliere.png"></a></td>
			<td><?php echo $lang['MACHINEGUNNER']; ?></td>
			<td><?php echo number_format($unit['artigliere']); ?></td>
			<td><center>10<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="artigliere"></td>
		</tr>
		<tr>
			<td><a href="faq/soldier.php"><img src="images/soldato.png"></a></td>
			<td><?php echo $lang['SOLDIER']; ?></td>
			<td><?php echo number_format($unit['soldato']); ?></td>
			<td><center>12<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="soldato"></td><td>
		</tr>
				
    <tr>
			<td><a href="faq/sergeant.php"><img src="images/sergente.png"></a></td>
			<td><?php echo $lang['SERGEANT']; ?></td>
			<td><?php echo number_format($unit['sergente']); ?></td>
			<td><center>40000<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="sergente"></td>
		</tr>
    <tr>
			<td><a href="faq/general.php"><img src="images/generale.png"></a></td>
			<td><?php echo $lang['GENERAL']; ?></td>
			<td><?php echo number_format($unit['generale']); ?></td>
			<td><center>20000<img src="images/food.png" title="<?php echo $lang['FOOD']; ?>" width=32px height=32px></center></td>
			<td><input type="text" name="generale"></td>
		</tr>
		
		
		
	</table>  
<center><button type="submit" name="untrain" class="btn btn-danger"><?php echo $lang['UNTRAIN']; ?>!</button></center>
	</form>