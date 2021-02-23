<?php

include 'config/db.php';
$result = mysqli_query($coon, 'select * from productos');
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
<h1><strong>Productos</strong></h1>
<br>
<input type="text" class = "form-control" placeholder = "producto" required name = "producto" >
<br>
<input type="submit" value = "Agregar" class = "btn btn-primary">
</form>
</div>
<div class = "col-lg-8">
<table class="table">
<thead class = "thead-light">
<tr>
<th scope = "col">#</th>
<th scope = "col">Producto</th>
<th scope = "col">Editar</th>
<th scope = "col">Eliminar</th>
</tr>
</thead>
<tbody>
<!-- Code PHP -->
<?php foreach ($result as $row) {?>
<tr>
<th scope = "row">1</th>
<td><?php echo $row['producto']; ?></td>
<td><a href="edit.php?id=<?php echo $row['cod_producto']; ?>" class="btn btn-primary">Editar</a></td>
<td><a href="delete.php?id=<?php echo $row['cod_producto']; ?>" class = "btn btn-danger">Eliminar</a></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
