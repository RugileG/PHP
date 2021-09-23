<?php

init();

function init()
{
    session_start();
    
    if( !isset( $_SESSION['players'])  ){
        $_SESSION['players'] = [];
        $_SESSION['id'] = 1;
    }
}

function edit(){
    foreach ($_SESSION['players'] as $player) {
        if($player['id'] == $_GET['id']){
           return $player;
        }
     }
}

function store(){
    $player['id'] = $_SESSION['id'];
    $player['name'] = $_POST['name'];
    $player['surname'] = $_POST['surname'];
    $player['sport'] = $_POST['sport'];
    $player['country'] = $_POST['country'];
    $player['gender'] = $_POST['gender'];
    $player['victories'] = $_POST['victories'];

    $_SESSION['id']++;
    
    $_SESSION['players'][] = $player;
}

function destroy(){
    foreach ($_SESSION['players'] as $key => $player) {
        if($player['id'] == $_POST['id']){
         unset($_SESSION['players'][$key]);
         return;
        }
    }
}

function update(){
    foreach ($_SESSION['players'] as &$player) {
        if($player['id'] == $_POST['id']){
         $$player['name'] = $_POST['name'];
         $player['surname'] = $_POST['surname'];
         $player['sport'] = $_POST['sport'];
         $player['country'] = $_POST['country'];
         $player['gender'] = $_POST['gender'];
         $player['victories'] = $_POST['victories'];
            return;
        }  
    }
}

?>