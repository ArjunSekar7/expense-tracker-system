<!DOCTYPE html>
<html>
  <head>
    <meta>
    <title>View-Report</title>
    <link rel="stylesheet" href="CSS/reportCSS.css">
    <script src="https://unpkg.com/tlx/browser/tlx.js"></script>
    <script src="https://unpkg.com/tlx-chart/browser/tlx-chart.js"></script>
  </head>
  <body>
    <?php
        require '../model/entity/session.php';
        $incomeReport = $_SESSION["incomeReport"];
        $expenseReport = $_SESSION["expenseReport"];
        $totalIncome = 0;
        $totalExpense = 0;
     ?>
     <h1 align="center">ExpenseTracker Report</h1>
    <h3>Name : <?php echo $_SESSION["userName"] ?></h3>
    <h2>Income Report</h2>
      <table>
        <tr>
        <th>IncomeType</th>
        <th>Amount</th>
        </tr>
        <?php foreach ((array)$incomeReport as $key => $value) { ?>
          <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
            <?php $totalIncome = $totalIncome + $value; ?>
          </tr>
          <?php
        } ?>
      </table><br><br>

      <h2>Expense Report</h2>
        <table>
          <tr>
          <th>ExpenseType</th>
          <th>Amount</th>
          </tr>
          <?php foreach ((array)$expenseReport as $key => $value) { ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
              <<?php $totalExpense = $totalExpense + $value; ?>
            </tr>
            <?php
          } ?>
        </table><br><br>
         <tlx-chart chart-type="PieChart"
          chart-options="${{width:700,height:350}}"
           chart-columns="${['Income','Expense']}"
           chart-data="${[
              ['Income',<?php   echo $totalIncome  ?>],
              ['Expense',<?php   echo $totalExpense ?>]]}">
         </tlx-chart>

        <a  href="#" onclick="window.print()">Click here to download</a>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
        <script src= "javaScript/getReport.js"></script>
  </body>
</html>
