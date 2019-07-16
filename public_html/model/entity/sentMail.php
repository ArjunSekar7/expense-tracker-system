<?php
require_once 'session.php';

 $to = $_SESSION["userMailId"];
 $otp = rand(1000,9999);
 $_SESSION["otp"] = $otp;
 mail($to,"ExpenseTracker ForgotPassword OTP",$otp);
 ?>
