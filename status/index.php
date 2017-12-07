<?php 
 include("../common.php"); ?>
 <html lang="<?php echo $lang['HTML_LANG']; ?>">

<head>
	<meta name=description content="<?php echo $lang['META_DESCRIPTION']; ?>">
<meta name=keywords content="<?php echo $lang['META_KEYWORDS']; ?>">
<meta name="robots" content="index,follow" />
<meta name="revisit-after" content="2 days">
<meta name="googlebot" content="noodp">
<meta name="rating" content="general">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Start Google Analytics -->

<!-- End Google Analytics -->
	<title><?php echo $lang['PAGE_TITLE']; ?></title>
<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
  <!-- End Google Fonts -->
  <!-- Custom Stylesheet -->
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/style_serverstatus.css">
<style>
body {margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}
</style>
  </head>
  <body>
  <div>
<ul class="topnav">
  <li><a href="../index.php"><?php echo $lang['MENU_LOGIN']; ?></a></li>
  <li><a href="../register"><?php echo $lang['MENU_REGISTER']; ?></a></li>
  <li><a href="../blog"><?php echo $lang['MENU_BLOG']; ?></a></li>
  <li><a href="../contact"><?php echo $lang['MENU_CONTACT']; ?></a></li>
  <li class="right"><a class="active" href="index.php"><?php echo $lang['MENU_SERVER_STATUS'];?></a></li>
</ul>
</div>
  <?php
  
//Page Variables 
  $online='<td style="background-color:#00FF00; padding:5px;">' . $lang['SERVICE_ONLINE'] . '</td>';
 
    $offline='<td style="background-color:#FF0000; padding:5px;">' .  $lang['SERVICE_OFFLINE'] . '</td>';
//Functions 
    function servercheck($server,$port){ 
        //Check that the port value is not empty 
        if(empty($port)){ 
            $port=80; 
        } 
        //Check that the server value is not empty 
        if(empty($server)){ 
            $server='http://lfs-league.php5.sk'; 
        } 
        //Connection 
        $fp=@fsockopen($server, $port, $errno, $errstr, 1); 
            //Check if connection is present 
            if($fp){ 
                //Return Alive 
                return 1; 
            } else{ 
                //Return Dead 
                return 0; 
            } 
        //Close Connection 
        fclose($fp); 
    } 
//Ports and Services to check 
$services=array( 
    $lang['WEB_SERVER'] => array('lfs-league.php5.sk' => 80), 
    $lang['DATABASE_SERVER'] => array('localhost' => 3306),  
    $lang['INTERNET_CONNECTION_443'] => array('google.com' => 443),
    $lang['INTERNET_CONNECTION_80'] => array('google.com' => 80) 
); 
?> 

	<div class="container">
		<div class="top">
		
		</div>
		<div class="login-box animated fadeInUp">
      
			<div class="box-header">
				<h2><?php echo $lang['SERVICES_STATUS']; ?></h2>
        
			</div>
      <a href="?lang=sk"><img src="../images/lang/slovakia.png" alt="Slovakia flag.png, 5,5kB" title="Slovakia" height="48" width="48"></a>
       <a href="?lang=en"><img src="../images/lang/britain.png" alt="britain.png, 2,2kB" title="Britain" height="48" width="48"></a>
       <a href="?lang=de"><img src="../images/lang/germany.png" alt="germany.png, 3,5kB" title="Germany" height="48" width="48"></a>
       <a href="?lang=ru"><img src="../images/lang/russia.png" alt="russia.png, 4,6kB" title="Russia" height="48" width="48"></a>
       <a href="?lang=cz"><img src="../images/lang/czech.png" alt="czech.png, 2,0kB" title="Czech" height="48" width="48"></a>
       <a href="?lang=it"><img src="../images/lang/italy.png" alt="italy.png, 739B" title="Italy" height="48" width="48"></a>
       <table> 
<?php 
//Check All Services 
foreach($services as $name => $server){ 
?> 
    <tr> 
    <td><?php echo $name; ?></td> 
<?php 
    foreach($server as $host => $port){ 
        if(servercheck($host,$port)){ echo $online; }else{ echo $offline; } 
    } 
?> 
    </tr> 
<?php 
} 
?>
 
</table>
<?php include ('../global/functions.php');
                            
echo $lang['ON_SERVER_REGISTERED'];?> &nbsp;<?php $result = mysqli_query($con,"SELECT COUNT(*) AS total FROM `user` ") or die(mysqli_error($con)); $values = mysqli_fetch_assoc($result); $num_rows = $values['total']; 
echo $num_rows; ?> &nbsp; <?php  echo $lang['PLAYERS'];
                            
                            ?>
		</div>
	</div>
</body>

