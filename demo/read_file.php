<?php 

$file = "example.txt";


if($handle = fopen($file,"r")){
    echo fread($handle, filesize($file));
    fclose($handle);

}
else{
    echo "The application was not able to write on the file";
}






?>