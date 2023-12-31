<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Images/logo.png" rel="icon">
    <title>Vaccination Booking</title>
    <!--Style-->
    <link rel="stylesheet" href="css\booking.css">

    <!-- JavaScript for Division depend on District -->
    <script src="JavaScript\booking.js"></script>

</head>
<body>
    <div class="container">
        <div class="left-content">
            <img src="Images/logo.png" class="logo">
            <header>Covi Guard</header>
            <img src="Images/vaccine.png" class="vaccine">
            <p>If you have any problem</p>
            <h1>Contact us</h1>
            <a href="tel:+94778830166"><img src="Images/phoneicon.png" class="call"></a>
            <a href="mailto:help@coviguard.lk"><img src="Images/mailicon.png" class="mail"></a>
        </div>

        <div class="right-content">

            <nav>
                <img src="Images/profile-pic.png" class="profile-pic">
            </nav>

            <div class="content">
                <header>Booking For Vaccination</header>
                <form method="post" action="/saveBooking">
                {{csrf_field()}}
        <table>
        <tr>
            <td><h1>Name</h1></td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><h1>District</h1></td>
            <td>
                <select id="district" name="district" onchange="populate(this.id,'division')">
                    <option value="none">-- Select Your District --</option>
                    <option value="ampara">Ampara</option>
                    <option value="anuradhapura">Anuradhapura</option>
                    <option value="badulla">Badulla</option>
                    <option value="batticalo">Batticalo</option>
                    <option value="colombo">Colombo</option>
                    <option value="galle">Galle</option>
                    <option value="gampaha">Gampaha</option>
                    <option value="hambantota">Hambantota</option>
                    <option value="jaffna">Jaffna</option>
                    <option value="kalutara">Kalutara</option>
                    <option value="kandy">Kandy</option>
                    <option value="kegalla">Kegalla</option>
                    <option value="kilinochchi">Kilinochchi</option>
                    <option value="kurunegala">Kurunegala</option>
                    <option value="matale">Matale</option>
                    <option value="matara">Matara</option>
                    <option value="mannar">Mannar</option>
                    <option value="monaragala">Monaragala</option>
                    <option value="mullativu">Mullativu</option>
                    <option value="nuwara Eliya">Nuwara Eliya</option>
                    <option value="polonnaruwa">Polonnaruwa</option>
                    <option value="puttalam">Puttalam</option>
                    <option value="rathnapura">Rathnapura</option>
                    <option value="trincomalee">Trincomalee</option>
                    <option value="vavuniya">Vavuniya</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><h1>Division</h1></td>
            <td>
                <select id="division" name="division">
                    <option value="">-- Select Your Division --</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><h1>Date</h1></td>
            <td><input type="date" name="date"></td>
        </tr>
        <tr>
            <td><h1>Contact No</h1></td>
            <td><input type="text" name="contact"></td>
        </tr>

        <tr>
            <td><h1>Email</h1></td>
            <td><input type="text" name="email"></td>
        </tr>

        </table>
    </div>

    <div class="next">
            <input type="submit" name="submit" value="NEXT">
    </div>
    </form>


    </div>
    </div>
</body>
</html>

