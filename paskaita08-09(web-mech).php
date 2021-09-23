<?php
//get -----> per form, per www
//post ----> tik per form


//print_r($_GET);
echo $_GET['vardas'] . " " .$_GET['pavarde'];
// echo $_POST['vardas'] . " " .$_POST['pavarde'];
 


      


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">

    <input type="text" name="vardas">
    <input type="text" name="pavarde">

    <button type="submit">press me</button>
    

    </form>



    <!-- <form action="" method="post"></form> -->
</body>
</html>