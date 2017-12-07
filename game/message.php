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
 $ID = ($_SESSION['uid']);
    //  BZ46LZ81XQ37 a QY97IG16MZ24 sú náhodné kódy, ktoré pridajú hráčom suroviny, ak ich zadajú ako správu... Je možné  využívať, no nemusí sa
	if(isset($_POST['message2'])){
		if($_POST['message1'] != "" && $_POST['message1'] != "BZ46LZ81XQ37" && $_POST['message1'] != "QY97IG16MZ24"){ 
			echo $lang['MESSAGE_HAS_BENN_SENT'];  
			mysqli_query($con,"INSERT INTO `message` (`text`) VALUES ('"."ID hráča: " . $ID . " " . addslashes($_POST['message1'])."')") or die (mysqli_error($con));
			if ($stats['quest'] == 29 && $stats['qok'] == 0){ $stats['qok'] = 1; $update_stats = mysqli_query($con,"UPDATE `stats` SET `qok`='".$stats['qok']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con)); }
		}elseif($_POST['message1'] == "BZ46LZ81XQ37" && $stats['b1'] == 0){
			$stats['food'] += 750;
			$stats['gold'] += 750;
			$stats['b1'] = 1;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `food`='".$stats['food']."',`gold`='".$stats['gold']."',`b1`='".$stats['b1']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysqli_error($con));
		}elseif($_POST['message1'] == "QY97IG16MZ24" && $stats['b2'] == 0){
			$stats['icon'] = 6;
			$stats['b2'] = 1;
			$update_stats = mysqli_query($con,"UPDATE `stats` SET `icon`='".$stats['icon']."',`b2`='".$stats['b2']."' WHERE `id`='".$_SESSION['uid']."'") or die(mysql_error());
		}else{
echo $lang['YOU_MUST_WRITE_SOMETHING']; 
		}
	}
	?>
	<center><h2><?php echo $lang['MESSAGE']; ?></h2></center>
	<br />
	<center><table cellpadding="2" cellspacing="4">
		<tr>
			<td><?php echo $lang['U_CAN_SEND_MSG_TO_ADMINS']; ?></td>
		</tr>
	</table></center>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<center><td><textarea name="message1" maxlength="600" cols="60" rows="10" style="resize:none"></textarea></td>
		<td><button type="submit" name="message2" class="btn btn-info"><?php echo $lang['SEND'];?></button></td></center>
	</form>
<?php
}


else {

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


















	
