<?php
include('./functions.php');
//edit
if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){
    $player = edit();
}

//store
if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])){
    store();
    header("location:./");
    die;
}

//destroy
if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['name'])){
    destroy();
    header("location:./");
    die; 
}

//update    
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])  ){
    update();
    header("location:./");
    die;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</head>
<body>
<form class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Name: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="name" value="<?= (isset($player))? $player['name'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Surname: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="surname" value="<?= (isset($player))? $player['surname'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Sport: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="sport" value="<?= (isset($player))? $player['sport'] : "" ?>">
            </div>
            
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Country: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="country" value="<?= (isset($player))? $player['country'] : "" ?>">
            </div>
            
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Gender: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="gender" value="<?= (isset($player))? $player['gender'] : "" ?>">
            </div>
            
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Victories: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="victories" value="<?= (isset($player))? $player['victories'] : "" ?>">
            </div>
            
         </div>
    <?php if(!isset($player)){
            echo '<button class="btn btn-primary" type="submit">Add</button>';
    }else{
            echo '
            <input type="hidden" name="id" value="'. $player['id'].' ">
            <button class="btn btn-info" type="submit">Update</button>';
    } ?>
    </form>



    <table class="table">
        <tr>
        <th>Id</th> 
        <th>Name</th> 
        <th>Surname</th> 
        <th>Sport</th> 
        <th>Country</th> 
        <th>Gender</th> 
        <th>Victories</th> 
        <th>Edit</th> 
        <th>Delete</th> 
        </tr>


        <?php foreach ($_SESSION['players'] as $player) {  ?>
            <tr>
            <td> <?= $player['id']  ?> </td>
                <td> <?= $player['name']  ?> </td>
                <td> <?= $player['surname']  ?> </td>
                <td> <?= $player['sport']  ?> </td>
                <td> <?= $player['country']  ?> </td>
                <td> <?= $player['gender']  ?> </td>
                <td> <?= $player['victories']  ?> </td>

                <td><a class="btn btn-success" href="?id=<?= $player['id']  ?>">Edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$player['id']?>"  >
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
         <?php } ?> 
    </table>
</body>
</html>