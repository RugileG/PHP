<?php

init();

function init()
{
    if(!file_exists("./data.txt")){
        file_put_contents("./data.txt","[]");
        file_put_contents("./id.txt", 0);
        

    }
}

function edit(){
    foreach (getData() as $car) {
        if($car['id'] == $_GET['id']){
           return $car;
        }
     }

}

function store(){
    $data = getData();
    $car['id'] = newId();
    $car['manufacturer'] = $_POST['manufacturer'];
    $car['model'] = $_POST['model'];
    $car['year'] = $_POST['year'];
    $car['color'] = $_POST['color'];
    $car['distance'] = $_POST['distance'];
    $car['fuel'] = $_POST['fuel'];
    
    $data[] = $car;
    setData($data);
}

function getData(){
    $arr = json_decode( file_get_contents('./data.txt'), 1);
    foreach ($arr as &$entry) {
        $entry = (array) $entry;
    }
    return $arr;
}
function setData($arr){
    file_put_contents('./data.txt',json_encode($arr));
}

function newId(){
    $id = file_get_contents('./id.txt') ;
    $id++;
    file_put_contents('./id.txt',$id);
    return $id;
}

function destroy(){
    $data = getData();
    foreach ($data as $key => $car) {
        if($car['id'] == $_POST['id']){
         unset($data[$key]);
         setData($data);
         return;
        }
    }
}
function sold(){
    $data = getData();
    foreach ($data as $key => $car) {
        if($car['id'] == $_POST['id']){
        
        // unset($data[$key]);
         setData($data);
         return;
        }
    }
}

function update(){
    $data = getData();
    foreach ($data as &$car) {
        if($car['id'] == $_POST['id']){
            $car['manufacturer'] = $_POST['manufacturer'];
            $car['year'] = $_POST['year'];
            $car['model'] = $_POST['model'];
            $car['distance'] = $_POST['distance'];
            $car['color'] = $_POST['color'];
            $car['fuel'] = $_POST['fuel'];
            setData($data);
            return;
        }  
    }
}

?>
