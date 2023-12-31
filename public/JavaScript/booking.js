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
