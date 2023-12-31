<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verification</title>
    <script src="https://kit.fontawesome.com/f46f6c277c.js" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Calibri;
        }
        body
        {
            width: 100%;
            height: 100%;
            background-color: #b9ddf1;
        }
        .container{
            margin-top: 9%;
            margin-left: 17%;
            border-radius: 20px;
            background-color: #bcc3c5;
            width: 900px;
            height: 450px;
            border: 5px solid #102A7D;
        }
        .container h1{
            margin-top: 5%;
            text-align: center;
            color: #102A7D;
            font-size: 25px;
        }
        .otp input[type="text"]{
            width: 170px;
            height: 45px;

            border: 3px solid rgb(0, 49, 139);
            text-align: center;
            font-size: 30px;
            color: #00318B;
            font-weight: bold;
        }
        .otp{
            margin-left: 40%;
            margin-top: 3%;
        }
        .container .resend{
            margin-left: 10%;
        }
        .container .resend h2{
            color: #102A7D;
            font-size: 20px;
        }
        .container .resend a{
            text-decoration: none;
        }
        .container .resend a:hover{
            text-decoration: none;
        }
        .button{
            text-align: center;
        }
        .button-content{
            text-decoration: none;
            cursor: pointer;
            transition: 0.3s;
        }
        .right-side .button-content:hover{
            opacity: 1;
        }
        .container input[type="submit"]{
            width: 250px;
            height: 50px;
            border-radius: 25px;
            border: 1px solid rgb(0, 49, 139);
            background-color: #00318B;
            text-align: center;
            margin-left: 37%;
            margin-top: 3%;
            font-size: 25px;
            color: #fff;
            font-weight: bold;
        }
        .count{
            width: 100px;
            height: 33px;
            border: 2px solid rgb(0, 49, 139);
            margin-left: 700px;
        }
        .count p{
            text-align: center;
            color: #102A7D;
            font-size: 25px;
            font-weight: bold;
        }
        h1 a{
            text-decoration: none;
            color: #102A7D;
        }
        h1 a:hover{
            color: dodgerblue;
            opacity: 1;
        }

    </style>
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
            <script>
                var seconds = 60;
                function secondPassed(){
                    var minutes = Math.round((seconds - 30) / 60);
                    var remainingSeconds = seconds % 60;

                    if(remainingSeconds < 10){
                        remainingSeconds = "0" + remainingSeconds;
                    }

                    document.getElementById('countdown').innerHTML = minutes + ":" +remainingSeconds;

                    if(seconds == 0){
                        clearInterval(countdownTimer);
                    }else{
                        seconds --;
                    }
                }
                var countdownTimer = setInterval('secondPassed()',1000);
            </script>
        </div>

        <h1>If you have any problem. Please <a href="mailto:help@coviguard.lk">contact</a> our team.</h1>
        <div class="align">
            <input type="submit" value="CONFIRM" class="button-content">
        </div>

    </form>
</div>
</body>
</html>
<?php /**PATH D:\Mini Project\Group 07\07 - BackEnd\CoviGuard\resources\views/auth/Verify.blade.php ENDPATH**/ ?>