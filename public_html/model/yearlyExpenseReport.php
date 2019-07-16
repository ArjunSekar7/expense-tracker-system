<?php
function yearlyExpenseReport($year){

  $connect = new Connect;
  $encapsuleClass = new EncapsuleClass;
  $conn = $connect->getConnection();
  $yearlyExpenseReport = array();
  for($i  = 12 ; $i > 0 ;$i--){
  $expenseSql = "SELECT sum(amount) as totalAmount FROM expenseDetails where YEAR(expensedDate) = '" . $year . "' and MONTH(expensedDate) = '" . $i . "' and userId = '".$_SESSION["userId"]."'";
  $result = mysqli_query($conn, $expenseSql);
  if($row = mysqli_fetch_assoc($result)) {
    $yearlyExpenseReport[$i] = $row["totalAmount"];
  }
  }

 $_SESSION["yearlyExpense"] = $yearlyExpenseReport;
}

 ?>
