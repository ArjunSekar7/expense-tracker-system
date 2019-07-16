<?php
  if(isset($_POST['submit'])){
    $incomeType = $_POST['incomeType'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    require_once '../model/userIncomeModel.php';
    updateIncome($incomeType,$amount,$date);
  }
 ?>
