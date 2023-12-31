<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verification</title>
    <script src="https://kit.fontawesome.com/f46f6c277c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS\verify.css">
</head>
<body>
<div class="container">
    <div class="instruction">
        <h1>A message with a verification code has been sent to your phone number. <br> Please enter the six digits code to continue. </h2>
    </div>

    <form action="#">
            <div class="otp">
               <input type="text" name="otp">
            </div>
            <br>
        <div class="resend">
            <a href="#"><h2><i class="fas fa-redo-alt"></i>&nbsp;&nbsp;Resend code again</h2></a>
        </div>

        <div class="count">
            <p id="countdown"></p>
            <script src="JavaScript\countdown.js"></script>
        </div>

        <h1>If you have any problem. Please <a href="mailto:help@coviguard.lk">contact</a> our team.</h1>
        <div class="align">
            <input type="submit" value="CONFIRM" class="button-content">
        </div>

    </form>
</div>
</body>
</html>
<?php /**PATH D:\Mini Project\Group 07\07 - BackEnd\CoviGuard\resources\views/verify.blade.php ENDPATH**/ ?>