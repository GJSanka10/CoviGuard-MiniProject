<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device, initial-scale=1.0">
    <link href="Images/logo.png" rel="icon">
    <title>Signup For Citizens</title>
    <!--Style-->
    <link rel="stylesheet" href="css\citizen.css">

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
            <a href="/citizenLogin"><button class="button-content">Login</button></a>
        </div>
        <img src="Images/Left.png" class="Left-leaf">
    </div>

    <!--Right side Login form with navigation bar-->
    <div class="right-side">

        <img src="Images/Covid.png" class="covid3">
        <img src="Images/Covid.png" class="covid4">

        <div class="signup-content">
            <header>Citizen Registration Form</header>
            <form method="post" action="/saveCitizen">
                {{csrf_field()}}

                <table cellspacing="5px">
                    <tr>
                        <td>Full Name</td>
                        <td class=table-data>Date of Birth</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="fullname"></td>
                        <td class=table-data><input type="date" name="dob"></td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td class=table-data>NIC Number</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="district" id="district-menu">
                                <option value=""></option>
                                <option value="Ampara">Ampara</option>
                                <option value="Anuradhapura">Anuradhapura</option>
                                <option value="Badulla">Badulla</option>
                                <option value="Batticalo">Batticalo</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Galle">Galle</option>
                                <option value="Gampaha">Gampaha</option>
                                <option value="Hambantota">Hambantota</option>
                                <option value="Jaffna">Jaffna</option>
                                <option value="Kalutara">Kalutara</option>
                                <option value="Kandy">Kandy</option>
                                <option value="Kegalla">Kegalla</option>
                                <option value="Kilinochchi">Kilinochchi</option>
                                <option value="Kurunegala">Kurunegala</option>
                                <option value="Matale">Matale</option>
                                <option value="Matara">Matara</option>
                                <option value="Mannar">Mannar</option>
                                <option value="Monaragala">Monaragala</option>
                                <option value="Mullativu">Mullativu</option>
                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                <option value="Polonnaruwa">Polonnaruwa</option>
                                <option value="Puttalam">Puttalam</option>
                                <option value="Rathnapura">Rathnapura</option>
                                <option value="Trincomalee">Trincomalee</option>
                                <option value="Vavuniya">Vavuniya</option>
                            </select>
                        </td>
                        <td class=table-data><input type="text" name="nic"></td>
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
                        <td class=table-data>Home Address</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email"></td>
                        <td class=table-data><input type="text" name="address"></td>
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
        &nbsp;&nbsp;<input type="checkbox" name="agree"> &nbsp; I agree to terms and Conditions <br><br>
        <div class="align">
            <input type="submit" value="Register" class="submit-button-content">
        </div>
        </form>
    </div>
</div>
</div>
</body>
</html>


