<?php
 function yearlyReport($year)
 {
   require_once 'entity/connect.php';
   require_once 'entity/EncapsuleClass.php';
   require_once 'entity/session.php';

   $connect = new Connect;
   $encapsuleClass = new EncapsuleClass;
   $conn = $connect->getConnection();
   $yearlyIncomeReport = array();
   for($i  = 12 ; $i > 0 ;$i--){
   $incomeSql = "SELECT sum(amount) as totalAmount FROM incomeDetails where YEAR(getDate) = '" . $year . "' and MONTH(getDate) = '" . $i . "' and userId = '".$_SESSION["userId"]."'";
   $result = mysqli_query($conn, $incomeSql);
   if($row = mysqli_fetch_assoc($result)) {
     $yearlyIncomeReport[$i] = $row["totalAmount"];
   }
 }

 require_once 'yearlyExpenseReport.php';

 yearlyExpenseReport($year);
 $_SESSION["yearlyIncome"] = $yearlyIncomeReport;
 header("Location: ../view/yearlyReport.php");
}


 ?>
