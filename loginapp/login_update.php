<?php include "db.php";

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


    <div class="container bg-info">
        <div class="col-sm-6 ">
            <form action="login_create.php" method="post">
                <label for="">Login System</label>
                <input class="inputbox" type="text" placeholder="Username" name="username"><br><br>
                <input class="inputbox" type="Password" placeholder="Password" name="password"><br><br>

                <div class="form-group">

                    <select name="id" id="">

                    <?php 

                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            echo "<option value='$id'>$id</option>";
                        }
                        
                        ?>

                        
                    </select>

                </div>


                <input class="btn bg-primary" type="submit" name="submit" value="UPDATE">

            </form>

        </div>

    </div>







</body>

</html>