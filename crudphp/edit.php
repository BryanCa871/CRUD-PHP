<?php
    include("config/db.php");

    $id = $_GET['id'];
    $result = mysqli_query($coon,"select * from productos where cod_producto = '$id'");
    $row = mysqli_fetch_array($result);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $producto = $_POST['producto'];
        $categoria = $_POST['categoria'];
        $producto = mysqli_query($coon, "UPDATE productos SET producto = '$producto' WHERE cod_producto = '$id'");
        $categoria = mysqli_query($coon, "UPDATE productos SET categoria = '$categoria' WHERE cod_producto = '$id'");

        if($producto && $categoria){
            header("Location: index.php");
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="container">
    <div class="row">
        <div clas="col-lg-3">
            <form action="" method="post">
                <h1><strong>Producto</strong></h1>
                <br>
                <input type="text" value="<?php echo $row['producto'] ?>" class="form-control" placeholder="producto" required name="producto">
                <br>
                <input type="text" value="<?php echo $row['categoria'] ?>" class="form-control" placeholder="categoria" required name="categoria">
                <br>
                <input type="submit" value="Agregar" class="btn btn-primary">
            </form>
            </div>
   </div>
   </div>





   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>