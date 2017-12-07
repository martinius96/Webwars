<!DOCTYPE html>
<?php
 include("../global/functions.php");
 session_start();
 include("../global/safe.php");
include("../common.php"); 
  ?>
<html lang="<?php echo $lang['HTML_LANG']; ?>">
<head>
    <meta charset="utf-8">
    <title>Prehľad</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="css/style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="css/style.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arimo&amp;subset=latin">

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script.responsive.js"></script>

     <style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>
        
</head>
<body>

<div id="art-main">
<nav class="art-nav">
    <ul class="art-hmenu">
    </ul> 
    </nav>
<header class="art-header">


    <div class="art-shapes">
<div class="art-object612514434" data-left="100%"></div>

            </div>
<h1 class="art-headline" data-left="99.74%">
    <a href="main.php"><font color=#48984>Web Wars - <?php echo $lang['PLAY_ONLINE_FOR_FREE'];?></font></a>
</h1>




                        
                    
</header>
 
<div class="art-sheet clearfix">
<font color=red> <strong><img src="images/food.png" alt="food.png, 1,9kB" title="Food" height="32" width="32"><?php echo $stats['food']; ?> |<img src="images/gold.png" alt="gold.png, 1,9kB" title="Gold" height="32" width="32"><?php echo $stats['gold']; ?> |<a href="shop.php"><img src="images/diamond.png" alt="diamond.png, 1,9kB" title="Diamond" height="32" width="32"></a><?php echo $stats['diamonds'];?> |<?php 			if($stats['battery'] == 0){?>
<img src="images/battery4.png"> <?php
			}elseif($stats['battery'] <= 34){?>
<img src="images/battery3.png"> <?php
			}elseif($stats['battery'] <= 67){?>
<img src="images/battery2.png"><?php
			}elseif($stats['battery'] <= 100){?>
<img src="images/battery1.png"><?php
			}elseif($stats['battery'] <= 125){?>
<img src="images/battery1.png"> <?php
			}
			echo $stats['battery'] ?>% |<?php include("../global/battery.php"); ?></strong></font> 
       <a href="?lang=sk"><img src="../images/lang/slovakia.png" alt="Slovakia flag.png, 5,5kB" title="Slovakia" height="32" width="32"></a>
       <a href="?lang=en"><img src="../images/lang/britain.png" alt="britain.png, 2,2kB" title="Britain" height="32" width="32"></a>
       <a href="?lang=de"><img src="../images/lang/germany.png" alt="germany.png, 3,5kB" title="Germany" height="32" width="32"></a>
       <a href="?lang=ru"><img src="../images/lang/russia.png" alt="russia.png, 4,6kB" title="Russia" height="32" width="32"></a>
       <a href="?lang=cz"><img src="../images/lang/czech.png" alt="czech.png, 2,0kB" title="Czech" height="32" width="32"></a>
       <a href="?lang=it"><img src="../images/lang/italy.png" alt="italy.png, 739B" title="Italy" height="32" width="32"></a>
      
    <a  href="minigame.php"><img src="images/rps.png" alt="RPS GAME" title="RPS GAME" height="32" width="32" align="right"></a>  <a href="chat.php"><img src="images/chat_icon.png" alt="chat_icon.png, 4,7kB" title="CHAT" height="32" width="32" align="right"></a>    
      
       
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockcontent">
<ul class="art-vmenu">
<?php echo $lang['MENU_FACTORY.PHP'];?>
</ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockcontent"><p><br></p></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
<?php
if(!isset($_SESSION['uid'])){
	echo "Musíš sa prihlásiť!";
}else{
if($user['fraction'] == 0){      // USA
	if(isset ($_POST ['buy'])){
		$springfield = mysqli_real_escape_string($con, $_POST ['springfield']);
    $springfield = htmlspecialchars( $springfield );
    $m1garand = mysqli_real_escape_string($con, $_POST ['m1garand']);
    $m1garand = htmlspecialchars( $m1garand );
    $thompson = mysqli_real_escape_string($con, $_POST ['thompson']);
    $thompson = htmlspecialchars( $thompson );
		$browning = mysqli_real_escape_string($con, $_POST ['browning']);
    $browning = htmlspecialchars( $browning );
    $m1a1 = mysqli_real_escape_string($con, $_POST ['m1a1']);
    $m1a1= htmlspecialchars( $m1a1 );
    $sherman = mysqli_real_escape_string($con, $_POST ['sherman']);
    $sherman = htmlspecialchars( $sherman );
    $hellcat = mysqli_real_escape_string($con, $_POST ['hellcat']);
    $hellcat = htmlspecialchars( $hellcat );
    $pershing = mysqli_real_escape_string($con, $_POST ['pershing']);
    $pershing = htmlspecialchars( $pershing );
    $howitzer = mysqli_real_escape_string($con, $_POST ['howitzer']);
		$gold_needed = (10 * $springfield) + (15 * $m1garand) + (40 * $thompson) + (160 * $browning) + (400 * $sherman) + (800 * $hellcat) + (1200 * $pershing) + (20 * $m1a1) + (200 * $howitzer);
		
		if($springfield < 0 || $m1garand < 0 || $thompson < 0 || $browning < 0 || $sherman < 0 || $hellcat < 0 || $pershing < 0 || $m1a1 < 0 || $howitzer < 0){
			echo("Musíš si kúpiť kladný počet!");
		}elseif($stats['gold'] < $gold_needed){
			echo("Nemáš dostatok zlata!");
		}else{
			$weapon['springfield'] += $springfield;
			$weapon['m1garand'] += $m1garand;
      $weapon['thompson'] += $thompson;
      $weapon['browning'] += $browning;
      $weapon['sherman'] += $sherman;
      $weapon['hellcat'] += $hellcat;
      $weapon['pershing'] += $pershing;
			$weapon['m1a1'] += $m1a1;
      $weapon['howitzer'] += $howitzer;
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`springfield`='".$weapon['springfield']."',
										`m1garand`='".$weapon['m1garand']."',
                    `thompson`='".$weapon['thompson']."',
                    `browning`='".$weapon['browning']."',
                    `sherman`='".$weapon['sherman']."',
                    `hellcat`='".$weapon['hellcat']."',
                    `pershing`='".$weapon['pershing']."',
                    `m1a1`='".$weapon['m1a1']."',
                    `howitzer`='".$weapon['howitzer']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] -= $gold_needed;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Zakúpil si nové zbrane/tanky!");
		}
	}elseif(isset ($_POST ['sell'])){
		$springfield = mysqli_real_escape_string($con, $_POST['springfield']);
    $springfield = htmlspecialchars( $springfield );
		$m1garand = mysqli_real_escape_string($con, $_POST['m1garand']);
    $m1garand = htmlspecialchars( $m1garand );
		$thompson = mysqli_real_escape_string($con, $_POST['thompson']);
    $thompson = htmlspecialchars( $thompson );
    $browning = mysqli_real_escape_string($con, $_POST['browning']);
    $browning = htmlspecialchars( $browning );
    $sherman = mysqli_real_escape_string($con, $_POST['sherman']);
    $sherman = htmlspecialchars( $sherman );
    $hellcat = mysqli_real_escape_string($con, $_POST['hellcat']);
    $hellcat = htmlspecialchars( $hellcat );
    $pershing = mysqli_real_escape_string($con, $_POST['pershing']);
    $pershing = htmlspecialchars( $pershing );
    $m1a1 = mysqli_real_escape_string($con, $_POST['m1a1']);
    $m1a1 = htmlspecialchars( $m1a1 );
    $howitzer = mysqli_real_escape_string($con, $_POST['howitzer']);
    $howitzer = htmlspecialchars( $howitzer );
		$gold_gained = (4 * $springfield) + (6 * $m1garand) + (16 * $thompson)  + (64 * $browning)  + (160 * $sherman)  + (320 * $hellcat) + (480 * $pershing) + (8 * $m1a1) + (80 * $howitzer);
		
		if($springfield < 0 || $m1garand < 0 || $thompson < 0 || $browning < 0 || $sherman < 0 || $hellcat < 0 || $pershing < 0 || $m1a1 < 0 || $howitzer < 0){
			echo("Musíš predať pozitívný počet predmetov!");
		}elseif($springfield > $weapon['springfield'] || $m1garand > $weapon['m1garand'] || $thompson > $weapon['thompson'] || $browning > $weapon['browning'] || $sherman > $weapon['sherman'] || $hellcat > $weapon['hellcat'] || $pershing > $weapon['pershing'] || $m1a1 > $weapon['m1a1'] || $howitzer > $weapon['howitzer']){
			echo("Nemáš dostatok predmetov na predaj!");
		}else{
			$weapon['springfield'] -= $springfield;       //10
			$weapon['m1garand'] -= $m1garand;            //15
			$weapon['thompson'] -= $thompson;           //40
      $weapon['browning'] -= $browning;           //160
      $weapon['sherman'] -= $sherman;            //400
      $weapon['hellcat'] -= $hellcat;            //600
			$weapon['pershing'] -= $pershing;           //1200
      $weapon['m1a1'] -= $m1a1;                 //20
      $weapon['howitzer'] -= $howitzer;          //180
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`springfield`='".$weapon['springfield']."',
										`m1garand`='".$weapon['m1garand']."',
										`thompson`='".$weapon['thompson']."',
                    `browning`='".$weapon['browning']."',
                    `sherman`='".$weapon['sherman']."',
                    `hellcat`='".$weapon['hellcat']."',
                    `pershing`='".$weapon['pershing']."',
                    `m1a1`='".$weapon['m1a1']."',
                    `howitzer`='".$weapon['howitzer']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] += $gold_gained;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Predal si svoje predmety!");
		}
	}
  include("weapons/can_usa.php");

	?> <hr>
	<center><h2><?php echo $lang['FACTORY_BUY'];?></h2></center><hr>
	<br />
	 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	<table style="width:100%;"  cellpadding="2" cellspacing="8">
		<tr>
			<td>Avatar</td>
			<td><b><?php echo $lang['UNIT'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['PRICE'];?></b></td>
			<td><b><?php echo $lang['MAKE'];?></b></td>
      <td><b><?php echo $lang['YOU_CAN_MAKE'];?></b></td>
      <td><b><?php echo $lang['CLASS'];?></b></td>
      <td><b>DMG</b></td>
		</tr>
		
    <tr>
			<td><img src="images/springfield.png" title="Springfield"></td>
			<td><img src="images/rifleman.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['springfield']); ?></td>
			<td>10  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="springfield"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td>Pušky</td>
      <td>10</td>
		</tr>
		<tr>
			<td><img src="images/m1garand.png" title="M1 Garand"></td>
			<td><img src="images/rifleman.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['m1garand']); ?></td>
			<td>15  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="m1garand"></td>
			<?php
			if($can2 > 0){
			?>
			<td>(<?php echo $can2; ?>)</td>
			<?php
			}
			?>
      <td>Pušky</td>
      <td>15</td>
		</tr>
    <tr>
			<td><img src="images/m1a1.png" title="M1A1 Carbine"</td>
			<td><img src="images/rifleman.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['m1a1']); ?></td>
			<td>20  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="m1a1"></td>
			<?php
			if($can8 > 0){
			?>
			<td>(<?php echo $can8; ?>)</td>
			<?php
			}
			?>
      <td>Pušky</td>
      <td>20</td>
		</tr>
    <tr>      
			<td><img src="images/thompson.png" title="Thompson"></td>
			<td><img src="images/soldier.png" title="<?php echo $lang['SOLDIER']; ?>"></td>
			<td><?php echo number_format($weapon['thompson']); ?></td>
			<td>40  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="thompson"></td>
			<?php
			if($can3 > 0){
			?>
			<td>(<?php echo $can3; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['SMG'];?>y</td>
      <td>200</td>
		</tr>
    <tr>
			<td><img src="images/browning.png" title="Browning"></td>
			<td><img src="images/machinegunner.png" title="<?php echo $lang['MACHINEGUNNER']; ?>"></td>
			<td><?php echo number_format($weapon['browning']); ?></td>
			<td>160  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="browning"></td>
			<?php
			if($can4 > 0){
			?>
			<td>(<?php echo $can4; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS']; ?></td>
      <td>650</td>
		</tr>
    <tr>
			<td><img src="images/howitzer.png"></td>
			<td>105mm Howitzer</td>
			<td><?php echo number_format($weapon['howitzer']); ?></td>
			<td>180  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="howitzer"></td>
			<?php
			if($can9 > 0){
			?>
			<td>(<?php echo $can9; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['HOUF'];?></td>
      <td>800</td>
		</tr>
    <tr>
			<td><img src="images/sherman.png"</td>
			<td>Sherman</td>
			<td><?php echo number_format($weapon['sherman']); ?></td>
			<td>400  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="sherman"></td>
			<?php
			if($can5 > 0){
			?>
			<td>(<?php echo $can5; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MT']; ?></td>
      <td>1000</td>
		</tr>
    <tr>
			<td><img src="images/hellcat.png"</td>
			<td>Hellcat</td>
			<td><?php echo number_format($weapon['hellcat']); ?></td>
			<td>800  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="hellcat"></td>
			<?php
			if($can6 > 0){
			?>
			<td>(<?php echo $can6; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['TD']; ?></td>
      <td>2000</td>
		</tr>
    <tr>
			<td><img src="images/pershing.png"</td>
			<td>M26 Pershing</td>
			<td><?php echo number_format($weapon['pershing']); ?></td>
			<td>1200  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="pershing"></td>
			<?php
			if($can7 > 0){
			?>
			<td>(<?php echo $can7; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['HT']; ?></td>
      <td>3000</td>
		</tr>
    
		
	</table>
  <center><button type="submit" name="buy" class="btn btn-success"><?php echo $lang['BUY'];?></button></center> 
	</form>
 
	<hr />
  <center><h2><?php echo $lang['FACTORY_SELL'];?></h2></center> <hr>
	 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	<table style="width:100%;"  cellpadding="2" cellspacing="4">
		<tr>
			<td></td>
			<td><b>Predmet</b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['OFFER'];?></b></td>
			<td><b><?php echo $lang['SELL'];?></b></td>
		</tr>
		<tr>
			<td><img src="images/springfield.png"></td>
			<td>Springfield</td>
			<td><?php echo number_format($weapon['springfield']); ?></td>
			<td>4  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="springfield"></td>
		</tr>
		<tr>
			<td><img src="images/m1garand.png"></td>
			<td>M1 Garand</td>
			<td><?php echo number_format($weapon['m1garand']); ?></td>
			<td>6  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="m1garand"></td>
		</tr>
    <tr>
			<td><img src="images/m1a1.png"></td>
			<td>M1A1 Carbine</td>
			<td><?php echo number_format($weapon['m1a1']); ?></td>
			<td>8  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="m1a1"></td>
		</tr>
		<tr>
			<td><img src="images/thompson.png"></td>
			<td>Thompson</td>
			<td><?php echo number_format($weapon['thompson']); ?></td>
			<td>16  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="thompson"></td>
		</tr>
    <tr>
			<td><img src="images/browning.png"></td>
			<td>Browning</td>
			<td><?php echo number_format($weapon['browning']); ?></td>
			<td>64  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="browning"></td>
		</tr>
    <tr>
			<td><img src="images/howitzer.png"></td>
			<td>105mm Howitzer</td>
			<td><?php echo number_format($weapon['howitzer']); ?></td>
			<td>80  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="howitzer"></td>
		</tr>
    <tr>
			<td><img src="images/sherman.png"></td>
			<td>Sherman</td>
			<td><?php echo number_format($weapon['sherman']); ?></td>
			<td>160  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="sherman"></td>
		</tr>
    <tr>
			<td><img src="images/hellcat.png"></td>
			<td>Hellcat</td>
			<td><?php echo number_format($weapon['hellcat']); ?></td>
			<td>320  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="hellcat"></td>
		</tr>
    <tr>
			<td><img src="images/pershing.png"></td>
			<td>M26 Pershing</td>
			<td><?php echo number_format($weapon['pershing']); ?></td>
			<td>480  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="pershing"></td>
		</tr>
	
	</table>
	<center><button type="submit" name="sell" class="btn btn-danger"><?php echo $lang['SELL'];?></button></center>
  </form>
  
 
<?php
}



















if($user['fraction'] == 1){      // NEMECKO
	if(isset ($_POST ['buy'])){
		$kar98 = mysqli_real_escape_string($con, $_POST ['kar98']);
    $kar98 = htmlspecialchars( $kar98 );
    $gw43 = mysqli_real_escape_string($con, $_POST ['gw43']);
    $gw43 = htmlspecialchars( $gw43 );
    $mp40 = mysqli_real_escape_string($con, $_POST ['mp40']);
    $mp40 = htmlspecialchars( $mp40 );
		$mp44 = mysqli_real_escape_string($con, $_POST ['mp44']);
    $mp44 = htmlspecialchars( $mp44 );
    $mg42 = mysqli_real_escape_string($con, $_POST ['mg42']);
    $mg42 = htmlspecialchars( $mg42 );
    $tiger = mysqli_real_escape_string($con, $_POST ['tiger']);
    $tiger = htmlspecialchars( $tiger );
    $stugv = mysqli_real_escape_string($con, $_POST ['stugv']);
    $stugv = htmlspecialchars( $stugv );
    $tiger2 = mysqli_real_escape_string($con, $_POST ['tiger2']);
    $tiger2 = htmlspecialchars( $tiger2 );
    $panzerstellung = mysqli_real_escape_string($con, $_POST ['panzerstellung']);
    $panzerstellung = htmlspecialchars( $panzerstellung );
		$gold_needed = (10 * $kar98) + (15 * $gw43) + (20 * $mp40) + (30 * $mp44) + (160 * $mg42) + (400 * $tiger) + (800 * $stugv) + (1200 * $tiger2) + (200 * $panzerstellung);
		
		if($kar98 < 0 || $gw43 < 0 || $mp40 < 0 || $mp44 < 0 || $mg42 < 0 || $tiger < 0 || $stugv < 0 || $tiger2 < 0 || $panzerstellung < 0){
			echo("Musíš si kúpiť kladný počet!");
		}elseif($stats['gold'] < $gold_needed){
			echo("Nemáš dostatok zlata!");
		}else{
			$weapon['kar98'] += $kar98;
			$weapon['gw43'] += $gw43;
      $weapon['mp40'] += $mp40;
      $weapon['mp44'] += $mp44;
      $weapon['mg42'] += $mg42;
      $weapon['tiger'] += $tiger;
      $weapon['stugv'] += $stugv;
			$weapon['tiger2'] += $tiger2;
      $weapon['panzerstellung'] += $panzerstellung;
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`kar98`='".$weapon['kar98']."',
										`gw43`='".$weapon['gw43']."',
                    `mp40`='".$weapon['mp40']."',
                    `mp44`='".$weapon['mp44']."',
                    `mg42`='".$weapon['mg42']."',
                    `tiger`='".$weapon['tiger']."',
                    `stugv`='".$weapon['stugv']."',
                    `tiger2`='".$weapon['tiger2']."',
                    `panzerstellung`='".$weapon['panzerstellung']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] -= $gold_needed;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Zakúpil si nové zbrane/tanky!");
		}
	}elseif(isset ($_POST ['sell'])){
		$kar98 = mysqli_real_escape_string($con, $_POST ['kar98']);
    $kar98 = htmlspecialchars( $kar98 );
		$gw43 = mysqli_real_escape_string($con, $_POST ['gw43']);
    $gw43 = htmlspecialchars( $gw43 );
		$mp40 = mysqli_real_escape_string($con, $_POST ['mp40']);
    $mp40 = htmlspecialchars( $mp40 );
    $mp44 = mysqli_real_escape_string($con, $_POST ['mp44']);
    $mp44 = htmlspecialchars( $mp44 );
    $mg42 = mysqli_real_escape_string($con, $_POST ['mg42']);
    $mg42 = htmlspecialchars( $mg42 );
    $tiger = mysqli_real_escape_string($con, $_POST ['tiger']);
    $tiger = htmlspecialchars( $tiger );
    $stugv = mysqli_real_escape_string($con, $_POST ['stugv']);
    $stugv = htmlspecialchars( $stugv );
    $tiger2 = mysqli_real_escape_string($con, $_POST ['tiger2']);
    $tiger2 = htmlspecialchars( $tiger2 );
    $panzerstellung = mysqli_real_escape_string($con, $_POST ['panzerstellung']);
    $panzerstellung = htmlspecialchars( $panzerstellung );
		$gold_gained = (4 * $kar98) + (6 * $gw43) + (8 * $mp40)  + (12 * $mp44)  + (64 * $mg42)  + (160 * $tiger) + (320 * $stugv) + (480 * $tiger2) + (80 * $panzerstellung);
		
		if($kar98 < 0 || $gw43 < 0 || $mp40 < 0 || $mp44 < 0 || $mg42 < 0 || $tiger < 0 || $stugv < 0 || $tiger2 < 0 || $panzerstellung < 0){
			echo("Musíš predať pozitívný počet predmetov!");
		}elseif($kar98 > $weapon['kar98'] || $gw43 > $weapon['gw43'] || $mp40 > $weapon['mp40'] || $mp44 > $weapon['mp44'] || $mg42 > $weapon['mg42'] || $tiger > $weapon['tiger'] || $stugv > $weapon['stugv'] || $tiger2 > $weapon['tiger2'] || $panzerstellung > $weapon['panzerstellung']){
			echo("Nemáš dostatok predmetov na predaj!");
		}else{
			$weapon['kar98'] -= $kar98;
			$weapon['gw43'] -= $gw43;
			$weapon['mp40'] -= $mp40;
      $weapon['mp44'] -= $mp44;
      $weapon['mg42'] -= $mg42;
      $weapon['tiger'] -= $tiger;
			$weapon['stugv'] -= $stugv;
      $weapon['tiger2'] -= $tiger2;
      $weapon['panzerstellung'] -= $panzerstellung;
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`kar98`='".$weapon['kar98']."',
										`gw43`='".$weapon['gw43']."',
										`mp40`='".$weapon['mp40']."',
                    `mp44`='".$weapon['mp44']."',
                    `mg42`='".$weapon['mg42']."',
                    `tiger`='".$weapon['tiger']."',
                    `stugv`='".$weapon['stugv']."',
                    `tiger2`='".$weapon['tiger2']."',
                    `panzerstellung`='".$weapon['panzerstellung']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] += $gold_gained;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Predal si svoje predmety!");
		}
	}
   include("weapons/can_ger.php");

	?>     <hr>
	<center><h2><?php echo $lang['FACTORY_BUY'];?></h2></center>  <hr>
	<br />
	 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	<table style="width:100%;"  cellpadding="2" cellspacing="8">
		<tr>
			<td>Avatar</td>
			<td><b><?php echo $lang['UNIT'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['PRICE'];?></b></td>
			<td><b><?php echo $lang['MAKE'];?></b></td>
      <td><b><?php echo $lang['YOU_CAN_MAKE'];?></b></td>
      <td><b><?php echo $lang['CLASS'];?></b></td>
      <td><b>DMG</b></td>
		</tr>
		
    <tr>
			<td><img src="images/kar98.png" title="KAR 98"></td>
			<td><img src="images/schutze.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['kar98']); ?></td>
			<td>10 <img src="images/gold.png"></td>
			<td><input type="text" name="kar98"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td>Puška</td>
      <td>10</td>
		</tr>
		<tr>
			<td><img src="images/gw43.png" title="GW 43"></td>
				<td><img src="images/schutze.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['gw43']); ?></td>
			<td>15  <img src="images/gold.png"></td>
			<td><input type="text" name="gw43"></td>
			<?php
			if($can2 > 0){
			?>
			<td>(<?php echo $can2; ?>)</td>
			<?php
			}
			?>
      <td>Puška</td>
      <td>15</td>
		</tr>
    <tr>      
			<td><img src="images/mp40.png" title="MP40"></td>
		<td><img src="images/soldad.png" title="<?php echo $lang['SOLDIER']; ?>"></td></td>
			<td><?php echo number_format($weapon['mp40']); ?></td>
			<td>20  <img src="images/gold.png"></td>
			<td><input type="text" name="mp40"></td>
			<?php
			if($can3 > 0){
			?>
			<td>(<?php echo $can3; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['SMG'];?></td>
      <td>100</td>
		</tr>
    <tr>
			<td><img src="images/mp44.png" title="MP44"></td>
		<td><img src="images/soldad.png" title="<?php echo $lang['SOLDIER']; ?>"></td>
			<td><?php echo number_format($weapon['mp44']); ?></td>
			<td>30  <img src="images/gold.png"></td>
			<td><input type="text" name="mp44"></td>
			<?php
			if($can4 > 0){
			?>
			<td>(<?php echo $can4; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['ATTACK_RIFLE']; ?></td>
      <td>150</td>
		</tr>
    <tr>
			<td><img src="images/mg42.png" title="MG 42"</td>
			<td><img src="images/maschinengewehr.png" title="<?php echo $lang['MACHINEGUNNER']; ?>"></td>
			<td><?php echo number_format($weapon['mg42']); ?></td>
			<td>160  <img src="images/gold.png"></td>
			<td><input type="text" name="mg42"></td>
			<?php
			if($can5 > 0){
			?>
			<td>(<?php echo $can5; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS'];?></td>
      <td>650</td>
		</tr>
    <tr>
			<td><img src="images/panzerstellung.png"</td>
			<td><?php echo $lang['PANZERSTELLUNG'];?></td>
			<td><?php echo number_format($weapon['panzerstellung']); ?></td>
			<td>200  <img src="images/gold.png"></td>
			<td><input type="text" name="panzerstellung"></td>
			<?php
			if($can9 > 0){
			?>
			<td>(<?php echo $can9; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['PANZERSTELLUNG'];?></td>
      <td>800</td>
		</tr>
    <tr>
			<td><img src="images/tiger.png"</td>
			<td>Tiger</td>
			<td><?php echo number_format($weapon['tiger']); ?></td>
			<td>400  <img src="images/gold.png"></td>
			<td><input type="text" name="tiger"></td>
			<?php
			if($can6 > 0){
			?>
			<td>(<?php echo $can6; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['HT']; ?></td>
      <td>1000</td>
		</tr>
    <tr>
			<td><img src="images/tiger2.png"</td>
			<td>Tiger II</td>
			<td><?php echo number_format($weapon['tiger2']); ?></td>
			<td>1200  <img src="images/gold.png"></td>
			<td><input type="text" name="tiger2"></td>
			<?php
			if($can8 > 0){
			?>
			<td>(<?php echo $can8; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['HT']; ?></td>
      <td>3000</td>
		</tr>
    <tr>
			<td><img src="images/stugv.png"</td>
			<td>Stug V</td>
			<td><?php echo number_format($weapon['stugv']); ?></td>
			<td>800  <img src="images/gold.png"></td>
			<td><input type="text" name="stugv"></td>
			<?php
			if($can7 > 0){
			?>
			<td>(<?php echo $can7; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['TD']; ?></td>
      <td>2000</td>
		</tr>
    
		
	</table>
  <center> <button type="submit" name="buy" class="btn btn-success"><?php echo $lang['BUY'];?></button>  </center>
	</form>
  
	<hr />
  <center><h2><?php echo $lang['FACTORY_SELL'];?></h2></center>  <hr>
	 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	<table style="width:100%;"  cellpadding="2" cellspacing="4">
		<tr>
			<td></td>
			<td><b><?php echo $lang['Subject'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['OFFER'];?></b></td>
			<td><b><?php echo $lang['SELL'];?></b></td>
		</tr>
		<tr>
			<td><img src="images/kar98.png"></td>
			<td>Kar98</td>
			<td><?php echo number_format($weapon['kar98']); ?></td>
			<td>4  <img src="images/gold.png"></td>
			<td><input type="text" name="kar98"></td>
		</tr>
		<tr>
			<td><img src="images/gw43.png"></td>
			<td>GW 43</td>
			<td><?php echo number_format($weapon['gw43']); ?></td>
			<td>6  <img src="images/gold.png"></td>
			<td><input type="text" name="gw43"></td>
		</tr>
		<tr>
			<td><img src="images/mp40.png"></td>
			<td>MP40</td>
			<td><?php echo number_format($weapon['mp40']); ?></td>
			<td>8  <img src="images/gold.png"></td>
			<td><input type="text" name="mp40"></td>
		</tr>
    <tr>
			<td><img src="images/mp44.png"></td>
			<td>MP44</td>
			<td><?php echo number_format($weapon['mp44']); ?></td>
			<td>12  <img src="images/gold.png"></td>
			<td><input type="text" name="mp44"></td>
		</tr>
    <tr>
			<td><img src="images/mg42.png"></td>
			<td>MG42</td>
			<td><?php echo number_format($weapon['mg42']); ?></td>
			<td>64  <img src="images/gold.png"></td>
			<td><input type="text" name="mg42"></td>
		</tr>
    <tr>
			<td><img src="images/panzerstellung.png"></td>
			<td><?php echo $lang['PANZERSTELLUNG'];?></td>
			<td><?php echo number_format($weapon['panzerstellung']); ?></td>
			<td>80  <img src="images/gold.png"></td>
			<td><input type="text" name="panzerstellung"></td>
		</tr>
    <tr>
			<td><img src="images/tiger.png"></td>
			<td>Tiger</td>
			<td><?php echo number_format($weapon['tiger']); ?></td>
			<td>160  <img src="images/gold.png"></td>
			<td><input type="text" name="tiger"></td>
		</tr>
    <tr>
			<td><img src="images/tiger2.png"></td>
			<td>Tiger II</td>
			<td><?php echo number_format($weapon['tiger2']); ?></td>
			<td>480  <img src="images/gold.png"></td>
			<td><input type="text" name="tiger2"></td>
		</tr>
    <tr>
			<td><img src="images/stugv.png"></td>
			<td>Stug V</td>
			<td><?php echo number_format($weapon['stugv']); ?></td>
			<td>320  <img src="images/gold.png"></td>
			<td><input type="text" name="stugv"></td>
		</tr>
		
	</table>
	<center><button type="submit" name="sell" class="btn btn-danger"><?php echo $lang['SELL'];?></button></center>
  </form>
  
 <?php
}

 
  
  
  
  
  
  
  
  
  
  
   if($user['fraction'] == 2){      // SLOVENSKO
	if(isset ($_POST ['buy'])){
		$kar98 = mysqli_real_escape_string($con, $_POST ['kar98']);
    $kar98 = htmlspecialchars( $kar98 );
    $pps43 = mysqli_real_escape_string($con, $_POST ['pps43']);
    $pps43 = htmlspecialchars( $pps43 );
    $mp38 = mysqli_real_escape_string($con, $_POST ['mp38']);
    $mp38 = htmlspecialchars( $mp38 );
		$zk383 = mysqli_real_escape_string($con, $_POST ['zk383']);
    $zk383 = htmlspecialchars( $zk383 );
    $gulometvz24 = mysqli_real_escape_string($con, $_POST ['gulometvz24']);
    $gulometvz24 = htmlspecialchars( $gulometvz24 );   
    $pak38 = mysqli_real_escape_string($con, $_POST ['pak38']);
    $pak38 = htmlspecialchars( $pak38 );        
    $flak37 = mysqli_real_escape_string($con, $_POST ['flak37']);
    $flak37 = htmlspecialchars( $flak37 );       
    $lt38 = mysqli_real_escape_string($con, $_POST ['lt38']);
    $lt38 = htmlspecialchars( $lt38 );
    $puskavz24 = mysqli_real_escape_string($con, $_POST ['puskavz24']);
    $puskavz24 = htmlspecialchars( $puskavz24 );
    $grw = mysqli_real_escape_string($con, $_POST ['grw']);
    $grw = htmlspecialchars( $grw );  
		$gold_needed = (10 * $kar98) + (20 * $pps43) + (25 * $mp38) + (30 * $zk383) + (160 * $gulometvz24) + (80 * $pak38) + (150 * $flak37) + (450 * $lt38) + (200 * $grw) + (15 * $puskavz24);
		
		if($kar98 < 0 || $pps43 < 0 || $mp38 < 0 || $zk383 < 0 || $gulometvz24 < 0 || $pak38 < 0 || $flak37 < 0 || $lt38 < 0 || $grw < 0 || $puskavz24 < 0){
			echo("Musíš si kúpiť kladný počet!");
		}elseif($stats['gold'] < $gold_needed){
			echo("Nemáš dostatok zlata!");
		}else{
			$weapon['kar98'] += $kar98;
			$weapon['pps43'] += $pps43;
      $weapon['mp38'] += $mp38;
      $weapon['zk383'] += $zk383;
      $weapon['gulometvz24'] += $gulometvz24;
      $weapon['pak38'] += $pak38;
      $weapon['flak37'] += $flak37;
			$weapon['lt38'] += $lt38;
      $weapon['puskavz24'] += $puskavz24;
      $weapon['grw'] += $grw;
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`kar98`='".$weapon['kar98']."',
										`pps43`='".$weapon['pps43']."',
                    `mp38`='".$weapon['mp38']."',
                    `zk383`='".$weapon['zk383']."',
                    `gulometvz24`='".$weapon['gulometvz24']."',
                    `pak38`='".$weapon['pak38']."',
                    `flak37`='".$weapon['flak37']."',
                    `puskavz24`='".$weapon['puskavz24']."',
                    `lt38`='".$weapon['lt38']."',
                    `grw`='".$weapon['grw']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] -= $gold_needed;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Zakúpil si nové zbrane/tanky!");
		}
	}elseif(isset ($_POST ['sell'])){
		$kar98 = mysqli_real_escape_string($con, $_POST ['kar98']);
    $kar98 = htmlspecialchars( $kar98 );
		$pps43 = mysqli_real_escape_string($con, $_POST ['pps43']);
    $pps43 = htmlspecialchars( $pps43 );
		$mp38 = mysqli_real_escape_string($con, $_POST ['mp38']);
    $mp38 = htmlspecialchars( $mp38 );
    $zk383 = mysqli_real_escape_string($con, $_POST ['zk383']);
    $zk383 = htmlspecialchars( $zk383 );
    $gulometvz24 = mysqli_real_escape_string($con, $_POST ['gulometvz24']);
    $gulometvz24 = htmlspecialchars( $gulometvz24 );
    $pak38 = mysqli_real_escape_string($con, $_POST ['pak38']);
    $pak38 = htmlspecialchars( $pak38 );
    $flak37 = mysqli_real_escape_string($con, $_POST ['flak37']);
    $flak37 = htmlspecialchars( $flak37 );
    $lt38 = mysqli_real_escape_string($con, $_POST ['lt38']);
    $lt38 = htmlspecialchars( $lt38 );
    $puskavz24 = mysqli_real_escape_string($con, $_POST ['puskavz24']);
    $puskavz24 = htmlspecialchars( $puskavz24 );
    $grw = mysqli_real_escape_string($con, $_POST ['grw']);
    $grw = htmlspecialchars( $grw );
		$gold_gained = (4 * $kar98) + (8 * $pps43) + (10 * $mp38)  + (12 * $zk383)  + (64 * $gulometvz24)  + (32 * $pak38) + (60 * $flak37) + (180 * $lt38) + (80 * $grw) + (6 * $puskavz24);
		
		if($kar98 < 0 || $pps43 < 0 || $mp38 < 0 || $zk383 < 0 || $gulometvz24 < 0 || $pak38 < 0 || $flak37 < 0 || $lt38 < 0 || $grw < 0 || $puskavz24 < 0){
			echo("Musíš predať pozitívný počet predmetov!");
		}elseif($kar98 > $weapon['kar98'] || $pps43 > $weapon['pps43'] || $mp38 > $weapon['mp38'] || $zk383 > $weapon['zk383'] || $gulometvz24 > $weapon['gulometvz24'] || $pak38 > $weapon['pak38'] || $flak37 > $weapon['flak37'] || $lt38 > $weapon['lt38'] || $grw > $weapon['grw'] || $puskavz24 > $weapon['puskavz24']){
			echo("Nemáš dostatok predmetov na predaj!");
		}else{
			$weapon['kar98'] -= $kar98;
			$weapon['pps43'] -= $pps43;
			$weapon['mp38'] -= $mp38;
      $weapon['zk383'] -= $zk383;
      $weapon['gulometvz24'] -= $gulometvz24;
      $weapon['pak38'] -= $pak38;
			$weapon['flak37'] -= $flak37;
      $weapon['lt38'] -= $lt38;
      $weapon['puskavz24'] -= $puskavz24;
      $weapon['grw'] -= $grw;
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`kar98`='".$weapon['kar98']."',
										`pps43`='".$weapon['pps43']."',
										`mp38`='".$weapon['mp38']."',
                    `zk383`='".$weapon['zk383']."',
                    `gulometvz24`='".$weapon['gulometvz24']."',
                    `pak38`='".$weapon['pak38']."',
                    `flak37`='".$weapon['flak37']."',
                    `lt38`='".$weapon['lt38']."',
                    `puskavz24`='".$weapon['puskavz24']."',
                    `grw`='".$weapon['grw']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] += $gold_gained;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Predal si svoje predmety!");
		}
	}
  include("weapons/can_svk.php");

	?>    <hr>
	<center><h2><?php echo $lang['FACTORY_BUY'];?></h2></center> <hr>
	<br />
	 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
		<table style="width:100%;"  cellpadding="2" cellspacing="8">
		<tr>
			<td>Avatar</td>
			<td><b><?php echo $lang['UNIT'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['PRICE'];?></b></td>
			<td><b><?php echo $lang['MAKE'];?></b></td>
      <td><b><?php echo $lang['YOU_CAN_MAKE'];?></b></td>
      <td><b><?php echo $lang['CLASS'];?></b></td>
      <td><b>DMG</b></td>
		</tr>
		
    <tr>
			<td><img src="images/kar98.png" title="KAR 98"></td>
			<td><img src="images/strelec.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['kar98']); ?></td>
			<td>10  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="kar98"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td>Pušky</td>
      <td>50</td>
		</tr>
    <tr>
			<td><img src="images/puskavz24.png" title="Puška vz. 24"></td>
		<td><img src="images/strelec.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['puskavz24']); ?></td>
			<td>15  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="puskavz24"></td>
			<?php
			if($can10 > 0){
			?>
			<td>(<?php echo $can10; ?>)</td>
			<?php
			}
			?>
      <td>Pušky</td>
      <td>75</td>
		</tr>
		<tr>
			<td><img src="images/pps43.png"  title="PPS 43"></td>
			<td><img src="images/vojak.png" title="<?php echo $lang['SOLDIER']; ?>"></td>
			<td><?php echo number_format($weapon['pps43']); ?></td>
			<td>20  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="pps43"></td>
			<?php
			if($can2 > 0){
			?>
			<td>(<?php echo $can2; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['SMG'];?>y</td>
      <td>100</td>
		</tr>
    <tr>      
			<td><img src="images/mp40.png" title="MP38"></td>
			<td><img src="images/vojak.png" title="<?php echo $lang['SOLDIER']; ?>"></td>
			<td><?php echo number_format($weapon['mp38']); ?></td>
			<td>25  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="mp38"></td>
			<?php
			if($can2 > 0){
			?>
			<td>(<?php echo $can2; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['SMG'];?>y</td>
      <td>125</td>
		</tr>
    <tr>
			<td><img src="images/zk383.png"title="ZK 383"></td>
			<td><img src="images/vojak.png" title="<?php echo $lang['SOLDIER']; ?>"></td>
			<td><?php echo number_format($weapon['zk383']); ?></td>
			<td>30  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="zk383"></td>
			<?php
			if($can2 > 0){
			?>
			<td>(<?php echo $can2; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['ATTACK_RIFLE']; ?></td>
      <td>150</td>
		</tr>
    <tr>
			<td><img src="images/gulometvz24.png" title="<?php echo $lang['MACHINEGUNS'];?> vz. 24"></td>
				<td><img src="images/gulometcik.png" title="<?php echo $lang['MACHINEGUNNER'];?>"></td>
			<td><?php echo number_format($weapon['gulometvz24']); ?></td>
			<td>160  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="gulometvz24"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS']; ?></td>
      <td>650</td>
		</tr>
    <tr>
			<td><img src="images/gw34.png"</td>
			<td><?php echo $lang['MORTAR']; ?> GrW 34</td>
			<td><?php echo number_format($weapon['grw']); ?></td>
			<td>200  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="grw"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MORTAR'];?></td>
      <td>800</td>
		</tr>
    <tr>
			<td><img src="images/flak37.png"</td>
			<td>Flak 37</td>
			<td><?php echo number_format($weapon['flak37']); ?></td>
			<td>150  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="flak37"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS'];?></td>
      <td>500</td>
		</tr>
    <tr>
			<td><img src="images/pak38.png"</td>
			<td>Pak38</td>
			<td><?php echo number_format($weapon['pak38']); ?></td>
			<td>80  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="pak38"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS'];?></td>
      <td>300</td>
		</tr>
    
    <tr>
			<td><img src="images/lt38.png"</td>
			<td>LT-38</td>
			<td><?php echo number_format($weapon['lt38']); ?></td>
			<td>450  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="lt38"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['LT']; ?></td>
      <td>1500</td>
		</tr>
    
	
	</table>
   <center> <button type="submit" name="buy" class="btn btn-success"><?php echo $lang['BUY'];?></button> </center>
	</form>
  
	<hr />
  <center><h2><?php echo $lang['FACTORY_SELL'];?></h2></center>  <hr>
	 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	<table style="width:100%;"  cellpadding="2" cellspacing="4">
		<tr>
			<td></td>
			<td><b><?php echo $lang['Subject'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['OFFER'];?></b></td>
			<td><b><?php echo $lang['SELL'];?></b></td>
		</tr>
		<tr>
			<td><img src="images/kar98.png"></td>
			<td>Kar 98</td>
			<td><?php echo number_format($weapon['kar98']); ?></td>
			<td>4  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="kar98"></td>
		</tr>
    <tr>
			<td><img src="images/puskavz24.png"></td>
			<td>Puška vz. 24</td>
			<td><?php echo number_format($weapon['puskavz24']); ?></td>
			<td>6  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="kar98"></td>
		</tr>
    
		<tr>
			<td><img src="images/pps43.png"></td>
			<td>PPŠ 43</td>
			<td><?php echo number_format($weapon['pps43']); ?></td>
			<td>8  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="pps43"></td>
		</tr>
		<tr>
			<td><img src="images/mp40.png"></td>
			<td>MP38</td>
			<td><?php echo number_format($weapon['mp38']); ?></td>
			<td>10  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="mp38"></td>
		</tr>
    <tr>
			<td><img src="images/zk383.png"></td>
			<td>ZK383</td>
			<td><?php echo number_format($weapon['zk383']); ?></td>
			<td>12  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="zk383"></td>
		</tr>
    <tr>
			<td><img src="images/gulometvz24.png"></td>
			<td><?php echo $lang['MACHINEGUNS'];?>vz. 24</td>
			<td><?php echo number_format($weapon['gulometvz24']); ?></td>
			<td>64  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="gulometvz24"></td>
		</tr>
    <tr>
			<td><img src="images/panzerstellung.png"></td>
			<td><?php echo $lang['MORTAR']; ?> GrW 34</td>
			<td><?php echo number_format($weapon['grw']); ?></td>
			<td>80  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="grw"></td>
		</tr>
    <tr>
			<td><img src="images/pak38.png"></td>
			<td>Pak 38</td>
			<td><?php echo number_format($weapon['pak38']); ?></td>
			<td>32  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="pak38"></td>
		</tr>
    <tr>
			<td><img src="images/flak37.png"></td>
			<td>Flak 37</td>
			<td><?php echo number_format($weapon['flak37']); ?></td>
			<td>60  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="flak37"></td>
		</tr>
    <tr>
			<td><img src="images/lt38.png"></td>
			<td>LT-38</td>
			<td><?php echo number_format($weapon['lt38']); ?></td>
			<td>180  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="lt38"></td>
		</tr>

	</table>
  <center><button type="submit" name="sell" class="btn btn-danger"><?php echo $lang['SELL'];?></button></center>
	</form>
  <?php
}































  if($user['fraction'] == 3){      // ZSSR
	if(isset ($_POST ['buy'])){
		$mosinnagant = mysqli_real_escape_string($con, $_POST ['mosinnagant']);
    $mosinnagant = htmlspecialchars( $mosinnagant );
    $pps41 = mysqli_real_escape_string($con, $_POST ['pps41']);
    $pps41 = htmlspecialchars( $pps41 );
    $maxim = mysqli_real_escape_string($con, $_POST ['maxim']);
    $maxim = htmlspecialchars( $maxim );
		$kv2 = mysqli_real_escape_string($con, $_POST ['kv2']);
    $kv2 = htmlspecialchars( $kv2 );
    $dp27 = mysqli_real_escape_string($con, $_POST ['dp27']);
    $dp27 = htmlspecialchars( $dp27 );   
    $minometvz40= mysqli_real_escape_string($con, $_POST ['minometvz40']);
    $minometvz40 = htmlspecialchars( $minometvz40 );      
    $zis3 = mysqli_real_escape_string($con, $_POST ['zis3']);
    $zis3 = htmlspecialchars( $zis3 );       
    $t34 = mysqli_real_escape_string($con, $_POST ['t34']);
    $t34 = htmlspecialchars( $t34 );
    $svt40 = mysqli_real_escape_string($con, $_POST ['svt40']);
    $svt40 = htmlspecialchars( $svt40 );
    $is2 = mysqli_real_escape_string($con, $_POST ['is2']);
    $is2 = htmlspecialchars( $is2 );  
		$gold_needed = (10 * $mosinnagant) + (35 * $pps41) + (160 * $maxim) + (1200 * $kv2) + (110 * $dp27) + (200 * $minometvz40) + (150 * $zis3) + (400 * $t34) + (800 * $is2) + (15 * $svt40);
		
		if($mosinnagant < 0 || $pps41 < 0 || $maxim < 0 || $kv2 < 0 || $dp27 < 0 || $minometvz40 < 0 || $zis3 < 0 || $t34 < 0 || $is2 < 0 || $svt40 < 0){
			echo("Musíš si kúpiť kladný počet!");
		}elseif($stats['gold'] < $gold_needed){
			echo("Nemáš dostatok zlata!");
		}else{
			$weapon['mosinnagant'] += $mosinnagant;
			$weapon['pps41'] += $pps41;
      $weapon['maxim'] += $maxim;
      $weapon['kv2'] += $kv2;
      $weapon['dp27'] += $dp27;
      $weapon['minometvz40'] += $minometvz40;
      $weapon['zis3'] += $zis3;
			$weapon['t34'] += $t34;
      $weapon['svt40'] += $svt40;
      $weapon['is2'] += $is2;
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`mosinnagant`='".$weapon['mosinnagant']."',
										`pps41`='".$weapon['pps41']."',
                    `maxim`='".$weapon['maxim']."',
                    `kv2`='".$weapon['kv2']."',
                    `dp27`='".$weapon['dp27']."',
                    `minometvz40`='".$weapon['minometvz40']."',
                    `zis3`='".$weapon['zis3']."',
                    `svt40`='".$weapon['svt40']."',
                    `t34`='".$weapon['t34']."',
                    `is2`='".$weapon['is2']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] -= $gold_needed;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Zakúpil si nové zbrane/tanky!");
		}
	}elseif(isset ($_POST ['sell'])){
		$mosinnagant = mysqli_real_escape_string($con, $_POST ['mosinnagant']);
    $mosinnagant = htmlspecialchars( $mosinnagant );
		$pps41 = mysqli_real_escape_string($con, $_POST ['pps41']);
    $pps41 = htmlspecialchars( $pps41 );
		$maxim = mysqli_real_escape_string($con, $_POST ['maxim']);
    $maxim = htmlspecialchars( $maxim );
    $kv2 = mysqli_real_escape_string($con, $_POST ['kv2']);
    $kv2 = htmlspecialchars( $kv2 );
    $dp27 = mysqli_real_escape_string($con, $_POST ['dp27']);
    $dp27 = htmlspecialchars( $dp27 );
    $minometvz40 = mysqli_real_escape_string($con, $_POST ['minometvz40']);
    $minometvz40 = htmlspecialchars( $minometvz40 );
    $zis3 = mysqli_real_escape_string($con, $_POST ['zis3']);
    $zis3 = htmlspecialchars( $zis3 );
    $t34 = mysqli_real_escape_string($con, $_POST ['t34']);
    $t34 = htmlspecialchars( $t34 );
    $svt40 = mysqli_real_escape_string($con, $_POST ['svt40']);
    $svt40 = htmlspecialchars( $svt40 );
    $is2 = mysqli_real_escape_string($con, $_POST ['is2']);
    $is2 = htmlspecialchars( $is2 );
		$gold_gained = (4 * $mosinnagant) + (14 * $pps41) + (64 * $maxim)  + (480 * $kv2)  + (44 * $dp27)  + (80 * $minometvz40) + (60 * $zis3) + (160 * $t34) + (320 * $is2) + (6 * $svt40);
		
		if($mosinnagant < 0 || $pps41 < 0 || $maxim < 0 || $kv2 < 0 || $dp27 < 0 || $minometvz40 < 0 || $zis3 < 0 || $t34 < 0 || $is2 < 0 || $svt40 < 0){
			echo("Musíš predať pozitívný počet predmetov!");
		}elseif($mosinnagant > $weapon['mosinnagant'] || $pps41 > $weapon['pps41'] || $maxim > $weapon['maxim'] || $kv2 > $weapon['kv2'] || $dp27 > $weapon['dp27'] || $minometvz40 > $weapon['minometvz40'] || $zis3 > $weapon['zis3'] || $t34 > $weapon['t34'] || $is2 > $weapon['is2'] || $svt40 > $weapon['svt40']){
			echo("Nemáš dostatok predmetov na predaj!");
		}else{
			$weapon['mosinnagant'] -= $mosinnagant;
			$weapon['pps41'] -= $pps41;
			$weapon['maxim'] -= $maxim;
      $weapon['kv2'] -= $kv2;
      $weapon['dp27'] -= $dp27;
      $weapon['minometvz40'] -= $minometvz40;
			$weapon['zis3'] -= $zis3;
      $weapon['t34'] -= $t34;
      $weapon['svt40'] -= $svt40;
      $weapon['is2'] -= $is2;
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`mosinnagant`='".$weapon['mosinnagant']."',
										`pps41`='".$weapon['pps41']."',
										`maxim`='".$weapon['maxim']."',
                    `kv2`='".$weapon['kv2']."',
                    `dp27`='".$weapon['dp27']."',
                    `minometvz40`='".$weapon['minometvz40']."',
                    `zis3`='".$weapon['zis3']."',
                    `t34`='".$weapon['t34']."',
                    `svt40`='".$weapon['svt40']."',
                    `is2`='".$weapon['is2']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] += $gold_gained;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Predal si svoje predmety!");
		}
	}
  include("weapons/can_zssr.php");

  
	?>            <hr>
	<center><h2><?php echo $lang['FACTORY_BUY'];?></h2></center> <hr>
	<br />
	 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
<table style="width:100%;"  cellpadding="2" cellspacing="8">
		<tr>
			<td>Avatar</td>
			<td><b><?php echo $lang['UNIT'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['PRICE'];?></b></td>
			<td><b><?php echo $lang['MAKE'];?></b></td>
      <td><b><?php echo $lang['YOU_CAN_MAKE'];?></b></td>
      <td><b><?php echo $lang['CLASS'];?></b></td>
      <td><b>DMG</b></td>
		</tr>
		
    <tr>
			<td><img src="images/mosinnagant.png" title="Mosin Nagant"></td>
			<td><img src="images/strelets.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['mosinnagant']); ?></td>
			<td>10  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="mosinnagant"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td>Pušky</td>
      <td>50</td>
		</tr>
    <tr>
			<td><img src="images/svt40.png" title="SVT 40"></td>
			<td><img src="images/strelets.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['svt40']); ?></td>
			<td>15  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="svt40"></td>
			<?php
			if($can2 > 0){
			?>
			<td>(<?php echo $can2; ?>)</td>
			<?php
			}
			?>
      <td>Pušky</td>
      <td>75</td>
		</tr>
		<tr>
			<td><img src="images/pps41.png" title="PPS 41"></td>
			<td><img src="images/vojnik.png" title="<?php echo $lang['SOLDIER']; ?>"></td>
			<td><?php echo number_format($weapon['pps41']); ?></td>
			<td>35  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="pps41"></td>
			<?php
			if($can3 > 0){
			?>
			<td>(<?php echo $can3; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['SMG'];?>y</td>
      <td>200</td>
		</tr>
     <tr>      
			<td><img src="images/dp27.png" title="DP 27"></td>
		<td><img src="images/pistoleti.png" title="<?php echo $lang['MACHINEGUNNER']; ?>"></td>
			<td><?php echo number_format($weapon['dp27']); ?></td>
			<td>110  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="dp27"></td>
			<?php
			if($can4 > 0){
			?>
			<td>(<?php echo $can4; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS']; ?></td>
      <td>450</td>
		</tr>
    <tr>      
			<td><img src="images/maxim.png" title="Maxim"></td>
		<td><img src="images/pistoleti.png" title="<?php echo $lang['MACHINEGUNNER']; ?>"></td>
			<td><?php echo number_format($weapon['maxim']); ?></td>
			<td>160  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="maxim"></td>
			<?php
			if($can5 > 0){
			?>
			<td>(<?php echo $can5; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS']; ?></td>
      <td>650</td>
		</tr>
    
    
   
    
    <tr>
			<td><img src="images/zis3.png"></td>
			<td>Zis 3</td>
			<td><?php echo number_format($weapon['zis3']); ?></td>
			<td>150  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="zis3"></td>
			<?php
			if($can8 > 0){
			?>
			<td>(<?php echo $can8; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS'];?></td>
      <td>500</td>
		</tr>
    <tr>
			<td><img src="images/minometvz40.png"</td>
			<td><?php echo $lang['MORTAR']; ?> vz. 40</td>
			<td><?php echo number_format($weapon['minometvz40']); ?></td>
			<td>200  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="minometvz40"></td>
			<?php
			if($can7 > 0){
			?>
			<td>(<?php echo $can7; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MORTAR'];?></td>
      <td>800</td>
		</tr>
     <tr>
			<td><img src="images/is2.png"</td>
			<td>IS-2</td>
			<td><?php echo number_format($weapon['is2']); ?></td>
			<td>800  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="is2"></td>
			<?php
			if($can10 > 0){
			?>
			<td>(<?php echo $can10; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['HT']; ?></td>
      <td>2000</td>
		</tr> 
    <tr>
			<td><img src="images/kv2.png"></td>
			<td>KV-2</td>
			<td><?php echo number_format($weapon['kv2']); ?></td>
			<td>1200  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="kv2"></td>
			<?php
			if($can6 > 0){
			?>
			<td>(<?php echo $can6; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['HT']; ?></td>
      <td>3000</td>
		</tr>
    <tr>
			<td><img src="images/t34.png"</td>
			<td>T-34/76</td>
			<td><?php echo number_format($weapon['t34']); ?></td>
			<td>400  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="t34"></td>
			<?php
			if($can9 > 0){
			?>
			<td>(<?php echo $can9; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MT']; ?></td>
      <td>1000</td>
		</tr>
    

	</table>
  <center><button type="submit" name="buy" class="btn btn-success"><?php echo $lang['BUY'];?></button> </center>
	</form>
  
	<hr />
  <center><h2><?php echo $lang['FACTORY_SELL'];?></h2></center>   <hr>
	 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	<table style="width:100%;"  cellpadding="2" cellspacing="4">
		<tr>
			<td></td>
			<td><b><?php echo $lang['Subject'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['OFFER'];?></b></td>
			<td><b><?php echo $lang['SELL'];?></b></td>
		</tr>
		<tr>
			<td><img src="images/mosinnagant.png"></td>
			<td>Mosin Nagant</td>
			<td><?php echo number_format($weapon['mosinnagant']); ?></td>
			<td>4  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="mosinnagant"></td>
		</tr>
    <tr>
			<td><img src="images/svt40.png"></td>
			<td>SVT 40</td>
			<td><?php echo number_format($weapon['svt40']); ?></td>
			<td>6  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="svt40"></td>
		</tr>
    
		<tr>
			<td><img src="images/pps41.png"></td>
			<td>PPŠ 41</td>
			<td><?php echo number_format($weapon['pps41']); ?></td>
			<td>14  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="pps41"></td>
		</tr>
		<tr>
			<td><img src="images/maxim.png"></td>
			<td><?php echo $lang['MACHINEGUNS']; ?> Maxim</td>
			<td><?php echo number_format($weapon['maxim']); ?></td>
			<td>64  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="mp38"></td>
		</tr>
    
    <tr>
			<td><img src="images/dp27.png"></td>
			<td><?php echo $lang['MACHINEGUNS']; ?> DP-27</td>
			<td><?php echo number_format($weapon['dp27']); ?></td>
			<td>44  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="dp27"></td>
		</tr>
    
    <tr>
			<td><img src="images/minometvz40.png"></td>
			<td><?php echo $lang['MORTAR']; ?> vz. 40</td>
			<td><?php echo number_format($weapon['minometvz40']); ?></td>
			<td>80  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="minometvz40"></td>
		</tr>
    <tr>
			<td><img src="images/zis3.png"></td>
			<td>Zis-3</td>
			<td><?php echo number_format($weapon['zis3']); ?></td>
			<td>60  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="zis3"></td>
		</tr>
    <tr>
			<td><img src="images/is2.png"></td>
			<td>IS-2</td>
			<td><?php echo number_format($weapon['is2']); ?></td>
			<td>320  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="is2"></td>
		</tr>
     <tr>
			<td><img src="images/kv2.png"></td>
			<td>KV-2</td>
			<td><?php echo number_format($weapon['kv2']); ?></td>
			<td>480  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="kv2"></td>
		</tr>
    <tr>
			<td><img src="images/t34.png"></td>
			<td>T-34/76</td>
			<td><?php echo number_format($weapon['t34']); ?></td>
			<td>160  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="t34"></td>
		</tr>
		
	</table>
  <center><button type="submit" name="sell" class="btn btn-danger"><?php echo $lang['SELL'];?></button></center>
	</form>
  
  <?php
}











 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  if($user['fraction'] == 4){      // TALIANSKO
	if(isset ($_POST ['buy'])){
		$carcano = mysqli_real_escape_string($con, $_POST ['carcano']);
    $carcano = htmlspecialchars( $carcano );
    $skoda = mysqli_real_escape_string($con, $_POST ['skoda']);
    $skoda = htmlspecialchars( $skoda );
    $brixia = mysqli_real_escape_string($con, $_POST ['brixia']);
    $brixia = htmlspecialchars( $brixia );
		$breda = mysqli_real_escape_string($con, $_POST ['breda']);
    $breda = htmlspecialchars( $breda );
    $ovp = mysqli_real_escape_string($con, $_POST ['ovp']); 
    $ovp = htmlspecialchars( $ovp );   
    $baretta = mysqli_real_escape_string($con, $_POST ['baretta']);
    $baretta = htmlspecialchars( $baretta );        
    $fucile = mysqli_real_escape_string($con, $_POST ['fucile']);
    $fucile = htmlspecialchars( $fucile );       
    $p43 = mysqli_real_escape_string($con, $_POST ['p43']);
    $p43 = htmlspecialchars( $p43 );
    $kar98 = mysqli_real_escape_string($con, $_POST ['kar98']);
    $kar98 = htmlspecialchars( $kar98 );
    $carro = mysqli_real_escape_string($con, $_POST ['carro']);
    $carro = htmlspecialchars( $carro );
		$gold_needed = (15 * $carcano) + (150 * $skoda) + (200 * $brixia) + (160 * $breda) + (30 * $ovp) + (40 * $baretta) + (20 * $fucile) + (600 * $p43) + (1000 * $carro) + (10 * $kar98);
		
		if($carcano < 0 || $skoda < 0 || $brixia < 0 || $breda < 0 || $ovp < 0 || $baretta < 0 || $fucile < 0 || $p43 < 0 || $carro < 0 || $kar98 < 0){
			echo("Musíš si kúpiť kladný počet!");
		}elseif($stats['gold'] < $gold_needed){
			echo("Nemáš dostatok zlata!");
		}else{
			$weapon['carcano'] += $carcano;
			$weapon['skoda'] += $skoda;
      $weapon['brixia'] += $brixia;
      $weapon['breda'] += $breda;
      $weapon['ovp'] += $ovp;
      $weapon['baretta'] += $baretta;
      $weapon['fucile'] += $fucile;
			$weapon['p43'] += $p43;
      $weapon['kar98'] += $kar98;
      $weapon['carro'] += $carro;
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`carcano`='".$weapon['carcano']."',
										`skoda`='".$weapon['skoda']."',
                    `brixia`='".$weapon['brixia']."',
                    `breda`='".$weapon['breda']."',
                    `ovp`='".$weapon['ovp']."',
                    `baretta`='".$weapon['baretta']."',
                    `fucile`='".$weapon['fucile']."',
                    `kar98`='".$weapon['kar98']."',
                    `p43`='".$weapon['p43']."',
                    `carro`='".$weapon['carro']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] -= $gold_needed;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Zakúpil si nové zbrane/tanky!");
		}
	}elseif(isset ($_POST ['sell'])){
		$carcano = mysqli_real_escape_string($con, $_POST ['carcano']);
    $carcano = htmlspecialchars( $carcano );
		$skoda = mysqli_real_escape_string($con, $_POST ['skoda']);
    $skoda = htmlspecialchars( $skoda );
		$brixia = mysqli_real_escape_string($con, $_POST ['brixia']);
    $brixia = htmlspecialchars( $brixia );
    $breda = mysqli_real_escape_string($con, $_POST ['breda']);
    $breda = htmlspecialchars( $breda );
    $ovp = mysqli_real_escape_string($con, $_POST ['ovp']);
    $ovp = htmlspecialchars( $ovp );
    $baretta = mysqli_real_escape_string($con, $_POST ['baretta']);
    $baretta = htmlspecialchars( $baretta );
    $fucile = mysqli_real_escape_string($con, $_POST ['fucile']);
    $fucile = htmlspecialchars( $fucile );
    $p43 = mysqli_real_escape_string($con, $_POST ['p43']);
    $p43 = htmlspecialchars( $p43 );
    $kar98 = mysqli_real_escape_string($con, $_POST ['kar98']);
    $kar98 = htmlspecialchars( $kar98 );
    $carro = mysqli_real_escape_string($con, $_POST ['carro']);
    $carro = htmlspecialchars( $carro );
		$gold_gained = (6 * $carcano) + (60 * $skoda) + (80 * $brixia)  + (64 * $breda)  + (12 * $ovp)  + (16 * $baretta) + (8 * $fucile) + (240 * $p43) + (400 * $carro) + (4 * $kar98);
		
		if($carcano < 0 || $skoda < 0 || $brixia < 0 || $breda < 0 || $ovp < 0 || $baretta < 0 || $fucile < 0 || $p43 < 0 || $carro < 0 || $kar98 < 0){
			echo("Musíš predať pozitívný počet predmetov!");
		}elseif($carcano > $weapon['carcano'] || $skoda > $weapon['skoda'] || $brixia > $weapon['brixia'] || $breda > $weapon['breda'] || $ovp > $weapon['ovp'] || $baretta > $weapon['baretta'] || $fucile > $weapon['fucile'] || $p43 > $weapon['p43'] || $carro > $weapon['carro'] || $kar98 > $weapon['kar98']){
			echo("Nemáš dostatok predmetov na predaj!");
		}else{
			$weapon['carcano'] -= $carcano;
			$weapon['skoda'] -= $skoda;
			$weapon['brixia'] -= $brixia;
      $weapon['breda'] -= $breda;
      $weapon['ovp'] -= $ovp;
      $weapon['baretta'] -= $baretta;
			$weapon['fucile'] -= $fucile;
      $weapon['p43'] -= $p43;
      $weapon['kar98'] -= $kar98;
      $weapon['carro'] -= $carro;
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`carcano`='".$weapon['carcano']."',
										`skoda`='".$weapon['skoda']."',
										`brixia`='".$weapon['brixia']."',
                    `breda`='".$weapon['breda']."',
                    `ovp`='".$weapon['ovp']."',
                    `baretta`='".$weapon['baretta']."',
                    `fucile`='".$weapon['fucile']."',
                    `p43`='".$weapon['p43']."',
                    `kar98`='".$weapon['kar98']."',
                    `carro`='".$weapon['carro']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] += $gold_gained;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Predal si svoje predmety!");
		}
	}
  include("weapons/can_ita.php");

	?>                                <hr>
	<center><h2><?php echo $lang['FACTORY_BUY'];?></h2></center>  <hr>
	<br />
	 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	<table style="width:100%;"  cellpadding="2" cellspacing="8">
		<tr>
			<td>Avatar</td>
			<td><b><?php echo $lang['UNIT'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['PRICE'];?></b></td>
			<td><b><?php echo $lang['MAKE'];?></b></td>
      <td><b><?php echo $lang['YOU_CAN_MAKE'];?></b></td>
      <td><b><?php echo $lang['CLASS'];?></b></td>
      <td><b>DMG</b></td>
		</tr>
     <tr>
			<td><img src="images/kar98.png" title="KAR 98"></td>
			<td><img src="images/tiratore.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['kar98']); ?></td>
			<td>10  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="kar98"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td>Puška</td>
      <td>50</td>
		</tr>   
		
    <tr>
			<td><img src="images/carcano.png" title="Carcano"></td>
			<td><img src="images/tiratore.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['carcano']); ?></td>
			<td>15  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="carcano"></td>
			<?php
			if($can2 > 0){
			?>
			<td>(<?php echo $can2; ?>)</td>
			<?php
			}
			?>
      <td>Puška</td>
       <td>75</td>
		</tr>
    
		<tr>
			<td><img src="images/fucile.png" title="Fucile"></td>
			<td><img src="images/tiratore.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['fucile']); ?></td>
			<td>20  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="fucile"></td>
			<?php
			if($can8 > 0){
			?>
			<td>(<?php echo $can8; ?>)</td>
			<?php
			}
			?>
      <td>Puška</td>
       <td>100</td>
		</tr>
    
    
    <tr>
			<td><img src="images/ovp.png" title="OVP"></td>
		  <td><img src="images/soldato.png" title="<?php echo $lang['SOLDIER']; ?>"></td>
			<td><?php echo number_format($weapon['ovp']); ?></td>
			<td>30  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="ovp"></td>
			<?php
			if($can6 > 0){
			?>
			<td>(<?php echo $can6; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['SMG'];?>y</td>
       <td>150</td>
		</tr>
    
    
    <tr>
			<td><img src="images/baretta.png" title="Beretta 1918"></td>
			<td><img src="images/soldato.png" title="<?php echo $lang['SOLDIER']; ?>"></td>
			<td><?php echo number_format($weapon['baretta']); ?></td>
			<td>40  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="baretta"></td>
			<?php
			if($can7 > 0){
			?>
			<td>(<?php echo $can7; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['SMG'];?>y</td>
       <td>200</td>
		</tr>
    <tr>
			<td><img src="images/skoda.png"></td>
			<td>Škoda 75mm</td>
			<td><?php echo number_format($weapon['skoda']); ?></td>
			<td>150  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="skoda"></td>
			<?php
			if($can3 > 0){
			?>
			<td>(<?php echo $can3; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS'];?></td>
       <td>500</td>
		</tr>
    <tr>
			<td><img src="images/breda.png" title="Breda 30"></td>
			<td><img src="images/artigliere.png" title="<?php echo $lang['MACHINEGUNNER']; ?>"></td>
			<td><?php echo number_format($weapon['breda']); ?></td>
			<td>160  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="breda"></td>
			<?php
			if($can5 > 0){
			?>
			<td>(<?php echo $can5; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS']; ?></td>
       <td>650</td>
		</tr>
    
    <tr>      
			<td><img src="images/brixia.png"></td>
			<td><?php echo $lang['MACHINEGUNS'];?> Brixia</td>
			<td><?php echo number_format($weapon['brixia']); ?></td>
			<td>200  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="brixia"></td>
			<?php
			if($can4 > 0){
			?>
			<td>(<?php echo $can4; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MORTAR'];?></td>
       <td>800</td>
		</tr>
    
    <tr>
			<td><img src="images/p43.png"</td>
			<td>P-43</td>
			<td><?php echo number_format($weapon['p43']); ?></td>
			<td>600  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="p43"></td>
			<?php
			if($can9 > 0){
			?>
			<td>(<?php echo $can9; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MT']; ?></td>
      <td>1500</td>
		</tr>
    
    
   
     <tr>
			<td><img src="images/carro.png"</td>
			<td>Carro M15</td>
			<td><?php echo number_format($weapon['carro']); ?></td>
			<td>1000  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="carro"></td>
			<?php
			if($can10 > 0){
			?>
			<td>(<?php echo $can10; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MT']; ?></td>
      <td>3000</td>
		</tr> 
    

		</tr>
	</table>
   <center><button type="submit" name="buy" class="btn btn-success"><?php echo $lang['BUY'];?></button></center>
	</form>
   
	<hr />
  <center><h2><?php echo $lang['FACTORY_SELL'];?></h2></center>   <hr>
	 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	<table style="width:100%;"  cellpadding="2" cellspacing="4">
		<tr>
			<td></td>
			<td><b><?php echo $lang['Subject'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['OFFER'];?></b></td>
			<td><b><?php echo $lang['SELL'];?></b></td>
		</tr>
    <tr>
			<td><img src="images/kar98.png"></td>
			<td>Kar98</td>
			<td><?php echo number_format($weapon['kar98']); ?></td>
			<td>4  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="kar98"></td>
		</tr>
		<tr>
			<td><img src="images/carcano.png"></td>
			<td>Carcano</td>
			<td><?php echo number_format($weapon['carcano']); ?></td>
			<td>6  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="carcano"></td>
		</tr>
    
    <tr>
			<td><img src="images/fucile.png"></td>
			<td>Fucile 39</td>
			<td><?php echo number_format($weapon['fucile']); ?></td>
			<td>8  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="fucile"></td>
		</tr>
		
    
		
    
    <tr>
			<td><img src="images/ovp.png"></td>
			<td>OVP</td>
			<td><?php echo number_format($weapon['ovp']); ?></td>
			<td>12  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="ovp"></td>
		</tr>
    
    <tr>
			<td><img src="images/baretta.png"></td>
			<td>Baretta M1918</td>
			<td><?php echo number_format($weapon['baretta']); ?></td>
			<td>16  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="baretta"></td>
		</tr>
    <tr>
			<td><img src="images/breda.png"></td>
			<td>Breda 30</td>
			<td><?php echo number_format($weapon['breda']); ?></td>
			<td>64  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="breda"></td>
		</tr>
    <tr>    
			<td><img src="images/brixia.png"></td>
			<td><?php echo $lang['MACHINEGUNS'];?> Brixia</td>
			<td><?php echo number_format($weapon['brixia']); ?></td>
			<td>80  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="mp38"></td>
		</tr>
    <tr>
			<td><img src="images/skoda.png"></td>
			<td>Škoda 75mm</td>
			<td><?php echo number_format($weapon['skoda']); ?></td>
			<td>60  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="skoda"></td>
		</tr>
    <tr>
			<td><img src="images/carro.png"></td>
			<td>Carro M15</td>
			<td><?php echo number_format($weapon['carro']); ?></td>
			<td>400  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="carro"></td>
		</tr>
     
    <tr>
			<td><img src="images/p43.png"></td>
			<td>P-43</td>
			<td><?php echo number_format($weapon['p43']); ?></td>
			<td>240  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="p43"></td>
		</tr>
	</table>
  <center><button type="submit" name="sell" class="btn btn-danger"><?php echo $lang['SELL'];?></button></center>
	</form>
  
  <?php
}?>

	</section><!-- end main -->

      <?php










































    
  if($user['fraction'] == 5){     // BRITI
	if(isset ($_POST ['buy'])){
		$enfield = mysqli_real_escape_string($con, $_POST ['enfield']);
    $enfield = htmlspecialchars( $enfield );
    $delisle = mysqli_real_escape_string($con, $_POST ['delisle']);
    $delisle = htmlspecialchars( $delisle );
    $bar = mysqli_real_escape_string($con, $_POST ['bar']);
    $bar = htmlspecialchars( $bar );
		$sten = mysqli_real_escape_string($con, $_POST ['sten']);
    $sten = htmlspecialchars( $sten );
    $cromwell = mysqli_real_escape_string($con, $_POST ['cromwell']);
    $cromwell = htmlspecialchars( $cromwell );   
    $comet = mysqli_real_escape_string($con, $_POST ['comet']);
    $comet = htmlspecialchars( $comet );       
    $bren = mysqli_real_escape_string($con, $_POST ['bren']);
    $bren = htmlspecialchars( $bren );      
    $vickers = mysqli_real_escape_string($con, $_POST ['vickers']);
    $vickers = htmlspecialchars( $vickers );
    $lewis = mysqli_real_escape_string($con, $_POST ['lewis']);
    $lewis = htmlspecialchars( $lewis );
		$gold_needed = (10 * $enfield) + (15 * $delisle) + (30 * $bar) + (40 * $sten) + (800 * $cromwell) + (1200 * $comet) + (80 * $bren) + (120 * $vickers) + (160 * $lewis);
		
		if($enfield < 0 || $delisle < 0 || $bar < 0 || $sten < 0 || $cromwell < 0 || $comet < 0 || $bren < 0 || $vickers < 0 || $lewis < 0){
			echo("Musíš si kúpiť kladný počet!");
		}elseif($stats['gold'] < $gold_needed){
			echo("Nemáš dostatok zlata!");
		}else{
			$weapon['enfield'] += $enfield;
			$weapon['delisle'] += $delisle;
      $weapon['bar'] += $bar;
      $weapon['sten'] += $sten;
      $weapon['cromwell'] += $cromwell;
      $weapon['comet'] += $comet;
      $weapon['bren'] += $bren;
			$weapon['vickers'] += $vickers;
      $weapon['lewis'] += $lewis;     
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`enfield`='".$weapon['enfield']."',
										`delisle`='".$weapon['delisle']."',
                    `bar`='".$weapon['bar']."',
                    `sten`='".$weapon['sten']."',
                    `cromwell`='".$weapon['cromwell']."',
                    `comet`='".$weapon['comet']."',
                    `bren`='".$weapon['bren']."',
                    `vickers`='".$weapon['vickers']."',
                    `lewis`='".$weapon['lewis']."'             
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] -= $gold_needed;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Zakúpil si nové zbrane/tanky!");
		}
	}elseif(isset ($_POST ['sell'])){
		$enfield = mysqli_real_escape_string($con, $_POST ['enfield']);
    $enfield = htmlspecialchars( $enfield );
    $delisle = mysqli_real_escape_string($con, $_POST ['delisle']);
    $delisle = htmlspecialchars( $delisle );
    $bar = mysqli_real_escape_string($con, $_POST ['bar']);
    $bar = htmlspecialchars( $bar );
		$sten = mysqli_real_escape_string($con, $_POST ['sten']);
    $sten = htmlspecialchars( $sten );
    $cromwell = mysqli_real_escape_string($con, $_POST ['cromwell']);
    $cromwell = htmlspecialchars( $cromwell );   
    $comet = mysqli_real_escape_string($con, $_POST ['comet']);
    $comet = htmlspecialchars( $comet );       
    $bren = mysqli_real_escape_string($con, $_POST ['bren']);
    $bren = htmlspecialchars( $bren );      
    $vickers = mysqli_real_escape_string($con, $_POST ['vickers']);
    $vickers = htmlspecialchars( $vickers );
    $lewis = mysqli_real_escape_string($con, $_POST ['lewis']);
    $lewis = htmlspecialchars( $lewis );   
		$gold_gained = (4 * $enfield) + (6 * $delisle) + (12 * $bar)  + (16 * $sten)  + (320 * $cromwell)  + (480 * $comet) + (32 * $bren) + (48 * $vickers) + (64 * $lewis);
		
		if($enfield < 0 || $delisle < 0 || $bar < 0 || $sten < 0 || $cromwell < 0 || $sten < 0 || $bren < 0 || $comet < 0 || $vickers < 0 || $lewis < 0){
			echo("Musíš predať pozitívný počet predmetov!");
		}elseif($enfield > $weapon['enfield'] || $delisle > $weapon['delisle'] || $bar > $weapon['bar'] || $sten > $weapon['sten'] || $cromwell > $weapon['cromwell'] || $comet > $weapon['comet'] || $bren > $weapon['bren'] || $vickers > $weapon['vickers'] || $lewis > $weapon['lewis']){
			echo("Nemáš dostatok predmetov na predaj!");
		}else{
			$weapon['enfield'] -= $enfield;
			$weapon['delisle'] -= $delisle;
			$weapon['bar'] -= $bar;
      $weapon['sten'] -= $sten;
      $weapon['cromwell'] -= $cromwell;
      $weapon['comet'] -= $comet;
			$weapon['bren'] -= $bren;
      $weapon['vickers'] -= $vickers;
      $weapon['lewis'] -= $lewis;
			$update_weapons = mysqli_query($con,"UPDATE `weapon` SET
										`enfield`='".$weapon['enfield']."',
										`delisle`='".$weapon['delisle']."',
										`bar`='".$weapon['bar']."',
                    `sten`='".$weapon['sten']."',
                    `cromwell`='".$weapon['cromwell']."',
                    `comet`='".$weapon['comet']."',
                    `bren`='".$weapon['bren']."',
                    `vickers`='".$weapon['vickers']."',
                    `lewis`='".$weapon['lewis']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$stats['gold'] += $gold_gained;
			$update_gold = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."'
										WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			include("update_stats.php");
			echo("Predal si svoje predmety!");
		}
	}
  include("weapons/can_brit.php");
	
	?>                           <hr>
	<center><h2><?php echo $lang['FACTORY_BUY'];?></h2></center>     <hr>
	<br />
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	<table style="width:100%;"  cellpadding="2" cellspacing="8">
		<tr>
			<td>Avatar</td>
			<td><b><?php echo $lang['UNIT'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['PRICE'];?></b></td>
			<td><b><?php echo $lang['MAKE'];?></b></td>
      <td><b><?php echo $lang['YOU_CAN_MAKE'];?></b></td>
      <td><b><?php echo $lang['CLASS'];?></b></td>
      <td><b>DMG</b></td>
		</tr>
		
    <tr>
			<td><img src="images/enfield.png" title="Enfield"></td>
			<td><img src="images/enfieldman.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['enfield']); ?></td>
			<td>10  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="enfield"></td>
			<?php
			if($can1 > 0){
			?>
			<td>(<?php echo $can1; ?>)</td>
			<?php
			}
			?>
      <td>Puška</td>
      <td>50</td>
		</tr>
    <tr>
			<td><img src="images/delisle.png" title="Delisle CC"></td>
			<td><img src="images/enfieldman.png" title="<?php echo $lang['RIFLEMAN']; ?>"></td>
			<td><?php echo number_format($weapon['delisle']); ?></td>
			<td>15  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="delisle"></td>
			<?php
			if($can2 > 0){
			?>
			<td>(<?php echo $can2; ?>)</td>
			<?php
			}
			?>
      <td>Puška</td>
      <td>75</td>
		</tr>    
		<tr>
			<td><img src="images/bar.png" title="BAR"></td>
			<td><img src="images/soldier.png" title="<?php echo $lang['SOLDIER']; ?>"></td>
			<td><?php echo number_format($weapon['bar']); ?></td>
			<td>30  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="bar"></td>
			<?php
			if($can3 > 0){
			?>
			<td>(<?php echo $can3; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['SMG'];?></td>
      <td>150</td>
		</tr>
    
    
    <tr>
			<td><img src="images/sten.png" title="Sten"></td>
			<td><img src="images/soldier.png" title="<?php echo $lang['SOLDIER']; ?>"></td>
			<td><?php echo number_format($weapon['sten']); ?></td>
			<td>40  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="sten"></td>
			<?php
			if($can4 > 0){
			?>
			<td>(<?php echo $can4; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['SMG'];?>y</td>
      <td>200</td>
		</tr>
      <tr>      
			<td><img src="images/bren.png" title="Bren gun"></td>
			<td><img src="images/gunner.png" title="<?php echo $lang['MACHINEGUNNER']; ?>"></td>
			<td><?php echo number_format($weapon['bren']); ?></td>
			<td>80  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="bren"></td>
			<?php
			if($can7 > 0){
			?>
			<td>(<?php echo $can7; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS'];?></td>
      <td>300</td>
		</tr>
    <tr>
			<td><img src="images/vickers.png" title="Vickers"></td>
			<td><img src="images/gunner.png" title="<?php echo $lang['MACHINEGUNNER']; ?>"></td>
			<td><?php echo number_format($weapon['vickers']); ?></td>
			<td>120  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="vickers"></td>
			<?php
			if($can8 > 0){
			?>
			<td>(<?php echo $can8; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS'];?></td>
      <td>450</td>
		</tr>
     <tr>
			<td><img src="images/lewis.png" title="Lewis"></td>
			<td><img src="images/gunner.png" title="<?php echo $lang['MACHINEGUNNER']; ?>"></td>
			<td><?php echo number_format($weapon['lewis']); ?></td>
			<td>160  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="lewis"></td>
			<?php
			if($can9 > 0){
			?>
			<td>(<?php echo $can9; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MACHINEGUNS'];?></td>
      <td>600</td>
		</tr>
    
    <tr>
			<td><img src="images/cromwell.png"</td>
			<td>Cromwell</td>
			<td><?php echo number_format($weapon['cromwell']); ?></td>
			<td>800  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="cromwell"></td>
			<?php
			if($can5 > 0){
			?>
			<td>(<?php echo $can5; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MT']; ?></td>
      <td>1500</td>
		</tr>
    <tr>
			<td><img src="images/comet.png"></td>
			<td>Comet</td>
			<td><?php echo number_format($weapon['comet']); ?></td>
			<td>1200  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="comet"></td>
			<?php
			if($can6 > 0){
			?>
			<td>(<?php echo $can6; ?>)</td>
			<?php
			}
			?>
      <td><?php echo $lang['MT']; ?></td>
      <td>3000</td>
		</tr>
	</table>
  <center><button type="submit" name="buy" class="btn btn-success"><?php echo $lang['BUY'];?></button> </center>
	</form>
   
	<hr />
  <center><h2><?php echo $lang['FACTORY_SELL'];?></h2></center>   <hr>
 <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	<table style="width:100%;"  cellpadding="2" cellspacing="4">
		<tr>
			<td></td>
			<td><b><?php echo $lang['Subject'];?></b></td>
			<td><b><?php echo $lang['YOU_GOT'];?></b></td>
			<td><b><?php echo $lang['OFFER'];?></b></td>
			<td><b><?php echo $lang['SELL'];?></b></td>
		</tr>
		<tr>
			<td><img src="images/enfield.png"></td>
			<td>Enfield</td>
			<td><?php echo number_format($weapon['enfield']); ?></td>
			<td>4  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="enfield"></td>
		</tr>
    <tr>
			<td><img src="images/delisle.png"></td>
			<td>Delisle CC</td>
			<td><?php echo number_format($weapon['delisle']); ?></td>
			<td>6  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="delisle"></td>
		</tr>
    <tr>
			<td><img src="images/bar.png"></td>
			<td>BAR</td>
			<td><?php echo number_format($weapon['bar']); ?></td>
			<td>12  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="bar"></td>
		</tr>
		
    
		
    
    <tr>
			<td><img src="images/sten.png"></td>
			<td>Sten</td>
			<td><?php echo number_format($weapon['sten']); ?></td>
			<td>16  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="sten"></td>
		</tr>
      <tr>    
			<td><img src="images/bren.png"></td>
			<td>Bren</td>
			<td><?php echo number_format($weapon['bren']); ?></td>
			<td>32  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="bren"></td>
		</tr>
    <tr>
			<td><img src="images/vickers.png"></td>
			<td>Vickers</td>
			<td><?php echo number_format($weapon['vickers']); ?></td>
			<td>48  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="vickers"></td>
		</tr>
    <tr>
			<td><img src="images/lewis.png"></td>
			<td>Lewis</td>
			<td><?php echo number_format($weapon['lewis']); ?></td>
			<td>64  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="lewis"></td>
		</tr>
    <tr>
			<td><img src="images/cromwell.png"></td>
			<td>Cromwell</td>
			<td><?php echo number_format($weapon['cromwell']); ?></td>
			<td>320  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="cromwell"></td>
		</tr>
    <tr>
			<td><img src="images/comet.png"></td>
			<td>Comet</td>
			<td><?php echo number_format($weapon['comet']); ?></td>
			<td>480  <img src="images/gold.png" title="<?php echo $lang['GOLD']; ?>"></td>
			<td><input type="text" name="comet"></td>
		</tr>
   
    
	
	</table>
  <center><button type="submit" name="sell" class="btn btn-danger"><?php echo $lang['SELL'];?></button></center> 
	</form>
 
   <?php } } ?>  </div>


</article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer">
  <div class="art-footer-inner">
<p><a href="message.php"><?php echo $lang['CONTACT_ADMINISTRATORS.PHP'];?></a> | <a href="chat.php"><?php echo $lang['CHAT.PHP'];?></a> | <a href="me.php"><?php echo $lang['INVENTORY'];?></a></p>
<p>Copyright © 2016. All Rights Reserved.</p>
  </div>
</footer>

</div>


</body></html>