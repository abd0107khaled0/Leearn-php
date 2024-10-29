<?php $name = "abdelrahman" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn by <?= $name?></title>
</head>
<body>
    <h1>Hello</h1>
    <?php 
    $nameOfCar = @$_GET["nameOfC"];
    if($_SERVER["REQUEST_METHOD"] == 'GET'){

        if($nameOfCar == 'kia'){
            echo "1000 000";
        }else{
            echo $nameOfCar;
        }
    }else {
        echo "request method may be post";
    }

    ?>
    <form action="" method="post">
        <input type="text" name="nameOfC" >
        <input type="submit" value="send name" >
    </form>
</body>
</html>