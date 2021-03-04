<?php include('include/register.php'); 

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

 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

   
   <style>
     
   </style> 
</head>


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
    <body>
    <!--<h3 style="color:darkgreen;text-align:center;">signup Page</h3><br><br>
    <div class="form" style="color: darkgreen;text-align:center ;margin-left: 5vh;">
        <form action="include/register.php" method="POST" style="text-align: center;color: darkgreen;">
                    <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>

                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>

            <fieldset style="border-radius: 80px; background-color: lightgreen;width: 50vh;height: 50vh;">
            <legend>Yhteydenotto</legend><br><br><br><br>
            <label>FirstName:</label>
            <input type="text" name="firstname"><br><br>
                        <?php echo $fNameEmptyErr; ?>
                        <?php echo $f_NameErr; ?>
            <label>LastName:</label>
            <input type="text" name="lastname"><br><br>
                        <?php echo $l_NameErr; ?>
                        <?php echo $lNameEmptyErr; ?>
            <label>Email:</label>
            <input type="email" name="email"><br><br>
                        <?php echo $_emailErr; ?>
                        <?php echo $emailEmptyErr; ?>
            <label>Mobile:</label>
            <input type="text" name="mobilenumber"><br><br>
                        <?php echo $_mobileErr; ?>
                        <?php echo $mobileEmptyErr; ?>
            <label>Password:</label>
            <input type="password" name="password"><br><br>
                        <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>
            <input type="submit" name="submit"  value="Lähetä" style="background-color: darkgreen;padding: 10px;">
            </fieldset>
        </form>

    </div> -->

    <!--bootstrap

    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h3>Register</h3>
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" name="firstname" id="firstName" />
                    </div>

                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" name="lastname" id="lastName" />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" />
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" name="mobilenumber" id="mobilenumber" />
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" />
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">
                        Sign up
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="signup-form">
    <form action="include/register_a.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group">
            <input type="file" name="file" required>
            <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
       <!-- </div>        
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>-->



    


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