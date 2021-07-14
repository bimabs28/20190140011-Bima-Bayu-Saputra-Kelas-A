<?php
include 'config.php';

$id = $_GET['id'];
mysqli_query($connection, "delete from data_karyawan where id = '$id'");
header("location:index.php");

?>