<?php
require_once 'entity/connect.php';
require_once 'entity/EncapsuleClass.php';
require_once 'entity/session.php';
  function updateIncome($type,$amount,$date)
  {
    $connect = new Connect;
    $encapsuleClass = new EncapsuleClass;
    $conn =  $connect->getConnection();
    $currDate = date("Y/m/d");
    $userId = $_SESSION['userId'];
    $insertQuery = $encapsuleClass->getIncomeQuery();
    $statement = $conn->prepare($insertQuery);
    $statement -> bind_param("sssss",$userId,$type,$amount,$date,$currDate);
   if($statement->execute()){
    ?>
      <script>
         if(confirm("You want to enter another data")){
           window.location.href = "../view/income.php";
         }
         else{
           window.location.href = "../view/homePage.php";
         }
      </script>
    <?php
    }else{
       echo "bad" . mysqli_error($conn);
   }
    $conn->close();
  }

 ?>
