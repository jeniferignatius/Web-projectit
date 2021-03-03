<?php include('include/includelomake.php'); 
$server = "localhost";
$user = "root"; 
$password = "";
$database = "gardenlomake";

// create connection
$connection = mysqli_connect($server, $user, $password, $database);?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="garden1.css">
    <title>PHP User Registration System Example</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
                <li><a href="">Ota yhteyttä</li>
            
                    <span class="icon">
                    <i class="fa fa-fw fa-facebook"></i>
                    <i class="fa fa-fw fa-instagram"></i>
                    <i class="fa fa-fw fa-twitter"></i>
                    <i class="fa fa-fw fa-github"></i>
                    </span>
                
            </ul>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 25rem">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">User Profile</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['firstname']; ?>
                        <?php echo $_SESSION['lastname']; ?></h6>
                    <p class="card-text">Email address: <?php echo $_SESSION['email']; ?></p>
                    <p class="card-text">Mobile number: <?php echo $_SESSION['mobilenumber']; ?></p>
                    
                    <a class="btn btn-success btn-block" href="logout.php">Log out</a>
                </div>
            </div>
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

