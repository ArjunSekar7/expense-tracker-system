<?php
  require_once('../entity/showError.php');
  require_once '../connect/connect.php';
  $connect = new Connect;
  $encapsuleClass = new EncapsuleClass;
  if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $mailId = $_POST['email'];
    $gender = $_POST['gender'];
    $conn =  $connect->getConnection();
    //$insertQuery = $encapsuleClass->getInsertQuery();
    //$statement = $conn->prepare($insertQuery);
    //$statement -> bind_param("ssss",$userName,$password,$mailId,$gender);
   $date = new DateTime();
   $date =  $date->format('Y-m-d H:i:s');
   echo $date; 
   $insertQuery = "insert into Registeration values(null,'$userName',' $mailId','$gender','$password','$date')";
    echo $insertQuery;
    if(mysqli_query($conn, $insertQuery)){
      echo "okk";
    }else{
	echo "bad" . mysqli_error($conn);
}
    $conn->close();
  
}
 ?>
