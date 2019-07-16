   <?php
   function showExpenseReport($month, $year){
    $connect = new Connect;
    $encapsuleClass = new EncapsuleClass;
    $report = array();
    $conn =  $connect->getConnection();
    $sql = "SELECT * FROM expenseDetails where YEAR(expensedDate) = '".$year."' and MONTH(expensedDate) = '".$month."' and userId = '".$_SESSION["userId"]."' ";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
      $sql1 = "SELECT * FROM expenseConfiguration where expenseTypeId = '".$row["expenseType"]."'";
      $result1 = mysqli_query($conn, $sql1);
      if($row1 = mysqli_fetch_assoc($result1)) {
        $report[$row1["expenseType"]] =  $row["amount"] ;
      }
  }
  return $report;
}
