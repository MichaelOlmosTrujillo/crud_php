<?php

include 'config/db.php';
$id = $_GET['id'];
$query = mysqli_query($coon, "delete from productos where (cod_producto = '$id')");

if ($query) {
    header('location: index.php');
}
