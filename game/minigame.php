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
<?php echo $lang['MENU_CHAT.PHP'];?>
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
	if(isset($_POST['minigame1'])){
		if($_POST['minigame4'] != "" | $_POST['minigame5'] != "" | $_POST['minigame6'] != ""){                                                                                                                                                                              
			if(is_numeric($_POST['minigame4']) & $_POST['minigame4'] > 0 & $_POST['minigame4'] <= $stats['food'] | $_POST['minigame4'] == "" && is_numeric($_POST['minigame5']) & $_POST['minigame5'] > 0 & $_POST['minigame5'] <= $stats['gold'] | $_POST['minigame5'] == "" && is_numeric($_POST['minigame6']) & $_POST['minigame6'] > 0 & $_POST['minigame6'] <= $stats['diamonds'] | $_POST['minigame6'] == ""){
				if ($stats['floor'] >= 6){ $rnumber = rand(1,2); }else{ $rnumber = rand(1,3); }
				if($rnumber == 1){
					echo $lang['YOU_WON'];
					$stats['food'] += $_POST['minigame4'];
					$stats['gold'] += $_POST['minigame5'];
          $stats['diamonds'] += $_POST['minigame6'];
					$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."',`diamonds`='".$stats['diamonds']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
					if ($stats['quest'] == 9 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
				}else{
					echo $lang['YOU_LOST'];
					$stats['food'] -= $_POST['minigame4'];
					$stats['gold'] -= $_POST['minigame5'];
          $stats['diamonds'] -= $_POST['minigame6'];
					$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."',`diamonds`='".$stats['diamonds']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				}
			}elseif($_POST['minigame4'] > $stats['food'] | $_POST['minigame5'] > $stats['gold'] | $_POST['minigame6'] > $stats['diamonds']){
				echo $lang['YOU_CANNOT_RISK_TOO_MUCH'];
			}else{
			echo $lang['YOU_MUST_RISK_SOMETHING'];
			}
		}else{
		echo $lang['YOU_MUST_RISK_SOMETHING'];
		}
	}
	if(isset($_POST['minigame2'])){
		if($_POST['minigame4'] != "" | $_POST['minigame5'] != "" | $_POST['minigame6'] != ""){                                                                                                                                                                             
			if(is_numeric($_POST['minigame4']) & $_POST['minigame4'] > 0 & $_POST['minigame4'] <= $stats['food'] | $_POST['minigame4'] == "" && is_numeric($_POST['minigame5']) & $_POST['minigame5'] > 0 & $_POST['minigame5'] <= $stats['gold'] | $_POST['minigame5'] == "" && is_numeric($_POST['minigame6']) & $_POST['minigame6'] > 0 & $_POST['minigame6'] <= $stats['diamonds'] | $_POST['minigame6'] == ""){
				if ($stats['floor'] >= 6){ $rnumber = rand(1,2); }else{ $rnumber = rand(1,3); }
				if($rnumber == 2){
					echo $lang['YOU_WON'];
					$stats['food'] += $_POST['minigame4'];
					$stats['gold'] += $_POST['minigame5'];
          $stats['diamonds'] += $_POST['minigame6'];
					$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."',`diamonds`='".$stats['diamonds']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
					if ($stats['quest'] == 9 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
				}else{
					echo $lang['YOU_LOST'];
					$stats['food'] -= $_POST['minigame4'];
					$stats['gold'] -= $_POST['minigame5'];
          $stats['diamonds'] -= $_POST['minigame6'];
					$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."',`diamonds`='".$stats['diamonds']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				}
			}elseif($_POST['minigame4'] > $stats['food'] | $_POST['minigame5'] > $stats['gold'] | $_POST['minigame6'] > $stats['diamonds']){
			echo $lang['YOU_CANNOT_RISK_TOO_MUCH'];
			}else{
				echo $lang['YOU_MUST_RISK_SOMETHING'];
			}
		}else{
			echo $lang['YOU_MUST_RISK_SOMETHING'];
		}
	}
	if(isset($_POST['minigame3'])){
		if($_POST['minigame4'] != "" | $_POST['minigame5'] != "" | $_POST['minigame6'] != ""){                                                                                                                                                                              
			if(is_numeric($_POST['minigame4']) & $_POST['minigame4'] > 0 & $_POST['minigame4'] <= $stats['food'] | $_POST['minigame4'] == "" && is_numeric($_POST['minigame5']) & $_POST['minigame5'] > 0 & $_POST['minigame5'] <= $stats['gold'] | $_POST['minigame5'] == "" && is_numeric($_POST['minigame6']) & $_POST['minigame6'] > 0 & $_POST['minigame6'] <= $stats['diamonds'] | $_POST['minigame6'] == ""){
				if ($stats['floor'] >= 6){ $rnumber = rand(2,3); }else{ $rnumber = rand(1,3); }
				if($rnumber == 3){
					echo $lang['YOU_WON'];
					$stats['food'] += $_POST['minigame4'];
					$stats['gold'] += $_POST['minigame5'];
          $stats['diamonds'] += $_POST['minigame6'];
					$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."',`diamonds`='".$stats['diamonds']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
					if ($stats['quest'] == 9 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
				}else{
					echo $lang['YOU_LOST'];
					$stats['food'] -= $_POST['minigame4'];
					$stats['gold'] -= $_POST['minigame5'];
          $stats['diamonds'] -= $_POST['minigame6'];
					$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."',`diamonds`='".$stats['diamonds']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
				}
			}elseif($_POST['minigame4'] > $stats['food'] | $_POST['minigame5'] > $stats['gold'] | $_POST['minigame6'] > $stats['diamonds']){
				echo $lang['YOU_CANNOT_RISK_TOO_MUCH'];
			}else{
				echo $lang['YOU_MUST_RISK_SOMETHING'];
			}
		}else{
				echo $lang['YOU_MUST_RISK_SOMETHING']; 
		}
	}
	?>
	<center><h2><?php echo $lang['MINIGAME'];?></h2></center>
	<br />
	<center><table cellpadding="2" cellspacing="4">
		<tr>
			<td><?php echo $lang['RISK_GET_DOUBLE'];?></td>
		</tr>
	</table></center>
	<center><table cellpadding="2" cellspacing="4">                    
		<tr>
			<td width="50px"><img src="images/rock.png"></td>
			<td width="50px"><img src="images/paper.png"></td>
			<td width="50px"><img src="images/scissors.png"></td>
		</tr>
		<tr>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<td><button type="submit" name="minigame1" class="btn btn-success"><?php echo $lang['ROCK'];?></button></td>
			<td><button type="submit" name="minigame2" class="btn btn-warning"><?php echo $lang['PAPER'];?></button></td>
			<td><button type="submit" name="minigame3" class="btn btn-danger"><?php echo $lang['SCISSORS'];?></button></td>
		</tr>
	</table></center>
	<center><table cellpadding="2" cellspacing="4">
		<tr>
			<td><img src="images/food.png"></td>
			<td><?php echo $lang['FOOD'];?></td>
			<td><input type="text" name="minigame4" placeholder=<?php echo $lang['RISK_NUMBER'];?>></td>
			<td><img src="images/gold.png"></td>
			<td><?php echo $lang['GOLD'];?></td>
			<td><input type="text" name="minigame5" placeholder=<?php echo $lang['RISK_NUMBER'];?>></td>
      <td><img src="images/diamond.png"></td>
			<td><?php echo $lang['DIAMOND'];?></td>
			<td><input type="text" name="minigame6" placeholder=<?php echo $lang['RISK_NUMBER'];?>></td>
			</form>
		</tr>
	</table></center> <?php }else {

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