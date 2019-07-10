<?php
require_once 'entity/connect.php';
require_once 'entity/EncapsuleClass.php';
require_once 'session.php';
$connect = new Connect;
$encapsuleClass = new EncapsuleClass;
if (isset($_POST['submit'])) {
  $conn =  $connect->getConnection();
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $givenPassword = mysqli_real_escape_string($conn, $_POST['password']);
  $loginQuery = $encapsuleClass->getLoginQuery();
  $statement = $conn->prepare($loginQuery);
  $statement -> bind_param("s",$email);
  $statement->execute();
  $statement->bind_result($emailId,$password,$userName);
  if($statement->fetch()){
  if (password_verify($givenPassword,$password)) {
        echo "<script type='text/javascript'>";
        echo "alert('Login Successfull !')";
        echo "</script>";
        $_SESSION["userName"] = $userName;
	header("Location: ../view/homePage.php");
}
else{
  echo "Error!".mysqli_error($conn);
}
}




}

 ?>
