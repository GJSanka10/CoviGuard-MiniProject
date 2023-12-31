<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS\login.css">
</head>
<body>
<div class="container">
    <!--Left side Discription with logo-->
    <div class="left-side">
        <img src="Images/logo.png" class="logo">
        <img src="Images/Covid.png" class="covid1">
        <img src="Images/Covid.png" class="covid2">
        <h4>Welcome to Covi Guard</h4>
        <p>Log in with your data that you entered<br>
            entered during your registration</p>
        <header>Don't have an account?</header>
        <div class="button-align">
            <a href="account.blade.php"><button class="button-content">Create Account</button></a>
        </div>
        <img src="Images/Left.png" class="Left-leaf">
    </div>

    <!--Right side Login form with navigation bar-->
    <div class="right-side">
        <navbar>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">RESOUCES</a></li>
                <li><a href="#">F.A.Q.</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </navbar>
        <img src="Images/Covid.png" class="covid3">
        <img src="Images/Covid.png" class="covid4">

        <div class="content">
            <h2>Login to Dashboard</h2>
            <form action="#">
                <h1>Username (Enter Your NIC Number or Service Number as Username)</h1>
                <input type="text" class="input-box">
                <h1>Password</h1>
                <input type="password" class="input-box">
                <br><br>
                <h3>
                    <input type="checkbox"> Remember me
                </h3>
                <div class="pass">
                    <a href="#"><h1>Forgot Password</h1></a>
                </div>
                <div class="align">
                    <input type="submit" value="Login" class="button-content">
                </div>


            </form>
        </div>
    </div>
</div>



</body>

</html>

<?php /**PATH D:\Mini Project\Group 07\07 - BackEnd\CoviGuard\resources\views/login.blade.php ENDPATH**/ ?>