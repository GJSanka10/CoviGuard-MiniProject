<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Account Type</title>
    <link href="Images/logo.png" rel="icon">
    <link rel="stylesheet" href="CSS\account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<div class="background">

    <navbar>
        <img src="Images/logo.png" alt="logo" width="96px" height="96px">
        <ul>
            <li><a href="Home.html">HOME</a></li>
            <li><a href="About.html">ABOUT</a></li>
            <li><a href="Help.html">HELP</a></li>
            <li><a href="Contact.html">CONTACT</a></li>
            <li><button class="login-button"><a href="login.blade.php">LOGIN</a></button></li>
        </ul>
    </navbar>

    <h1> Select Account Type </h1>

    <div class="citizen">
        <div class="user"><img  src="Images/citizen.jpg"></div>
        <br><br>
        <header> I am a Citizen </header>
        <p>Browse and get vaccination and <br> quarantine services.</p>
        <div class="bbt">
            <a href="citizens.blade.php"><button class="button">Register</button></a>
        </div>
    </div>

    <div class="officer">
        <div class="user"><img  src="Images/staff.jpg"></div>
        <br><br>
        <header> Health Department </header>
        <p>Browse and get vaccination and <br> quarantine services.</p>
        <div class="bbt">
            <a href="officers.blade.php"><button class="button">Register</button></a>
        </div>
    </div>
    <p class="p">Select the relevant account type and click the Register button to register</p>
    <img src="Images/Left.png" class="Left-leaf">
    <img src="Images/Covid.png" class="covid1">
    <img src="Images/Covid.png" class="covid2">


</body>
</html>












<?php /**PATH D:\Mini Project\Group 07\07 - BackEnd\CoviGuard\resources\views/account.blade.php ENDPATH**/ ?>