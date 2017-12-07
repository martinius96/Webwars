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
<?php echo $lang['MENU_SHOP.PHP'];?>
</ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockcontent"><p><br></p></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">


 
<?php 
 
 
 if(isset($_SESSION['uid'])){ 
 
    
	if(isset($_POST['offer'])){
		if(is_numeric($_POST['f']) && is_numeric($_POST['g'])){
			if($_POST['f'] < 0 || $_POST['g'] < 0){
				echo "You must offer a positive number of food and gold!";
			}else{
				if($_POST['option'] == "0"){
					if($stats['food'] < $_POST['f']){
						echo"You dont have enough food!";
					}else{
						echo"Done!";
						$stats['food'] -= $_POST['f'];
						mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
						mysqli_query($con,"INSERT INTO `trade` (`id`,`type`,`food`,`gold`) VALUES ('".$stats['id']."','".$_POST['option']."','".$_POST['f']."','".$_POST['g']."')") or die (mysqli_error($con));
					}
				}else{
					if($stats['gold'] < $_POST['g']){
						echo"You dont have enough gold!";
					}else{
						echo"Done!";
						$stats['gold'] -= $_POST['g'];
						mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
						mysqli_query($con,"INSERT INTO `trade` (`id`,`type`,`food`,`gold`) VALUES ('".$stats['id']."','".$_POST['option']."','".$_POST['f']."','".$_POST['g']."')") or die (mysqli_error($con));
					}
				}
			}
		}else{
			echo"You must offer a positive number of food and gold!";
		}
	}
	
	
	if($_SERVER['QUERY_STRING'] > 0){
		$veci = mysqli_query($con,"SELECT * FROM `trade` WHERE `number`='".$_SERVER['QUERY_STRING']."'") or die(mysqli_error($con));
		$vecii = mysqli_fetch_assoc($veci);
		$mayorik = mysqli_query($con,"SELECT * FROM `stats` WHERE `id`='".$vecii['id']."'") or die(mysqli_error($con));
		$mayorikk = mysqli_fetch_assoc($mayorik);
		if($vecii['type'] == 0 && $stats['gold'] >= $vecii['gold'] && $vecii['id'] != $stats['id']){
			echo"Done!";
			$mayorikk['gold'] += $vecii['gold'];
			$stats['food'] += $vecii['food'];
			$stats['gold'] -= $vecii['gold'];
			mysqli_query/*FROM za delete*/("DELETE FROM `trade` WHERE `number`='".$vecii['number']."'") or die(mysqli_error($con));
			mysqli_query($con,"UPDATE `stats` SET `gold`='".$mayorikk['gold']."' WHERE `id`='".$vecii['id']."'") or die(mysqli_error($con));
			mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		}else if($vecii['type'] == 1 && $stats['food'] >= $vecii['food'] && $vecii['id'] != $stats['id']){
			echo"Done!";
			$mayorikk['food'] += $vecii['food'];
			$stats['gold'] += $vecii['gold'];
			$stats['food'] -= $vecii['food'];
			mysqli_query/*FROM za delete*/("DELETE FROM `trade` WHERE `number`='".$vecii['number']."'") or die(mysqli_error($con));
			mysqli_query($con,"UPDATE `stats` SET `food`='".$mayorikk['food']."' WHERE `id`='".$vecii['id']."'") or die(mysqli_error($con));
			mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		}else if($vecii['id'] == $stats['id']){
			if($vecii['type'] == 0){
				$stats['food'] += $vecii['food'];
				mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			}else{
				$stats['gold'] += $vecii['gold'];
				mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			}
			mysqli_query($con,"DELETE FROM `trade` WHERE `number`='".$vecii['number']."'") or die(mysqli_error($con));
		}else{
			echo"You don't have enough food/gold!";
		}
	}
	?>
	<center><h2>Trade</h2></center>
	<br />
	<center><table cellpadding="2" cellspacing="4">
		<tr style="outline: 1px solid #000000">
			<td><img src="images/food.png"></td>
			<td>Food:</td>
			<td><i><?php echo $stats['food']; ?></i></td>
			<td><img src="images/gold.png"></td>
			<td>Gold:</td>
			<td><i><?php echo $stats['gold']; ?></i></td>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<form action="shop.php" method="post">
				<td><img src="images/food.png"></td>
				<td>Food:</td>
				<td><input type="text" name="f" size="10" /></td>
				<td><img src="images/gold.png"></td>
				<td>Gold:</td>
				<td><input type="text" name="g" size="10" /></td>
				<td><select name="option"><option value="0">Food for Gold</option><option value="1">Gold for Food</option></select></td>
				<td><input type="submit" name="offer" value="Offer" /></td>
			</form>
		</tr>
	</table>
	<table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/offer.png"></td>
			<td>Offer:</td>
			<td><img src="images/mayor.png"></td>
			<td>Mayor:</td>
			<td><img src="images/type.png"></td>
			<td>Type:</td>
		</tr>
		<?php
		$trade = mysqli_query($con,"SELECT * FROM `trade` ORDER BY `type` ASC,`number` ASC") or die(mysqli_error($con));
		$offer = 1;
		while($line = mysqli_fetch_assoc($trade)){
			echo "<tr>";
			echo "<td><td><i>" . $offer . "</i></td></td>";
			$offer++;
			$get_mayor = mysqli_query($con,$con,$con,$con,"SELECT `username`,`b4` FROM `stats` WHERE `id`='".$line['id']."'") or die(mysqli_error($con));
			$mayor = mysqli_fetch_assoc($get_mayor);
			?><td><td><i><a <?php if($mayor['b4'] == 1){ ?>style="color: #2196F3;"<?php } ?> href="mayor.php?<?php echo $line['id']; ?>"><?php echo $mayor['username']; ?></a></i></td></td><?php
			if($line['type'] == 0){ echo "<td><td><i>trades <b>" . $line['food'] . " Food</b> for <b>" . $line['gold'] . " Gold</b></i></td></td>"; }else{ echo "<td><td><i>trades <b>" . $line['gold'] . " Gold</b> for <b>" . $line['food'] . " Food</b></i></td></td>"; }
			?><td><i><a href="shop.php?<?php echo $line['number']; ?>"><?php if($line['id'] == $stats['id']){ echo "Delete "; } ?>Trade</a></i></td>
      <?php
			echo "</tr>";
		}
		?>
	</table></center>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <?php }else {

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