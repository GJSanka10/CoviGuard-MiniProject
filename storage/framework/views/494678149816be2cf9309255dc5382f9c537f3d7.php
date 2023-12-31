<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Home</title>
      <link href="Images/logo.png" rel="icon">
      <meta content="#0089D9" name="theme-color">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script>
          @import  url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap');
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            user-select: none;
            font-family: Calibri   ;
            }

            .background{
            width: 100%;
            height: 100vh;
            background-image: url("Images/backgroundd.png");
            background-size: cover;
            background-position: center;
            }
            navbar{
            width: 85%;
            margin: auto;
            display: flex;
            padding: 35px 0;
            align-items: center;
            justify-content: space-between;
            }
            navbar ul li{
            list-style: none;
            display: inline-block;
            margin: 0 40px;
            position: relative;
            }
            navbar ul li a{
            font-size: 25px;
            text-decoration: none;
            color: #00318B;
            text-transform: uppercase;
            }
            navbar ul li::after{
            content: '';
            height: 3px;
            width: 0%;
            background: #00318B;
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.5s;
            }
            navbar ul li:hover::after{
            width: 100%;
            }
            .btn1{
            border: none;
            padding: 3px 43px;
            text-decoration: none;
            color: #0089D9;
            text-align: center;
            font-size: 25px;
            cursor: pointer;
            transition: 0.3s;
            opacity: 0.6;
            transition-duration: 0.5s;
            border: 2px solid blue;
            border-radius: 8px;
            }
            .btn1:hover{
            opacity: 1;
            background-color: deepskyblue;
            color: black;
            }
            .btn2{
            border: none;
            padding: 3px 30px;
            text-decoration: none;
            color: white;
            text-align: center;
            font-size: 25px;
            cursor: pointer;
            transition: 0.3s;
            opacity: 0.6;
            transition-duration: 0.5s;
            border: 2px solid blue;
            border-radius: 8px;
            }
            .btn2:hover{
            opacity: 1;
            background-color: deepskyblue;
            color: black;
            }

            .content{
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 999;
            text-align: center;
            padding: 60px 32px;
            width: 500px;
            transform: translate(-50%,-50%);
            background: rgb(150, 197, 236);
            box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
            }
            .content header{
            color: black;
            font-size: 33px;
            font-weight: 600;
            margin: 0 0 35px 0;
            font-family: 'Montserrat',sans-serif;
            }

            .field{
            position: relative;
            height: 45px;
            width: 100%;
            display: flex;
            background: rgba(206, 209, 223, 0.94);
            }
            .field span{
            color: #222;
            width: 40px;
            line-height: 45px;
            }
            .field input{
            height: 100%;
            width: 100%;
            background: transparent;
            border: none;
            outline: none;
            color: #222;
            font-size: 16px;
            font-family: 'Poppins',sans-serif;
            }
            .space{
            margin-top: 16px;
            }
            .show{
            position: absolute;
            right: 13px;
            font-size: 13px;
            font-weight: 700;
            color: #222;
            display: none;
            cursor: pointer;
            font-family: 'Montserrat',sans-serif;
            }
            .pass-key:valid ~ .show{
            display: block;
            }
            .pass{
            text-align: left;
            margin: 10px 0;
            }
            .pass a{
            color: black;
            text-decoration: none;
            font-family: 'Poppins',sans-serif;
            }
            .pass:hover a{
            text-decoration: underline;
            }
            .field input[type="submit"]{
            background: #3498db;
            border: 1px solid #2691d9;
            color: white;
            font-size: 18px;
            letter-spacing: 1px;
            font-weight: 600;
            cursor: pointer;
            font-family: 'Montserrat',sans-serif;
            }
            .field input[type="submit"]:hover{
            background: blue;
            }
            .login{
            color: white;
            margin: 20px 0;
            font-family: 'Poppins',sans-serif;
            }
            .links{
            display: flex;
            cursor: pointer;
            color: white;
            margin: 0 0 20px 0;
            }
            i span{
            margin-left: 8px;
            font-weight: 500;
            letter-spacing: 1px;
            font-size: 16px;
            font-family: 'Poppins',sans-serif;
            }
            .signup{
            font-size: 15px;
            color: black;
            font-family: 'Poppins',sans-serif;
            }
            .signup a{
            color: blue;
            text-decoration: none;
            }
            .signup a:hover{
            text-decoration: underline;
            }

            .bg1{
                position: absolute;
                top: 120px;
                right: 260px;
                width: 450px;
                height: 600px;
            }
            .Lleaf{
                position: absolute;
                bottom: 0px;
                left: 2px;
            }
            .Rleaf{
                position: absolute;
                bottom: 0px;
                right: 2px;
            }
            .C01{
                position: absolute;
                width: 75.53px;
                height: 73.23px;
                bottom: 250px;
                right: 800px;
            }
            .C02{
                position: absolute;
                width: 102.07px;
                height: 98.97px;
                top: 120px;
                right: 600px;
            }
            .C03{
                position: absolute;
                width: 67.81px;
                height: 65.74px;
                top: 550px;
                right: 30px;

            }
            .covi{
                font-family: Rubik;
                font-size: 80px;
                position: absolute;
                top: 200px;
                left: 50px;
                text-align: left;
                color: #00318B;
            }
            .h2{
                font-family: Rubik;
                font-size: 18px;
                position: absolute;
                top: 280px;
                left: 60px;
                text-align: left;
                color: #00318B;
            }
            .name{
                font-size: 25px;
                font-weight: 900;
                position: absolute;
                top: 400px;
                left: 50px;
                text-align: left;
                color: black;

            }
            .intro {
                font-size: 27px;
                font-weight: 900;
                position: absolute;
                top: 275px;
                left: 60px;
                text-align: left;
                color: #00318B;
            }
            .Docimg{
                position: relative;
                left: 910px;
                top: 200px;
                align-content: center;
                width: 1000px;

            }
            .C04{
                position: relative;
                width: 75.53px;
                height: 73.23px;
                bottom: 10px;
                left: 50px;
            }
            .C05{
                position: relative;
                width: 102.07px;
                height: 98.97px;
                bottom: 40px;
                left: 150px;
            }
            .C06 {
                position: relative;
                width: 67.81px;
                height: 65.74px;
                top: 40px;
                left: 600px;
            }
            .abt{
                font-family: Rubik;
                font-size: 80px;
                position: absolute;
                text-align: left;
                color: #00318B;
            }
            .content{
                align-content: center;
                position: relative;
                bottom: 450px;
                margin-left: 50px;
            }
            .h3 {
                font-size: 15px;
                font-weight: 900;
                position: relative;
                top: 90px;
                text-align: left;
                color: #0089D9;
            }
            .bbt{
                position: relative;
                top: 150px;
            }
            .btn3{
                background-color:#00318B;
                border: 3px solid blue;
                border-radius: 25px;
                padding: 7px 17px;
                text-decoration: none;
                color: white;
                text-align: center;
                font-size: 25px;
                cursor: pointer;
                transition: 0.3s;
                opacity: 0.6;
            }
            .btn3:hover{
                opacity: 1;
      </script>
   </head>
   <body>
      <section id="HOME">
         <header>
             <div class="background">
                     <navbar>
                     <img src="Images/logo.png" alt="logo" width="96px" height="96px">
                          <ul>
                            <li><a href="Page 01 - Home.html">HOME</a></li>
                            <li><a href="Page 02 - About.html">ABOUT</a></li>
                            <li><a href="Page 03 - Help.html">HELP</a></li>
                            <li><a href="Page 04 - Contact.html">CONTACT</a></li>
                            <li><button class="btn1"><a href="Page 05 - Login.html">LOGIN</a></button></li>
                            <li><button class="btn1"><a href="Page 06 - Account.html">Register</a></button></li>
                          </ul>
                          <img src="Images/bg1.png" alt="docimg" class="bg1">
                           <img src="Images/Left.png" alt="L-Leaf" class="Lleaf">
                           <img src="Images/Right.png" alt="R-Leaf" class="Rleaf">
                           <img src="Images/Covid.png" alt="virus" class="C01">
                           <img src="Images/Covid.png" alt="virus1" class="C02">
                           <img src="Images/Covid.png" alt="virus2" class="C03">
                     </navbar> 

                     <p class="title"><h1 class="covi">COVI GUARD</h1></p>
                     <p class="h2">Home Quarantine Survillance & Vaccination Service Management System For Covid-19</p>
                    <p class="intro"><br> The virus that causes Covid-19 disease is transmitted mainly <br> through droplets that an infected person secretes when they <br> cough,sneeze or breathe.The weight of these droplets is too <br>
                                        heavy to remain suspended in the air,as they quickly fall to the <br>ground or surfaces.see more...</p>  
             </div>
         </header>   

   </body>
</html>

<?php /**PATH D:\Mini Project\Group 07\07 - BackEnd\CoviGuard\resources\views/Home.blade.php ENDPATH**/ ?>