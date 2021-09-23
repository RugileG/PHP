
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
     .sq {
         display: inline-block;
         line-height: 50%;
     }
     .red{
         color: red;
         font-weight:900;
     }
 </style>
</head>
<body>

    <?php //1---------------------------
     echo '<h3>1.</h3>';
     echo '<h5>Naršyklėje nupieškite linija iš 400 “*”</h5>';
     echo '<h5> a) Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane</h5><br>';
     echo '<div style="display: flex; flex-wrap:wrap;">';
     for ($i=1; $i<400; $i++){
         echo '<span style="width: auto;">'.
         '*'.'</span>';
     }
     echo "</div><br>";

     echo '<h5> b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*” </h5><br>';
     $count = -1;
     for ($i=0; $i<400; $i++){
         $count++;
         if ($count>=50){
             echo "<br>";
             $count =0;
         }
         echo '*';
     }

    ?>

    <br>

    <?php //2--------------------------------
    echo '<h3>2.</h3>';
    echo '<h5>Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.</h5>';

    $count=0;
    for($i=0; $i<300; $i++){
        $num = rand(1, 300) . " ";

        if($num>275){
            echo"<span style='color:red;'>".$num."</span>";
        }else {
            echo "<span>".$num."</span>";
            }


        if($num>150){
            $count++;

        }
        }
        echo "<br>didesniu nei 150 yra: ".$count."<br>";
        
        echo "<br>";
    
    ?>
    <?php
    //3------------------------------
    echo "<h3>3.</h3>";
    $text="";
        for($i=77; $i<rand(3000, 4000); $i+=77){
            $text .= $i.", ";
            
        }
        echo substr($text, 0, -2);

    ?>
    <?php
    //4------------------------------
    echo "<h3>4. ir 5.</h3>";

    for($i=0; $i<50; $i++){
        for($a=0; $a<50; $a++){
        if($i==$a){
            echo "<div class=\"sq red\">*</div>";
        }elseif(50-$i-1==$a){
            echo "<div class=\"sq red\">*</div>";
        }
        else{
            echo "<div class=\"sq\">*</div>";
        }
    }
        echo "<br>";
    }




    ?>

    <?php
    //6----------------------------------
    echo "<h3>6.</h3>";
    $hSk=0;
    $countas=0;
    
    
    while(true){
        $sh=rand(0,1);
        if($sh == 1){
            
            echo "H";
            break;
        }
        echo "S<br>";
        
        
    }
   /* echo "<br>Pirmas herbas iskrito metant " . $sh++ . " karta<br>";*/
    
    

    while($hSk<3){
        $countas++;

        $rnd=rand(0,1);
        if($rnd==0){
            $msh="H";
            $hSk++;
        }else{
            $msh="S";
        }
    }
    echo $msh . "<br>";
    echo "3 kartus is viso herbas iskrito po " . $countas . " kartu<br>";


    ?>
    <?php
    //7------------------------------
    echo "<h3>7.</h3>";
    $nameP = "Petras";
    $nameK = "Kazys";
    $sumP = 0;
    $sumK = 0;
    $laimetojas = " ";

    do{
        $p = rand(10, 20);
        $k = rand(5, 25);
        $sumP += $p;
        $sumK += $k;
        echo "<br>";
        if ($p>$k){
            echo  $nameK . " : " . $k ." : ".  $sumK ."  ". $nameP ." : ". $p ." : ". $sumP. " Partija laimejo: " . $nameP;
        } else {
            echo  $nameK . " : " . $k ." : ".  $sumK ."  ". $nameP ." : ". $p ." : ". $sumP. " Partija laimejo: " . $nameK;
        }


    }while( ($sumP < 222)&&($sumK < 222) );
    $laimetojas = ($sumP>$sumK)?$nameP : $nameK;
    echo "<br>Zaidima laimejo: " . $laimetojas;


    ?>
    <?php
    //8---------------------------------
    echo "<h3>8.</h3>";

            echo "<pre>";
        for ($i = 1; $i < 8; $i++) {
            for ($j = $i; $j < 8; $j++)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;*");
            echo "<br>";
        }
        $n = 8;
        for ($i = 8; $i > 0; $i--) {
            for ($j = $n - $i; $j > 0; $j--)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;*");
            echo "<br>";
        }
        echo "</pre>";


    ?>
    <?php
    //9--------------------------------
    echo "<h3>9.</h3>";
    ?>
    <?php
    //10-------------------------------
    echo "<h3>10.</h3>";
        
    for ($i=1; $i < 6; $i++) { 
            # code...
        


        $nailLength =85;
        $nailed = 0;
        $count = 0;
        while($nailed < $nailLength){
            $count++;
            if(rand (0,1)){
                echo "Auch! my finger!<br>";
                continue;
            }
            $taukst = rand(5,20);
            $nailed+= $taukst;
            echo " taukst! siuo smugiu " . $i . " vinis ilindo i medi " . $taukst . " mm. Dabar vinis yra " . $nailed . " mm gylyje.<br>";
        }
        echo "Vini ikaleme " . $count . " smugiais<br>.";
        echo "<br>";

    }

    for($i>1;;$i++){
        if($i>10){
            break;
        }
        echo $i;
    }


    ?>

























</body>
</html>