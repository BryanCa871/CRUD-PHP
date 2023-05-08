<?php

include("config/db.php");

$query = mysqli_query($coon, "DELETE FROM productos WHERE cod_producto = '$_GET[id]'");

if($query){
    header("Location: index.php");
}

?>