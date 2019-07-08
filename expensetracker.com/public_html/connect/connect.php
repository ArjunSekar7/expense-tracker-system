<?php
  require_once('../entity/EncapsuleClass.php');
  require_once('../entity/showError.php');
 class Connect {
   function getConnection(){
      $encapsuleClass = new EncapsuleClass;
	$servername = $encapsuleClass->getHost();
	$username = $encapsuleClass->getUserName();
	$password = $encapsuleClass->getPassword();
	$database = $encapsuleClass->getDBName();
        $conn = mysqli_connect($servername, $username,$password,$database);
      if(!$conn){
        die("Error Connection");
      }
	 return $conn;
     }
}
 ?>
