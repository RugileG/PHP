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
    //1---------------------------Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100. Tiems masyvo nariams, kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), priskirkite reikšmę “A”. Likusiems nariams priskirkite reikšmę “B”. Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();

    $array1 = [];
    for ($i=0; $i < 101; $i++) { 
        if($i % 10 == 0){
            $array1[$i] = "A";
        }else{
            $array1[$i] = "B";
        }
    }
    print_r($array1);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    ?>

<?php
    //2---------------------------Pakeiskite pirmąjame uždavinyje sukurtą masyvą. Visas masyvo reikšmes (“A” ir “B”) pakeiskite masyvais, kurie yra atsitiktinio dydžio (ilgio) nuo 3 iki 10. Naujai sukurtų masyvų reikšmes užpildykite atitinkamai “A” arba “B” stringais (pagal tai kokią raidę keičiate į masyvą). Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();
    
    $array1 = [];
    $array2 = [];
   
    for ($i=0; $i < 100; $i++) { 
        if($i % 10 == 0){
            $array1[$i] = "A";
            
                $array1[] = $array2;
                $array2[] = rand(3, 10);
                
            

        }else{
            $array1[$i] = "B";
        }
    }
  
    
    


    print_r($array1);
    echo "<br>";

    print_r($array2);

    


    ?>

<?php
    //3-----------------------------

    ?>
</body>
</html>