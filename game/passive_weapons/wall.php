
<tr>
<td class="text-left">Úroveň opevnenia<img src="images/wall.png" width=32px height=32px title="+ <?php echo $stats['wdefense']; ?> Defense"></td>
<td><i><?php echo $stats['wall']; ?></i></td>
			<form action="main.php" method="post">
				<td><button type="submit" class="btn btn-danger" name="wall"  (<?php echo $stats['wcost']; ?> Zlata)" >Vylepšiť</button</td>
			</form></td>
</tr>
<?php
  	if ($stats['gold'] >= $stats['wcost']){
			$stats['gold'] -= $stats['wcost'];
			$stats['wdefense'] += 125 * $stats['wall'] + 500;
			$stats['wall'] += 1;
			$stats['wcost'] += 250;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."',`wdefense`='".$stats['wdefense']."',`wall`='".$stats['wall']."',`wcost`='".$stats['wcost']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
      echo ('Vylepšil si svoju obrannú stenu o ďalší level!') ;
		}else{
			echo ("Nemáš dostatok zlata!");
			$rp = 0;
		}
?>