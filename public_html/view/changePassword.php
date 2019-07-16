<!DOCTYPE html>
<html>
  <head>
    <meta>
    <link rel="stylesheet" href="CSS/changePassword.css">
    <title></title>
  </head>
  <body>
    <div class="image">
       <img src="images/otp.png">
    </div>
    <div class="changePass">
      <h2>Change Password</h2>
    <form action="../controller/changePassword.php" method="post">
      <input type="password" name="password" value="" placeholder="Enter the Password"><br><br>
      <input type="password" name="rePassword" value="" placeholder="Enter the Password again"><br><br>
      <input type="submit" name="submit" value="changePassword">
    </form>
    </div>
  </body>
</html>
