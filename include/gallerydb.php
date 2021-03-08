<?php
$server = "localhost";
$user = "root"; 
$password = "";
$database = "gardenlomake";

// create connection
$connection = mysqli_connect($server, $user, $password, $database);

if(isset($_POST['submit'])){

    $newFilename  = $_POST['filename'];
    if(empty($newFilename)){
        $newFilename = "gallery";
}  
else{
    $newFilename = strtolower(str_replace("","-", $newFilename));
}
$imageTitle = $_POST['filetitle'];
$imageDesc = $_POST['filedesc'];
$price = $_POST['price'];
$file = $_FILES['file'];

//print_r($file);

$fileName = $file['name'];
$fileType = $file['type'];
$fileTempName = $file['tmp_name'];
$fileError = $file['error'];
$fileSize = $file['size'];

$fileExt = explode(".",$fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array("jpg","jpeg","png");

if(in_array($fileActualExt,$allowed)){
    if($fileError === 0){
        if($fileSize < 2000000){
            
            $imageFullName=basename($_FILES['file']['name']);
            //$imageFullName= $newFilename."." .uniqid("",true). "." . $fileActualExt;
            $fileDestination = "upload/" .  $imageFullName;

            include_once 'include/include.php';

            if(empty($imageTitle) || empty($imageDesc)){
                header("Location:../indoor.php?upload=empty");
                exit();
            }
            else{
                $sql = "SELECT * FROM galleryupload;";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "SQL statement failed";
                }
                else{
                    mysqli_stmt_execute( $stmt);
                    $result = mysqli_stmt_get_result( $stmt);
                    $rowCount = mysqli_num_rows( $result);
                    $setImageOrder= $rowCount + 1;

                    $sql = "INSERT INTO galleryupload(title,description,imgfilename,orderimg,price) VALUES (?,?,?,?,?);";
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        echo "SQL statement failed"; 
                     }
                     else{
                         mysqli_stmt_bind_param($stmt,"sssss",$imageTitle,$imageDesc,$imageFullName,$setImageOrder,$price);
                         mysqli_stmt_execute($stmt);

                         move_uploaded_file($fileTempName,$fileDestination);

                         header("Location:../indoor.php?upload=success");
                     }
                
                }
            }
        }
        else{
            echo "File is too big";
            exit();
        }

    }
    else{
        echo "You had an error!";
        exit();
    }

}
else{
    echo "You need to upload a proper file type!";
    exit();
}
}

