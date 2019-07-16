<?php
  if(isset($_POST['submit'])){
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];
    $passLength = strlen($password);
    $rePassLength = strlen($rePassword);
    if($password == $rePassword && $passLength > 8 && $rePassLength > 8){
      require_once '../model/changePassword.php';
      updatePassword($password);
    }
    else{
      ?>
      <script>
        alert("Enter valid Password");
        window.location.href = "../view/changePassword.php";
      </script>
      <?php
    }
  }
 ?>
