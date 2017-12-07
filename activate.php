<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<html>
<body>
<?php
include("global/functions.php");
include("common.php"); 
  	if($_SERVER['QUERY_STRING'] != ""){
		$id_get = mysqli_query($con,"SELECT `id` FROM `user` WHERE `code`='".$_SERVER['QUERY_STRING']."'") or die(mysqli_error($con));
		$id = mysqli_fetch_assoc($id_get);
		if(mysqli_num_rows($id_get) == 0){
			echo $lang['BAD_CODE']; 
		}else{
			$activated = mysqli_query($con,"UPDATE `user` SET `activated`='1' WHERE `id`='".$id['id']."'") or die(mysqli_error($con));
					echo $lang['ACCOUNT_SUCESFULLY_ACTIVATED'];?> <center><a href="index.php"><button type="submit" name="" class="btn btn-info">Webwars</button></a></center>
	<?php	}
	}
?>
</body>
</html