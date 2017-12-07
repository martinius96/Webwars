<!DOCTYPE html>
<?php  
 include("./global/functions.php");
 session_start();
 error_reporting(0);
 include("common.php");?>
<html lang="sk">

<head>
	<meta name=description content="<?php echo $lang['META_DESCRIPTION']; ?>">
<meta name=keywords content="<?php echo $lang['META_KEYWORDS']; ?>">
<meta name="robots" content="index,follow" />
<meta name="google-site-verification" content="99geZzMQuCEbWS3wtRt2Ih_ZkECtd4vqbYD2U0K-oOU" />
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
	<link rel="stylesheet" href="./css/animate.css">
	<link rel="stylesheet" href="./css/style_index.css">
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
  <li><a class="active" href="index.php"><?php echo $lang['MENU_LOGIN']; ?></a></li>
  <li><a href="register"><?php echo $lang['MENU_REGISTER']; ?></a></li>
  <li><a href="blog"><?php echo $lang['MENU_BLOG']; ?></a></li>
  <li><a href="contact"><?php echo $lang['MENU_CONTACT']; ?></a></li>
  <li class="right"><a href="status"><?php echo $lang['MENU_SERVER_STATUS'];?></a></li>
</ul>
</div>
  <?php  
 if(isset($_SESSION['uid'])){  ?>
										<center>
											<h2> <?php echo $lang['SIGNED_IN_YET'];?> </h2>
											<br>
												<a href='game/main.php'>
													<button type="button"  class="xmiddle green button round"><?php echo $lang['BACK_TO_GAME'];?></button>
												</a>
												<a href='game/logout.php'>
													<button type="button"  class="xmiddle red button round"><?php echo $lang['LOGOUT'];?></button>
												</a>  <br>
                         <a href="?lang=sk"><img src="images/lang/slovakia.png" alt="Slovakia flag.png, 5,5kB" title="Slovakia" height="48" width="48"></a>
       <a href="?lang=en"><img src="images/lang/britain.png" alt="britain.png, 2,2kB" title="Britain" height="48" width="48"></a>
       <a href="?lang=de"><img src="images/lang/germany.png" alt="germany.png, 3,5kB" title="Germany" height="48" width="48"></a>
       <a href="?lang=ru"><img src="images/lang/russia.png" alt="russia.png, 4,6kB" title="Russia" height="48" width="48"></a>
       <a href="?lang=cz"><img src="images/lang/czech.png" alt="czech.png, 2,0kB" title="Czech" height="48" width="48"></a>
       <a href="?lang=it"><img src="images/lang/italy.png" alt="italy.png, 739B" title="Italy" height="48" width="48"></a>
											</center>
											<?php  } else {

  


if(isset($_POST['odoslat'])){   

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $username = trim( $username );
    $username = htmlspecialchars( $username, ENT_QUOTES );
     
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = trim( $password );
    $password = htmlspecialchars( $password, ENT_QUOTES );  
    
    $login_check = mysqli_query($con,"SELECT `id` FROM `user` WHERE `username`='$username' AND `password`='".sha1($front_salt.$password.$back_salt)."'") or die (mysqli_error($con));
    if(mysqli_num_rows($login_check) == 0){
      echo $lang['ECHO_BAD_COMBINATION'];
    }else{
      $activated_check = mysqli_query($con,"SELECT `activated` FROM `user` WHERE `username`='$username' AND `password`='".sha1($front_salt.$password.$back_salt)."'") or die (mysqli_error($con));
      $activated = mysqli_fetch_assoc($activated_check);
      if($activated['activated'] == 0){
        echo $lang['ECHO_NOT_ACTIVATED'];
      }else{
        $get_id = mysqli_fetch_assoc($login_check);
        $_SESSION['uid'] = $get_id['id'];
        
       header("Location: game/main.php");
        $t = file_get_contents("prihlasenia.txt");
      $today = date("Y-m-d H:i:s");
      $t .= $today." Používateľ ".$username." "."sa prihlásil!"."\r\n";
      file_put_contents("prihlasenia.txt",$t);
      }       
    }
  }
  
?>    
	<div class="container">
		<div class="top">
		
		</div>
		<div class="login-box animated fadeInUp">
      
			<div class="box-header">
				<h2><?php echo $lang['SIGN_IN_H2'];?></h2>
        
			</div>
      
       <a href="?lang=sk"><img src="images/lang/slovakia.png" alt="Slovakia flag.png, 5,5kB" title="Slovakia" height="48" width="48"></a>
       <a href="?lang=en"><img src="images/lang/britain.png" alt="britain.png, 2,2kB" title="Britain" height="48" width="48"></a>
       <a href="?lang=de"><img src="images/lang/germany.png" alt="germany.png, 3,5kB" title="Germany" height="48" width="48"></a>
       <a href="?lang=ru"><img src="images/lang/russia.png" alt="russia.png, 4,6kB" title="Russia" height="48" width="48"></a>
       <a href="?lang=cz"><img src="images/lang/czech.png" alt="czech.png, 2,0kB" title="Czech" height="48" width="48"></a>
       <a href="?lang=it"><img src="images/lang/italy.png" alt="italy.png, 739B" title="Italy" height="48" width="48"></a>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
		
			<br>
			<input  type="text" name="username"  alt="username" placeholder=<?php echo $lang['PLACEHOLDER_USERNAME'];?> style=width:300px />         <br>
                                                                  
<input type="password" name="password" alt="password" placeholder=<?php echo $lang['PLACEHOLDER_PASSWORD'];?> style=width:300px />
                                                                <br>

			<br>
			<button type="submit" name="odoslat"><?php echo $lang['SIGN_IN_BUTTON'];?></button>
      
			<br> <hr>
      <?php echo $lang['HAVENT_ACCOUNT'];?>  	<a href="register"><button type="button"><?php echo $lang['REGISTER_SIGN_UP'];?></button></a>
		   </form> 
		</div>
	</div>
  
</body>



<?php } ?>


</html>