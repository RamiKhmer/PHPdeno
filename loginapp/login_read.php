<?php
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "We are connected";
    } else {
        die("We lose");
    }
    $query = "SELECT * FROM tbluser";
    
    $result = mysqli_query($connection, $query);


    if (!$result) {
        echo "Database Fauled";
    }

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="col-sm-6 ">

        <?php

       
            while( $row = mysqli_fetch_assoc($result)){

        ?>

        <pre class="">
        
        <?php
                print_r($row);
                ?>
        </pre><hr>

        <?php

            }


        ?>


        </div>

    </div>







</body>

</html>