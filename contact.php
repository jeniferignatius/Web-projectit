<?php
 include('gardenlomake.php');
 include('include/includelomake.php');
 session_start (); 
 $_SESSION['username'] = "Admin";
?>
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
                <li><a href="shops.php"> Myymälät</li>
                <li><a href="aboutus.php">Tietoa meistä</li>
                <li class="active"><a href="#">Ota yhteyttä</li>
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
    
   
   <div class="form" style="color: darkgreen;">
        <form action="gardenlomake.php" method="POST" style="text-align: center;color: darkgreen;">
            <fieldset style="border-radius: 80px; background-color: lightgreen;width: 50vh;height: 60vh;">
            <legend>Yhteydenotto</legend><br><br><br><br>
            <label>Nimi:</label>
            <input type="text" name="name"><br><br>
            <label>Email:</label>
            <input type="email" name="email"><br><br>
            <label>Sukupuoli:</label>
            <input type="radio" name="sexual">Mies <input type="radio"> Nainen <input type="radio"> En halua sanoa<br><br>
            <label>Yhteydenoton syy</label>
            <select name="reason">
                <option>Avunpyynto</option>
                <option>Avunpyynto1</option>
                <option>Avunpyynto2</option>
            </select><br><br>
            <label>Viesti</label>
            <textarea name="message"></textarea><br><br>
            <input type="submit" name="submit"  value="Lähetä" style="background-color: darkgreen;padding: 10px;color:white";>
            </fieldset>
        </form>

    </div>

       <!--- $query = "INSERT INTO lomake(name,email,sexual,reason,message) VALUES('Jenifer', 'jeni.igni@gmail.com', 'female', 'dfsds', 'dfdsf')";

        mysqli_query($connection, $query);-->
    

    
    

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