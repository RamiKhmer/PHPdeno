<?php

if(isset($_POST["submitss"])){
 $user = $_POST["username1"];
 $pass = $_POST["password1"];

 $name = array('rami1','ramikh','jamet');

 $minimum = 5;
 $maximum = 10;

 if(strlen($user) < $minimum){
     echo"The User Name Can't be less than 5";
 }
 elseif(strlen($user) >= $maximum ){
    echo"The User Name Can't be longer than 10";
 }

 if(!in_array($user,$name)){
    echo"The User Name Is not correct";
 }else{
     echo"You are welcome";
 }

 
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
<input type="text" placeholder="User Name" name="username1"><br><br>
<input type="Password" placeholder="Password" name="password1"><br><br>
<input type="submit" name="submitss">

</form>







</body>
</html>