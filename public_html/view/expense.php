<!DOCTYPE html>
<html>
  <head>
    <meta>
    <link rel="stylesheet" href="CSS/expenseCSS.css">
    <title>ExpenseDetail</title>
  </head>
  <body>
    <h1 class = "title">Expense Tracker</h1>
      <div class="income">
        <h1>Expense-Detail</h1>
        <h2>Select the type of expense</h2>
        <form action="../controller/userExpense.php" method="post">
        <select class="select" name="expenseType" required>
          <option value="1">EB Bill</option>
          <option value="2">Home Rent</option>
          <option value="3">Shopping </option>
          <option value="4">Medicals</option>
          <option value="5">School fees</option>
          <option value="6">Internet</option>
          <option value="7">Others</option>
        </select><br>
        <h2>Enter the Amount </h2>
        <input type="number" name="amount" value="" placeholder="Enter the Amount" required><br>
        <h2>Select the date</h2>
        <input type="date" name="date" value=""><br><br>
        <label><font color="red">*when you do the expense</font></label><br><br>
        <input type="submit" name="submit" value="Submit">
      </div>
    </form>
  </body>
</html>
