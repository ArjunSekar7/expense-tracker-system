<!DOCTYPE html>
<html>
  <head>
    <meta>
    <link rel="stylesheet" href="CSS/incomeCSS.css">
    <title>IncomeDetail</title>
  </head>
  <body>
    <h1 class = "title">Expense Tracker</h1>
      <div class="income">
        <h1>Income-Detail</h1>
        <h2>Select the type of income</h2>
        <form action="../controller/userIncome.php" method="post">
        <select class="select" name="incomeType" required>
          <option value="1">Salary</option>
          <option value="2">HomeRent</option>
          <option value="3">SocailMedia</option>
          <option value="4">DairyFarm</option>
          <option value="5">Others</option>
        </select><br>
        <h2>Enter the Amount </h2>
        <input type="number" name="amount" value="" placeholder="Enter the Amount" required><br>
        <h2>Select the date</h2>
        <input type="date" name="date" value=""><br><br>
        <label><font color="red">*when you get the income</font></label><br><br>
        <input type="submit" name="submit" value="Submit">
      </div>
    </form>
  </body>
</html>
