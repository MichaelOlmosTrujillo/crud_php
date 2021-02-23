<?php
include 'config/db.php';

if (!empty($_POST['producto'])) {
    $producto = $_POST['producto'];
    $query = mysqli_query($coon, "insert into productos(producto) values('$producto')");

    if ($query) {
        //Si la query funciona que regrese el index.php
        header('location: index.php');
    }
}
