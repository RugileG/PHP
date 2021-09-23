<?php

include('./functions.php');


if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if($_POST['action'] == 'create'){
        store();
        header("location:./");
        die;
    }

    if($_POST['action'] == 'update'){
        update();
        header("location:./");
        die;
    }
    
    if($_POST['action'] == 'destroy'){
        destroy();
        header("location:./");
        die; 
    }
    if($_POST['action'] == 'sold'){
        sold();
        header("location:./");
        die; 
    }

}

$action = 'create';

if(isset($_GET['action'])){
        $car = edit();
        $action = 'update';
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .form {
            padding: 10px;
            margin: 0 auto;
        }
        .col-sm-2{
            margin: 5px;
        }
        .col-sm-4{
            margin-top: 5px;
        }
        .table2{
            margin:5px;
        }
    </style>
</head>
<body>

    <form class="form" action="" method="POST">

        <input type="hidden" name="action" value="<?=$action?>">

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Manufacturer: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="manufacturer" value="<?= (isset($car))? $car['manufacturer'] : "" ?>">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Model: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="model" value="<?= (isset($car))? $car['model'] : "" ?>">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Year: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="year" value="<?= (isset($car))? $car['year'] : "" ?>">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Color: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="color" value="<?= (isset($car))? $car['color'] : "" ?>">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Distance: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="distance" value="<?= (isset($car))? $car['distance'] : "" ?>">
            </div>
         </div>
         
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Fuel: </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="fuel" value="<?= (isset($car))? $car['fuel'] : "" ?>">
            </div>
         </div>

    <?php if(!isset($car)){
            echo '<button class="btn btn-primary" type="submit">Add</button>';
    }else{
            echo '
            <input type="hidden" name="id" value="'. $car['id'].' ">
            <button class="btn btn-info" type="submit">Update</button>';
    } ?>
    </form>



    <table class="table">
        <tr>
        <th>Id</th> 
        <th>Manufacturer</th> 
        <th>Model</th> 
        <th>Year</th> 
        <th>Color</th> 
        <th>Distance</th> 
        <th>Fuel</th> 
        <th>Edit</th> 
        <th>Delete</th> 
        <th>Status</th> 
        </tr>


        <?php $count = 0; foreach (getData() as $car) {  ?>
            <tr>
            <td> <?= ++$count."/".$car['id']  ?> </td>
                <td> <?= $car['manufacturer']  ?> </td>
                <td> <?= $car['model']  ?> </td>
                <td> <?= $car['year']  ?> </td>
                <td> <?= $car['color']  ?> </td>
                <td> <?= $car['distance']  ?> </td>
                <td> <?= $car['fuel']  ?> </td>
                <td>
                    <a class="btn btn-success" href="?id=<?= $car['id']  ?>&action=update">Edit</a>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$car['id']?>"  >
                        <input type="hidden" name="action" value="destroy">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    
                </td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$car['id']?>"  >
                        <input type="hidden" name="action" value="sold">
                        <button class="btn btn-secondary" type="submit">Sold</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </table>
            
        <table class="table2">
            <tr>
                <th>Sold cars</th>
            </tr>
        </table>
</body>
</html>