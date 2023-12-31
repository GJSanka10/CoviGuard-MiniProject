<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Covi Guard</title>
    <link rel="stylesheet" href="CSS\animation.css">
    <link href="Images/logo.png" rel="icon">
</head>
<body>
<section class="scene">
    <div class="sun"></div>
        <div class="logo-background">
            <img src="Images/logo.png" class="logo">
        </div>

        <div class="content">
            <h1>Welcome to</h1>
            <h2>Covi Guard</h2>
        </div>

        <div class="arrow">
            <a href="/home"><img src="Images/arrow.png"></a>
        </div>


    <div class="bg">
        <img src="Images/police_car.gif" class="car1">
        <img src="Images/urgency.png" class="ambulance1">
    </div>
</section>
<script>
    const sun = document.querySelector('.sun');
    const body = document.querySelector('body');
    sun.onclick = function(){
        body.classList.toggle('dark');
    }
</script>
</body>
</html>

