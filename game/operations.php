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
<?php echo $lang['MENU_OPERATIONS.PHP'];?>
</ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockcontent"><p><br></p></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">


<center> 
<?php 
 
 
 if(isset($_SESSION['uid'])){ 
 
if($user['fraction'] == 0){
	$image = "images/floor".$stats['floor'].".png";
	$name = "";
	$maxdefense = 0;
	$defense = 0;
	$attack = null;
	$attack4 = 0;
	if ($stats['floor'] == 1){ $name = "Operácia Dynamo"; $maxdefense = 1000; $defense = $maxdefense;?> 3. júl 1940 - Evakuácia expedičného zboru z Dunkerque vo Francúzsku. <?php }
	if ($stats['floor'] == 2){ $name = "Operácia Demon"; $maxdefense = 3000; $defense = $maxdefense;?> 24. apríl 1941 - Evakuácia Britského expedičného výskumného pluku spojeneckými jednotkami z Grécka. <?php }
	if ($stats['floor'] == 3){ $name = "Operácia Torch"; $maxdefense = 9000; $defense = $maxdefense;?> 8. november 1942 - Vylodenie spojeneckých vojsk na pobrežie Severnej Afriky. <?php }
	if ($stats['floor'] == 4){ $name = "Operácia Husky"; $maxdefense = 27000; $defense = $maxdefense;?> 9. jún 1943 - Invázia spojeneckých jednotiek na Sicíliu, cieľom bolo vyhnať jednotky Osi z ostrova. <br>Spojenci dokázali sledovať nepriateľské pozície, letectvo a taktiež aj lodnú dopravu. <?php }
	if ($stats['floor'] == 5){ $name = "Operácia Soapsuds"; $maxdefense = 81000; $defense = $maxdefense;?> 1. august 1943 - Bombardovanie rumunského mesta Ploiesti <?php }
	if ($stats['floor'] == 6){ $name = "Operácia Avalanche"; $maxdefense = 100000; $defense = $maxdefense;?> 9. september 1943 - Vylodenie spojencov pri Salerne. Následný útok na Neapol obojživelným spôsobom. <?php }
	if ($stats['floor'] == 7){ $name = "Operácia Shingle"; $maxdefense = 210000; $defense = $maxdefense;?> 22. január 1944 - Výsadok spojeneckých vojsk na Anziu, Nettune v Taliansku. <?php }
	if ($stats['floor'] == 8){ $name = "Operácia Clarion"; $maxdefense = 333000; $defense = $maxdefense;?> 	22. február 1945 - Letecká operácia a následné bombardovanie dopravného systému Nemecka. <?php }
  if ($stats['floor'] == 9){ $name = "Operácia Overlord"; $maxdefense = 1000000; $defense = $maxdefense;?> 6. jún 1944 - Vylodenie spojeneckých vojsk na pobreží v Normandii, najväčšia bitka nemeckým a amerických vojsk, ktorá rozhodovala o osude sveta. <?php }
	if ($stats['floor'] == 10){ $name = "---"; $maxdefense = 999999999; $defense = $maxdefense; }
	if(isset($_POST['tower1'])){
		if ($stats['floor'] >= 8 & (time() - $working['tyes']) >= 15 || (time() - $working['tyes']) >= 60){
			$working['tyes'] = time();
			$update_working = mysqli_query($con,"UPDATE `working` SET `tyes`='".$working['tyes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$attack = $stats['attack'];
			$attack1 = floor(rand($attack / 18,$attack / 3));
			$attack2 = floor(rand($attack / 18,$attack / 3));
			$attack3 = floor(rand($attack / 18,$attack / 3));
			if ($stats['floor'] >= 3){
				$ryuu = rand(1,2);
				if ($ryuu == 2){
					$attack5 = floor($attack / 9);
				}
			}
			if(isset($attack5)){
				$attack4 = $attack1 + $attack2 + $attack3 + $attack5;
			}else{
				$attack4 = $attack1 + $attack2 + $attack3;
			}
			if ($maxdefense - $attack4 <= 0){
				if ($stats['floor'] == 1){ echo ("Získal si Medailu cti!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 2){ echo ("Pripojila sa k tebe 2. pešia divízia!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 3){ echo ("Získal si ocenenie za boj!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 4){ echo ("Získal si Medailu vojny!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 5){ echo ("Získal si hodnosť Generála!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 6){ echo ("Získal si hodnosť Majora!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 7){ echo ("Získal si Medailu slávy!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 8){ echo ("Získal si Medailu IV. úrovne!"); $stats['rank'] += 100; }
        if ($stats['floor'] == 9){ echo ("Získal si Purpúrové srdce!"); $stats['rank'] += 100; }
				$stats['floor'] += 1;
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `rank`='".$stats['rank']."',`floor`='".$stats['floor']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				include("update_stats.php");
			}
		}else{
			if ($stats['floor'] >= 8){ $t = 15; }else{ $t = 60; }
			$zostava = ($t - (time() - $working['tyes']));
			echo ("Musíš počkať ".$zostava." sekúnd.");
		}
	}
	?>
	<center><h2>Operácie</h2></center>
	<br />
	<center>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/rank.png""></td>
			<td>Operácia:</td>
			<td><i><?php echo $stats['floor']; ?></i></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><h3><?php echo $name; ?></h3></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src=<?php echo $image; ?>></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><center><?php if ($maxdefense - $attack4 <= 0){ echo "Splnené"; } else { echo $maxdefense - $attack4."/".$maxdefense; } ?></center><progress value=<?php echo $maxdefense - $attack4; ?> max=<?php echo $maxdefense; ?>></progress></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<form method="POST" action="<?=($_SERVER['PHP_SELF'])?>">
				<td><input type="submit" name="tower1" value="Zaútočiť"></td>
			</form>
		</tr>
	</table>
	<?php if(isset($attack)){ ?>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/thompson.png"></td>
			<td>1. Útok:</td>
			<td><i><?php echo $attack1; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/thompson.png"></td>
			<td>2. Útok:</td>
			<td><i><?php echo $attack2; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/thompson.png"></td>
			<td>3. Útok:</td>
			<td><i><?php echo $attack3; ?></i></td>
		</tr>
		<?php if(isset($attack5)){ ?>
			<tr>
				<td><img src="images/divizia.png"></td>
				<td>4. Útok:</td>
				<td><i><?php echo $attack5; ?></i></td>
			</tr>
		<?php } ?>
	
</table>
	<?php } ?>
	</center>
<?php
}

                      
if($user['fraction'] == 1){
	$image = "images/flore".$stats['floor'].".png";
	$name = "";
	$maxdefense = 0;
	$defense = 0;
	$attack = null;
	$attack4 = 0;
	if ($stats['floor'] == 1){ $name = "Operácia Fall Weiss"; $maxdefense = 1000; $defense = $maxdefense; ?> 1. september 1939 - Začiatok obliehania Poľska - začiatok 2. svetovej vojny. <?php  }
	if ($stats['floor'] == 2){ $name = "Operácia Benelux"; $maxdefense = 3000; $defense = $maxdefense;?>  14. máj 1940 - Nemecko útočí na Francúzsko, ktoré zaskočila Blesková vojna Nemecka. Nemekco zaútočilo aj na Belgicko, Holandsko a Luxembursko. <?php }
	if ($stats['floor'] == 3){ $name = "Operácia Weserübung "; $maxdefense = 9000; $defense = $maxdefense;?> 9. apríl 1940 - Boje nemeckej armády s jednotkami Dánska a Nórska, Nemecko bitku vyhralo aj vďaka Kriegsmarine flotile. <?php }
	if ($stats['floor'] == 4){ $name = "Operácia Barbarossa"; $maxdefense = 27000; $defense = $maxdefense;?> 22. jún 1941 - Náročná operácia Nemecka, ktorá trvala do decembra. <br>Nemecká armáda muselaprejsť do obrany po neutíchajúcich a vyčerpavajúcich bojoch na východnom fronte. <?php }
	if ($stats['floor'] == 5){ $name = "Operácia Blitz"; $maxdefense = 81000; $defense = $maxdefense;?> 7. september 1940 - Prvé nálety Nemecka na Britániu. Bitka často označovaná ako Vojna o Britániu. <br>Aj v tejto bitke Nemekco využilo svoj povestný Blitz vojnový systém, pri ktorom bolo v Londýne usmrtených vyše 1200 ľudí. <?php }
	if ($stats['floor'] == 6){ $name = "Operácia Afrikakorps"; $maxdefense = 100000; $defense = $maxdefense;?> 16. február 1941 - Expedičný zbor Wehrmachtu, ktorý sa zúčastnil misií v Líbii a Severnej Afrike, najvýznamnejší predstaviteľ Rommel. <?php }
	if ($stats['floor'] == 7){ $name = "Operácia Bismarck"; $maxdefense = 210000; $defense = $maxdefense;?> 27. máj 1941 - Sesterská loď Tirpitzu sa zúčastnila v mnohých námorných bitkách. Bismarck bol potopený 27. mája 1941. <?php }
	if ($stats['floor'] == 8){ $name = "Operácia Kursk"; $maxdefense = 333000; $defense = $maxdefense;?> 5. júla 1943 - Najväčšia tanková bitka histórie pri meste Kursk na východnom fronte. <?php }
  if ($stats['floor'] == 9){ $name = "Operácia Stalingrad"; $maxdefense = 663000; $defense = $maxdefense;?> 21. augusta 1942 - Nemci sú na vrchole svojho ťaženia.<br> Postupujú na Kuvajt kvôli získaniu ropných polí. V ceste im už stojí iba jedna prekážka. --> Stalingrad. <?php }
	if ($stats['floor'] == 10){ $name = "---"; $maxdefense = 999999999; $defense = $maxdefense; }
	if(isset($_POST['tower1'])){
		if ($stats['floor'] >= 8 & (time() - $working['tyes']) >= 15 || (time() - $working['tyes']) >= 60){
			$working['tyes'] = time();
			$update_working = mysqli_query($con,"UPDATE `working` SET `tyes`='".$working['tyes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$attack = $stats['attack'];
			$attack1 = floor(rand($attack / 18,$attack / 3));
			$attack2 = floor(rand($attack / 18,$attack / 3));
			$attack3 = floor(rand($attack / 18,$attack / 3));
			if ($stats['floor'] >= 3){
				$ryuu = rand(1,2);
				if ($ryuu == 2){
					$attack5 = floor($attack / 9);
				}
			}
			if(isset($attack5)){
				$attack4 = $attack1 + $attack2 + $attack3 + $attack5;
			}else{
				$attack4 = $attack1 + $attack2 + $attack3;
			}
			if ($maxdefense - $attack4 <= 0){
				if ($stats['floor'] == 1){ echo ("Získal Medailu cti!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 2){ echo ("Získal podporu druhej tankovej divízie!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 3){ echo ("Získal si Medailu vojny!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 4){ echo ("Získal si hodnosť Seržanta!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 5){ echo ("Získal si Medailu Roty!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 6){ echo ("Získal si hodnosť Majora!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 7){ echo ("Získal si hodnosť Generála!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 8){ echo ("Získal si Medailu Slávy!"); $stats['rank'] += 100; }
        if ($stats['floor'] == 9){ echo ("Získal si Medailu boja!"); $stats['rank'] += 100; }
				$stats['floor'] += 1;
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `rank`='".$stats['rank']."',`floor`='".$stats['floor']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				include("update_stats.php");
			}
		}else{
			if ($stats['floor'] >= 8){ $t = 15; }else{ $t = 60; }
			$zostava = ($t - (time() - $working['tyes']));
			echo ("Musíš počkať ".$zostava." sekúnd.");
		}
	}
	?>
	<center><h2>Operácie</h2></center>
	<br />
	<center>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/rank.png"></td>
			<td>Operácia:</td>
			<td><i><?php echo $stats['floor']; ?></i></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><h3><?php echo $name; ?></h3></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src=<?php echo $image; ?>></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><center><?php if ($maxdefense - $attack4 <= 0){ echo "Splnené"; } else { echo $maxdefense - $attack4."/".$maxdefense; } ?></center><progress value=<?php echo $maxdefense - $attack4; ?> max=<?php echo $maxdefense; ?>></progress></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr><p>Copyright © 2016 NationWars</p>
			<form method="POST" action="<?=($_SERVER['PHP_SELF'])?>">
				<td><input type="submit" name="tower1" value="Zaútočiť"></td>
			</form>
		</tr>
	</table>
	<?php if(isset($attack)){ ?>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/mp44.png"></td>
			<td>1. Útok:</td>
			<td><i><?php echo $attack1; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/mp44.png"></td>
			<td>2. Útok:</td>
			<td><i><?php echo $attack2; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/mp44.png"></td>
			<td>3. Útok:</td>
			<td><i><?php echo $attack3; ?></i></td>
		</tr>
		<?php if(isset($attack5)){ ?>
			<tr>
				<td><img src="images/wehrmacht.png"></td>
				<td>4. Útok:</td>
				<td><i><?php echo $attack5; ?></i></td>
			</tr>
		<?php } ?>
	</table>
	<?php }} ?>
	</center>


  <?php
  if($user['fraction'] == 2){ //SLOVENSKO
	$image = "images/operacia".$stats['floor'].".png";
	$name = "";
	$maxdefense = 0;
	$defense = 0;
	$attack = null;
	$attack4 = 0;
	if ($stats['floor'] == 1){ $name = "Operácia Agde"; $maxdefense = 1000; $defense = $maxdefense; ?> 16. október 1939 - Sformovanie prvého československého pluku v Agde - južnom Francúzsku. <?php }
	if ($stats['floor'] == 2){ $name = "Operácia Montinga"; $maxdefense = 3000; $defense = $maxdefense;?>  5. jún 1940 - Presun našich vojst k Montinge a popri tom nasadené do boja. <?php }
	if ($stats['floor'] == 3){ $name = "Operácia Mobilizácia "; $maxdefense = 9000; $defense = $maxdefense;?> 22. jún 1941 - Nemecko vyhlasuje vojnu ZSSR a napadá ho. Začala sa naša skrytá mobilizácia síl. <?php }
	if ($stats['floor'] == 4){ $name = "Operácia Lipovec"; $maxdefense = 27000; $defense = $maxdefense;?> 22. júl 1941 - Pri boji o Lipovec utŕžila slovenská armáda väčšie straty. <?php }
	if ($stats['floor'] == 5){ $name = "Operácia Odplata"; $maxdefense = 81000; $defense = $maxdefense;?> 27. máj 1942 - Atenát paratušistov a najmä Gabčíka na Heydricha v Prahe. <?php }
	if ($stats['floor'] == 6){ $name = "Operácia Ovruč"; $maxdefense = 100000; $defense = $maxdefense;?> 16. november 1943 - Pri bojoch o ukrajinské mestečko Ovruč padol veliteľ 1. československého part. oddielu - J. Nálepka. <?php }
	if ($stats['floor'] == 7){ $name = "Operácia Liptovská Osada"; $maxdefense = 210000; $defense = $maxdefense;?> 25. júl 1944 - Prvá 11-členná partizánska skupian bola nasadená nad Liptovskou osadou.<br> Do konca vojny bolo vysadených až 53 takýchto skupín s počtom členov okolo 1200. <?php }
	if ($stats['floor'] == 8){ $name = "Operácia Sklabiňa"; $maxdefense = 333000; $defense = $maxdefense;?> 21. august 1944 - Partizánska skupina pod nadporučíkom Veličkom obsadila Sklabiňu a vyvesila československú zástavu. <?php }
  if ($stats['floor'] == 9){ $name = "Operácia SNP"; $maxdefense = 663000; $defense = $maxdefense;?> 29. august 1944 - Slovenské národné povstanie vypuklo v Banskej Bystrici. Toto pomenovanie ale dostalo až po vojne. <?php }
	if ($stats['floor'] == 10){ $name = "---"; $maxdefense = 999999999; $defense = $maxdefense; }
	if(isset($_POST['tower1'])){
		if ($stats['floor'] >= 8 & (time() - $working['tyes']) >= 15 || (time() - $working['tyes']) >= 60){
			$working['tyes'] = time();
			$update_working = mysqli_query($con,"UPDATE `working` SET `tyes`='".$working['tyes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$attack = $stats['attack'];
			$attack1 = floor(rand($attack / 18,$attack / 3));
			$attack2 = floor(rand($attack / 18,$attack / 3));
			$attack3 = floor(rand($attack / 18,$attack / 3));
			if ($stats['floor'] >= 3){
				$ryuu = rand(1,2);
				if ($ryuu == 2){
					$attack5 = floor($attack / 9);
				}
			}
			if(isset($attack5)){
				$attack4 = $attack1 + $attack2 + $attack3 + $attack5;
			}else{
				$attack4 = $attack1 + $attack2 + $attack3;
			}
			if ($maxdefense - $attack4 <= 0){
				if ($stats['floor'] == 1){ echo ("Získal Medailu cti!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 2){ echo ("Získal podporu druhej tankovej divízie!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 3){ echo ("Získal si Medailu vojny!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 4){ echo ("Získal si hodnosť Seržanta!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 5){ echo ("Získal si Medailu Roty!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 6){ echo ("Získal si hodnosť Majora!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 7){ echo ("Získal si hodnosť Generála!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 8){ echo ("Získal si Medailu Slávy!"); $stats['rank'] += 100; }
        if ($stats['floor'] == 9){ echo ("Získal si Medailu boja!"); $stats['rank'] += 100; }
				$stats['floor'] += 1;
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `rank`='".$stats['rank']."',`floor`='".$stats['floor']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				include("update_stats.php");
			}
		}else{
			if ($stats['floor'] >= 8){ $t = 15; }else{ $t = 60; }
			$zostava = ($t - (time() - $working['tyes']));
			echo ("Musíš počkať ".$zostava." sekúnd.");
		}
	}
	?>
	<center><h2>Operácie</h2></center>
	<br />
	<center>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/rank.png"></td>
			<td>Operácia:</td>
			<td><i><?php echo $stats['floor']; ?></i></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><h3><?php echo $name; ?></h3></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src=<?php echo $image; ?>></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><center><?php if ($maxdefense - $attack4 <= 0){ echo "Splnené"; } else { echo $maxdefense - $attack4."/".$maxdefense; } ?></center><progress value=<?php echo $maxdefense - $attack4; ?> max=<?php echo $maxdefense; ?>></progress></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<form method="POST" action="<?=($_SERVER['PHP_SELF'])?>">
				<td><input type="submit" name="tower1" value="Zaútočiť"></td>
			</form>
		</tr>
	</table>
	<?php if(isset($attack)){ ?>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/zk383.png"></td>
			<td>1. Útok:</td>
			<td><i><?php echo $attack1; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/zk383.png"></td>
			<td>2. Útok:</td>
			<td><i><?php echo $attack2; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/zk383.png"></td>
			<td>3. Útok:</td>
			<td><i><?php echo $attack3; ?></i></td>
		</tr>
		<?php if(isset($attack5)){ ?>
			<tr>
				<td><img src="images/wehrmacht.png"></td>
				<td>4. Útok:</td>
				<td><i><?php echo $attack5; ?></i></td>
			</tr>
		<?php } ?>
	</table>
	<?php }} ?>
	</center>






































  <?php
    if($user['fraction'] == 3){ //ZSSR
	$image = "images/operajca".$stats['floor'].".png";
	$name = "";
	$maxdefense = 0;
	$defense = 0;
	$attack = null;
	$attack4 = 0;
	if ($stats['floor'] == 1){ $name = "Operácia Poľsko"; $maxdefense = 1000; $defense = $maxdefense; ?> 17. september 1939  - ZSSR napadá Poľsko. <?php }
	if ($stats['floor'] == 2){ $name = "Operácia Zimná vojna"; $maxdefense = 3000; $defense = $maxdefense;?>  30. november 1939 - ZSSR sa účastní bojov v tzv. Zimnej vojne proti Fínsku a severským krajinám. <?php }
	if ($stats['floor'] == 3){ $name = "Operácia Japonsko "; $maxdefense = 9000; $defense = $maxdefense;?> 13. apríl 1941 - Dohoda o neútočení medzi ZSSR a Japonskom. <?php }
	if ($stats['floor'] == 4){ $name = "Operácia Obrana Matičky Rusy"; $maxdefense = 27000; $defense = $maxdefense;?> 22. jún 1941 - Nemecko bez akejkoľvej výzvy zaútočilo na Matičku Rus. Ako vlastenci im musíme čeliť v náročnej bitke!. <?php }
	if ($stats['floor'] == 5){ $name = "Operácia Sevastopoľ"; $maxdefense = 81000; $defense = $maxdefense;?>  30. október 1941 - Sevastopoľ sa stal jedným z mies, kde sa stali kľúčové bitky druhej svetovej vojny. <br> ZSSR čelila mocnosti Osi Nemecku a Rumunsku. <?php }
	if ($stats['floor'] == 6){ $name = "Operácia Charkov"; $maxdefense = 100000; $defense = $maxdefense;?> 12. mája 1942 - Druhá bitka o Charkov.<br> ZSSR bitku prehralo a Nemecku sa otvorili brány k Stalingradu, kde sa rozhodovalo o osude ľudstva. <?php }
	if ($stats['floor'] == 7){ $name = "Operácia Stalingrad"; $maxdefense = 210000; $defense = $maxdefense;?> 5. júl 1942 - Najväčšia bitka. Nazývaná aj bitka o osude ľudstva. <br> Nemecko zmohla najmä ruská zima. <?php }
	if ($stats['floor'] == 8){ $name = "Operácia Kursk"; $maxdefense = 333000; $defense = $maxdefense;?> 5. júl 1943 - Najväčšia tanková bitka počas druhej svetovej vojny. Pri meste Kursk. <?php }
  if ($stats['floor'] == 9){ $name = "Operácia Berlin"; $maxdefense = 663000; $defense = $maxdefense;?> 25. apríl 1945 - Posledná bitka druhej svetovej vojny v Európe o najvýznamnejšie mesto - Berlín. <?php }
	if ($stats['floor'] == 10){ $name = "---"; $maxdefense = 999999999; $defense = $maxdefense; }
	if(isset($_POST['tower1'])){
		if ($stats['floor'] >= 8 & (time() - $working['tyes']) >= 15 || (time() - $working['tyes']) >= 60){
			$working['tyes'] = time();
			$update_working = mysqli_query($con,"UPDATE `working` SET `tyes`='".$working['tyes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$attack = $stats['attack'];
			$attack1 = floor(rand($attack / 18,$attack / 3));
			$attack2 = floor(rand($attack / 18,$attack / 3));
			$attack3 = floor(rand($attack / 18,$attack / 3));
			if ($stats['floor'] >= 3){
				$ryuu = rand(1,2);
				if ($ryuu == 2){
					$attack5 = floor($attack / 9);
				}
			}
			if(isset($attack5)){
				$attack4 = $attack1 + $attack2 + $attack3 + $attack5;
			}else{
				$attack4 = $attack1 + $attack2 + $attack3;
			}
			if ($maxdefense - $attack4 <= 0){
				if ($stats['floor'] == 1){ echo ("Získal Medailu cti!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 2){ echo ("Získal podporu dívízie Červenej armády!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 3){ echo ("Získal si Medailu vojny!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 4){ echo ("Získal si hodnosť Seržanta!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 5){ echo ("Získal si Medailu Roty!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 6){ echo ("Získal si hodnosť Majora!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 7){ echo ("Získal si hodnosť Generála!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 8){ echo ("Získal si Medailu Slávy!"); $stats['rank'] += 100; }
        if ($stats['floor'] == 9){ echo ("Získal si Medailu boja!"); $stats['rank'] += 100; }
				$stats['floor'] += 1;
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `rank`='".$stats['rank']."',`floor`='".$stats['floor']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				include("update_stats.php");
			}
		}else{
			if ($stats['floor'] >= 8){ $t = 15; }else{ $t = 60; }
			$zostava = ($t - (time() - $working['tyes']));
			echo ("Musíš počkať ".$zostava." sekúnd.");
		}
	}
	?>
	<center><h2>Operácie</h2></center>
	<br />
	<center>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/rank.png"></td>
			<td>Operácia:</td>
			<td><i><?php echo $stats['floor']; ?></i></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><h3><?php echo $name; ?></h3></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src=<?php echo $image; ?>></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><center><?php if ($maxdefense - $attack4 <= 0){ echo "Splnené"; } else { echo $maxdefense - $attack4."/".$maxdefense; } ?></center><progress value=<?php echo $maxdefense - $attack4; ?> max=<?php echo $maxdefense; ?>></progress></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr><p>Copyright © 2016 NationWars</p>
			<form method="POST" action="<?=($_SERVER['PHP_SELF'])?>">
				<td><input type="submit" name="tower1" value="Zaútočiť"></td>
			</form>
		</tr>
	</table>
	<?php if(isset($attack)){ ?>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/pps41.png"></td>
			<td>1. Útok:</td>
			<td><i><?php echo $attack1; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/pps41.png"></td>
			<td>2. Útok:</td>
			<td><i><?php echo $attack2; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/pps41.png"></td>
			<td>3. Útok:</td>
			<td><i><?php echo $attack3; ?></i></td>
		</tr>
		<?php if(isset($attack5)){ ?>
			<tr>
				<td><img src="images/vojnik.png"></td>
				<td>4. Útok:</td>
				<td><i><?php echo $attack5; ?></i></td>
			</tr>
		<?php } ?>
	</table>
	<?php }} ?>
	</center>

   <?php
    if($user['fraction'] == 4){      // TALIANSKO
	$image = "images/operazione".$stats['floor'].".png";
	$name = "";
	$maxdefense = 0;
	$defense = 0;
	$attack = null;
	$attack4 = 0;
	if ($stats['floor'] == 1){ $name = "Vstup"; $maxdefense = 1000; $defense = $maxdefense; ?> 10. jún 1939  - Taliansko vstupuje oficiálne do vojny po kapitulácii Nórska. <br /> <?php }
	if ($stats['floor'] == 2){ $name = "Operácia Grécko"; $maxdefense = 3000; $defense = $maxdefense;?>  28. októbra 1940 - Taliansko zahájilo prvý útok na Grécko. <br /><?php }
	if ($stats['floor'] == 3){ $name = "Operácia Matapane "; $maxdefense = 9000; $defense = $maxdefense;?>29. marca 1941 - Námorná bitka Talianska proti Británii. Taliansko utrpelo obrovské škody na flotile.<br /> <?php }
	if ($stats['floor'] == 4){ $name = "Operácia výkrik"; $maxdefense = 27000; $defense = $maxdefense;?> 11. december 1941 - Taliansko spoločne s Nemeckom vyhlasujú vojnu USA. <br /><?php }
	if ($stats['floor'] == 5){ $name = "Operácia Sicília"; $maxdefense = 81000; $defense = $maxdefense;?>  10. júl 1943 - Spojenci zahájili vyloďovanie na Sicílii, prebiehajú neutíchajúce boje. <br> ZSSR čelila mocnosti Osi Nemecku a Rumunsku.<br /> <?php }
	if ($stats['floor'] == 6){ $name = "Koniec sa blíži"; $maxdefense = 100000; $defense = $maxdefense;?> 25. júl 1943 - Po neúspechu padá v Taliansku miestny režim. <br /><?php }
	if ($stats['floor'] == 7){ $name = "Kapitulácia"; $maxdefense = 210000; $defense = $maxdefense;?> 8. september 1943 - Taliansko zverejňuje kapituláciu, ktorá bola podpísaná 3. septembra . <br /><?php }
	if ($stats['floor'] == 8){ $name = "Operácia Rím"; $maxdefense = 333000; $defense = $maxdefense;?> 10. september 1943 - Dva dni po vyhlásení kapitulácie ešte hŕstka vojakov bojovala v Ríme proti spojencom, nakoniec sa museli vzdať.<br /> <?php }
  if ($stats['floor'] == 9){ $name = "Operácia Berlin"; $maxdefense = 663000; $defense = $maxdefense;?> 25. apríl 1945 - Posledná bitka druhej svetovej vojny, bitky v Berlíne sa zúčastnilo pár Talianov v odbojoch. <br /><?php }
	if ($stats['floor'] == 10){ $name = "---"; $maxdefense = 999999999; $defense = $maxdefense; }
	if(isset($_POST['tower1'])){
		if ($stats['floor'] >= 8 & (time() - $working['tyes']) >= 15 || (time() - $working['tyes']) >= 60){
			$working['tyes'] = time();
			$update_working = mysqli_query($con,"UPDATE `working` SET `tyes`='".$working['tyes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$attack = $stats['attack'];
			$attack1 = floor(rand($attack / 18,$attack / 3));
			$attack2 = floor(rand($attack / 18,$attack / 3));
			$attack3 = floor(rand($attack / 18,$attack / 3));
			if ($stats['floor'] >= 3){
				$ryuu = rand(1,2);
				if ($ryuu == 2){
					$attack5 = floor($attack / 9);
				}
			}
			if(isset($attack5)){
				$attack4 = $attack1 + $attack2 + $attack3 + $attack5;
			}else{
				$attack4 = $attack1 + $attack2 + $attack3;
			}
			if ($maxdefense - $attack4 <= 0){
				if ($stats['floor'] == 1){ echo ("Získal Medailu cti!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 2){ echo ("Získal podporu druhej tankovej divízie!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 3){ echo ("Získal si Medailu vojny!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 4){ echo ("Získal si hodnosť Seržanta!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 5){ echo ("Získal si Medailu Roty!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 6){ echo ("Získal si hodnosť Majora!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 7){ echo ("Získal si hodnosť Generála!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 8){ echo ("Získal si Medailu Slávy!"); $stats['rank'] += 100; }
        if ($stats['floor'] == 9){ echo ("Získal si Medailu boja!"); $stats['rank'] += 100; }
				$stats['floor'] += 1;
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `rank`='".$stats['rank']."',`floor`='".$stats['floor']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				include("update_stats.php");
			}
		}else{
			if ($stats['floor'] >= 8){ $t = 15; }else{ $t = 60; }
			$zostava = ($t - (time() - $working['tyes']));
			echo ("Musíš počkať ".$zostava." sekúnd.");
		}
	}
	?>
	<center><h2>Operácie</h2></center>
	<br />
	<center>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/rank.png"></td>
			<td>Operácia:</td>
			<td><i><?php echo $stats['floor']; ?></i></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><h3><?php echo $name; ?></h3></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src=<?php echo $image; ?>></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><center><?php if ($maxdefense - $attack4 <= 0){ echo "Splnené"; } else { echo $maxdefense - $attack4."/".$maxdefense; } ?></center><progress value=<?php echo $maxdefense - $attack4; ?> max=<?php echo $maxdefense; ?>></progress></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<form method="POST" action="<?=($_SERVER['PHP_SELF'])?>">
				<td><input type="submit" name="tower1" value="Zaútočiť"></td>
			</form>
		</tr>
	</table>
	<?php if(isset($attack)){ ?>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/kar98.png"></td>
			<td>1. Útok:</td>
			<td><i><?php echo $attack1; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/kar98.png"></td>
			<td>2. Útok:</td>
			<td><i><?php echo $attack2; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/kar98.png"></td>
			<td>3. Útok:</td>
			<td><i><?php echo $attack3; ?></i></td>
		</tr>
		<?php if(isset($attack5)){ ?>
			<tr>
				<td><img src="images/wehrmacht.png"></td>
				<td>4. Útok:</td>
				<td><i><?php echo $attack5; ?></i></td>
			</tr>
		<?php } ?>
	</table>
	<?php }} ?>
	</center>






  
   <?php
    if($user['fraction'] == 5){        //BRITI
	$image = "images/operations".$stats['floor'].".png";
	$name = "";
	$maxdefense = 0;
	$defense = 0;
	$attack = null;
	$attack4 = 0;
		if ($stats['floor'] == 1){ $name = "Operácia Dynamo"; $maxdefense = 1000; $defense = $maxdefense;?> 3. júl 1940 - Evakuácia expedičného zboru z Dunkerque vo Francúzsku. <?php }
	if ($stats['floor'] == 2){ $name = "Operácia Demon"; $maxdefense = 3000; $defense = $maxdefense;?> 24. apríl 1941 - Evakuácia Britského expedičného výskumného pluku spojeneckými jednotkami z Grécka. <?php }
	if ($stats['floor'] == 3){ $name = "Operácia Sea"; $maxdefense = 9000; $defense = $maxdefense;?> 29. marca 1940 - Boje britskej flotily s talianskou flotilou. Briti vyhrali námornú bitku s veľkým prehľadom. <?php }
	if ($stats['floor'] == 4){ $name = "Operácia Husky"; $maxdefense = 27000; $defense = $maxdefense;?> 9. jún 1943 - Invázia spojeneckých jednotiek na Sicíliu, cieľom bolo vyhnať jednotky Osi z ostrova. <br>Spojenci dokázali sledovať nepriateľské pozície, letectvo a taktiež aj lodnú dopravu. <?php }
	if ($stats['floor'] == 5){ $name = "Operácia Soapsuds"; $maxdefense = 81000; $defense = $maxdefense;?> 1. august 1943 - Bombardovanie rumunského mesta Ploiesti <?php }
	if ($stats['floor'] == 6){ $name = "Operácia Avalanche"; $maxdefense = 100000; $defense = $maxdefense;?> 9. september 1943 - Vylodenie spojencov pri Salerne. Následný útok na Neapol obojživelným spôsobom. <?php }
	if ($stats['floor'] == 7){ $name = "Operácia Shingle"; $maxdefense = 210000; $defense = $maxdefense;?> 22. január 1944 - Výsadok spojeneckých vojsk na Anziu, Nettune v Taliansku. <?php }
	if ($stats['floor'] == 8){ $name = "Operácia Clarion"; $maxdefense = 333000; $defense = $maxdefense;?> 	22. február 1945 - Letecká operácia a následné bombardovanie dopravného systému Nemecka. <?php }
  if ($stats['floor'] == 9){ $name = "Operácia Overlord"; $maxdefense = 1000000; $defense = $maxdefense;?> 6. jún 1944 - Vylodenie spojeneckých vojsk na pobreží v Normandii, najväčšia bitka nemeckým a amerických vojsk, ktorá rozhodovala o osude sveta. <?php }
	if ($stats['floor'] == 10){ $name = "---"; $maxdefense = 999999999; $defense = $maxdefense; }
?> 	<center><h2>Operácie</h2></center>
	<br />
	<center>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/rank.png"></td>
			<td>Operácia:</td>
			<td><i><?php echo $stats['floor']; ?></i></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><h3><?php echo $name; ?></h3></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src=<?php echo $image; ?>></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><center><?php if ($maxdefense - $attack4 <= 0){ echo "Splnené"; } else { echo $maxdefense - $attack4."/".$maxdefense; } ?></center><progress value=<?php echo $maxdefense - $attack4; ?> max=<?php echo $maxdefense; ?>></progress></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<form method="POST" action="<?=($_SERVER['PHP_SELF'])?>">
				<td><input type="submit" name="tower1" value="Zaútočiť"></td>
			</form>
		</tr>
	</table> <?php
  if(isset($_POST['tower1'])){
	if(isset($_POST['tower1'])){
		if ($stats['floor'] >= 8 & (time() - $working['tyes']) >= 15 || (time() - $working['tyes']) >= 60){
			$working['tyes'] = time();
			$update_working = mysqli_query($con,"UPDATE `working` SET `tyes`='".$working['tyes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$attack = $stats['attack'];
			$attack1 = floor(rand($attack / 18,$attack / 3));
			$attack2 = floor(rand($attack / 18,$attack / 3));
			$attack3 = floor(rand($attack / 18,$attack / 3));
			if ($stats['floor'] >= 3){
				$ryuu = rand(1,2);
				if ($ryuu == 2){
					$attack5 = floor($attack / 9);
				}
			}
			if(isset($attack5)){
				$attack4 = $attack1 + $attack2 + $attack3 + $attack5;
			}else{
				$attack4 = $attack1 + $attack2 + $attack3;
			}
			if ($maxdefense - $attack4 <= 0){
				if ($stats['floor'] == 1){ echo ("Získal Medailu cti!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 2){ echo ("Získal podporu druhej tankovej divízie!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 3){ echo ("Získal si Medailu vojny!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 4){ echo ("Získal si hodnosť Seržanta!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 5){ echo ("Získal si Medailu Roty!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 6){ echo ("Získal si hodnosť Majora!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 7){ echo ("Získal si hodnosť Generála!"); $stats['rank'] += 100; }
				if ($stats['floor'] == 8){ echo ("Získal si Medailu Slávy!"); $stats['rank'] += 100; }
        if ($stats['floor'] == 9){ echo ("Získal si Medailu boja!"); $stats['rank'] += 100; }
				$stats['floor'] += 1;
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `rank`='".$stats['rank']."',`floor`='".$stats['floor']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				include("update_stats.php");
			}
		}else{
			if ($stats['floor'] >= 8){ $t = 15; }else{ $t = 60; }
			$zostava = ($t - (time() - $working['tyes']));
			echo ("Musíš počkať ".$zostava." sekúnd.");
		}
	}
	?>
		
	<?php if(isset($attack)){ ?>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/m1garand.png"></td>
			<td>1. Útok:</td>
			<td><i><?php echo $attack1; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/m1garand.png"></td>
			<td>2. Útok:</td>
			<td><i><?php echo $attack2; ?></i></td>
		</tr>
		<tr>
			<td><img src="images/m1garand.png"></td>
			<td>3. Útok:</td>
			<td><i><?php echo $attack3; ?></i></td>
		</tr>
		<?php if(isset($attack5)){ ?>
			<tr>
				<td><img src="images/t34.png"></td>
				<td>4. Útok:</td>
				<td><i><?php echo $attack5; ?></i></td>
			</tr>
		<?php } ?>
	</table>
	<?php }}}}else {

echo $lang['YOU_MUST_BE_LOGGED_IN_TO_VIEW_THIS_PAGE'];  }
?>    
                </div>


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