<?php
  require_once '../model/entity/session.php';
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
 <button class ="button" style = 'margin-left : 35px;' onclick="location.href = 'income.php'">Income</button><br><br>
 <button class ="button"style = 'margin-left : 30px;' onclick="location.href = 'expense.php'">Expense</button><br><br><br>
 <form action="../controller/userReport.php" method="post">
   Enter the Month : <input type="number" name="month" value="" max="12" min="01" width="100px"><br><br>
   Enter the year : <input type="number" name="year" value="" max="2019" min="2000" width="100px">
  <br><br> <input class="check" type="submit" name="submit" value="Check Report" style = 'margin-left : 40px;'>
</div><br>
 </form>

 <form action="../controller/userReport.php" method="post">
  <label style = 'margin-left : 150px;'>Enter the Year : </label>
  <input type="number" name="year" value="" min = 2000 max = 2019 style = 'margin-left : 10px;'><br><br>
  <input type="submit" name="getReport" value="Check Report" style = 'margin-left : 190px;'>
 </form>
</body>
