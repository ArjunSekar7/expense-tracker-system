<?php
 class Connect {
   function getConnection(){
  $encapsuleClass = new EncapsuleClass;
	$servername = $encapsuleClass->getHost();
	$username = $encapsuleClass->getUserName();
	$password = $encapsuleClass->getPassword();
	$database = $encapsuleClass->getDBName();
        $conn = mysqli_connect($servername, $username,$password,$database);
      if(!$conn){
        die("Error Connection" .mysqli_error($conn));
      }
	   return $conn;
     }
}
 ?>
