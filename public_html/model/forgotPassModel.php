<?php
require 'entity/connect.php';
require 'entity/EncapsuleClass.php';
require 'entity/session.php';
$connect = new Connect;
$encapsuleClass = new EncapsuleClass;
$mailId = $_SESSION["userMailId"];
$conn =  $connect->getConnection();
$email = mysqli_real_escape_string($conn,$mailId);
$forgotQuery = $encapsuleClass->getForgotQuery();
$statement = $conn->prepare($forgotQuery);
$statement -> bind_param("s",$mailId);
$statement->execute();
$statement->bind_result($emailId);
if($statement->fetch()){
  if ($emailId === $mailId) {
        require 'entity/sentMail.php';
        ?>
        <script>
          alert("OTP send Successfully");
          window.location.href = "../view/otp.php";
        </script>
        <?php
        exit;
    }
}
else{
  ?>
  <script>
    alert("Enter the Registered Mail-Id");
    window.location.href = "../view/forgotPassword.html";
  </script>
  <?php
}
?>
