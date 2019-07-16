<?php
  require_once 'entity/connect.php';
  require_once 'entity/EncapsuleClass.php';
  $connect = new Connect;
  $encapsuleClass = new EncapsuleClass;
  if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $mailId = $_POST['email'];
    $gender = $_POST['gender'];
    $hashPassword = password_hash($password,PASSWORD_BCRYPT);
    $conn =  $connect->getConnection();
    $date = date("Y/m/d");
    $insertQuery = $encapsuleClass->getInsertQuery();
    $statement = $conn->prepare($insertQuery);
    $statement -> bind_param("sssss",$userName,$mailId,$gender,$hashPassword,$date);
   if($statement->execute()){
	    ?>
        <script>
          if(confirm("Registered Successfully click OK to login")){
            window.location = "../index.html";
          }
          else{
            window.location = "https://www.google.com/";
          }
        </script>

      <?php
   }else{
	     echo "bad" . mysqli_error($conn);
  }
    $conn->close();

}
 ?>
