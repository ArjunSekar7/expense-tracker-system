<?php
if(isset($_POST['submit'])){
  $expenseType = $_POST['expenseType'];
  $amount = $_POST['amount'];
  $date = $_POST['date'];
  require_once '../model/userExpenseModel.php';
  updateIncome($expenseType,$amount,$date);
}
 ?>
