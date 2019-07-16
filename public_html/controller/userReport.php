<?php
  if(isset($_POST['submit'])){
    $month = $_POST['month'];
    $year = $_POST['year'];
    require_once '../model/report.php';
    showReport($month,$year);
  }
  if(isset($_POST['getReport'])){
    require_once '../model/yearlyReport.php';
    require_once '../model/entity/session.php';
    $_SESSION["yearReport"] = $_POST['year'];
    yearlyReport($_POST['year']);
  }
 ?>
