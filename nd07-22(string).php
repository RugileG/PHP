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
    //1uzduotis-------------------------------------
    $name = "Tom";
    $surname = "Hanks";
    echo "1. " . $name ." ". $surname . "<br>";
    if(strlen($name)>strlen($surname)){
        echo $surname;
    }else{
        echo $name;
    }
    ?>
    <br>
    <br>

    <?php
    //2uzduotis---------------------------------------
    $name = "Meryl";
    $surname = "Streep";
    $name=strtoupper($name);
    $surname = strtolower($surname);
    echo "2. " . $name . " " . $surname . "<br>";

    ?>
    <br>
    <?php
    //3uzduotis----------------
    $name = "Johnny";
    $surname = "Depp";
    echo "3. " . $name . " " . $surname . "<br>";
    echo substr($name, 0, 1);
    echo substr($surname, 0 ,1) . "<br>";

    ?>
    <br>

    <?php
    //4uzduotis------------------------
    $name = "Nicole";
    $surname = "Kidman";
    echo "4. " . $name ." ". $surname . "<br>";
    $lastletters = substr($name, -3) . substr($surname, -3);
    echo $lastletters . "<br>";
    ?>
    <br>
    <?php
    //5uzduotis------------------
    $name =  "An American in Paris";
    echo "5. " . $name . " --> ";
    echo strtr($name, "Aa", "**");

    ?>
    <br>
    <br>
    <?php
    //6uzduotis--------------------
    $name =  "An American in Paris";
    echo "6. " . $name . " --> a raidziu yra: " . (substr_count($name,"A") + substr_count($name,"a") . "<br>");

    ?>
    <br>
    <?php
    //7uzduotis------------------
    $str1="An American in Paris";
    $str2="Breakfast at Tiffany's";
    $str3="2001: A Space Odyssey";
    $str4="It's a Wonderful Life";

    echo "7. " . $str1 . " --> ";
    echo strtr($str1, "AaEeIiYyOoUu", "            ") . "<br>";

    echo $str2 . " --> ";
    echo strtr($str2, "AaEeIiYyOoUu", "            ") . "<br>";

    echo $str3 . " --> ";
    echo strtr($str3, "AaEeIiYyOoUu", "            ") . "<br>";

    echo $str4 . " --> ";
    echo strtr($str4, "AaEeIiYyOoUu", "            ") . "<br>";

    ?>
    <br>
    <?php
    //8uzduotis---------------------
    $text = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
    echo "8. " . $text . "<br>";
    
    


    ?>
    <br>
    <?php
    //9uzduotis------------------------------
    $name="Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
    echo "9. " . $name . "<br>";

    $name2="Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

    $array=explode(" ",$name);
    $array2=explode(" ",$name2);
    
    
    for($i=0, $j=0 ; $i<count($array) ; $i++)
        if(strlen($array[$i])<=5){
            $lessthan6[$j] = $array[$i];
            $j = $j+1;
        }
        echo " Trumpesniu arba lygiu nei 5 raides zodziu yra: " .  $j . "<br>"."<br>";

        echo $name2 . "<br>";
    
        for($i=0, $j=0 ; $i<count($array2) ; $i++)
        if(strlen($array2[$i])<=5){
            $lessthan6[$j] = $array2[$i];
            $j = $j+1;
        }
        echo " Trumpesniu arba lygiu nei 5 raides zodziu yra: " .  $j . "<br>";

    
    ?>
    <br>
    <?php
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];
        echo "10. " . $letters [rand(0, count($letters)-1)];
        echo $letters [rand(0, count($letters)-1)];
        echo $letters [rand(0, count($letters)-1)];



    ?>



</body>
</html>