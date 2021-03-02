<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="garden1.css">
    <style>
        @media (min-width: 48em) {
            .pagination{display: block;}
             }
    </style>

</head>

<body>
    <header class="header">
        <nav>
            <a class="logo" href="#"><span>Garden</span></a>


            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>


            <ul class="mainmenu">
                <li class="active"><a href="garden1.php"> Etusivu</li>

                <div class="dropdown">
            <li class="dropbtn"><a href="#"> Tuotteet <i class="fa fa-caret-down"></i></li>
            <ul class="dropdown-content">
              <li><a href="indoor.php">Sisäkasvit </li>
              <li><a href="#"> Ulkokasvit </li>
              <li><a href="#">Työkalut</li>
              <li><a href="#">Kasvien hoito</li>
              </ul>
          </div>
                <li><a href="shops.php"> Myymälät</li>
                <li><a href="aboutus.php">Tietoa meistä</li>
                <li><a href="contact.php">Ota yhteyttä</li>
                <span class="icon">
                    <i class="fa fa-fw fa-facebook"></i>
                    <i class="fa fa-fw fa-instagram"></i>
                    <i class="fa fa-fw fa-twitter"></i>
                    <i class="fa fa-fw fa-github"></i>
                </span>
                <button class="login"><a href="login.php">Login</a></button>
            </ul>
        
            
        </nav>
        
    </header>
    <div class="main">
        <div class="conetent" style="text-align: center;">
            <h1 style="font-style: italic;color: darkgreen;">Welcome to the website of Puutarhaliike Neilika!</h1><br>
            <p style="color: darkgreen;">Here you will find both indoor and outdoor plants and everything you need to
                care for the plants.</p><br><br>
        </div>
        <h2 style="text-align: center;color: darkgreen;">Uuttiset</h2><br>
        <div class="right">
            <h2>1/2/2016 <br>Happy New Year!</h2><br><br>
            <p> In honor of the New Year in our stores great offers.</p>
        </div>
        <div class="right1">
            <h2>14.12.2015 <br>Joulukukat edullisesti meiltä</h2><br><br>
            <p> Myymälöissämme myös kattava ja edullinen valikoima joulukuusia.</p>
        </div>
        <div class="right2">
            <h2>1.9.2015 </h2><br><br>
            <p> Nyt on hyvä aika aloittaa puutarhan valmistelu talven lepokautta varten. Meiltä löydät kaikki työkalut
                ja tarvikkeet</p>
        </div>
    </div>

    <div class="footer" style="background-color: lightgreen;">
        <h3 style="color: darkgreen;">@copyright</h3><br>
        <span class="icon">
            <i class="fa fa-fw fa-facebook"></i>
            <i class="fa fa-fw fa-instagram"></i>
            <i class="fa fa-fw fa-twitter"></i>
            <i class="fa fa-fw fa-github"></i>
        </span>


    </div>
</body>

</html>