<?php

if(isset($_POST["submit"])){
   
    $username = $_POST["username"];
    $password = $_POST["password"];

    $connection = mysqli_connect('localhost','root','','loginapp');


    if($connection) {
        echo"We are connected";
    }else{
        die("We lose");
    }

    // echo $username." ".$password;


}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<form action="login.php" method="post">
<label for="">Login System</label>
<input class="inputbox" type="text" placeholder="Username" name="username"><br><br>
<input class="inputbox" type="Password" placeholder="Password" name="password"><br><br>
<input class="btn" type="submit" name="submit">

</form>







</body>
</html>