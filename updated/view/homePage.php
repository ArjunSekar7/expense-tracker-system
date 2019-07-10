<?php
  require_once '../model/session.php';
?>
<html>
<head>
  <link rel="stylesheet" href="CSS/homePageCSS.css">
</head>
<body background = "images/home.jpg">
<div class="topnav">
  <a class="user"  href="#">Welcome : <?php echo $_SESSION["userName"];?></a>
  <a class="logout" href="logout.php">Logout</a>
</div>
<div class = "buttonDiv">
 <button class ="button" style = 'margin-left : 35px;'>Income</button><br><br>
 <button class ="button"style = 'margin-left : 30px;'>Expense</button><br><br>
 <button class ="button">Download Report</button>
</div>
</body>
