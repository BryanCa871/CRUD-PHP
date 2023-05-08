<?php

include("config/db.php");

if(!empty($_POST['producto'])){
    $producto = $_POST['producto'];
    $categoria = $_POST['categoria'];
    $query = mysqli_query($coon, "INSERT INTO productos(producto,categoria) VALUES('$producto', '$categoria')");

    if($query){
        header("Location: index.php");
    }
}

?>