<?php
require 'entity/connect.php';
require 'entity/EncapsuleClass.php';
require 'entity/session.php';
function updatePassword($password){
  $connect = new Connect;
  $encapsuleClass = new EncapsuleClass;
  $conn =  $connect->getConnection();
  $password = mysqli_real_escape_string($conn,$password);
  $mailId = $_SESSION['userMailId'];
  $password = password_hash($password,PASSWORD_BCRYPT);
  $changeQuery = $encapsuleClass->getChangePassQuery();
  $statement = $conn->prepare($changeQuery);
  $statement -> bind_param("ss",$password,$mailId);
  if($statement->execute()){
    header("Location: ../index.html");
  }
  else {

  }
}
 ?>
