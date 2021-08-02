<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //1--------Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
    echo '<h3>1.</h3>';

    $array = [];
    $count1 = 0;
    $count2 = 0;

    

    for($i = 0; $i < 10; $i++){
  
    for($y = 0; $y < 5 ; $y++){
        $inner[] = rand(5,25);
        if($inner[$y] > 10){
            $count2++;
        }
        }

    $array[$i] = $inner;
    $inner = []; 

    if($array[$i] > 10){
        $count1++;
    }
    
    
    }
    

    print_r($array);
    echo "<br>";
    
    echo '<h3>2.</h3>';

    //Suskaičiuokite kiek masyve yra elementų didesnių už 10;

        echo "a) Elementu didesniu uz 10 yra: " . ($count1+$count2) . "<br>";
    
    //Raskite didžiausio elemento reikšmę;
    $max = 0;

    foreach ($array as $val)
    {
    foreach($val as $key=>$val1)
    {
        if ($val1 > $max)
        {
        $max = $val1;
        }
       }       
    }
        echo "b) Max reiksme " . $max;
        echo "<br>";
    

    //Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
    $sum = 0;
    foreach($array as $number => $number_array)
    {
    foreach($number_array as $data => $user_data)
        {
            print "Array: $number, contains $data with $user_data.  <br>";
        }
    }
    //Visus masyvus “pailginkite” iki 7 elementų

    //Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
      
    ?>
    <?php
    
    echo '<h3>3.</h3>';
    //Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
    
    $array = [];
 
    for($i = 0; $i < 10; $i++){
        

    $array[$i] = []; 

    }
    
    

    print_r($array);
    ?>




















</body>
</html>