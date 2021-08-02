<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 {
            text-align: center;
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <?php
    //1 ir 2 uzduotis-------------------------------------
        $zoo = [
            ['species'=> 'monkey','age'=>13,'gender'=>'male'],
            ['species'=> 'aligtor','age'=>13,'gender'=>'male'],
            ['species'=> 'rat','age'=>13,'gender'=>'male'],
            ['species'=> 'kangaroo','age'=>13,'gender'=>'female']
        ];


        foreach ($zoo as $animal) {

            foreach ($animal as $key => $parameter) {
                echo $parameter;
               
            }


        }

        for ($i=0; $i < count($zoo) ; $i+=2) { 
           $animal = $zoo[$i];
           echo $animal['age'];
        }




    echo '<h3>1. ir 2.</h3>';
    $count=0;
    $even=0;
    $array = [];
    for ($i=0; $i < 30; $i++) { 
       $array[] = rand(5,25);
       if($array[$i] > 10){
           $count++;
       }
       if($i % 2 == 0){
           $even += $array[$i]; //$i = 0,2,4,6,8,10
       }
    }
        //
        // for ($i=0; $i < 30; $i++) { 
        //     $array[] = rand(5,25);
        // }


        // for ($i=0; $i < count($array); $i++) { 
        //     if($array[$i] > 10){
        //         $count++;
        //     }
        // }

        // for ($i=0; $i < count($array); $i+=2) { 
        //         $even += $array[$i]; //$i = 0,2,4,6,8,10
        // }

        //




    print_r($array);
    echo "<br>";
    echo "<br> a) Didesniu uz 10 skaiciu yra: " . $count . "<br>";
    echo "b) " . array_search(max($array), $array) ." ". max($array);
    echo "<br>c) Lyginiu indexu suma yra " . $even . "<br>";

//$maxreiksme = max($array);
//$indexai = array_keys($array, max($array));----max reiksmes grazina i masyva

    echo "<br>";//------------------------------------------------

    
   $array = [];
    for ($i=0; $i < 30; $i++) { 
       $array[$i] = rand(5, 25);
       $array[$i]-=$i;
    }

    echo "d) ";
    print_r($array);

   /* $arrLower=0;
   for ($i=0; $i < 30 ; $i++) { 

        $arrLower[]=$array[$i]-$i;
    
    }
    
    echo "Masyvo reikšmes minus tos reikšmės indeksas:"."<br>";
    
    for ($i=0; $i < 30 ; $i++) { 
    
        echo $arrLower[$i] ." ";
    
    }*/

    echo "<br>";//-----------------------------------------------


    $array2 = [];
    for ($i=0; $i < 10; $i++) { 
       $array2[$i] = rand(5,25);
    }
    echo "<br>e) ";
    $array3 = array_merge($array, $array2);
    print_r($array3);
    
    // for ($i=0; $i < 10; $i++) { 
    //   $array[] = rand(5,25);
    // }


    echo "<br>";//--------------------------------------------------
    
    $count=0;

    $array4 = [];
    for ($i=0; $i < 30; $i++) { 
       $array4[$i] = rand(5,25);
    }
    
    echo "<br>";

    $odd = array();
    $even = array();

    foreach ($array4 as $value) {
        if($count%2==0){
            $even[]=$value;
            $count++;
        }else{
            $odd[]=$value;
            $count++;
        }
        
    }

    /*    foreach ($array4 as $key => $value) {
        if($key % 2 == 0){
            $even[]=$value;
        }else{
            $odd[]=$value;
        }
        
    }*/

for ($i=0; $i < count($array4) ; $i++) { 
    if($i % 2 == 0){
        $even[] = $value;
    }else{
        $odd[] = $value;
    }
}



    echo "<br>f) Masyvas: ";
    print_r($array4);
    echo "<br>";
    echo " <br> Lyginiu masyvas: ";
    print_r($even);
    echo "<br> Nelyginiu masyvas: ";
    print_r($odd);

    
    echo "<br>";
    echo "<br>g) ";

    echo "<br>";
    echo "<br>h) ";

    echo "<br>";
    echo "<br>i) ";

    

    

    ?>
    <?php
    //3----------------------------------------------------------
    echo '<h3>3. </h3>';

     

     $letters = ['a', 'b', 'c', 'd'];
     //print_r($letters);
     //echo $letters[ rand(0, count($letters)-1) ];

     for ($i=0; $i < 200; $i++) { 
        $array1[]= $letters[ rand(0, count($letters)-1) ];
     }

     foreach ($array1 as $letters){
        $letters." ";
     }
     print_r ($array1);

     echo "<br>";

    

        
    ?>
    <?php
    //4uzduotis------------------------------------------
    echo '<h3>4. </h3>';
    $letters = ['a', 'b', 'c', 'd'];
    for ($i=0; $i < 200; $i++) { 
        $array1[]= $letters[ rand(0, count($letters)-1) ];
     }

     "a" < "b";

     for ($i=0; $i < count($array1) ; $i++) { 
        for ($a=$i+1; $a < count($array1) ; $a++) { 
         if($array1[$i]>$array1[$a]){
             $tmp = $array1[$a];
             $array1[$i] = $array1[$a];
             $array1[$a] = $tmp;
         }
        }
    }
   
     
     print_r($array1);
    
    ?>

    <?php
    //5uzduotis----------------------------------------------
    echo '<h3>5.</h3>';



    ?>

<?php
    //6uzduotis----------------------------------------------
    echo '<h3>6.</h3>';
    $array1 = [];
    for ($i=1; $i < 101; $i++) { 
       $array1[$i] = rand(100,999);
    }

        $array1Unique = array_unique($array1);
        print_r($array1Unique);
    
            echo "<br>";
            echo "<br>";


    $array2 = [];
    for ($i=1; $i < 101; $i++) { 
        $array2[$i] = rand(100,999);
    }

        $array2Unique = array_unique($array2);
        print_r($array2Unique);
        

    //7uzduotis------------------------------------------------
    echo '<h3>7.</h3>';




    //8uzduotis------------------------------------------------
    echo '<h3>8.</h3>';
    

    //9uzduotis----------------------------------------------
    echo '<h3>9.</h3>';


    ?>

   <?php
   //10uzduotis-----------------------------------------------
   echo '<h3>10.</h3>';
   $array = [];

   
   
   ?>












</body>
</html>