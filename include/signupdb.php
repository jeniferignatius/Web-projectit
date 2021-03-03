<?php
$server = "localhost";
$user = "root"; 
$password = "";
$database = "gardenlomake";

$connection = mysqli_connect($server, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
   }

   function NewUser() {
       
     $fullname = $_POST['name'];
     $userName = $_POST['user'];
     $email = $_POST['email']; 
     $password = $_POST['pass']; 

     $query = "INSERT INTO websiteusers (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')"; 
     
     $data = mysqli_query ($connection, $query) or die(mysqli_error($query));
     
    if($data) {
        
        echo "YOUR REGISTRATION IS COMPLETED..."; 
        
    } 
    
    } 
    
    function SignUp() { 
        
        if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
        
            { 
                $query = "SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'" or die(mysqli_error($query));
                
                if(!$row = mysqli_fetch_array($query) or die(mysqli_error($query))) 
                      { 
                          newuser(); 
                      } 
                else {
                    
                    echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
                     } 
                } 
            }
            
            if(isset($_POST['submit']))
                 { 
                     SignUp();
                 }
     ?>

      