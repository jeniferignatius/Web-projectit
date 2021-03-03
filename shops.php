<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>news</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="garden1.css">
    
</head>

<body>
    <header class="header">
        <nav>
        <a class="logo" href="#"><span>Garden</span></a>
        
        
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    
           
            <ul class = "mainmenu">
                <li><a href="garden1.php"> Etusivu</li>
                <div class="dropdown">
            <li class="dropbtn"><a href="#"> Tuotteet <i class="fa fa-caret-down"></i></li>
            <ul class="dropdown-content">
              <li><a href="indoor.php">Sisäkasvit </li>
              <li><a href="#"> Ulkokasvit </li>
              <li><a href="#">Työkalut</li>
              <li><a href="#">Kasvien hoito</li>
              </ul>
          </div>
                <li class="active"><a href="#"> Myymälät</li>
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
    <div class="footer">
        <h3 style="color: darkgreen;">Myymälät</h3>
        <div style="float: left;padding: 10px 90px;text-align: center;">
        <img src="map.jpg" alt="map" width="100px" height="100px" >
        <p style="float: right;color: darkgreen;" >
            Puutarhaliike Neilikka,<br> Helsinki<br>
            Fabianinkatu 42<br>
            00100 Helsinki<br>
            Puh. xx-xxxxxxx<br>
            Sähköposti: helsinki@puutarhaliikeneilikka.fi<br><br>

            <b>Avoinna</b><br>
            ma-ke 9-17<br>
            la 12-18<br>
        </p>
        </div>
        <div style="float: right;padding: 10px 90px;text-align: center;">
            <img src="map.jpg" alt="map" width="100px" height="100px"  style="float: left;">
        <p style="color: darkgreen;" >
            Puutarhaliike Neilikka,<br> Espoo<br>
            Kivenlahdentie 10<br>
            01234 Espoo<br>
            Puh. xx-xxxxxxx<br>
            Sähköposti: espoo@puutarhaliikeneilikka.fi<br><br>

            <b>Avoinna</b><br>
            ma-ke 9-17<br>
            la 12-18<br>
        </p>
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