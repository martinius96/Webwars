<!DOCTYPE html>
<?php
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

  <li><a href="../index.php"><?php echo $lang['MENU_LOGIN']; ?></a></li>
  <li><a  href="../register"><?php echo $lang['MENU_REGISTER']; ?></a></li>
  <li><a href="../blog"><?php echo $lang['MENU_BLOG']; ?></a></li>
  <li><a class="active" href="index.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>
  <li class="right"><a href="../status"><?php echo $lang['MENU_SERVER_STATUS'];?></a></li>
</ul>
</div>
								                    	
 
 



	<div class="container">
		<div class="top">
		
		</div>
		<div class="login-box animated fadeInUp">
      
			<div class="box-header">
				<h2><?php echo $lang['CONTACT_US']; ?></h2>
        
			</div>
      <a href="?lang=sk"><img src="../images/lang/slovakia.png" alt="Slovakia flag.png, 5,5kB" title="Slovakia" height="48" width="48"></a>
       <a href="?lang=en"><img src="../images/lang/britain.png" alt="britain.png, 2,2kB" title="Britain" height="48" width="48"></a>
       <a href="?lang=de"><img src="../images/lang/germany.png" alt="germany.png, 3,5kB" title="Germany" height="48" width="48"></a>
       <a href="?lang=ru"><img src="../images/lang/russia.png" alt="russia.png, 4,6kB" title="Russia" height="48" width="48"></a>
       <a href="?lang=cz"><img src="../images/lang/czech.png" alt="czech.png, 2,0kB" title="Czech" height="48" width="48"></a>
       <a href="?lang=it"><img src="../images/lang/italy.png" alt="italy.png, 739B" title="Italy" height="48" width="48"></a>
         <center>
         <a href="mailto:vasmail@emailschranka.sk" target="_top">WebWars</a>
         
         
         
         </center>
		</div>
	</div>
</body>





</html>