<tr>
<td class="text-left">Úroveň artilérie<img src="images/cannon.png" width=32px height=32px title="+ <?php echo $stats['cattack']; ?> Attack"></td>
<td class="text-left"><?php echo $stats['cannon']; ?></td>
			<form action="main.php" method="post">
				<td><button type="submit" name="cannon" class="btn btn-danger"  (<?php echo $stats['ccost']; ?> Zlata)">Vylepšiť</button</td>
			</form></td>
</tr>

<?php
  	if ($stats['gold'] >= $stats['ccost']){
			$stats['gold'] -= $stats['ccost'];
			$stats['cattack'] += 125 * $stats['cannon'] + 500;
			$stats['cannon'] += 1;
			$stats['ccost'] += 250;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."',`cattack`='".$stats['cattack']."',`cannon`='".$stats['cannon']."',`ccost`='".$stats['ccost']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
      echo ('Vylepšil si svoju artilériu o ďalší level!') ;
		}else{
			echo ("Nemáš dostatok zlata!");
			$rp = 0;
		}
?>