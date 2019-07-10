<?php
require_once '../model/forgotPassModel.php';
  if(isset($_POST['submit'])){
    $mailId = $_POST['email'];
    if(filter_var($mailId,FILTER_VALIDATE_EMAIL)){
      echo 'control';
    $var =  forgotPassword($mailId);
    }
    else {

    }
  }
 ?>
