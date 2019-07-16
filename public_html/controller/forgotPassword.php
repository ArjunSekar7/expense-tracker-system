<?php
require_once '../model/entity/session.php';
  if(isset($_POST['submit'])){
    $mailId = $_POST['email'];
    if(filter_var($mailId,FILTER_VALIDATE_EMAIL)){
      $_SESSION["userMailId"] = $mailId;
      echo $_SESSION["userMailId"];
      header("Location: ../model/forgotPassModel.php");
    }
    else {
    ?>
      <script type="text/javascript">
         alert("Enter Valid Email");
      </script>
  <?php
        header("Location: ../view/forgotPassword.html");
  }
  }
?>
