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
    //1uzduotis----1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.
    //1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.

    for ($i=0; $i < 30; $i++) { 
        $array[] = rand (20, 40);
    }
    echo "<h5>1.<h5>";
    print_r($array);
    echo "<br>";
    foreach ($array as $value) {
        echo $value . " ";
    }
    /*arba
    for ($i=0; $i < count($array); $i++){
        echo $array[$i] . " ";
    }
    
    */ 

    ?>

    <?php
    //2uzduotis------2. sukurkite masyvą su 10 skaičių nuo 0 iki 10
        //2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 20
        // 2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.

      //a  
        echo "<h5>2.<h5>";
        
      //  $arr1 = [];
      //  $arr2 = [];
        for ($i=0; $i < 10; $i++) { 
            $arr1 = range(0, 9); //arba $arr[] = $i;
            $arr2 = range(10, 20);
        }

        print_r($arr1);
        echo "<br>";
        print_r($arr2);
        echo "<br>";


        
        for ($i=0; $i < 10; $i++) { 
            for ($y=0; $y < count($arr2); $y++) { 
                echo $arr2[rand(0, count($arr2) - 1)] . " ";
            }
        }  
    
    ?>
    <?php
    //3uzduotis------- 3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.reikšmės - skaičiai nuo 0 iki 9.
        //3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).
       // 3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu
       echo "<h5>3.<h5>";

       /*for ($i=0; $i < 10; $i++){
           $arrMin = [];
           for ($i=0; $i < 10; $i++){
            $arrMin[] = rand(0, 9)
           }
           $arr4[] = $arrMin
        }
       }*/ 

        $array = [];

        for ($i=0; $i < 10; $i++) { 
        $array[] = range(0,10);
        }

        print_r($array);
        echo "<br> Kvadratu: <br>";

        $array2 = [];

        for ($i=0; $i < 10; $i++) { 
        $array2[] = range(0,10);
        }
        foreach ($array2 as $value) {
            foreach ($value as $key => $sq) {
                echo $sq * $sq . " ";
            }
        }

    
    ?>
    <?php
    //4uzduotis-------4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas, vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.
    
        echo "<h5>4.<h5>";

        $gyvunas = array(
            "Species" => "Dog", 
            "Age" => 3 , 
            "Name" => "Uoga", 
            "Description" => "hyperactive, friendly, smart");
        
        foreach ($gyvunas as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
        
    ?>
    <?php
    //5uzduotis-------------------------------------------

    /*5. sukurkite tris masyvus:
    $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
    $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
    $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
    aprašus sugalvokite patys. jų reikia 10.

    5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai, iš eilės. 

     maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.
    
    5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.*/


    echo "<h5>5.<h5>";
   /* $names = ["Lina","Linas","Toma", "Tomas", "Jule", "Julius", "Simona", "Simonas", "Jore", "Joris"];

    $species = ["kengūra","leopardas","liūtas", "begemotas", "suo", "lusis", "varle", "uodas", "zebras", "bezdzione"];

    $descriptions = ["graži, bet pikta","pastoviai miega","šauniai maskuojasi", "grobuonis", "kartais greitas", "kartais tingi", "margaspalve", "sekioja nuolat", "visada issiskiriantis", "megsta daryt isdaigas" ];*/

    $gyvunai = array(
        array("name" => "Lina",          "species" => "kengura",     "description" => "grazi, bet pikta"),
        array("name" => "Linas",         "species" => "leopardas",   "description" => "pastoviai miega"),
        array("name" => "Toma",          "species" => "liūte",       "description" => "šauniai maskuojasi"),
        array("name" => "Tomas",         "species" => "begemotas",   "description" => "grobuonis"),
        array("name" => "Jule",          "species" => "suo",         "description" => "kartais greitas"),
        array("name" => "Julius",        "species" => "lusis",       "description" => "kartais tingi"),
        array("name" => "Simona",        "species" => "varle",       "description" => "margaspalve"),
        array("name" => "Simonas",       "species" => "uodas",       "description" => "sekioja nuolat"),
        array("name" => "Jore",          "species" => "zebras",      "description" => "visada issiskiriantis"),
        array("name" => "Joris",         "species" => "bezdzione",   "description" => "megsta daryt isdaigas")
        
    );
    print_r($gyvunai);
    echo "<br>";

    
    $keys = array_keys($gyvunai);
    for($i = 0; $i < count($gyvunai); $i++) {
        echo $keys[$i] . "<br>";
    foreach($gyvunai[$keys[$i]] as $key => $value) { 
        echo $key . " : " . $value . "<br>";
   }
     echo "<br>";
    }

    ?>

    
    <?php
    echo "<h5>6.<h5>";
    //6.padarykite daugybos lentelę nuo 1 iki 9.



    echo "<table border =\"1\" style='border-collapse: collapse'>";
        for ($row=1; $row <= 9; $row++) { 
            echo "<tr> \n";
            for ($col=1; $col <= 9; $col++) { 
               $p = $col * $row;
               echo "<td>$p</td> \n";
                   }
                  echo "</tr>";
            }
            echo "</table>";
//-----------------------------------------------------------------------------------------
            $table = 9;
            $length = 10;
            $i = 1;

            echo "<br>Multiplication table: $table <br>";
            for($i=1; $i<=$length; $i++)
            echo "$i * $table = ".$i * $table. "<br>";
    ?>
    <?php
    //============================================================================
     //   --------------------------FUNKCIJOS------------------------------------
     //=============================================================================
         
  

    echo "<h5>7. Funkcijos <h5>";

    echo "<br>a) ";//-----------------------------A-------------------------------------
    //1. sukurkite funkciją kuri išspausdina kokį nors tekstą.
    function fnc() {
        echo "Cia vyksta funkcijos<br>";
    }
     fnc();

    echo "b) ";//------------------------------B--------------------------------------
    //1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" + tas paduotas kintamasis
    hello("Simai");
    function hello($name) {
        
        echo "labas, " . $name;
    }
    
    

    echo "<br>c) ";//-------------------------------C-------------------------------------
    //1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius
    function myPi(){
    return round(pi(), 8);
    }
    echo myPi();

    echo "<br>d) ";//-------------------------------D-------------------------------------
    //1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.

    function multiply($b=0, $c=0) {
        echo $b * $c;
    }
    echo multiply( 10, multiply(7,5));

    echo "<br>e) ";//-------------------------------E-------------------------------------
    //1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.

    function circleArea($r) {
        return myPi() * ($r * $r);
        
    }

    echo circleArea(8);
    


    echo "<br>f) ";//----------------------------F----------------------------------------
    //1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.

    function circleLength($r){
        return 2 * myPi() * $r;
    }
   echo circleLength(20);

    echo "<br>g) ";//-----------------------------G---------------------------------------
    //1g. sukurkite funkciją kuri: priima vieną parametrą. savyje iškviecia 1e ir 1f funkcijas ir atspausdina: apskritimo ilgis: (tai ka gražino funkcija 1f) apskritimo plotas: (tai ka gražino funkcija 1g)
    
    function circleInfo($r){
        echo "apskritimo ilgis: " . circleLength($r) . "<br>";
        echo "apskritimo plotas: " . circleArea($r) . "<br>";

    }
    circleInfo(24);
    
    
    ?>
    
    
    





















</body>
</html>