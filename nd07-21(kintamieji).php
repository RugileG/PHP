<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1></h1>

   
    <?php
    //1uzduotis
    $name = "Rugile";
    $surname = "Grikietyte";
    $dateOfbirth = "1922";
    $date = "2021";

    echo "1. As esu " . $name . " ". $surname . ". Man yra " . ($date - $dateOfbirth) . " metai.<br>";
    
    
    ?>
    <br>

    <?php
    //2uzduotis
    $rand1 = rand(0,4);
    $rand2 = rand(0,4);
    echo "2. " . $rand1 . " " . $rand2 . "<br>";

    if($rand1 > $rand2){
        if( $rand2 >0){
            echo  "Atsakymas: " . (round($rand1 / $rand2 , 2)) . "<br>";
        }else{
            echo  " Dalyba is 0 negalima!<br>";
        }
    }

    if($rand2 > $rand1){
        if( $rand1 >0){
            echo  "Atsakymas: " . (round($rand2 / $rand1 , 2)) . "<br>";
        }else{
            echo  " Dalyba is 0 negalima!<br>";
        }
    }

    if($rand2 == $rand1){
        echo  "Atsakymas:1<br>";
    }
/*
    if(min($rand1,$rand2)!=0){
      echo  round( max($rand1,$rand2) / min($ran1,$rand2) ,2);
    }else{
        echo "dalyba is nulio negalima";
    }*/

    ?>

<br>
    <?php
    //3uzduotis
    $rand1 = rand(0,25);
    $rand2 = rand(0,25);
    $rand3 = rand(0,25);
    $data = array($rand1, $rand2, $rand3);
    sort($data);

    echo "3. " . $rand1 . " " . $rand2 . " " . $rand3 . "<br>";

    if(($s = sizeof($data)) % 2 == 0) {
        echo "Vidurine reiksme yra: " . $data[$s / 2] . " and " . $data[$s / 2 - 1] . "<br>";
    } else {
        echo "Vidurine reiksme yra: " . $data[floor($s / 2)] . "<br>";
    }


    ?>

<br>

    <?php
    //4uzduotis
    $x = rand(1,10);
    $y = rand(1,10);
    $z = rand(1,10);

    echo "4. " . $x . " " . $y . " " . $z . "<br>";

    if( (($x+$y)<=($x+$y))>=$z || (($x-$y)>=($x-$y))>=$z ){
        echo "Trikampi sudaryti galima" . "<br>";
    }else{
        echo "Trikampis neimanomas" . "<br>";
    }
    
    ?>
<br>
    <?php
    //5uzduotis---------------------
    

    $x = rand(0,2);
    $y = rand(0,2);
    $z = rand(0,2);
    $t = rand(0,2);
    
    
   echo "5. " . $x . $y . $z . $t . "<br>";

    $rez0=0;
    $rez1=1;
    $rez2=2;
    //x
    if($x==0){
        $rez0++;
    }if($x==1){
        $rez1++;
    }if($x==2){
        $rez2++;
    }
    //y
    if($y==0){
        $rez0++;
    }if($y==1){
        $rez1++;
    }if($y==2){
        $rez2++;
    }
    //z
    if($z==0){
        $rez0++;
    }if($z==1){
        $rez1++;
    }if($z==2){
        $rez2++;
    }
    //t
    if($t==0){
        $rez0++;
    }if($t==1){
        $rez1++;
    }if($t==2){
        $rez2++;
    }
  //  echo "Nuliai:  " . $rez0 . " Vienetai:  " . $rez1 . " Dvejetai: " . $rez2 . "<br>";


    ?>
<br>
    <?php
    //6uzduotis----------------------------
    $a=rand(0,6);
    $print =" <html>
                <h{$a}> $a</h{$a}>
                </html>";
    echo "6. " . "$print";
    ?>
<br>
    <?php
    //7uzduotis-------------------------------
    $x = rand(-10,10);
    $y = rand(-10,10);
    $z = rand(-10,10);

    
    if ($x < 0) $color = '#7FFF00';
    if ($x > 0) $color = '#0000FF';
    if ($x == 0) $color = '#FF4500';
    echo "7. " . "<span style=\"color: $color;\">" . $x . "</span>" . " ";

    if ($y < 0) $color = '#7FFF00';
    if ($y > 0) $color = '#0000FF';
    if ($y == 0) $color = '#FF4500';
    echo "<span style=\"color: $color;\">" . $y . "</span>" . " ";

    if ($z < 0) $color = '#7FFF00';
    if ($z > 0) $color = '#0000FF';
    if ($z == 0) $color = '#FF4500';
    echo "<span style=\"color: $color;\">" . $z . "</span>" . "<br>";


    ?>
    <br>

    <?php
    //8uzduotis-----------------------------------
    $zv=1;
    $kiekis=rand(5, 3000);
    

    if($zv * $kiekis <= 1000){
        $benuolaidos=$zv*$kiekis;
        echo " 8.1 " . "Uzsakyta:   "  .$zv*$kiekis . "<br>"  ;
        echo "Suma: " . $benuolaidos . " Eur" . "<br>";
    } 

    if($zv * $kiekis >1000 && $zv * $kiekis<=2000){
        $nuolaida3=($zv*$kiekis)-(($zv*$kiekis)*0.03);
        echo " 8.2 " . "Uzsakyta:   "  .$zv*$kiekis . "<br>"  ;
        echo "Suma: " . $nuolaida3 . " Eur" . "<br>";
    }

   if ($zv * $kiekis > 2000){
        $nuolaida4=($zv*$kiekis)-(($zv*$kiekis)*0.04);
        echo " 8.3 " . "Uzsakyta:   "  .$zv*$kiekis . "<br>"  ;
        echo "Suma:  " . $nuolaida4 . " Eur" . "<br>";
    }
    
    
    ?>
    

    
    
    
   
</body>
</html>