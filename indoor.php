<?php
  $_SESSION['username'] = "Admin";
?>



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
        img {
            width: 200px;
            height: 200px;

        }

        .column {
            padding: 5px;
            margin-left: 0px;
            border: 1px solid #000000;

        }

        .row {
            background-color: white;
            padding: 15px;
            text-align: center;
        }

        h3 {
            clear: both;
            color: darkgreen;
        }

        .row1 {
            color: darkgreen;
            text-align: center;
            margin-left: 30px;
        }

        .gallery-upload {
            clear: both;
            margin-top: 20px;
            margin-left: 20px;
            box-sizing: border-box;
        }

        .footer {
            background-color: lightgreen;
        }
        .sivutus{
  justify-content: center;
 align-items: center;
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding: 5%;
}
.sivutus a{
    text-decoration: none;
    display: block;
    padding-right: 25px;
    padding-left: 25px;
    text-align: center;
    margin:0 auto;
  }


        @media (min-width: 48em) {
            img {
                width: 110px;
                height: 90px;
            }

            .column {
                padding: 10px;
                float: left;
                margin-left: 10px;

            }

            .row {
                padding: 15px;
                text-align: center;
                margin-top: 50px;
            }

            .row1 {
                margin-left: 500px;
            }

            .row2 {
                margin-left: 500px;
            }

            .gallery-upload {
                clear: both;
                top: 50px;
                margin:200px;
                
            }
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
                <li><a href="contact.php">Ota yhteyttä</li>
                <span class="icon">
                    <i class="fa fa-fw fa-facebook"></i>
                    <i class="fa fa-fw fa-instagram"></i>
                    <i class="fa fa-fw fa-twitter"></i>
                    <i class="fa fa-fw fa-github"></i>
                </span>
                <button class="login"><a href="login.php">Login</a></button>
            </ul>
        
            <div class="pagination"><?php include "pagination.php"; ?></div>
        </nav>
    </header>

    <h2 style="color: darkgreen;text-align: center;">Indoor plants</h2><br><br>
    <div class="row1" style="color: darkgreen;text-align: center;margin-left: 10px;">
        <div class="column" >
            <?php
            include_once 'include/include.php';

            // create connection
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $connection=mysqli_connect($server, $user, $password, $database);

        $total_pages_sql = "SELECT COUNT(*) FROM galleryupload";
        $result = mysqli_query($connection,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
            $sql = "SELECT * FROM galleryupload ORDER BY orderimg DESC LIMIT $offset, $no_of_records_per_page";
            $stmt = mysqli_stmt_init($connection);

            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "SQL statement failed";
            }
            else{
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

            while( $row = mysqli_fetch_array( $result)){ 
           
            echo '<div class="column">
            <img src="include/upload/'.$row["imgfilename"].'"></img>
            <div>'.$row["title"].'</div>
            <div><p>'.$row["description"].'</p>
            <p>'.$row["price"].'€/kpl</p></div>
            </div> ';

               }
            }
            ?>
        </div>
        </div>


   
    <?PHP

    if(isset($_SESSION['username'])){

    echo '<div class="gallery-upload" style="text-align: center">
        <form action="include/gallerydb.php" method="post" enctype="multipart/form-data"  style="border-radius: 80px; background-color: lightgreen;><br><br>
        
            <label>Filename:  </label><input type="text" name="filename" placeholder="file name..."><br><br>
            <input type="text" name="filetitle" placeholder="image title..."><br><br>
            <input type="text" name="filedesc" placeholder="image description..."><br><br>
            <input type="text" name="price" placeholder="price..."><br><br>
            <input type="file" name="file"><br><br>
            <button type="submit" name="submit">Upload</button>
        
        </form>
    </div>';
     }

    ?>

<nav>
<ul class="sivutus">
    <li><a href="?galleryupload=<?php echo $row;?>&pageno=1"><i class="fa fa-angle-double-left"></i></a></li>
    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?galleryupload=" . $row . "&pageno=".($pageno - 1); } ?>"><i class="fa fa-angle-left"></i></a>
    </li>
    <li><?php echo $pageno . "/" . $total_pages?></li>
    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?galleryupload=" . $row . "&pageno=".($pageno + 1); } ?>"><i class="fa fa-angle-right"></i></a>
    </li>
    <li><a href="?=<?php echo $row;?>&pageno=<?php echo $total_pages; ?>"><i class="fa fa-angle-double-right"></i></a></li>
</ul>
</nav>

    <div class="footer">
        <h3>@copyright</h3><br>
        <span class="icon">
            <i class="fa fa-fw fa-facebook"></i>
            <i class="fa fa-fw fa-instagram"></i>
            <i class="fa fa-fw fa-twitter"></i>
            <i class="fa fa-fw fa-github"></i>
        </span>
    </div>
</body>

</html>