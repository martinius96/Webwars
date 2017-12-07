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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
<?php echo $lang['MENU_PRODUCTION.PHP'];?>
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
 
  if($user['fraction'] == 0){            // USA
 include ('qok/qok_usa.php');
 include ('main/usa.php');
 }?>
<?php
 if($user['fraction'] == 1){
   include ('qok/qok_ger.php');
    include ('main/ger.php');
 }?>
<?php
 if($user['fraction'] == 2){ 
 
    include ('qok/qok_svk.php');
     include ('main/svk.php');
 }?>
<?php
 if($user['fraction'] == 3){
     include ('qok/qok_zssr.php');
      include ('main/zssr.php');
 }?>
<?php
 if($user['fraction'] == 4){
   include ('qok/qok_ita.php');
    include ('main/ita.php');
 
 }?>
<?php
 if($user['fraction'] == 5){
 
   include ('qok/qok_brit.php');
    include ('main/brit.php');
 
 }
 if(isset($_POST['quest']) && $stats['qok'] == 1){
  include ('qok/qok_1.php');
		} 
 $rp = 1;
	if(isset($_POST['farmer'])){
		if($stats['battery'] >= 5 && $timer['ftime'] == 0 && $unit['farmer'] > 0 | $unit['tfarmer'] > 0 | $unit['fisherman'] > 0){
			echo $lang['FARMERS_START_THEIR_JOB'];
			$rp = 0;
			$fzarobok = 0;
			$ftime = time();
			$working['fyes'] = $ftime;
			$working['fwork'] = $unit['farmer'];
			$working['tfwork'] = $unit['tfarmer'];
			$working['fishermanwork'] = $unit['fisherman'];
			$stats['battery'] -= 5;
			$stats['rank'] += 2;
			$timer['ftime'] = 1;
			$update_working = mysqli_query($con,"UPDATE `working` SET `fyes`='".$working['fyes']."',`fwork`='".$working['fwork']."',`tfwork`='".$working['tfwork']."',`fishermanwork`='".$working['fishermanwork']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_timer = mysqli_query($con,"UPDATE `timer` SET `ftime`='".$timer['ftime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			if ($stats['quest'] == 2 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
		}elseif((time() - $working['fyes']) >= 300 && $timer['ftime'] == 1){
		$fzarobok = 2*$unit['farmer']+5*$unit['tfarmer']+6*$unit['fisherman'];
			echo $lang['YOU_GET'].' '.$fzarobok.' '.$lang['OF_FOOD'];
			$rp = 0;
			$ftime = 0;
			$working['fyes'] = $ftime;
			$working['fwork'] = 0;
			$working['tfwork'] = 0;
			$working['fishermanwork'] = 0;
			$stats['food'] += $fzarobok;
			$stats['rank'] += 1;
			$fzarobok = 0;
			$timer['ftime'] = 0;
			$update_working = mysqli_query($con,"UPDATE `working` SET `fyes`='".$working['fyes']."',`fwork`='".$working['fwork']."',`tfwork`='".$working['tfwork']."',`fishermanwork`='".$working['fishermanwork']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_timer = mysqli_query($con,"UPDATE `timer` SET `ftime`='".$timer['ftime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			if ($stats['quest'] == 3 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
		}elseif($unit['farmer'] == 0 && $unit['tfarmer'] == 0 && $timer['ftime'] == 0){
			echo $lang['YOU_DONT_HAVE_ANY_FARMER'];
			$rp = 0;
		}elseif($stats['battery'] < 5 && $timer['ftime'] == 0){
			echo $lang['YOU_DONT_HAVE_BATTERY'];
			$rp = 0;
		}else{
			$zostava = (300 - (time() - $working['fyes']));
			 echo $lang['YOU_MUST_WAIT'].' '.$zostava.' '.$lang['SECONDS'];
			$rp = 0;
		}
	}
	if(isset($_POST['miner'])){
		if($stats['battery'] >= 5 && $timer['mtime'] == 0 && $unit['worker'] > 0){
			echo $lang['MINERS_START_THEIR_JOB'];
			$rp = 0;
			$mzarobok = 0;
			$mtime = time();
			$working['myes'] = $mtime;
			$working['mwork'] = $unit['worker'];
			$stats['battery'] -= 5;
			$stats['rank'] += 2;
			$timer['mtime'] = 1;
			$update_working = mysqli_query($con,"UPDATE `working` SET `myes`='".$working['myes']."',`mwork`='".$working['mwork']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_timer = mysqli_query($con,"UPDATE `timer` SET `mtime`='".$timer['mtime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			if ($stats['quest'] == 5 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
		}elseif((time() - $working['myes']) >= 300 && $timer['mtime'] == 1){
			$mzarobok = 5*$unit['worker'];
		  echo $lang['YOU_GET'].' '.$mzarobok.' '.$lang['OF_GOLD'];
			$rp = 0;
			$mtime = 0;
			$working['myes'] = $mtime;
			$working['mwork'] = 0;
			$stats['gold'] += $mzarobok;
			$stats['rank'] += 1;
			$mzarobok = 0;
			$timer['mtime'] = 0;
			$update_working = mysqli_query($con,"UPDATE `working` SET `myes`='".$working['myes']."',`mwork`='".$working['mwork']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_timer = mysqli_query($con,"UPDATE `timer` SET `mtime`='".$timer['mtime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			if ($stats['quest'] == 6 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
		}elseif($unit['worker'] == 0 && $timer['mtime'] == 0){
			echo $lang['YOU_DONT_HAVE_ANY_MINER'];
			$rp = 0;
		}elseif($stats['battery'] < 5 && $timer['mtime'] == 0){
			echo $lang['YOU_DONT_HAVE_BATTERY'];
			$rp = 0;
		}else{
			$zostava = (300 - (time() - $working['myes']));
			 echo $lang['YOU_MUST_WAIT'].' '.$zostava.' '.$lang['SECONDS'];
			$rp = 0;
		}
	}
	if(isset($_POST['fskip'])){
		if((time() - $working['fyes']) >= 300){
		echo $lang['FARMERS_ALREADY_END_THEIR_JOB'];
			$rp = 0;
		}elseif($stats['battery'] >= 5){
		$fzarobok = 2*$unit['farmer']+5*$unit['tfarmer']+6*$unit['fisherman'];
		echo $lang['YOU_GET'].' '.$fzarobok.' '.$lang['OF_FOOD'];
			$rp = 0;
			$ftime = 0;
			$working['fyes'] = $ftime;
			$working['fwork'] = 0;
			$working['tfwork'] = 0;
			$working['fishermanwork'] = 0;
			$stats['food'] += $fzarobok;
			$fzarobok = 0;
			$stats['battery'] -= 5;
			$stats['rank'] += 3;
			$timer['ftime'] = 0;
			$update_working = mysqli_query($con,"UPDATE `working` SET `fyes`='".$working['fyes']."',`fwork`='".$working['fwork']."',`tfwork`='".$working['tfwork']."',`fishermanwork`='".$working['fishermanwork']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_timer = mysqli_query($con,"UPDATE `timer` SET `ftime`='".$timer['ftime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			if ($stats['quest'] == 3 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
		}else{
			echo $lang['YOU_DONT_HAVE_BATTERY'];
			$rp = 0;
		}
	}
	if(isset($_POST['mskip'])){
		if((time() - $working['myes']) >= 300){
			echo $lang['MINERS_ALREADY_END_THEIR_JOB'];
			$rp = 0;
		}elseif($stats['battery'] >= 5){
			$mzarobok = 5*$unit['worker'];
			echo $lang['YOU_GET'].' '.$mzarobok.' '.$lang['OF_GOLD'];
			$rp = 0;
			$mtime = 0;
			$working['myes'] = $mtime;
			$working['mwork'] = 0;
			$stats['gold'] += $mzarobok;
			$mzarobok = 0;
			$stats['battery'] -= 5;
			$stats['rank'] += 3;
			$timer['mtime'] = 0;
			$update_working = mysqli_query($con,"UPDATE `working` SET `myes`='".$working['myes']."',`mwork`='".$working['mwork']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_timer = mysqli_query($con,"UPDATE `timer` SET `mtime`='".$timer['mtime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			if ($stats['quest'] == 6 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
		}else{
		echo $lang['YOU_DONT_HAVE_BATTERY'];
			$rp = 0;
		}
	}
     
     
    
?>
  <center>
<table width="100%" cellpadding="2" cellspacing="4" >
<tr>
<td><img src="images/quest.png"></td>
<td><?php echo $lang['TASK'];?>:</td>
<td><i><font color="#FF0000"><?php echo $quest; ?></font></i></td>
<td><?php echo $lang['REWARD'];?>:</td>
<td><i><font color="#FF0000"><?php echo $questr; ?></font></i></td>
<?php if ($stats['qok'] == 1){ ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<td><input type="submit" name="quest" value="<?php echo $lang['DONE'];?>"/></td>
</form>
<?php } ?>
</tr>
</table></center>
  
  <table width="100%" > <tr><td><center><h2><?php echo $lang['FARMER'];?>+<?php echo $lang['T_FARMER'];?>+ <?php echo $lang['FISHERMAN'];?> </h2>
  <a href="faq/farmer.php"><img src="images/farmer.png" width=32px height=32px></a> <a href="faq/tfarmer.php"><img src="images/tfarmer.png" width=32px height=32px></a><a href="faq/fisherman.php"><img src="images/fisherman.png" width=32px height=32px></a>
  </center></td> </tr>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<?php
				if($timer['ftime'] == 0){?>
				<tr>	<td><center><button type="submit" name="farmer" class="btn btn-info"><?php echo $lang['WORK_5%_BATTERY'];?></button></center></td></tr><?php
				}else{?>
					<tr><td><center><button type="submit" name="farmer" class="btn btn-warning"><?php echo $lang['CHECK'];?></button></center></td></tr><?php
					if((time() - $working['fyes']) < 300){?>
					<tr>	<td><center><button type="submit" name="fskip" class="btn btn-danger"><?php echo $lang['SKIP_5%_BATTERY'];?></button></center></td></tr>
						<td><center><img src="images/g.gif"><center></td><?php
					}
				}
				?>
</form> </table>
<table width="100%"><tr><td><center><h2><?php echo $lang['MINER'];?> </h2><a href="faq/miner.php"><img src="images/miner.png" width=32px height=32px></a></center></td> </tr><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<?php
				if($timer['mtime'] == 0){?>
				<tr>	<td><center><button type="submit" name="miner" class="btn btn-info"><?php echo $lang['WORK_5%_BATTERY'];?></button></center></td></tr><?php
				}else{?>
				<tr>	<td><center><button type="submit" name="miner" class="btn btn-warning"><?php echo $lang['CHECK'];?></button></center></td></tr><?php
					if((time() - $working['myes']) < 300){?>
				<tr>		<td><center><button type="submit" name="mskip" class="btn btn-danger"><?php echo $lang['SKIP_5%_BATTERY'];?></button></center></td></tr>
						<td><center><img src="images/g.gif"></center></td><?php
					}
				}
				?>
			</form></table>
  
      <?php
     }else {

echo $lang['YOU_MUST_BE_LOGGED_IN_TO_VIEW_THIS_PAGE'];   }
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