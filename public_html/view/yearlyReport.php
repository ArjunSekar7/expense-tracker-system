<!DOCTYPE HTML>
<html>
<head>
 <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
<body>
  <?php
     require_once '../model/entity/session.php';
     $incomeReport = $_SESSION["yearlyIncome"];
     $expenseReport = $_SESSION["yearlyExpense"];
  ?>
  <h1 align="center">Expense Tracker Yearly Report</h1>
  <h2>Name : <?php echo $_SESSION["userName"] ?></h2>
  <h2>Year : <?php echo $_SESSION["yearReport"] ?></h2>
<script>
  window.onload = function () {
    var month = 12;
    var year = <?php echo $_SESSION["yearReport"] ?>;
    var chart = new CanvasJS.Chart("chart1Container",
    {
      title:{
      text: "Yearly-Income Report"
      },
       data: [
      {
        type: "line",
        dataPoints: [
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[12]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[11]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[10]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[9]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[8]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[7]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[6]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[5]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[4]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[3]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[2]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $incomeReport[1]; ?> }

        ]
          }
      ]
    });

    chart.render();

    month = 12;
    var chart = new CanvasJS.Chart("chart2Container",
    {
      title:{
      text: "Yearly-Expense Report"
      },
       data: [
      {
        type: "line",
        dataPoints: [
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[12]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[11]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[10]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[9]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[8]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[7]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[6]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[5]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[4]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[3]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[2]; ?> },
          { x: new Date(year,month--,0), y: <?php echo $expenseReport[1]; ?> }

        ]
          }
      ]
    });

    chart.render();
  }
  </script>
  <div id="chart1Container" style="height: 300px; width: 100%;">
  </div><br><br>
  <div id="chart2Container" style="height: 300px; width: 100%;">
  </div>
  <a align="center" href="homePage.php">Click here to homePage</a>
</body>
</html>
