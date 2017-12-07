<?php
    if ($stats['quest'] == 1){ $stats['food'] += 100; $stats['gold'] += 100; }
		if ($stats['quest'] == 2){ $stats['food'] += 150; $stats['gold'] += 150;}
		if ($stats['quest'] == 3){ $stats['food'] += 250; $stats['gold'] += 250; }
		if ($stats['quest'] == 4){ $stats['food'] += 400; $stats['gold'] += 400; $stats['diamonds'] += 100; }
		if ($stats['quest'] == 5){ $stats['food'] += 550; $stats['gold'] += 550; }
		if ($stats['quest'] == 6){ $stats['food'] += 675; $stats['gold'] += 675; }
		if ($stats['quest'] == 7){ $stats['food'] += 800; $stats['gold'] += 800; }
		if ($stats['quest'] == 8){ $stats['food'] += 1000; $stats['gold'] += 1000; }
		if ($stats['quest'] == 9){ $stats['food'] += 1200; $stats['gold'] += 1200; }
		if ($stats['quest'] == 10){ $stats['food'] += 1500; $stats['gold'] += 1500; }
		if ($stats['quest'] == 11){ $stats['food'] += 1800; $stats['gold'] += 1800; }
		if ($stats['quest'] == 12){ $stats['food'] += 2000; $stats['gold'] += 2000;}
		if ($stats['quest'] == 13){ $stats['food'] += 2300; $stats['gold'] += 2300; }
		if ($stats['quest'] == 14){ $stats['food'] += 2800; $stats['gold'] += 2800; }
		if ($stats['quest'] == 15){ $stats['food'] += 3500; $stats['gold'] += 3500;}
		if ($stats['quest'] == 16){ $stats['food'] += 4000; $stats['gold'] += 4000;}
		if ($stats['quest'] == 17){ $stats['food'] += 4300; $stats['gold'] += 4300; }
		if ($stats['quest'] == 18){ $stats['food'] += 5000; $stats['gold'] += 5000; }
		if ($stats['quest'] == 19){ $stats['food'] += 5800; $stats['gold'] += 5800; }
		if ($stats['quest'] == 20){ $stats['food'] += 6500; $stats['gold'] += 6500; }
		if ($stats['quest'] == 21){ $stats['food'] += 8000; $stats['gold'] += 8000;}
		if ($stats['quest'] == 22){ $stats['food'] += 9000; $stats['gold'] += 9000;}
		if ($stats['quest'] == 23){ $stats['food'] += 10000; $stats['gold'] += 10000;}
		if ($stats['quest'] == 24){ $stats['food'] += 15000; $stats['gold'] += 15000; }
		if ($stats['quest'] == 25){ $stats['food'] += 16000; $stats['gold'] += 16000; }
		if ($stats['quest'] == 26){ $stats['food'] += 17000; $stats['gold'] += 17000; }
		if ($stats['quest'] == 27){ $stats['food'] += 18000; $stats['gold'] += 18000; }
		if ($stats['quest'] == 28){ $stats['food'] += 19000; $stats['gold'] += 19000; }
		if ($stats['quest'] == 29){ $stats['food'] += 20000; $stats['gold'] += 20000; }
		if ($stats['quest'] == 30){ $stats['food'] += 25000; $stats['gold'] += 25000;}
		if ($stats['quest'] == 31){ $stats['diamonds'] += 2500; }
		if ($stats['quest'] == 32){ $stats['diamonds'] += 5000; $stats['gold'] += 100000; }
		$stats['quest'] += 1;
		$stats['qok'] = 0;
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`battery`='".$stats['battery']."',`gold`='".$stats['gold']."',`diamonds`='".$stats['diamonds']."',`quest`='".$stats['quest']."',`qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	
?>