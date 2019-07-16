 <!DOCTYPE html>
 <html>
   <head>
      <title></title>
      <link rel="stylesheet" href="CSS/otpCSS.css">
      <script>
        window.history.forward();
       </script>
   </head>
   <body>
     <div class="otpimage">
        <img src="images/otp.png">
     </div>
     <div class="otp">
      <h1>Enter OTP</h1>
      <form action="../controller/checkOTP.php" method="post">
        <input type="text" name="otp" value="" autocomplete="off" placeholder="Enter OTP" required><br><br>
        <input type="submit" name="submit" value="check OTP">
      </form>
    </div>
   </body>
 </html>
