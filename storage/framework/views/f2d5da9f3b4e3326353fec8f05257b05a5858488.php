<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vaccination Booking</title>

    <!-- JavaScript for Division depend on District -->
    <script type="text/javascript">
        function populate(s1,s2)
        {
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = "";
            if(s1.value == "ampara")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'addalachenai|Addalachenai',
                    'akkaraipattu|Akkaraipattu',
                    'alaiyadivembu|Alaiyadivembu',
                    'damana|Damana',
                    'dehiaththakandiya|Dehiaththakandiya',
                    'irakkamam|Irakkamam',
                    'kalmunaitamil|Kalmunai-Tamil',
                    'kalmunai|Kalmunai',
                    'karathivu|Karathivu',
                    'lahugala|Lahugala',
                    'mahaoya|Mahaoya',
                    'namaloya|Namaloya-Ampara',
                    'nawithanweli|Nawithanweli',
                    'ninthaur|Ninthaur',
                    'padiyathalawa|Padiyathalawa',
                    'pothuwil|Pothuwil',
                    'samanthurai|Samanthurai',
                    'sainthamaruthu|Sainthamuruthu',
                    'thirukkovil|Thirukkovil',
                    'uhana|Uhana'];
            }

            else if(s1.value == "anuradhapura")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'galenbidunuwewa|Galenbidunuwewa',
                    'galnewa|Galnewa',
                    'horowpothana|Horowpothana',
                    'ipalogama|Ipalogama',
                    'kahatagasdigiliya|Kahatagasdigiliya',
                    'kebithigollewa|Kebithigollewa',
                    'kekirawa|Kekirawa',
                    'mahawilachchiya|Mahawilachchiya',
                    'medawachchiya|Medawachchiya',
                    'mihinthale|Mihinthale',
                    'nachchaduwa|Nachchaduwa',
                    'nochchiyagama|Nochchiyagama',
                    'nuwaragampalatha central|Nuwaragampalatha Central',
                    'nuwaragampalathaEast|Nuwaragampalatha East',
                    'padaviya|Padaviya',
                    'palagala|Palagala',
                    'rajanganaya|Rajanganaya',
                    'rambewa|Rambewa',
                    'thalawa|Thalawa',
                    'thambuttegama|Thambuttegama',
                    'thirappane|Thirappane'];
            }

            else if(s1.value == "badulla")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'badulla|Badulla',
                    'bandarawela|Bandarawela',
                    'ella|Ella',
                    'haldummulla|Haldummulla',
                    'heliela|Haliela',
                    'haputhale|Haputhala',
                    'kandeketiya|Kandeketiya',
                    'lunugala|Lunugala',
                    'mahiyanganaya|Mahiyanganaya',
                    'meegahakiwula|Meegahakiwula',
                    'passara|Passara',
                    'ridimaliyadda|Ridimaliyadda',
                    'soranathota|Soranathota',
                    'uva paranagama|Uva Paranagama',
                    'welimada|Welimada'];
            }

            else if(s1.value == "batticalo")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'manmunai north/Batticaloa|Manmunai North/Batticaloa',
                    'eravur pattu/chenkaladi|Eravur Pattu/Chenkaladi',
                    'eravur town/eravur|Eravur Town/Eravur',
                    'manmunai south/kalawanchikudi|Manmunai North/Kalawanchikudi',
                    'kattankudy/kky|Kattankudy/KKY',
                    'koralei pattu south/kiran|Koralei Pattu/KIRAN',
                    'koralei pattu/valachchenai|Koralei Pattu/Valachchenai',
                    'koralei pattu central/valachchenei|Koralei Pattu Central/Valachchenai',
                    'koralei pattu north|Wahari',
                    'koralei pattu west/oddamavadi|Koralei Pattu West/Oddamavadi',
                    'manmunai pattu/arayampattu|Manmunai Pattu/Arayampattu',
                    'manmunai south west/paddipalai|Manmunai South West/Paddipilai',
                    'manmunai west/wawunathiue|Manmunai West/Wawunathiue',
                    'porativu pattu/waelleweli|Porativu Pattu/Waelleweli'];
            }

            else if(s1.value == "colombo")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'colombo|Colombo',
                    'dehiwala mount lavinia|Dehiwala Mount Lavinia',
                    'hanwella|Hanwella',
                    'homagama|Homagama',
                    'kaduwela|Kaduwela',
                    'kesbewa|Kesbewa',
                    'kolonnawa|Kolonnawa',
                    'maharagama|Maharagama',
                    'moratuwa|Moratuwa',
                    'padukka|Padukka',
                    'ratmalana|Ratmalana',
                    'sri jayawardhenapura kotte|Sri Jayawardhenapura Kotte',
                    'thimbirigasyaya|Thimbirigasyaya'];
            }

            else if(s1.value == "galle")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'akmeemana|Akmeemana',
                    'ambalangoda|Ambalangoda',
                    'baddegama|Baddegama',
                    'balangoda|Balangoda',
                    'bope poddala|Bope Poddala',
                    'elpitiya|Elpitiya',
                    'galle four gravets|Galle Four Gravets',
                    'gonopinuwala|Gonopinuwala',
                    'habaraduwa|Habaraduwa',
                    'hikkaduwa|Hikkaduwa',
                    'imaduwa|Imaduwa',
                    'karandeniya|Karandeniya',
                    'nagoda|Nagoda',
                    'neluwa|Neluwa',
                    'thawalama|Thawalama',
                    'weliwitiya divitura|Weliwitiya Divitura',
                    'yakkalamulla|Yakkalamulla'];
            }

            else if(s1.value == "gampaha")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'attanagalle|Attanagalla',
                    'biyagama|Biyagama',
                    'divulapitiya|Divulapitiya',
                    'dompe|Dompe',
                    'gampaha|Gampaha',
                    'ja-ela|Ja-Ela',
                    'katana|Katana',
                    'kelaniya|Kelaniya',
                    'mahara|Mahara',
                    'meerigama|Meerigama',
                    'miniwangoda|Miniwangoda',
                    'negombo|Negombo',
                    'wattala|Wattala'];
            }

            else if(s1.value == "hambantota")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'ambalantota|Ambalantota',
                    'angunukolapelassa|Angunukolapellessa',
                    'beliaththa|Beliaththa',
                    'hambantota|Hambantota',
                    'katuwana|Katuwana',
                    'lunugamwehera|Lunugamwehera',
                    'okewela|Okewela',
                    'sooriyawewa|Sooriyawewa',
                    'thangalla|Thangalla',
                    'tissamaharamaya|Tissamaharamaya',
                    'walasmulla|Walasmulla',
                    'weeraketiya|Weeraketiya'];
            }

            else if(s1.value == "jaffna")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'delft|Delft',
                    'island north|kytes',
                    'island south|Velanai',
                    'jaffna|Jaffna',
                    'karainager|Karainager',
                    'nallur|Nallur',
                    'thenmarachchi(chavakachcheri)|Thenmarachchi(Chavakachcheri)',
                    'wadamarachchi east(madurankerne)|Wadamarachchi east(Madurankerne)',
                    'wadamarachchi north(point pedro)|Wadamarachchi North(Point Pedro)',
                    'wadamarachchi south west(karaveddi)|Wadamarachchi south west(Karaveddi)',
                    'walikamam east/kopay|Walikamam East/Kopay',
                    'walikamam north/thillippalai|Walikamam North/Thillippalai',
                    'walikamam south west/sandilippai|Walikamam South West/Sandilippai',
                    'walikamam south /uduwil|Walikamam South /Uduwil',
                    'walikamm west/ chenkanai|Walikamm West/ Chenkanai'];
            }

            else if(s1.value == "kalutara")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'agalawatta|Agalawatta',
                    'baduraliya-parinda nuwara|Baduraliya-Parinda Nuwara',
                    'bandaragama|Bandaragama',
                    'beruwela|Beruwela',
                    'bulathsinhala|Bulathsinhala',
                    'dodamgoda|Dodamgoda',
                    'horana|Horana',
                    'ingiriya|Ingiriya',
                    'kaluthara|Kaluthara',
                    'madurawela|Madurawela',
                    'mathugama|Mathugama',
                    'millaniya|Millaniya',
                    'panadura|Panadura',
                    'walallawita|Walallawita'];
            }

            else if(s1.value == "kandy")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'akurana|Akurana',
                    'deltota|Deltota',
                    'doluwa|Doluwa',
                    'ganga ihala korale|Ganga Ihala Korale',
                    'harispattuwa|Harispattuwa',
                    'hatharaliyadda|Hatharaliyadda',
                    'kandy four gravents|Kandy Four Gravents',
                    'kundasale|Kundasale',
                    'medadumbara|Medadumbara',
                    'minipe|Minipe',
                    'panwila|Panwila',
                    'pasbage korale|Pasbage Korale',
                    'pathadumbara|Pathadumbara',
                    'pathahewaheta|Pathahewaheta',
                    'poojapitiya|Poojapitiya',
                    'thumpane|Thumpane',
                    'udadumbara|Udadumbara',
                    'udapalatha|Udapalatha',
                    'udunuwara|Udunuwara',
                    'yatinuwara|Yatinuwara'];
            }

            else if(s1.value == "kegalla")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'aranayake|Aranayake',
                    'bulathkohupitiya|Bulathkohupitiya',
                    'dehoovita|Dehiovita',
                    'daraniyagala|Daraniyagala',
                    'galigamuwa|Galigamuwa',
                    'kegalle|Kegalle',
                    'mawanella|Mawanella',
                    'rambukkana|Rambukkana',
                    'warakapola|Warakapola',
                    'ruwanwella|Ruwanwella',
                    'yatiyantota|Yatiyantota'];
            }

            else if(s1.value == "kilinochchi")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'kandavalai|kandavalai',
                    'karachchi|Karachchi',
                    'pachileippali|Pachileippali',
                    'panakri|Panakri'];
            }

            else if(s1.value == "kurunegala")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'alawwa|Alawwa',
                    'ambanpola|Ambanpola',
                    'bamunakotuwa|Bamunakotuwa',
                    'bingiriya|Bingiriya',
                    'ehetuwewa|Ehetuwewa',
                    'galgamuwa|Galgamuwa',
                    'ganewatta|Ganewatta',
                    'giribawa|Giribawa',
                    'ibbagamuwa|Ibbagamuwa',
                    'kobeigane|Kobeigane',
                    'kotawehera|Kotawehera',
                    'kuliyapitiya east|Kuliyapitiya East',
                    'kuliyapitiya west|Kuliyapitiya West',
                    'kurunegala|Kurunegala',
                    'maho|Maho',
                    'mallawapitiya|Mallawapitiya',
                    'maspotha|Maspotha',
                    'mawathagama|Mawathagama',
                    'narammala|Narammala',
                    'nikaweratiya|Nikaweratiya',
                    'panduwasnuwara hettipola|Panduwasnuwara Hettipola',
                    'pannala|Pannala',
                    'polgahawela|Polgahawela',
                    'polpithigama|Polpithigama',
                    'rasnayakapura|Rasnayakapura',
                    'rideegama|Rideegama',
                    'udubaddawa|Udubaddawa',
                    'wariyapola|Wariyapola',
                    'weerambugedara|Weerambugedara'];
            }

            else if(s1.value == "matale")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'ukuwella|Ukuwella',
                    'wilgamuwa|Wilgamuwa',
                    'yatawaththa|Yatawathta',
                    'ambanganga korale|Ambanganga Korale',
                    'dambulla|Dambulla',
                    'gelewela|Galewela',
                    'laggala pallegama|Laggala Pallegama',
                    'matale|Matale',
                    'naula|Naula',
                    'pallepola|Pallepola',
                    'raththota'];
            }

            else if(s1.value == "matara")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'akuressa|Akuressa',
                    'athuraliya|Athuraliya',
                    'devinuwara|Devinuwara',
                    'dikwella|Dickwella',
                    'hakmana|Hakmana',
                    'kamburupitiya|Kamburupitiya',
                    'kirinda puhulwella|Kirinda Puhulwella',
                    'kotapola|Kotapola',
                    'malimbada|Malimbada',
                    'matara|Matara',
                    'mulatiya|Mulatiya',
                    'pasgoda|Pasgoda',
                    'pitabeddara|Pitabeddara',
                    'thihagoda|Thihagoda',
                    'weligama|Weligama',
                    'welipitiya|Welipitiya'];
            }

            else if(s1.value == "mannar")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'madu|Madu',
                    'mannar|Mannar',
                    'manthei west|Manthei West',
                    'musali|Musali',
                    'nanatan|Nanatan'];
            }

            else if(s1.value == "monaragala")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'buththala|Buththala',
                    'katharagama|Katharagama',
                    'madulla|Madulla',
                    'medagama|Medagama',
                    'monaragala|Monaragala',
                    'sewanagala|Sewanagala',
                    'siyabalanduwa|Siyabalanduwa',
                    'thanamalwila|Thanamalwila',
                    'wellawaya|Wellawaya',
                    'badalkumbura|Badalkumbura',
                    'bibile|Bibile'];
            }

            else if(s1.value == "mullativu")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'dunukkai|Dunukkai',
                    'manthei east|Manthei East',
                    'maritime pattu|Maritime Pattu',
                    'oddusudan|Oddusudan',
                    'pudukudirippu|Pudukudirippu',
                    'welioya|Welioya'];
            }

            else if(s1.value == "nuwara Eliya")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'ambagamuwa|Ambagamuwa',
                    'hanguranketh|Hanguranketh',
                    'kothmale|Kothmale',
                    'nuwara eliya|Nuwara Eliya',
                    'walapane|Walapane'];
            }

            else if(s1.value == "polonnaruwa")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'dimbulagamuwa|Dimbulagamuwa',
                    'elahara|Elahara',
                    'hingurakgoda|Hingurakgoda',
                    'lanka pura|Lanka Pura',
                    'medirigiriya|Medirigiriya',
                    'thamankaduwa|Thamankaduwa',
                    'welikanda|Welikanda'];
            }

            else if(s1.value == "puttalam")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'anamaduwa|Anamaduwa',
                    'arachchikattuwa|Arachchikattuwa',
                    'chilaw|Chilaw',
                    'dankotuwa|Dankotuwa',
                    'kalpitiya|Kalpitiya',
                    'karuwalagaswewa|Karuwalagaswewa',
                    'madampe|Madampe',
                    'mahakumbukkadawala|Mahakumbukkadawala',
                    'mahawewa|Mahawewa',
                    'mundel|Mundel',
                    'nattandiya|Nattandiya',
                    'nawagaththegama|Nawagaththegama',
                    'pallama|Pallama',
                    'puttalam|Puttalam',
                    'wanathawilluwa|Wanathawilluwa',
                    'wennappuwa|Wennappuwa'];
            }

            else if(s1.value == "rathnapura")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'ayagama|Ayagama',
                    'balangoda|Balangoda',
                    'eheliyagoda|Eheliyagoda',
                    'elapatha|Elapatha',
                    'embilipitiya|Embilipitiya',
                    'godakawela|Godakawela',
                    'imbulpe|Imbulpe',
                    'kahawaththa|Kahawaththa',
                    'kalawana|Kalawana',
                    'kiriella|Kiriella',
                    'kolonna|Kolonna',
                    'kuruwita|Kuruwita',
                    'niwithigala|Niwithigala',
                    'opanayake|Opanayake',
                    'pelmadulla|Pelmadulla',
                    'rathnapura|Rathnapura',
                    'weligepola|Weligepola'];
            }

            else if(s1.value == "trincomalee")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'gomarankadawala|Gomarankadawala',
                    'kanthale|Kanthale',
                    'kinniya|Kinniya',
                    'kuchchaweli|Kuchchaweli',
                    'morawewa|Morawewa',
                    'muthur|Muthur',
                    'padaviya sripura|Padaviya Sripura',
                    'seruwila|Seruwila',
                    'thambalagamuwa|Thambalagamuwa',
                    'thoppura|Thoppur',
                    'town and gravets|Town and Gravets',
                    'verugal echchlampattu|Verugal Echchlampattu'];
            }

            else if(s1.value == "vavuniya")
            {
                var optionArray = [
                    'select your division|-- Select Your Division --',
                    'vavuniya|Vavuniya',
                    'vavuniya north|Vavuniya North',
                    'vavuniya south|Vavuniya South',
                    'vengalachddikulam|Vengalachddikulam'];
            }
            else if(s1.value == "none")
            {
                var optionArray = ['-- Select Your Division --'];
            }
            for(var option in optionArray){
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        }
    </script>

    <!--Style-->
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Calibri;
        }
        body{

            width: 100%;
            height: 100vh;
        }
        .container{
            display: flex;
        }
        .left-content{
            width: 25%;
            height: 100vh;
            background-color: #bcc3c5;
        }
        .logo{
            width: 20%;
            height: 10%;
            margin-left: 20%;
            margin-top: 10%;
        }
        .left-content header{
            font-size: 190%;
            font-weight: bold;
            margin-top: -15%;
            margin-left: 45%;
            color: #102A7D;
        }
        .vaccine{
            width: 65%;
            height: 50%;
            margin-left: 20%;
            margin-top: 15%;
        }
        .left-content p{
            font-size: 140%;
            color: #102A7D;
            margin-left: 20%;
            margin-top: 10%;
        }
        .left-content h1{
            font-size: 140%;
            color: #102A7D;
            margin-left: 36%;
        }
        .call{
            width: 15%;
            height: 8%;
            margin-left: 30%;
            margin-top: 5%;
        }
        .mail{
            width: 15%;
            height: 8%;
            margin-left: 5%;
            margin-top: 5%;
        }
        .right-content{
            width: 75%;
            height: 100vh;
            background-color: #b9ddf1;
        }
        .right-content nav{
            display: flex;
            align-items: center;
            margin-top: 2%;
        }
        .profile-pic{
            width: 5%;
            right: 5%;
            border-radius: 50%;
            margin-left: 93%;
        }
        .right-content header{
            font-size: 45px;
            font-weight: bold;
            color: #102A7D;
        }
        .content{
            margin-left: 5%;
        }
        .right-content h1{
            font-size: 25px;
            color: #102A7D;
        }
        .right-content td{
            padding-top: 3%;
        }
        .right-content input[type="text"]{
            width: 500px;
            height: 45px;
            border-radius: 25px;
            border: 0.75px solid rgb(0, 49, 139);
            color: #00318B;
            text-align: center;
            margin-left: 20%;
            font-size: 20px;
        }
        .right-content input[type="date"]{
            width: 500px;
            height: 45px;
            border-radius: 25px;
            border: 0.75px solid rgb(0, 49, 139);
            color: #00318B;
            text-align: center;
            margin-left: 20%;
            font-size: 20px;
        }
        .right-content select{
            width: 500px;
            height: 45px;
            border-radius: 25px;
            border: 0.75px solid rgb(0, 49, 139);
            font-size: 20px;
            color: #00318B;
            text-align: center;
            margin-left: 20%;
        }
        .next {
            margin-left: 88%;
            margin-top: 14%;
        }
        .next input[type="submit"]{
            width: 100px;
            height: 30px;
            border: 1px solid #00318B;
            background-color:#00318B;
            color: #fff;
            font-size: large;
            font-weight: bold;
        }
        .right-content input[type="submit"]:hover{
            text-decoration: none;
            opacity: 1;
        }
    </style>
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
            <form action="<?php echo e(route('')); ?>">
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

<?php /**PATH D:\Mini Project\Group 07\07 - BackEnd\CoviGuard\resources\views/Booking.blade.php ENDPATH**/ ?>