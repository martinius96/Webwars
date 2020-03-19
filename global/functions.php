 <?php
    $con = mysqli_connect("localhost","username","password","DB_NAME");
     mysqli_set_charset($con,"utf8");
                             
 if (mysqli_connect_errno()){
   echo "Problém s napojením na MySQL databázu: " . mysqli_connect_error();
  }
?>
