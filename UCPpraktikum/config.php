<?php

$connection = mysqli_connect("localhost", "root", "", "data_karyawan");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();

}

?>