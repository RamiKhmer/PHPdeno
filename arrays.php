<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$numberList = array(23,24,65,45,'34a', 'haha','<h1>Hello</h1>');

echo $numberList[6];

$name = array('First_Name'=> 'Ra', 'Last_Name'=> 'Mi');

echo $name['First_Name']." ".$name['Last_Name'];

echo '<hr>';

$myArr = array('dg', 23,34,45,67,'hoho');

foreach($myArr as $myArr){
    echo $myArr.'<br>';
}

?>

</body>
</html>