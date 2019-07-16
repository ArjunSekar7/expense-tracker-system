<!DOCTYPE html>
<html>
  <head>
    <script language="JavaScript" type="text/javascript">
   window.history.forward();
</script>
  </head>
  <body>
    <?php
      session_start();
      session_destroy();
      $_SESSION = array();
      header("Location: ../index.html");
     ?>
  </body>
</html>
