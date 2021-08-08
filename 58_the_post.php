<?php 

if($_POST['name'] ){
    echo $_POST['name'];
}
else{
    echo "Enter Name";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="58_the_post.php" method="POST">
   
   <input type="tex" name="name">
   
   <input type="submit" name="submit">
    
    
</form>


</body>
</html>