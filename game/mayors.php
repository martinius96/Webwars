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
    <title><?php echo $lang['MINIGAME'];?></title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="css/style.ie7.css" media="screen" /><![endif]-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
<?php echo $lang['MENU_MAYORS.PHP'];?>
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
 
  if(isset($_POST['attack2'])){
		if($user['fraction'] == $attacked_user['fraction']){             
			echo("Nemôžeš zaútočiť na svoju frakciu!");                 
		}$a = $user['fraction'];
$b = $attacked_user['fraction'];
$err = 'Nemôžeš zaútočiť na spojeneckú frakciu';
if ($a == 0 && ($b == 3 || $b == 5)) {echo $err;}
if ($a == 1 && ($b == 2 || $b == 4)) {echo $err;}
if ($a == 2 && ($b == 1 || $b == 4)) {echo $err;}
if ($a == 3 && ($b == 0 || $b == 5)) {echo $err;}
if ($a == 4 && ($b == 1 || $b == 2)) {echo $err;}
if ($a == 5 && ($b == 0 || $b == 3)) {echo $err;}
    
		elseif($stats['battery'] >= 10 && $timer['atime'] == 0 && $stats['attack'] >= 10 && $_POST['attack1'] != "" && $_POST['attack1'] != $_SESSION['uid'] && is_numeric($_POST['attack1']) && $_POST['attack1'] <= $id['MAX(`id`)'] && $_POST['attack1'] > 0){
			echo("Bojovníci začali útok!");
			$azarobok1 = 0;
			$azarobok2 = 0;
			$atime = time();
			$working['ayes'] = $atime;
			$stats['battery'] -= 10;
			$stats['rank'] += 4;
			$timer['atime'] = 1;
			$info1 = mysqli_query($con,"SELECT `id` FROM `stats` WHERE `id`='".$_POST['attack1']."'") or die(mysqli_error($con));
			$info2 = mysqli_fetch_assoc($info1);
			$info3 = $info2['id'];
			$update_working = mysqli_query($con,"UPDATE `working` SET `ayes`='".$working['ayes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_timer = mysqli_query($con,"UPDATE `timer` SET `atime`='".$timer['atime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$update_ranking = mysqli_query($con,"UPDATE `ranking` SET `number`='".$info3."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		}elseif((time() - $working['ayes']) >= 600 && $timer['atime'] == 1){
			$info1 = mysqli_query($con,"SELECT `number` FROM `ranking` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$info2 = mysqli_fetch_assoc($info1);
			$info3 = $info2['number'];
			$info4 = mysqli_query($con,"SELECT `defense`,`food`,`gold` FROM `stats` WHERE `id`='".$info3."'") or die(mysqli_error($con));
			$info5 = mysqli_fetch_assoc($info4);
			if($stats['attack'] > $info5['defense']){
				$azarobok1 = round($info5['food'] / 2);
				$azarobok2 = round($info5['gold'] / 2);
				echo("Získal si ".$azarobok1." jedla a ".$azarobok2." zlata!");
				$atime = 0;
				$working['ayes'] = $atime;
				$stats['food'] += $azarobok1;
				$stats['gold'] += $azarobok2;
				if($azarobok1 > 0){
					$stats['rank'] += 1;
				}
				if($azarobok2 > 0){
					$stats['rank'] += 1;
				}
				$info5['food'] -= $azarobok1;
				$info5['gold'] -= $azarobok2;
				$azarobok1 = 0;
				$azarobok2 = 0;
				$timer['atime'] = 0;
				$update_working = mysqli_query($con,"UPDATE `working` SET `ayes`='".$working['ayes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$info5['food']."',`gold`='".$info5['gold']."' WHERE `id`='".$info3."'") or die(mysqli_error($con));
				$update_timer = mysqli_query($con,"UPDATE `timer` SET `atime`='".$timer['atime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			}elseif($stats['attack'] <= $info5['defense']){
				echo("Bojovníci sa vzdali!");
				$atime = 0;
				$working['ayes'] = $atime;
				$timer['atime'] = 0;
				$update_working = mysqli_query($con,"UPDATE `working` SET `ayes`='".$working['ayes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				$update_timer = mysqli_query($con,"UPDATE `timer` SET `atime`='".$timer['atime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			}
		}elseif($timer['atime'] == 0){
			if($stats['attack'] == 0){
				echo("Nemáš žiaden útok!");
			}elseif($stats['battery'] < 10){
				echo("Nemáš dostatok baterky!");
			}elseif($_POST['attack1'] == "" | $_POST['attack1'] == $_SESSION['uid'] | !is_numeric($_POST['attack1']) | $_POST['attack1'] > $id['MAX(`id`)'] | $_POST['attack1'] <= 0){
				echo ("Toto nieje dobré ID majora!");
			}
		}else{
			$zostava = (600 - (time() - $working['ayes']));
			echo("Musíš počkať ".$zostava." sekúnd.");
		}
	}     
	if(isset($_POST['askip'])){
		if((time() - $working['ayes']) >= 600){
			echo("Bojovníci už skončili svoj útok!");
		}elseif($stats['battery'] >= 10){
			$info1 = mysqli_query($con,"SELECT `number` FROM `ranking` WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			$info2 = mysqli_fetch_assoc($info1);
			$info3 = $info2['number'];
			$info4 = mysqli_query($con,"SELECT `defense`,`food`,`gold` FROM `stats` WHERE `id`='".$info3."'") or die(mysqli_error($con));
			$info5 = mysqli_fetch_assoc($info4);
			if($stats['attack'] > $info5['defense']){
				$azarobok1 = round($info5['food'] / 2);
				$azarobok2 = round($info5['gold'] / 2);
				echo("Získal si ".$azarobok1." jedla a ".$azarobok2." zlata!");
				$atime = 0;
				$working['ayes'] = $atime;
				$stats['food'] += $azarobok1;
				$stats['gold'] += $azarobok2;
				if($azarobok1 > 0){
					$stats['rank'] += 1;
				}
				if($azarobok2 > 0){
					$stats['rank'] += 1;
				}
				$info5['food'] -= $azarobok1;
				$info5['gold'] -= $azarobok2;
				$azarobok1 = 0;
				$azarobok2 = 0;
				$stats['battery'] -= 10;
				$stats['rank'] += 4;
				$timer['atime'] = 0;
				$update_working = mysqli_query($con,"UPDATE `working` SET `ayes`='".$working['ayes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$info5['food']."',`gold`='".$info5['gold']."' WHERE `id`='".$info3."'") or die(mysqli_error($con));
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));//new
				$update_timer = mysqli_query($con,"UPDATE `timer` SET `atime`='".$timer['atime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			}elseif($stats['attack'] <= $info5['defense']){
				echo("Bojovníci sa vzdali!");
				$atime = 0;
				$working['ayes'] = $atime;
				$stats['battery'] -= 10;
				$stats['rank'] += 4;
				$timer['atime'] = 0;
				$update_working = mysqli_query($con,"UPDATE `working` SET `ayes`='".$working['ayes']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				$update_stats = mysqli_query($con,"UPDATE `stats` SET `battery`='".$stats['battery']."',`rank`='".$stats['rank']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));//new
				$update_timer = mysqli_query($con,"UPDATE `timer` SET `atime`='".$timer['atime']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			}
		}else{
			echo("Nemáš dostatok baterky!");
		}
	}
	?>
	<center><h2>Majori</h2></center>
	<br />
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<td><input type="text" name="attack1" placeholder='Napíš ID majora'></td>
		<?php
		if($timer['atime'] == 0){?>
			<td><button type="submit" name="attack2" class="btn btn-success">Zaútočiť (10% Batérie)</button></td><?php
		}else{?>
			<td><button type="submit" name="attack2" class="btn btn-warning">Skontrolovať</button></td><?php
			if((time() - $working['ayes']) < 600){?>
				<td><button type="submit" name="askip" class="btn btn-danger">Preskočiť (10% Batérie)</button></td><?php
			}
		}
		?>
	</form>
	
	<table>
<thead><tr><th>Body</th><th>Frakcia</th><th>Major</th></tr>
<tbody> 


<?php
 	$mayors = mysqli_query($con,"SELECT `rank`,`id` FROM `stats` WHERE `rank`>='0' ORDER BY `rank` DESC,`id` ASC LIMIT 5") or die(mysqli_error($con));
		$rank = 1;
		while($line = mysqli_fetch_assoc($mayors)){
			echo "<tr>";
			echo "<td><i>" . $rank . ". (" . $line['rank'] . ")" . "</i></td>";
			$rank++; 
			$get_mayor = mysqli_query($con,"SELECT * FROM `user` WHERE `id`='".$line['id']."'") or die(mysqli_error($con));
			$mayor = mysqli_fetch_assoc($get_mayor);
			?><td><center><img src="images/fraction<?php echo $mayor['fraction']; ?>.png" style="width: 30px; height: 32px;"/></center</td><td><i><a  href="mayor.php?<?php echo $line['id']; ?>"><?php echo $mayor['username']; ?></a></i></td></td><?php
		
			echo "</tr>";
		}  ?> </tbody></table>
 
 
 
 
 <?php }else {

echo $lang['YOU_MUST_BE_LOGGED_IN_TO_VIEW_THIS_PAGE']; }
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


















	
