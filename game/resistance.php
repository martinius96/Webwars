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
<?php echo $lang['MENU_RESISTANCE.PHP'];?>
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
 
 ?><hr>
 <h2><a href="resistances.php">Prehľad klanov</a></h2><hr>
 
 <?php 
	if(isset($_POST['found'])){
		if($stats['gold'] >= 100000 && $stats['guild'] == 0 && $_POST['n'] != ""){
			$stats['gold'] -= 100000;
			mysqli_query($con,"INSERT INTO `guild` (`owner`,`owner2`,`name`,`food`,`gold`,`lcost`,`picture`) VALUES ('".$_SESSION['uid']."','".$stats['username']."','".addslashes($_POST['n'])."',0,0,1000,'')") or die (mysqli_error($con));
			$gid_get = mysqli_query($con,"SELECT MAX(`id`) FROM `guild`") or die(mysqli_error($con));
			$gid = mysqli_fetch_assoc($gid_get);
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."',`guild`='".$gid['MAX(`id`)']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			header("Location: resistance.php");
		}elseif($stats['gold'] < 100000){
			echo ("Nemáš dostatok zlata!");
		}elseif($_POST['n'] == ""){
			echo ("Musíš napísať meno!");
		}
	}
	if(isset($_POST['invite'])){
		$number = addslashes($_POST['nu']);
		if($stats['gold'] >= 1 && $stats['guild'] != 0 && $number != "" && is_numeric($number) && $number <= $id['MAX(`id`)'] && $number > 0){
			echo ("Tvoja pozvánka bola odoslaná!");
			$stats['gold'] -= 1;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			mysqli_query($con,"INSERT INTO `mailbox` (`id`,`number`,`title`,`text`) VALUES ('$number','".$_SESSION['uid']."','Invitation','<a href=resistance.php?".$guild['id'].">Vstúp</a> a guild ".addslashes($guild['name'])."!')") or die (mysqli_error($con));
			mysqli_query($con,"UPDATE `stats` SET `new`=1 WHERE `id`='$number'") or die(mysqli_error($con));
		}elseif($stats['gold'] < 1){
			echo ("Nemáš dostatok zlata!");
		}elseif($number == "" | !is_numeric($number) | $number > $id['MAX(`id`)'] | $number <= 0){
			echo ("Toto nieje dobre číslo starostu!");
		}
	}
	if(is_numeric($_SERVER['QUERY_STRING'])){
		$e = mysqli_query($con,"SELECT COUNT(`id`) FROM `guild` WHERE `id`='".$_SERVER['QUERY_STRING']."'") or die(mysqli_error($con));
		$ex = mysqli_fetch_assoc($e);
		if($stats['guild'] == 0 && $ex['COUNT(`id`)'] == 1){
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `guild`='".$_SERVER['QUERY_STRING']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			header("Location: resistance.php");
		}elseif($stats['guild'] != 0){
			echo ("Už si členom odboja.");
		}elseif($ex['COUNT(`id`)'] == 0){
			echo ("Tento odboj neexistuje!");
		}
	}
	if(isset($_POST['l'])){
		mysqli_query($con,"DELETE FROM `guild` WHERE `id`='".$guild['id']."'") or die(mysqli_error($con));
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `guild`=0 WHERE `guild`='".$guild['id']."'") or die(mysqli_error($con));
		header("Location: resistance.php");
	}
	if(isset($_POST['le'])){
		$update_stats = mysqli_query($con,"UPDATE `stats` SET `guild`=0 WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		header("Location: resistance.php");
	}
	if(isset($_POST['food'])){
		$f = addslashes($_POST['foo']);
		if($f != "" && is_numeric($f) && $f > 0 && $stats['food'] >= $f){
			echo ("Done!");
			$stats['food'] -= $f;
			$guild['food'] += $f;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			mysqli_query($con,"UPDATE `guild` SET `food`='".$guild['food']."' WHERE `id`='".$guild['id']."'") or die(mysqli_error($con));
		}elseif($f == "" | !is_numeric($f) | $f <= 0){
			echo ("Toto nieje dobré množstvo jedla!");
		}elseif($stats['food'] < $f){
			echo ("Nemáš dostatok jedla!");
		}
	}
	if(isset($_POST['gold'])){
		$g = addslashes($_POST['gol']);
		if($g != "" && is_numeric($g) && $g > 0 && $stats['gold'] >= $g){
			echo ("Done!");
			$stats['gold'] -= $g;
			$guild['gold'] += $g;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			mysqli_query($con,"UPDATE `guild` SET `gold`='".$guild['gold']."' WHERE `id`='".$guild['id']."'") or die(mysqli_error($con));
		}elseif($g == "" | !is_numeric($g) | $g <= 0){
			echo ("Toto nieje dobré množstvo zlata!");
		}elseif($stats['gold'] < $g){
			echo ("Nemáš dostatok zlata!");
		}
	}
	if(isset($_POST['level'])){
		if($guild['food'] >= $guild['lcost'] && $guild['gold'] >= $guild['lcost']){
			$guild['food'] -= $guild['lcost'];
			$guild['gold'] -= $guild['lcost'];
			$guild['level'] += 1;
			$guild['lcost'] += 1000;
			mysqli_query($con,"UPDATE `guild` SET `food`='".$guild['food']."',`gold`='".$guild['gold']."',`level`='".$guild['level']."',`lcost`='".$guild['lcost']."' WHERE `id`='".$guild['id']."'") or die(mysqli_error($con));
		}else{
			echo ("Odboj nemá dostatok surovín!");
		}
	}
	?>
	<center><h2>Odboj</h2></center>
	<br />
	<?php if ($stats['guild'] == 0){ ?>
		<center><table cellpadding="2" cellspacing="4">
			<tr>
				<td> Momentálne nie si v žiadnom odboji</td>
			</tr>
		</table>
		<table cellpadding="2" cellspacing="4">
			<tr>
			<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
					<td><img src="images/guild.png"></td>
					<td>Meno:</td>
					<td><input type="text" name="n" /></td>
					<td><button type="submit" name="found" class="btn btn-warning">Založiť odboj 100000 Zlata</button></td>
				</form>
			</tr>
		</table></center>
	<?php }else{ ?>
		<div style="position: relative;">
			<?php if ($guild['picture'] != ""){ ?>
				<img src=<?php echo $guild['picture']; ?> height="64" width="64" style="position: absolute; left: calc(50% - 32px); top: 32px;" />
			<?php } ?>
			<center><img src="images/shield.png" style="position: relative;" /></center>
		</div>
		<?php if ($_SESSION['uid'] == $guild['owner']){ ?>
			<table cellpadding="2" cellspacing="4">
				<tr>
					<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
						<td>Číslo:</td>
						<td><input type="text" name="nu" size="5" /></td>
						<td><input type="submit" name="invite" value="Pozvať (1 Zlato)" /></td>
					</form>
				</tr>
			</table>
		<?php } ?>
		<table cellpadding="2" cellspacing="4">
			<tr>
				<td><img src="images/guild.png"></td>
				<td>Meno:</td>
				<td><i><?php echo stripslashes($guild['name']); ?></i></td>
			</tr>
			<tr>
				<td><img src="images/level.png"></td>
				<td>Úroveň:</td>
				<td><i><?php echo $guild['level']; ?>/100</i></td>
				<?php if ($_SESSION['uid'] == $guild['owner']){ ?>
					<td>-</td>
				<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
						<td><input type="submit" name="level" value="Vylepšenie (<?php echo $guild['lcost']; ?> Food, <?php echo $guild['lcost']; ?> Gold)"/></td>
					</form>
				<?php }else{ ?>
					<td>-</td>
					<?php echo "<td>Vylepšenie (".$guild['lcost']." Food, ".$guild['lcost']." Gold)</td>"; ?>
				<?php } ?>
			</tr>
			<tr>
				<td><img src="images/owner.png"></td>
				<td>Vlastník:</td>
				<td><i><?php echo $guild['owner2']; ?></i></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><img src="images/food.png"></td>
				<td>Jedlo:</td>
				<td><i><font id="jedlo"><?php echo $guild['food']; ?></font></i></td>
				<script type="text/javascript" src="js/j.js"></script>
				<script type="text/javascript">
				setInterval(function(){$("#jedlo").load("js/j.php #jedlo")},1000);
				</script>
				<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
					<td><input type="text" name="foo" value="<?php echo $stats['food']; ?>" size="5" /></td>
					<td><button type="submit" name="food" class="btn btn-success">Prispieť</button></td>
				</form>
			</tr>
			<tr>
				<td><img src="images/gold.png"></td>
				<td>Zlato:</td>
				<td><i><font id="zlato"><?php echo $guild['gold']; ?></font></i></td>
				<script type="text/javascript" src="js/j.js"></script>
				<script type="text/javascript">
				setInterval(function(){$("#zlato").load("js/j.php #zlato")},1000);
				</script>
				<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
					<td><input type="text" name="gol" value="<?php echo $stats['gold']; ?>" size="5" /></td>
					<td><button type="submit" name="gold" class="btn btn-success">Prispieť</button></td>
				</form>
			</tr>
		</table>
		<br />
Členoia:
		<table cellpadding="2" cellspacing="4" style="outline: 1px solid #000000">
			<?php
			$mailbox = mysqli_query($con,"SELECT * FROM `stats` WHERE `guild`='".$guild['id']."' ORDER BY `rank` DESC,`id` ASC") or die(mysqli_error($con));
			while($line = mysqli_fetch_assoc($mailbox)){
				echo "<tr>";
				echo "<td><img src='images/mayor.png'></td>";
				echo "<td>Pozícia:</td>";
				echo "<td><i>" . $line['rank'] . "</i></td>";
				echo "<td>Číslo:</td>";
				echo "<td><i>" . $line['id'] . "</i></td>";
				echo "<td>Major:</td>";
				?><td><a <?php if($line['b4'] == 1){ ?>style="color: #2196F3;"<?php } ?> href="mayor.php?<?php echo $line['id']; ?>"><?php echo $line['username']; ?></a></td><?php
				echo "</tr>";
			}
			?>
		</table>
		<br />
		<?php if ($_SESSION['uid'] == $guild['owner']){ ?>
			<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
				<button type="submit" name="l" class="btn btn-danger">Opustiť</button>
			</form>
			
		<?php }else{ ?>
			<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
				<button type="submit" name="le" class="btn btn-danger">Opustiť</button>
			</form>
		<?php } ?>
		<br />
		<br />
	<?php } ?>
<?php
}else {

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