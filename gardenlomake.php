<?php
$server = "localhost";
$user = "root"; 
$password = "";
$database = "gardenlomake";

// create connection
$connection = mysqli_connect($server, $user, $password, $database);

if(isset($_POST['submit'])){

    

        $name =$connection->real_escape_string(strip_tags($_POST['name']));
        $email =$connection->real_escape_string(strip_tags($_POST['email']));
        $sexual = $connection->real_escape_string(strip_tags($_POST['sexual']));
        $reason =$connection->real_escape_string(strip_tags($_POST['reason']));
        $message = $connection->real_escape_string(strip_tags($_POST['message']));
     if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['sexual']) || empty($_POST['reason']) || empty($_POST['message']) ){

    $query = "INSERT INTO lomake(name,email,sexual,reason,message) VALUES('$name', '$email', '$sexual', '$reason', '$message')";

    $run = mysqli_query($connection, $query);

    //header("Location:../contact.php?sign-up=success");

    if($run = TRUE){
        echo "Form submitted succesfully!";
    }
    else{ 
        echo "Form not submitted!";
         }
    }

    else{
        echo "Please fill the required fields!";
    }
     
}


?>