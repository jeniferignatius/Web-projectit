<?php
$server = "localhost";
$user = "root"; 
$password = "";
$database = "gardenlomake";

$connection = mysqli_connect($server, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($connection,$_POST['username']);
    $mypassword = mysqli_real_escape_string($connection,$_POST['password']); 
    
    $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
      
       $_SESSION['login_user'] = $myusername;
       
       header("location: welcome.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
 }
?>