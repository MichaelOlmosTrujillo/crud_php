<?php

include 'config/db.php';
$id = $_GET['id'];
$result = mysqli_query($coon, "select * from productos where cod_producto = '$id'");
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $producto = $_POST['producto'];
    $result = mysqli_query($coon, "update productos set producto = '$producto' where cod_producto = '$id'");

    if ($result) {
        header('location: index.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Crud php</title>
</head>
<body>
<div class= "container">
<div class= "row">
<div class = "col-lg-3">
<form action="add.php" method = "post">
<h1><strong>Producto</strong></h1>
<br>
<input type="text" value = "<?php echo $row['producto']; ?>" class = "form-control" placeholder = "producto" required name = "producto" >
<br>
<input type="submit" value = "Actualizar" class = "btn btn-primary">
</form>
</div>
</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
