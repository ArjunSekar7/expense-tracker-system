<?php
require 'entity/connect.php';
require 'entity/EncapsuleClass.php';
$connect = new Connect;
$encapsuleClass = new EncapsuleClass;
  function forgotPassword($mailId)
  {
      $conn =  $connect->getConnection();
      $email = mysqli_real_escape_string($conn,$mailId);
      $loginQuery = $encapsuleClass->getLoginQuery();
      $statement = $conn->prepare($loginQuery);
      $statement -> bind_param("s",$mailId);
      $statement->execute();
      $statement->bind_result($emailId);
      if($statement->fetch()){
      if ($emailId === $mailId) {
          echo "okk";
    }
    else{
      echo "Error!".mysqli_error($conn);
    }
}
  }
?>
