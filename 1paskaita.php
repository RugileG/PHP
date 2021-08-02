<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Sveiki</h1>
    <?php
   
  // $name = "X";
   // $surname = "Y"
    
   $rand = rand(0,10);
   $color = "yellow";
    if($rand>5){
        $color="green";
    }
    if($rand>3){
        $color="red";
    }

    echo "<h1 style=\"color:" {$color}\">" . &rand. "<h1>";

   


    ?>


    <h1 style="color: <?=$color?> "><?=$rand?> </h1>
</body>
</html>