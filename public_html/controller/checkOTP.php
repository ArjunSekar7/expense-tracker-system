<?php
  require_once '../model/entity/session.php';
  if(isset($_POST["submit"])){
    $otp = $_SESSION["otp"];
    $userOTP = $_POST["otp"];
    if($otp == $userOTP){
      header("Location: ../view/changePassword.php");
    }
    else{
      ?>
      <script>
        alert("Enter valid OTP");
      </script>
      <?php
      header("Location: ../view/otp.php");
    }
  }
 ?>
