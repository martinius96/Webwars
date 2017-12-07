<!DOCTYPE html>
<?php
 include("../global/functions.php");
 session_start();
 error_reporting(0);
 include("../common.php");?>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-76290977-1', 'auto');
  ga('send', 'pageview'); 
</script>
<!-- End Google Analytics -->
	<title><?php echo $lang['PAGE_TITLE']; ?></title>
<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
  <!-- End Google Fonts -->
  <!-- Custom Stylesheet -->
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/style_index.css">
  <!-- End Custom Stylesheet -->
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

  <li><a href="../"><?php echo $lang['MENU_LOGIN']; ?></a></li>
  <li><a class="active" href="register"><?php echo $lang['MENU_REGISTER']; ?></a></li>
  <li><a href="../blog"><?php echo $lang['MENU_BLOG']; ?></a></li>
  <li><a href="../contact"><?php echo $lang['MENU_CONTACT']; ?></a></li>
  <li class="right"><a href="../status"><?php echo $lang['MENU_SERVER_STATUS'];?></a></li>
</ul>
</div>
								                    	<?php
 
 if(isset($_SESSION['uid'])){  ?>
										<center>
											<h2> <?php echo $lang['SIGNED_IN_YET'];?> </h2>
											<br>
												<a href='game/headquarter'>
													<button type="button"  class="xmiddle green button round"><?php echo $lang['BACK_TO_GAME'];?></button>
												</a>
												<a href='logout.php'>
													<button type="button"  class="xmiddle red button round"><?php echo $lang['LOGOUT'];?></button>
												</a><br>
                        <a href="?lang=sk"><img src="../images/lang/slovakia.png" alt="Slovakia flag.png, 5,5kB" title="Slovakia" height="48" width="48"></a>
       <a href="?lang=en"><img src="../images/lang/britain.png" alt="britain.png, 2,2kB" title="Britain" height="48" width="48"></a>
       <a href="?lang=de"><img src="../images/lang/germany.png" alt="germany.png, 3,5kB" title="Germany" height="48" width="48"></a>
       <a href="?lang=ru"><img src="../images/lang/russia.png" alt="russia.png, 4,6kB" title="Russia" height="48" width="48"></a>
       <a href="?lang=cz"><img src="../images/lang/czech.png" alt="czech.png, 2,0kB" title="Czech" height="48" width="48"></a>
       <a href="?lang=it"><img src="../images/lang/italy.png" alt="italy.png, 739B" title="Italy" height="48" width="48"></a>
											</center>
											<?php  } else {   


                      include("../global/functions.php");
function generate_code($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomCode = '';
    for ($i = 0; $i < $length; $i++) {
        $randomCode .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomCode;
}
  
?>
											<?php if(isset($_POST['register'])){
   $username = mysqli_real_escape_string($con, $_POST['username']);
   $username = htmlspecialchars( $username, ENT_QUOTES );
   $username = trim( $username );
   
   
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = htmlspecialchars( $password, ENT_QUOTES );
    $password = trim( $password );
   $email= mysqli_real_escape_string($con, $_POST['email']);
   $email = htmlspecialchars( $email, ENT_QUOTES );
   $email = trim( $email );
   
  
  if($username == "" || $password == "" || $email == ""){
    echo "Na niečo si zabudol!";
  }elseif(strlen($username) > 20){
    echo "Tvoje meno je veľmi dlhé!";
  }elseif(strlen($email) > 100){
    echo "Tvoj e-mail je veľmi dlhý!";
  }else{
    $register1 = mysqli_query($con,"SELECT `id` FROM `user` WHERE `username`='$username'") or die(mysqli_error($con));
    $register2 = mysqli_query($con,"SELECT `id` FROM `user` WHERE `email`='$email'") or die(mysqli_error($con));
    if(mysqli_num_rows($register1) > 0){
      echo "Toto meno je už používané!";
    }elseif(mysqli_num_rows($register2) > 0){
      echo "Tento e-mail je už používaný!";
    }else{
      if($_POST['frakcia'] ==  $lang['USA']){ $frakcia = 0; }
      elseif($_POST['frakcia'] ==  $lang['GERMANY']){ $frakcia = 1; 
      }
     if($_POST['frakcia'] ==  $lang['SLOVAKIA']){ $frakcia = 2; }
     elseif($_POST['frakcia'] ==  $lang['SSSR']){ $frakcia = 3; 
      } 
      if($_POST['frakcia'] ==  $lang['ITALY']){ $frakcia = 4; }
     elseif($_POST['frakcia'] ==  $lang['GB']){ $frakcia = 5; 
      } 
      $code = generate_code();
      $ins1 = mysqli_query($con,"INSERT INTO `stats` (`gold`,`attack`,`defense`,`food`,`income`,`farming`,`battery`,`rank`,`floor`,`quest`,`qok`,`wall`,`cannon`,`ccost`,`cattack`,`wcost`,`wdefense`,`username`,`inv`,`new`,`guild`,`apotion`,`dpotion`,`diamonds`) VALUES (100,0,0,200,0,0,100,0,1,1,0,0,0,1000,0,1250,0,'$username',0,0,0,0,0,0)") or die(mysqli_error($con));
      $ins2 = mysqli_query($con,"INSERT INTO `unit` (`worker`,`farmer`,`rifleman`,`machinegunner`,`tfarmer`,`dog`,`fisherman`,`soldier`,`sergeant`,`gendef`,`schutze`,`soldad`,`maschinengewehr`,`leutant`,`hauptmann`,`hund`,`strelec`,`gulometcik`,`vojak`,`serzant`,`generalobrany`,`pes`,`strelets`,`pistoleti`,`vojnik`,`sershant`,`obscht`,`kuce`,`tiratore`,`artigliere`,`soldato`,`sergente`,`generale`,`enfieldman`,`gunner`) VALUES (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)") or die (mysqli_error($con));
      $ins3 = mysqli_query($con,"INSERT INTO `user` (`username`,`password`,`email`,`fraction`,`activated`,`code`) VALUES ('$username', '".sha1($front_salt.$password.$back_salt)."', '$email', '$frakcia', 1, '$code')") or die (mysqli_error($con));
     $ins4 = mysqli_query($con,"INSERT INTO `weapon` (`springfield`,`m1garand`,`browning`,`pershing`,`hellcat`,`sherman`,`thompson`,`kar98`,`mp40`,`gw43`,`mp44`,`mg42`,`m1a1`,`tiger`,`stugv`,`tiger2`,`howitzer`,`panzerstellung`,`pps43`,`pps41`,`mp38`,`zk383`,`gulometvz24`,`puskavz24`,`pak38`,`flak37`,`grw`,`lt38`,`enfield`,`sten`,`bren`,`bar`,`delisle`,`lewis`,`vickers`,`cromwell`,`comet`,`carcano`,`skoda`,`brixia`,`breda`,`ovp`,`baretta`,`fucile`,`p43`,`carro`,`mosinnagant`,`minometvz40`,`maxim`,`kv2`,`dp27`,`zis3`,`t34`,`is2`,`svt40`) VALUES (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)") or die (mysqli_error($con));
     $ins5 = mysqli_query($con,"INSERT INTO `working` (`fyes`,`myes`,`bonus`,`ayes`,`fwork`,`mwork`,`tfwork`,`tyes`,`fishermanwork`,`adyes`,`ad2yes`) VALUES (0,0,0,0,0,0,0,0,0,0,0)") or die (mysqli_error($con));
      $ins6 = mysqli_query($con,"INSERT INTO `ranking` (`number`) VALUES (0)") or die (mysqli_error($con));
      $ins7 = mysqli_query($con,"INSERT INTO `timer` (`ftime`,`mtime`,`atime`,`adtime`,`ad2time`) VALUES (0,0,0,0,0)") or die (mysqli_error($con));
      $ins8 = mysqli_query($con,"INSERT INTO `daily` (`bonus`) VALUES (0)") or die (mysqli_error($con));
       
      echo "Si úspešne zaregistrovaný!";
      $t = file_get_contents("registracie.txt");
      $today = date("Y-m-d H:i:s");
      $t .= $today." Používateľ ".$username." "."sa zaregistroval!"."\r\n";
      file_put_contents("registracie.txt",$t);
      mail($email);
    }
  }
}
?>  
	<div class="container">
		<div class="top">
		
		</div>
		<div class="login-box animated fadeInUp">
      
			<div class="box-header">
				<h2><?php echo $lang['REGISTER_SIGN_UP']; ?></h2>
        
			</div>
      <a href="?lang=sk"><img src="../images/lang/slovakia.png" alt="Slovakia flag.png, 5,5kB" title="Slovakia" height="48" width="48"></a>
       <a href="?lang=en"><img src="../images/lang/britain.png" alt="britain.png, 2,2kB" title="Britain" height="48" width="48"></a>
       <a href="?lang=de"><img src="../images/lang/germany.png" alt="germany.png, 3,5kB" title="Germany" height="48" width="48"></a>
       <a href="?lang=ru"><img src="../images/lang/russia.png" alt="russia.png, 4,6kB" title="Russia" height="48" width="48"></a>
       <a href="?lang=cz"><img src="../images/lang/czech.png" alt="czech.png, 2,0kB" title="Czech" height="48" width="48"></a>
       <a href="?lang=it"><img src="../images/lang/italy.png" alt="italy.png, 739B" title="Italy" height="48" width="48"></a>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
		
			<br>
			<input  type="text" name="username"  alt="username" placeholder=<?php echo $lang['PLACEHOLDER_USERNAME'];?> style=width:300px />         <br>
                                                                  
<input type="password" name="password" alt="password" placeholder=<?php echo $lang['PLACEHOLDER_PASSWORD'];?> style=width:300px />
                                                                <br>
         	<input type="text" name="email" alt="email" placeholder=E-mail style=width:300px />

			<br>    	<script>
var vlajkaa = {
  "<?php echo $lang['USA']; ?>" : "../images/fraction0.png",
  "<?php echo $lang['GERMANY']; ?>" : "../images/fraction1.png",
  "<?php echo $lang['SLOVAKIA']; ?>" : "../images/fraction2.png",
  "<?php echo $lang['SSSR']; ?>" : "../images/fraction3.png",
   "<?php echo $lang['ITALY']; ?>" : "../images/fraction4.png",
  "<?php echo $lang['GB']; ?>" : "../images/fraction5.png"
};
var infoo = {
  "<?php echo $lang['USA']; ?>" : "<?php echo $lang['ALLIED']; ?>",
  "<?php echo $lang['GERMANY']; ?>" : "<?php echo $lang['AXIS']; ?>",
  "<?php echo $lang['SLOVAKIA']; ?>" : "<?php echo $lang['AXIS']; ?>",
  "<?php echo $lang['SSSR']; ?>" : "<?php echo $lang['ALLIED']; ?>",
  "<?php echo $lang['ITALY']; ?>" : "<?php echo $lang['AXIS']; ?>",
  "<?php echo $lang['GB']; ?>" : "<?php echo $lang['ALLIED']; ?>"
};
</script>
<select style=width:300px name="frakcia" onchange="document.getElementById('vlajka').src = vlajkaa[this.value]; document.getElementById('info').innerHTML = infoo[this.value];">
												<option value="<?php echo $lang['USA']; ?>"><?php echo $lang['USA']; ?></option>
												<option value="<?php echo $lang['GERMANY']; ?>"><?php echo $lang['GERMANY']; ?></option> >
												<option value="<?php echo $lang['SLOVAKIA']; ?>"><?php echo $lang['SLOVAKIA']; ?></option>>
												<option value="<?php echo $lang['SSSR']; ?>"><?php echo $lang['SSSR']; ?></option>
												<option value="<?php echo $lang['ITALY']; ?>"><?php echo $lang['ITALY']; ?></option>
												<option value="<?php echo $lang['GB']; ?>"><?php echo $lang['GB']; ?></option>
											</select> <br>
									
<?php echo $lang['WAR_POLICY'];?>:<br>
											<b>
												<font id="info" style="color: #00cc66"><?php echo $lang['ALLIED']; ?></font>
											</b>
											<img src="../images/fraction0.png" id="vlajka" style="width: 64px; height: 69px;"/>
											<i></i>
											<br>
												<button type="submit" name="register" class="xmiddle green button round"><?php echo $lang['REGISTER_SIGN_UP'];?></button>
                          <hr><?php echo $lang['REGISTRATION_AGREE_WITH']; ?> <a href="blog/podmienky.php"><font color=red>podmienkami hry!</font>  </a>
												
			<br>
     
		   </form> 
		</div>
	</div>
</body>



<?php }?>


</html>