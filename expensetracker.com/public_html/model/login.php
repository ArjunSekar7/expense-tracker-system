<?php
$conn = mysqli_connect("localhost","root","password","ExpenseTrackerSystem");

if (isset($_POST['submit'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $login_query = "select * from Registeration where email_Id = '".$email."'";
  $result = mysqli_query($conn,$login_query);
  $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user['password'])) {
    echo "Let me in, I'm genuine!";
}
else{
  echo "Error!";
}

}

 ?>
