<?php

$arr = ["key"=> "value", "name"=>"Petras"];
print_r($arr);
echo "<br>";
echo json_encode($arr)."<br>";

file_put_contents("./data.txt", json_encode($arr));
echo "<br>";




?>











