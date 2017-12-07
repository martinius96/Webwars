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
<?php echo $lang['MENU_POST.PHP'];?>
</ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockcontent"><p><br></p></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">


 
<?php 
 
 
 if(isset($_SESSION['uid'])){ 
	if(isset($_POST['ma4'])){
		$number = addslashes($_POST['ma1']);
		if($stats['gold'] >= 1 && $number != "" && $_POST['ma2'] != "" && $_POST['ma3'] != "" && is_numeric($number) && $number <= $id['MAX(`id`)'] && $number > 0){
			echo("Tvoja správa bola odoslaná!");
			$stats['gold'] -= 1;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `gold`='".$stats['gold']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
			mysqli_query($con,"INSERT INTO `mailbox` (`id`,`number`,`title`,`text`) VALUES ('$number','".$_SESSION['uid']."','".addslashes($_POST['ma2'])."','".addslashes($_POST['ma3'])."')") or die (mysqli_error($con));
			mysqli_query($con,"UPDATE `stats` SET `new`=1 WHERE `id`='$number'") or die(mysqli_error($con));
			if ($stats['quest'] == 18 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
		}elseif($stats['gold'] < 1){
			echo ("Nemáš dostatok zlata!");
		}elseif($number == "" | !is_numeric($number) | $number > $id['MAX(`id`)'] | $number <= 0){
			echo("Toto nieje dobre číslo majora!");
		}elseif($_POST['ma2'] == ""){
			echo("Musíš napísať predmet!");
		}elseif($_POST['ma3'] == ""){
			echo("Musíš niečo napísať!");
		}
	}
	if(isset($_SERVER['QUERY_STRING'])){
		if(!is_numeric($_SERVER['QUERY_STRING'])){
			$m = mysqli_query($con,"SELECT * FROM `mailbox` WHERE `mail`='".substr($_SERVER['QUERY_STRING'],1)."'") or die(mysqli_error($con));
			$ma = mysqli_fetch_assoc($m);
			if($ma['id'] == $_SESSION['uid']){
				mysqli_query($con,"DELETE FROM `mailbox` WHERE `mail`='".substr($_SERVER['QUERY_STRING'],1)."'") or die(mysqli_error($con));
			}
		}
	}
	if($stats['new'] == 1){
		mysqli_query($con,"UPDATE `stats` SET `new`=0 WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
	}
	?>
	<center><h2>Pošta</h2></center>
	<br />
	<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
		<center><td><?php echo "Číslo hráča: " ?><input type="text" name="ma1" maxlength="30"></td>
		<td><?php echo "Predmet: " ?><input type="text" name="ma2" maxlength="30"></td>
    	<td><?php echo "Správa: " ?></td>
		<br /><br />
		<td><textarea name="ma3" maxlength="1800" cols="60" rows="10" style="resize:none"></textarea></td>
		<br />
		<td><button type="submit" name="ma4" class="btn btn-success">Odoslať (1 zlato)</button></td></center>
	</form>
	<table cellpadding="2" cellspacing="4">
		<?php
		$mailbox = mysqli_query($con,"SELECT * FROM `mailbox` WHERE `id`='".$_SESSION['uid']."' ORDER BY `mail` ASC") or die(mysqli_error($con));
		while($line = mysqli_fetch_assoc($mailbox)){
			echo "<tr>";
			echo "<td><img src='images/title.png'></td>";
			echo "<td>ID hráča: <i>" . $line['number'] . "</i></td>";
			echo "<td>Predmet: <i>" . $line['title'] . "</i></td>";
			?><td><i><a href="post.php?<?php echo $line['mail']; ?>">Prečítať</a></i></td>
			<td><i><a href="post.php?<?php echo "d".$line['mail']; ?>">Zmazať</a></i></td><?php
			echo "</tr>";
		}
		?>
	</table>
	<hr />
	<?php
	if(isset($_SERVER['QUERY_STRING'])){
		if(is_numeric($_SERVER['QUERY_STRING'])){
			$m = mysqli_query($con,"SELECT * FROM `mailbox` WHERE `mail`='".$_SERVER['QUERY_STRING']."'") or die(mysqli_error($con));
			$ma = mysqli_fetch_assoc($m);
			echo "<center><h3>" . stripslashes($ma['title']) . "</h3></center>";
			echo stripslashes($ma['text']);
		}
	}
	?>
<?php
}




else {

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