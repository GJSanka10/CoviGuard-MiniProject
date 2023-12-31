<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device, initial-scale=1.0">
    <link href="Images/logo.png" rel="icon">
    <title>Signup For Staff</title>
    <link rel="stylesheet" href="CSS\officers.css">
</head>
<body>
<div class="container">
    <!--Left side Discription with logo-->
    <div class="left-side">
        <a href="/home"><img src="Images/logo.png" class="logo"></a>
        <img src="Images/Covid.png" class="covid1">
        <img src="Images/Covid.png" class="covid2">
        <h4>Welcome to Covi Guard</h4>
        <p>Register in the System by<br> Entering the Correct Data</p>
        <header>Already Have an Account</header>
        <div class="button-align">
            <a href="/officerLogin"><button class="button-content">Login</button></a>
        </div>
        <img src="Images/Left.png" class="Left-leaf">
    </div>

    <!--Right side Login form with navigation bar-->
    <div class="right-side">

        <img src="Images/Covid.png" class="covid3">
        <img src="Images/Covid.png" class="covid4">

        <div class="signup-content">
            <header>Staff Registration Form</header>
            <form action="#">
                <table cellspacing="5px">
                    <tr>
                        <td>Full Name</td>
                        <td class=table-data>Date of Birth</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="fullname"></td>
                        <td class=table-data><input type="date"></td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td class=table-data>Service Number</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="district" id="district-menu">
                                <option value=""></option>
                                <option value="Matara">Ampara</option>
                                <option value="Matara">Anuradhapura</option>
                                <option value="Matara">Badulla</option>
                                <option value="Matara">Batticalo</option>
                                <option value="Matara">Colombo</option>
                                <option value="Matara">Galle</option>
                                <option value="Matara">Gampaha</option>
                                <option value="Matara">Hambantota</option>
                                <option value="Matara">Jaffna</option>
                                <option value="Matara">Kalutara</option>
                                <option value="Matara">Kandy</option>
                                <option value="Matara">Kegalla</option>
                                <option value="Matara">Kilinochchi</option>
                                <option value="Matara">Kurunegala</option>
                                <option value="Matara">Matale</option>
                                <option value="Matara">Matara</option>
                                <option value="Matara">Mannar</option>
                                <option value="Matara">Monaragala</option>
                                <option value="Matara">Mullativu</option>
                                <option value="Matara">Nuwara Eliya</option>
                                <option value="Matara">Polonnaruwa</option>
                                <option value="Matara">Puttalam</option>
                                <option value="Matara">Rathnapura</option>
                                <option value="Matara">Trincomalee</option>
                                <option value="Matara">Vavuniya</option>
                            </select>
                        </td>
                        <td class=table-data><input type="text" name="serviceId"></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td class=table-data>Gender</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="contact"></td>
                        <td class=table-data>
                            &nbsp;&nbsp;<input type="radio" name="gender" value="Male"> Male
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="gender" value="Female"> Female
                        </td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td class=table-data>Office Address</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email"></td>
                        <td class=table-data><input type="text" name="work"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td class=table-data>Confirm Password</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password1"></td>
                        <td class=table-data><input type="password" name="password2"></td>
        </div>
        </tr>

        </table>

        <br>
        &nbsp;&nbsp;<input type="checkbox"> &nbsp; I agree to terms and Conditions <br><br>
        <div class="align">
            <input type="submit" value="Register" class="submit-button-content">
        </div>
        </form>
    </div>
</div>
</div>
</body>
</html>


