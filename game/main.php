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
<?php echo $lang['MENU_MAIN.PHP'];?>
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
 ?>
      <a href="me.php">PROFIL</a>
<center><?php echo $stats['rank']."/4000 XP"; ?></center><br>
<progress value=<?php echo $stats['rank']; ?> max="4000" style="height:6;width:600"></progress>
<center><h2><?php echo $lang['MAYOR_REGIMENT'];?>&nbsp;<?php echo $user['username']; ?></h2></center>

<table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['RAW_MATERIALS'];?></th>
<th class="text-left"><?php echo $lang['QUANTITY'];?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><?php echo $lang['GOLD'];?><a href="faq/gold.php"><img src="images/gold.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $stats['gold']; ?></td>      
</tr>
<tr>
<td class="text-left"><?php echo $lang['FOOD'];?><a href="faq/food.php"><img src="images/food.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $stats['food']; ?></td>
</tr>
<tr>
<td class="text-left"><a href="shop.php"><?php echo $lang['DIAMOND'];?><img src="images/diamond.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $stats['diamonds']; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['BATTERY'];?><?php
			if($stats['battery'] == 0){?>
<a href="faq/battery.php"><img src="images/battery4.png"></a> <?php
			}elseif($stats['battery'] <= 34){?>
<a href="faq/battery.php"><img src="images/battery3.png"></a> <?php
			}elseif($stats['battery'] <= 67){?>
<a href="faq/battery.php"><img src="images/battery2.png"></a><?php
			}elseif($stats['battery'] <= 100){?>
<a href="faq/battery.php"><img src="images/battery1.png"></a><?php
			}elseif($stats['battery'] <= 125){?>
<a href="faq/battery.php"><img src="images/battery1.png"></a> <?php
			}
			?></td>
<td class="text-left"><?php echo $stats['battery'] ?>%</td>
</tr>
</tbody>
</table>
<center><table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['PRODUCTION_UNITS'];?></th>
<th class="text-left"><?php echo $lang['NUMBER_UNITS'] ;?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><?php echo $lang['FARMER'];?><a href="faq/farmer.php"><img src="images/farmer.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['farmer']; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['MINER'];?><a href="faq/miner.php"><img src="images/miner.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['worker']; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['T_FARMER'];?><a href="faq/tfarmer.php"><img src="images/tfarmer.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['tfarmer']; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['FISHERMAN'];?><a href="faq/fisherman.php"><img src="images/fisherman.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['fisherman']; ?></td>
</tr>
</tbody>
</table>




<?php if($user['fraction'] == 0){   ?> 

                       
                        

  <table class="table-fill" align=center>
<thead>                
<tr>                    
<th class="text-left"><?php echo $lang['INFANTRY'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>
<th class="text-left"><?php echo $lang['NUMBER_WEAPONS'] ;?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><?php echo $lang['RIFLEMAN'];?><a href="faq/rifleman.php"><img src="images/rifleman.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['rifleman']; ?></td>
<td class="text-left"><?php $springfieldm1a1m1garand= ($weapon['springfield'] + $weapon['m1a1'] + $weapon['m1garand']); ?>
<?php echo $springfieldm1a1m1garand; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['MACHINEGUNNER'];?><a href="faq/machinegunner.php"><img src="images/machinegunner.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['machinegunner']; ?></td>
<td class="text-left"><?php echo $weapon['browning']; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SOLDIER'];?><a href="faq/soldier.php"><img src="images/soldier.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['soldier']; ?></td>
<td class="text-left"><?php echo $weapon['thompson']; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SERGEANT'];?><a href="faq/sergeant.php"><img src="images/sergeant.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['sergeant']; ?></td><td class="text-left"></td> 
</tr>
<tr>
<td class="text-left"><?php echo $lang['GENERAL'];?><a href="faq/general.php"><img src="images/gendef.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['gendef']; ?></td><td class="text-left"></td>
</tr>
</tbody>
</table>  
<table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['OTHER_UNITS'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>
</tr>
</thead>
<tbody class="table-hover">

<tr>
<td class="text-left"><?php echo $lang['TANKS'];?><a href="faq/tanks.php"><img src="images/pershing.png" width=32px height=32px></a></td>
<td class="text-left"><?php  $hellcatshermanpershing =($weapon['hellcat']+ $weapon['sherman']+ $weapon['pershing']) ?>
<?php  echo $hellcatshermanpershing; ?></td>
</tr>
<tr>
<td class="text-left">Howitzer 105mm<a href="faq/howitzer.php"><img src="images/howitzer.png" width=32px height=32px></td>
<td class="text-left"><?php echo $weapon['howitzer'] ?></td>
</tr>

</tbody>
</table>

<img src=<?php echo $lang['USA_MAP']; ?> usemap="#image-map">

<map name="image-map">
    <area target="" alt="Headquarters" title="Headquarters" href="main.php" coords="0,118,154,160,133,269,123,270,117,295,122,306,115,321,110,335,68,318,25,276,15,242,0,186" shape="poly">
    <area target="" alt="Factory" title="Factory" href="factory.php" coords="0,117,195,168,203,107,296,115,303,47,130,14,76,21,0,107,15,91" shape="poly">
    <area target="" alt="Barracks" title="Barracks" href="barracks.php" coords="154,164,134,268,124,271,121,295,126,307,111,334,160,368,207,372,213,365,293,371,297,320,302,277,314,274,319,201,278,198,246,197,225,190,195,188,191,168,165,161" shape="poly">
    <area target="" alt="POST" title="POST" href="post.php" coords="300,286,348,289,348,322,364,331,384,337,405,341,425,341,440,349,442,371,448,382,447,390,448,405,448,418,441,424,420,433,404,444,391,449,385,477,388,492,374,492,361,485,344,454,332,433,317,420,304,419,296,426,287,427,264,413,248,394,240,381,235,370,252,367,287,369,294,369" shape="poly">
    <area target="" alt="Resistance" title="Resistance" href="resistance.php" coords="414,219,397,51,304,43,298,115,203,107,190,187,306,198,323,217" shape="poly">
    <area target="" alt="Operations" title="Operations" href="operations.php" coords="319,215,413,217,411,209,475,208,487,232,491,244,499,258,511,274,505,295,497,318,489,335,486,352,442,354,444,345,426,342,410,339,384,335,361,327,348,319,348,289,303,284,303,277,314,270" shape="poly">
    <area target="" alt="Production" title="Production" href="production.php" coords="396,48,413,209,478,209,488,231,496,251,509,267,515,271,522,269,526,263,526,252,537,254,553,251,560,250,570,234,580,229,594,235,611,233,624,218,633,204,631,163,580,103,561,83,522,67,476,63,438,53,417,47" shape="poly">
    <area target="" alt="Mayors" title="Mayors" href="mayors.php" coords="500,314,603,307,624,324,648,349,656,359,648,375,671,418,680,437,687,462,685,476,680,483,669,488,660,474,649,457,636,445,636,439,633,428,630,418,618,410,609,407,590,410,582,409,563,402,553,406,539,408,522,404,518,418,499,432,484,425,474,422,456,421,450,418,448,388,443,356,487,351,492,336" shape="poly">
    <area target="" alt="Shop" title="Shop" href="shop.php" coords="514,274,503,307,512,309,520,314,598,305,604,304,655,357,726,277,715,236,694,221,673,205,644,201,629,207,625,218,619,227,613,231,608,237,594,234,575,233,563,241,557,250,545,253,533,253,528,254" shape="poly">
    <area target="" alt="Global Map" title="Global Map" href="globalmap.php" coords="629,161,645,135,692,91,759,27,774,26,785,49,790,67,792,89,784,112,772,130,761,143,755,155,740,177,734,194,724,215,719,226,700,224,686,214,677,206,663,203,649,203,635,201" shape="poly">
</map>
<?php }?>




<?php if($user['fraction'] == 1){   ?>



 <table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['INFANTRY'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>
<th class="text-left"><?php echo $lang['NUMBER_WEAPONS'] ;?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><?php echo $lang['RIFLEMAN'];?><a href="faq/rifleman.php"><img src="images/schutze.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['schutze']; ?></td>
<td class="text-left"> <?php $kar98gw43= ($weapon['kar98'] + $weapon['gw43']); ?>
			<?php echo $kar98gw43; ?>      
</tr>
<tr>
<td class="text-left"><?php echo $lang['MACHINEGUNNER'];?><a href="faq/machinegunner.php"><img src="images/maschinengewehr.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['maschinengewehr']; ?></td>
<td class="text-left"><?php echo $weapon['mg42']; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SOLDIER'];?><a href="faq/soldier.php"><img src="images/soldad.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['soldad']; ?></td>
<td class="text-left"><?php $mp40mp44= ($weapon['mp40'] + $weapon['mp44']); ?>
			<?php echo $mp40mp44; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SERGEANT'];?><a href="faq/sergeant.php"><img src="images/leutant.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['leutant']; ?></td> <td class="text-left"></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['GENERAL'];?><a href="faq/general.php"><img src="images/hauptmann.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['hauptmann']; ?></td> <td class="text-left"></td>
</tr>
</tbody>
</table> 
<table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['OTHER_UNITS'] ;?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>

</tr>
</thead>
<tbody class="table-hover">

<tr>
<td class="text-left">Panzerturm<a href="faq/panzerturm.php"><img src="images/panzerstellung.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $weapon['panzerstellung']; ?></td>

</tr>

<tr>
<td class="text-left"><?php echo $lang['TANKS'];?><a href="faq/tanks.php"><img src="images/tiger.png" width=32px height=32px></a></td>
<td class="text-left"><?php  $tigertiger2stugv =($weapon['tiger']+ $weapon['tiger2']+ $weapon['stugv']) ?>
        <?php  echo $tigertiger2stugv; ?></td>

</tr>



</tbody>
</table>
<img src=<?php echo $lang['GERMANY_MAP']; ?> usemap="#image-map">

<map name="image-map">
    <area target="" alt="Headquarters" title="Headquarters" href="main.php" coords="95,91,42,158,20,270,31,270,57,267,81,266,94,266,105,267,120,272,132,275,162,278,170,276,208,276,228,279,241,282,253,290,264,299,271,307,279,317,303,307,312,300,318,296,315,280,307,270,273,250,254,237,235,223,227,210,209,202,190,193,181,188,167,175,160,163,152,152,143,143,130,134,122,123,113,109" shape="poly">
    <area target="" alt="Barracks" title="Barracks" href="barracks.php" coords="20,273,25,394,107,401,139,386,161,384,169,380,178,373,188,370,208,362,222,359,247,356,260,355,273,346,274,340,264,331,272,327,274,317,255,294,236,283,206,275,183,277,165,277,142,279,131,276,117,270,101,267,72,267,43,269" shape="poly">
    <area target="" alt="Operations" title="Operations" href="operations.php" coords="274,350,274,361,280,369,287,381,295,385,305,395,311,402,320,408,329,415,330,430,326,438,316,434,311,445,301,452,289,458,294,475,298,487,299,500,284,496,283,487,278,489,270,491,262,494,244,493,234,501,228,504,210,505,198,499,192,499,189,505,181,511,173,505,165,495,152,493,139,485,128,478,119,480,98,488,64,492,53,464,65,437,82,416,96,406,102,400,130,388,159,386,180,377,211,364,224,360,244,356,254,356" shape="poly">
    <area target="" alt="Factory" title="Factory" href="factory.php" coords="117,110,142,142,163,166,172,185,206,199,236,217,243,223,261,237,290,255,312,269,317,279,320,294,342,288,350,280,357,277,363,282,367,275,374,260,370,247,362,241,360,230,355,222,361,212,355,202,353,194,356,179,340,167,336,156,349,145,346,130,344,119,338,75,282,48,198,29,138,16,133,50" shape="poly">
    <area target="" alt="Mayors" title="Mayors" href="mayors.php" coords="344,96,477,28,479,52,468,61,463,70,468,81,462,84,454,88,458,95,465,103,466,112,457,118,447,132,443,142,430,153,429,162,401,166,406,172,402,184,403,196,408,210,414,215,426,223,437,233,453,241,459,238,475,239,480,256,492,263,503,263,505,271,515,280,521,290,519,297,523,304,529,310,525,319,511,322,502,332,493,334,486,333,485,324,479,317,474,320,460,315,455,318,453,323,443,332,436,320,429,310,438,304,428,300,419,303,404,295,388,288,380,276,376,282,378,265,374,247,365,237,359,221,362,199,353,190,361,177,342,161,352,145,344,122" shape="poly">
    <area target="" alt="Production" title="Production" href="production.php" coords="527,52,561,0,654,0,654,46,654,54,642,59,652,72,653,84,641,98,629,107,622,110,614,111,607,116,597,122,590,126,580,125,574,132,551,115,545,111,539,113,531,115,522,111,508,110,514,90,524,68" shape="poly">
    <area target="" alt="Shop" title="Shop" href="shop.php" coords="469,425,462,563,139,561,156,495,168,500,179,510,190,498,206,505,228,506,242,496,266,495,278,490,287,498,300,501,302,482,291,463,302,454,311,447,319,437,326,441,328,432,344,436,361,432,372,425,376,409,397,416,417,418,435,420,446,422,459,417" shape="poly">
    <area target="" alt="Global Map" title="Global Map" href="globalmap.php" coords="702,178,800,299,798,432,559,378,559,356,556,337,559,321,557,301,543,292,532,284,542,256,551,245,550,234,560,226,557,213,549,208,557,188,577,187,586,181,596,175,605,173,608,160,614,155,618,143,636,152,646,155,650,165,670,174" shape="poly">
    <area target="" alt="Resistance" title="Resistance" href="resistance.php" coords="529,376,504,334,487,336,482,325,473,322,464,318,458,318,454,329,447,329,438,325,430,316,431,303,421,302,415,309,407,296,397,298,387,289,382,283,375,285,371,289,364,287,357,284,353,289,342,290,334,293,325,299,318,301,307,306,293,310,280,318,279,319,270,328,272,339,277,343,281,351,279,360,283,371,293,382,301,389,315,402,323,406,329,413,333,424,336,430,348,434,361,429,375,420,375,408,384,408,406,412,422,416,434,416,450,416,460,416,466,407,483,411,489,409,501,393,524,390" shape="poly">
    <area target="" alt="Production" title="Production" href="production.php" coords="482,35,480,49,466,64,471,75,467,80,457,84,464,102,463,110,462,116,457,124,451,131,445,139,438,151,435,158,426,162,414,163,407,168,406,184,406,192,408,205,417,213,425,218,435,228,452,239,464,237,472,235,474,243,478,249,482,254,493,259,504,261,512,274,522,284,522,293,525,301,526,312,518,322,509,326,507,337,519,364,548,368,559,341,556,318,557,305,541,289,532,286,530,272,535,260,543,253,547,241,546,233,555,227,555,217,548,213,551,198,559,184,567,182,582,181,598,174,607,165,611,152,616,144,618,136,631,141,642,150,649,155,663,162,670,165,681,168,691,170,713,170,731,157,732,146,734,126,737,112,736,97,724,92,723,83,723,74,708,62,688,53,654,51,649,62,651,72,651,81,646,95,637,104,629,111,619,116,613,119,607,119,598,124,593,127,586,131,578,134,569,134,560,129,556,120,546,115,533,116,519,112,507,111,508,100,511,88,519,78,519,67,520,61,502,43" shape="poly">
</map>
   <?php }?>





<?php if($user['fraction'] == 2){   ?>  




  <table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['INFANTRY'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>
<th class="text-left"><?php echo $lang['NUMBER_WEAPONS'] ;?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><?php echo $lang['RIFLEMAN'];?><a href="faq/rifleman.php"><img src="images/strelec.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['strelec']; ?></td>
<td class="text-left"><?php $kar98vz24= ($weapon['kar98'] + $weapon['puskavz24']); ?>
<?php echo $kar98vz24; ?></td>      
</tr>
<tr>
<td class="text-left"><?php echo $lang['MACHINEGUNNER'];?><a href="faq/machinegunner.php"><img src="images/gulometcik.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['gulometcik']; ?></td>
<td class="text-left"><?php echo $weapon['gulometvz24']; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SOLDIER'];?><a href="faq/soldier.php"><img src="images/vojak.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['vojak']; ?></td>
<td class="text-left"><?php $pps43mp38zk383= ($weapon['pps43'] + $weapon['mp38'] + $weapon['zk383']); ?>
<?php echo $kar98vz24; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SERGEANT'];?><a href="faq/sergeant.php"><img src="images/serzant.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['serzant']; ?></td>   <td class="text-left"></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['GENERAL'];?><a href="faq/general.php"><img src="images/generalobrany.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['generalobrany']; ?></td><td class="text-left"></td> 
</tr>
</tbody>
</table>  
<table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['OTHER_UNITS'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>

</tr>
</thead>
<tbody class="table-hover">

<tr>
<td class="text-left">Pak38<a href="faq/pak38.php"><img src="images/pak38.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $weapon['pak38'] ?></td>

</tr>
<tr>
<td class="text-left"><?php echo $lang['MORTAR'];?>&nbsp; Grw 34<a href="faq/grw34.php"><img src="images/minometvz40.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $weapon['grw'] ?></td>
</tr>

<tr>
<td class="text-left">Flak 37<a href="faq/flak37.php"><img src="images/flak37.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $weapon['flak37'] ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['TANKS'];?><a href="faq/tanks.php"><img src="images/lt38.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $weapon['lt38'] ?></td>

</tr>



</tbody>
</table>
<img src=<?php echo $lang['SLOVAK_MAP']; ?> usemap="#image-map">

<map name="image-map">
    <area target="" alt="HQ" title="HQ" href="main.php" coords="114,184,118,192,115,198,115,206,118,213,119,220,127,226,137,233,139,242,147,242,141,250,140,261,148,267,152,277,155,289,155,300,148,306,147,298,142,294,141,301,135,302,127,303,120,302,112,297,104,292,102,298,97,296,93,303,96,308,87,319,91,324,92,333,90,340,80,340,67,335,63,327,61,321,52,318,50,310,41,310,39,302,34,290,30,283,21,263,23,254,29,239,36,229,37,219,39,213,49,212,54,203,67,204,79,194,96,182,105,179" shape="poly">
    <area target="" alt="Factory" title="Factory" href="factory.php" coords="116,183,143,169,151,170,158,154,170,155,179,134,200,130,218,80,233,82,240,88,246,103,249,108,248,114,238,119,240,133,244,141,245,150,245,159,249,171,253,178,256,185,254,192,250,198,247,206,241,211,237,216,231,218,226,214,220,220,217,213,197,200,196,206,195,212,194,220,185,220,177,222,169,230,165,237,156,239,151,241,137,238,133,228,123,222,121,211,118,202" shape="poly">
    <area target="" alt="Barracks" title="Barracks" href="barracks.php" coords="145,249,140,261,150,266,153,284,156,295,159,304,166,307,185,315,195,323,204,326,203,314,210,309,214,301,223,292,229,289,234,293,241,295,241,287,247,290,255,291,261,290,263,300,269,304,274,299,281,299,286,294,277,282,265,278,267,271,274,261,269,257,270,247,275,237,279,214,286,209,292,205,304,199,310,194,304,184,301,174,294,168,293,147,289,143,271,143,265,152,258,157,253,150,244,151,249,168,255,179,255,192,251,199,244,208,235,214,227,216,221,217,214,207,199,205,194,216,190,222,179,223,174,231,164,238,152,243" shape="poly">
    <area target="" alt="Global Map" title="Global Map" href="globalmap.php" coords="241,122,243,134,249,143,260,150,270,140,289,138,306,116,317,105,330,105,343,98,354,100,362,102,375,105,379,110,385,102,395,98,409,93,425,95,439,94,447,65,446,39,450,30,450,19,439,17,429,7,419,7,411,12,405,7,393,10,385,17,379,25,370,26,369,38,361,45,352,47,343,47,330,43,333,26,313,19,295,24,279,25,273,28,270,36,255,47,249,56,240,65,220,70,229,78,241,83,248,93,251,104,248,113" shape="poly">
    <area target="" alt="Post" title="Post" href="post.php" coords="313,184,318,175,336,180,334,198,349,215,363,216,392,213,409,209,423,202,425,223,426,231,415,237,409,237,401,245,391,250,394,268,401,272,409,285,411,299,402,303,399,318,379,323,349,318,338,319,297,318,279,303,291,291,275,282,265,277,273,260,267,250,275,229,286,215,297,200" shape="poly">
    <area target="" alt="Production" title="Production" href="production.php" coords="401,208,400,194,392,181,387,166,398,155,422,154,449,156,477,154,504,163,527,161,531,156,540,170,554,184,561,191,552,206,529,224,516,206,501,216,504,234,496,251,489,257,472,263,432,269,417,276,410,283,393,267,393,253,430,229,426,208,424,202" shape="poly">
    <area target="" alt="Operations" title="Operations" href="operations.php" coords="539,136,520,117,503,107,486,103,473,93,462,94,443,96,431,98,410,95,394,105,378,110,365,105,347,107,338,99,313,106,303,125,292,137,294,146,291,160,298,175,303,180,309,183,316,174,337,179,333,193,339,199,348,212,372,215,394,210,402,194,385,182,386,167,397,151,425,151,442,155,463,151,476,155,492,158,509,157,520,160,529,141" shape="poly">
    <area target="" alt="Mayors" title="Mayors" href="mayors.php" coords="487,93,493,80,491,48,502,41,525,52,549,51,563,56,579,48,585,62,596,69,622,70,618,78,620,89,641,101,654,101,658,112,650,120,636,134,624,134,636,130,636,134,619,129,613,121,605,125,605,136,598,144,582,145,571,146,556,146,543,139,536,130,525,120,512,111,500,105,489,103" shape="poly">
    <area target="" alt="SHOP" title="SHOP" href="shop.php" coords="619,73,624,92,659,100,661,115,671,119,679,132,682,154,694,151,694,143,702,137,707,128,711,123,722,124,723,135,728,139,731,145,730,151,738,158,745,159,757,159,774,165,782,164,792,155,793,147,789,134,790,121,793,101,778,95,766,90,756,72,743,58,733,56,727,64,722,52,710,46,684,49,659,43,648,48,636,48,628,50,630,57,626,66,624,84" shape="poly">
    <area target="" alt="Resistance" title="Resistance" href="resistance.php" coords="538,136,525,151,537,163,550,178,561,186,570,202,589,216,605,206,609,193,620,187,630,188,638,178,657,190,670,197,681,197,681,214,687,227,699,234,710,242,720,246,718,236,734,229,736,238,745,228,760,221,771,225,781,225,783,218,775,211,777,201,779,193,786,179,787,164,777,167,763,165,753,158,748,162,737,164,734,155,728,148,726,139,719,128,708,131,694,145,694,151,685,153,680,147,683,135,676,131,672,125,669,119,658,116,638,132,627,132,611,121,605,132,597,141,577,144,558,146" shape="poly">
</map>
 <?php }?>





<?php if($user['fraction'] == 3){   ?>

     



      
 <table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['INFANTRY'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>
<th class="text-left"><?php echo $lang['NUMBER_WEAPONS'] ;?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><?php echo $lang['RIFLEMAN'];?><a href="faq/rifleman.php"><img src="images/strelets.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['strelets']; ?></td>
<td class="text-left"><?php $mosinnagantsvt40= ($weapon['mosinnagant'] + $weapon['svt40']); ?>
<?php echo $mosinnagantsvt40; ?></td>      
</tr>
<tr>
<td class="text-left"><?php echo $lang['MACHINEGUNNER'];?><a href="faq/machinegunner.php"><img src="images/pistoleti.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['pistoleti']; ?></td>
<td class="text-left"><?php $maximdp27= ($weapon['maxim'] + $weapon['dp27']); ?>
<?php echo $maximdp27; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SOLDIER'];?><a href="faq/soldier.php"><img src="images/vojnik.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['vojnik']; ?></td>
<td class="text-left"><?php echo $weapon['pps41']; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SERGEANT'];?><a href="faq/sergeant.php"><img src="images/sershant.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['sershant']; ?></td> <td class="text-left"></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['GENERAL'];?><a href="faq/general.php"><img src="images/obscht.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['obscht']; ?></td>  <td class="text-left"></td>
</tr>
</tbody>
</table> 
<table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['OTHER_UNITS'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>

</tr>
</thead>
<tbody class="table-hover">



<tr>
<td class="text-left"><?php echo $lang['MORTAR'];?>&nbsp; vz.40<a href="faq/mortar_vz40.php"><img src="images/minometvz40.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $weapon['minometvz40'] ?></td>
</tr>

<tr>
<td class="text-left">Zis-3<a href="faq/zis3.php"><img src="images/zis3.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $weapon['zis3'] ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['TANKS'];?><a href="faq/tanks.php"><img src="images/kv2.png" width=32px height=32px></a></td>
<td class="text-left"><?php $kv2is2t34= ($weapon['kv2'] + $weapon['is2'] + $weapon['t34']); ?>
<?php echo $kv2is2t34; ?></td>

</tr>


</tbody>
</table>
<img src=<?php echo $lang['RUSSIAN_MAP']; ?> usemap="#image-map">

<map name="image-map">
    <area target="" alt="Mayors" title="Mayors" href="mayors.php" coords="48,96,42,126,46,150,52,165,54,174,47,184,53,198,62,197,75,193,85,195,94,196,106,205,122,208,136,198,145,195,153,202,206,181,209,163,215,152,210,142,198,142,196,148,183,151,183,139,181,128,191,114,179,114,169,121,156,127,150,131,143,132,145,120,143,112,132,112,133,123,130,133,128,138,122,138,114,137,115,122,101,115,87,105,67,99" shape="poly">
    <area target="" alt="Main" title="Main" href="main.php" coords="44,185,35,195,22,231,0,239,6,323,33,344,91,337,96,354,109,372,132,380,146,379,144,369,147,356,150,336,139,314,146,290,159,275,166,268,162,253,152,243,139,243,132,237,106,228,109,219,104,206,89,197,72,197,54,198,47,192" shape="poly">
    <area target="" alt="Barracks" title="Barracks" href="barracks.php" coords="168,261,167,273,151,284,141,310,151,330,152,345,168,336,172,355,181,371,186,394,192,398,191,415,204,410,222,408,225,400,235,399,248,397,264,402,265,412,267,419,287,414,289,425,307,423,319,421,316,394,327,394,334,388,349,378,358,371,357,353,374,340,381,325,394,307,378,308,359,295,352,293,327,266,313,267,300,264,290,267,285,256,264,258,248,263,236,263,226,291,212,290,200,291,191,288,181,285,175,274" shape="poly">
    <area target="" alt="Factory" title="Factory" href="factory.php" coords="192,115,180,127,183,143,213,138,214,148,209,166,202,178,187,191,171,197,156,199,137,200,117,207,108,209,109,227,130,238,161,245,168,255,178,276,194,288,215,292,223,284,231,268,236,259,256,259,268,258,282,252,285,233,292,206,279,191,269,180,268,143,279,132,295,140,307,137,317,130,318,116,320,102,314,91,311,73,313,57,287,61,273,86,275,102,280,111,259,99,239,101,230,116,215,112,200,112" shape="poly">
    <area target="" alt="Production" title="Production" href="production.php" coords="394,307,385,285,373,286,375,279,364,273,369,256,378,231,412,197,404,179,401,149,397,142,391,123,390,109,379,102,362,96,369,80,354,74,348,67,331,77,313,79,318,100,327,103,320,110,315,123,308,136,294,136,275,132,267,145,266,180,285,201,285,224,281,241,283,260,292,267,315,268,331,274,342,283,350,290,362,297,375,308" shape="poly">
    <area target="" alt="Post" title="Post" href="post.php" coords="405,148,407,171,378,231,367,273,385,284,401,312,493,294,537,278,546,242,552,218,532,223,526,202,519,188,502,172,477,176,449,167,431,162,418,154,416,150,410,165,401,210,391,216,470,244,488,220" shape="poly">
    <area target="" alt="Operations" title="Operations" href="operations.php" coords="554,220,539,279,496,295,529,306,582,304,597,300,610,278,624,273,647,295,667,319,674,338,669,355,691,373,711,348,726,326,730,299,731,275,704,267,705,258,722,232,719,216,695,198,698,182,668,177,651,192,632,195,611,200,609,208,597,210,584,200,575,198,560,209" shape="poly">
    <area target="" alt="Global Map" title="Global Map" href="globalmap.php" coords="355,59,414,25,458,20,475,16,493,0,529,1,560,19,566,30,561,42,549,48,572,48,600,50,629,65,642,70,644,81,633,94,622,104,620,118,619,128,590,122,566,120,541,117,510,117,486,117,457,113,440,105,420,108,399,110,391,112,382,102,368,96,375,79,355,71" shape="poly">
    <area target="" alt="Shop" title="Shop" href="shop.php" coords="644,68,799,61,797,205,767,215,723,231,719,215,699,201,698,183,682,178,669,176,649,160,638,153,631,141,622,131,620,118,624,104,639,96,648,89" shape="poly">
</map>
<?php }?>




<?php if($user['fraction'] == 4){   ?>    




 <table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['INFANTRY'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>
<th class="text-left"><?php echo $lang['NUMBER_WEAPONS'] ;?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><?php echo $lang['RIFLEMAN'];?><a href="faq/rifleman.php"><img src="images/tiratore.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['tiratore']; ?></td>
<td class="text-left"><?php $kar98carcanofucile = ($weapon['kar98'] + $weapon['carcano'] + $weapon['fucile']); ?>
<?php echo $kar98carcanofucile; ?></td>      
</tr>
<tr>
<td class="text-left"><?php echo $lang['MACHINEGUNNER'];?><a href="faq/machinegunner.php"><img src="images/artigliere.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['artigliere']; ?></td>
<td class="text-left"><?php echo $weapon['breda']; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SOLDIER'];?><a href="faq/soldier.php"><img src="images/soldato.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['soldato']; ?></td>
<td class="text-left"><?php $ovpbaretta = ($weapon['ovp'] + $weapon['baretta']); ?>
<?php echo $ovpbaretta; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SERGEANT'];?><a href="faq/sergeant.php"><img src="images/sergente.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['sergente']; ?></td> <td class="text-left"></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['GENERAL'];?><a href="faq/general.php"><img src="images/generale.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['generale']; ?></td> <td class="text-left"></td>
</tr>
</tbody>
</table> 
<table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['OTHER_UNITS'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>

</tr>
</thead>
<tbody class="table-hover">



<tr>
<td class="text-left">Brixia - obranný <?php echo $lang['MORTAR'];?>&nbsp; <a href="faq/brixia.php"><img src="images/brixia.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $weapon['brixia'] ?></td>

</tr>
<tr>
<td class="text-left">Škoda 75mm - obranný kanón<a href="faq/skoda.php"><img src="images/skoda.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $weapon['skoda'] ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['TANKS'];?><a href="faq/tanks.php"><img src="images/carro.png" width=32px height=32px></a></td>
<td class="text-left"><?php $carrop43 = ($weapon['carro'] + $weapon['p43']); ?>
<?php echo $carrop43; ?></td>

</tr>


</tbody>
</table>
<img src=<?php echo $lang['ITALIAN_MAP']; ?> usemap="#image-map">

<map name="image-map">
    <area target="" alt="Factory" title="Factory" href="factory.php" coords="139,386,164,360,165,343,162,337,163,315,173,308,165,301,149,307,139,310,117,273,109,253,121,240,118,234,99,243,60,241,52,275,46,301,36,310,21,317,27,348,31,371,39,377,36,392,39,402,50,404,58,404,62,394,77,396,90,399,103,402,104,391,103,383,112,391,122,394,134,390" shape="poly">
    <area target="" alt="Barracks" title="Barracks" href="barracks.php" coords="65,397,56,415,58,457,84,484,99,495,116,492,138,487,139,497,153,492,154,484,170,470,182,463,188,450,196,452,199,438,194,432,201,422,207,402,214,391,218,376,210,355,220,343,232,339,241,326,240,317,236,309,233,297,229,291,218,305,207,312,193,312,184,313,171,316,164,318,167,330,164,346,160,353,160,362,153,371,145,380,136,392,128,396,122,396,113,391,105,387,106,399,101,403,89,403,84,401" shape="poly">
    <area target="" alt="Headquarters" title="Headquarters" href="main.php" coords="85,491,63,502,102,580,152,590,206,577,241,542,235,525,216,506,204,497,200,478,208,461,215,447,222,437,219,428,197,451,185,459,179,468,162,479,155,485,155,492,142,500,136,493,128,491,115,495,99,499,96,493" shape="poly">
    <area target="" alt="SHOP" title="SHOP" href="shop.php" coords="499,460,114" shape="circle">
    <area target="" alt="Resistance" title="Resistance" href="resistance.php" coords="644,228,88" shape="circle">
    <area target="" alt="Post" title="Post" href="post.php" coords="240,315,280,326,310,326,315,319,331,305,327,293,312,269,304,248,298,234,278,237,256,244,249,256,235,272,228,288,238,298,238,307" shape="poly">
    <area target="" alt="Operations" title="Operations" href="operations.php" coords="302,230,353,189,372,205,366,215,373,218,380,230,391,231,406,238,406,259,405,280,389,293,380,306,368,319,346,343,333,350,319,342,303,335,313,329,313,318,329,302,323,287,310,263,300,241" shape="poly">
    <area target="" alt="Production" title="Production" href="production.php" coords="367,173,352,189,370,201,366,211,377,223,399,233,410,238,432,228,436,218,448,211,450,197,455,186,476,180,489,160,492,145,476,143,459,148,447,155,438,160,428,149,420,160,412,164,401,172,399,179,390,180,375,171" shape="poly">
    <area target="" alt="Global map" title="Global map" href="globalmap.php" coords="361,163,362,120,461,5,504,11,495,27,459,75,463,85,497,98,513,99,527,74,545,70,561,70,567,90,573,103,594,104,604,114,614,120,624,127,627,132,623,141,606,135,586,134,575,132,568,121,547,121,543,128,519,133,512,137,504,139,486,142,472,140,457,146,452,153,432,156,426,149,416,162,400,164,394,174,379,170,366,168" shape="poly">
</map>


     <?php }?>




<?php if($user['fraction'] == 5){   ?>      




 <table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['INFANTRY'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>
<th class="text-left"><?php echo $lang['NUMBER_WEAPONS'] ;?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left"><?php echo $lang['RIFLEMAN'];?><a href="faq/rifleman.php"><img src="images/enfieldman.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['enfieldman']; ?></td>
<td class="text-left"><?php $enfielddelisle = ($weapon['enfield'] + $weapon['delisle']); ?>
<?php echo $enfielddelisle; ?></td>      
</tr>
<tr>
<td class="text-left"><?php echo $lang['MACHINEGUNNER'];?><a href="faq/machinegunner.php"><img src="images/gunner.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['gunner']; ?></td>
<td class="text-left"><?php $brenvickerslewis = ($weapon['bren'] + $weapon['vickers'] + $weapon['lewis']  ); ?>
<?php echo $brenvickerslewis; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SOLDIER'];?><a href="faq/soldier.php"><img src="images/soldier.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['soldier']; ?></td>
<td class="text-left"><?php $barsten = ($weapon['bar'] + $weapon['sten']); ?>
<?php echo $barsten; ?></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['SERGEANT'];?><a href="faq/sergeant.php"><img src="images/sergeant.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['sergeant']; ?></td> <td class="text-left"></td>
</tr>
<tr>
<td class="text-left"><?php echo $lang['GENERAL'];?><a href="faq/general.php"><img src="images/gendef.png" width=32px height=32px></a></td>
<td class="text-left"><?php echo $unit['gendef']; ?></td>    <td class="text-left"></td>
</tr>
</tbody>
</table> 
<table class="table-fill" align=center>
<thead>
<tr>
<th class="text-left"><?php echo $lang['OTHER_UNITS'];?></th>
<th class="text-left"> <?php echo $lang['NUMBER_UNITS'] ;?></th>
</tr>
</thead>
<tbody class="table-hover">


<tr>

<td class="text-left"><?php echo $lang['TANKS'];?><a href="faq/tanks.php"><img src="images/carro.png" width=32px height=32px></a></td>
<td class="text-left"><?php $cromwellcomet = ($weapon['cromwell'] + $weapon['comet']); ?>
<?php echo $cromwellcomet; ?></td>

</tr>

</tbody>
</table> 
<img src=<?php echo $lang['BRITAIN_MAP']; ?>  usemap="#image-map">

<map name="image-map">
    <area target="" alt="Headquarters" title="Headquarters" href="main.php" coords="342,76,197" shape="circle">
    <area target="" alt="Operations" title="Operations" href="operations.php" coords="14,227,28,250,70,288,88,292,106,319,105,337,104,349,104,358,118,358,131,372,136,387,152,389,166,374,182,372,193,380,196,389,196,403,191,422,184,428,177,437,169,444,162,446,149,443,131,439,119,446,112,451,106,473,108,482,100,486,90,486,81,511,78,528,69,534,64,533,55,525,24,337" shape="poly">
    <area target="" alt="Resistance" title="Resistance" href="resistance.php" coords="57,530,82,525,85,505,91,487,112,484,113,452,127,442,148,444,167,448,172,460,171,469,166,478,171,482,178,488,181,497,189,504,191,514,181,518,184,529,186,537,192,538,200,538,205,534,223,544,243,559,248,566,234,580,223,590,207,591,189,590,169,590,156,594,144,594,151,617,140,622,120,607,101,600,82,589,73,584" shape="poly">
    <area target="" alt="Production" title="Production" href="production.php" coords="302,347,309,433,294,440,291,446,281,447,276,466,276,473,284,484,259,489,251,512,255,531,247,541,233,541,185,532,192,509,182,496,170,477,168,449,191,427,200,409,202,397,201,383,202,374,215,375,238,376,250,390,279,378,287,346" shape="poly">
    <area target="" alt="Mayors" title="Mayors" href="mayors.php" coords="118,355,157,262,169,260,248,293,283,336,280,364,277,380,250,389,246,371,228,374,206,366,193,374,169,373,153,389,138,384" shape="poly">
    <area target="" alt="Global map" title="Global map" href="globalmap.php" coords="348,408,360,417,380,422,381,470,386,497,354,522,320,530,289,547,268,550,255,537,253,510,262,490,287,485,282,475,278,469,282,449,308,435,320,426,333,430" shape="poly">
    <area target="" alt="SHOP" title="SHOP" href="shop.php" coords="423,362,428,377,441,396,455,417,464,419,471,419,496,435,469,452,444,454,424,464,402,473,391,483,387,491,379,416,354,409,344,407,334,425,309,428,309,398,308,383,326,351,354,338,379,334" shape="poly">
    <area target="" alt="Factory" title="Factory" href="factory.php" coords="559,307,556,321,522,342,516,371,545,428,603,442,664,456,665,351,717,388,748,394,738,336,741,296,705,270,687,262,641,255,617,289,610,310,592,320,573,311,559,307,571,319,568,321,527,340,554,325" shape="poly">
    <area target="" alt="Barracks" title="Barracks" href="barracks.php" coords="382,326,407,280,467,256,591,248,630,273,618,294,610,313,599,320,557,308,555,324,542,328,521,339,512,344,496,344,479,350,462,317" shape="poly">
    <area target="" alt="Post" title="Post" href="post.php" coords="412,326,430,366,446,396,459,411,490,428,502,433,514,410,518,393,517,343,481,352,470,341,461,320" shape="poly">
</map>

    <?php }?>
                </div>


</article></div>
                    </div>
                </div>
            </div>
    </div><?php } else {

echo $lang['YOU_MUST_BE_LOGGED_IN_TO_VIEW_THIS_PAGE'];  }
?>    
<footer class="art-footer">
  <div class="art-footer-inner">
<p><a href="message.php"><?php echo $lang['CONTACT_ADMINISTRATORS.PHP'];?></a> | <a href="chat.php"><?php echo $lang['CHAT.PHP'];?></a> | <a href="me.php"><?php echo $lang['INVENTORY'];?></a></p>
<p>Copyright © 2016. All Rights Reserved.</p>
  </div>
</footer>

</div>


</body></html>