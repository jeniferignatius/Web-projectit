<?php include('./include/user_activation.php'); ?>

<?php include('register.php'); ?>
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
   <style>
       @media (min-width: 48em) {
           .logindiv{margin-left: 600px;}
            } 
   </style> 
</head>

<body>
    <header class="header">
        <nav>
        <a class="logo" href="#"><span>Garden</span></a>
        
        
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    
           
            <ul class = "mainmenu">
                <li><a href="garden.html"> Etusivu</li>
                <li><a href="#"> Tuotteet<i class="fa fa-caret-down"></i> </li>
                <ul class ="submenu">
                    <li><a href="indoor.html">Sisäkasvit </li>
                    <li><a href="#"> Ulkokasvit </li>
                    <li><a href="#">Työkalut</li>
                    <li><a href="#">Kasvien hoito</li>
                </ul>
                <li><a href="shops.html"> Myymälät</li>
                <li><a href="aboutus.html">Tietoa meistä</li>
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
    <body style="background-color:#FFFFFF">
    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4">User Email Verification</h1>
            <div class="col-12 mb-5 text-center">
                <?php echo $email_already_verified; ?>
                <?php echo $email_verified; ?>
                <?php echo $activation_error; ?>
            </div>
            <p class="lead">If user account is verified then click on the following button to login.</p>
            <a class="btn btn-lg btn-success" href="http://localhost/moodle/php/login.php"
               >Click to Login
            </a>
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