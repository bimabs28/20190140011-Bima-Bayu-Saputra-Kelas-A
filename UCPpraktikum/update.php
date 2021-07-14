<?php

    include './config.php';

    $id = $_POST['id_karyawan'];
    $Nama = $_POST['nama'];
    $No_KTP = $_POST['no_ktp'];
    $No_Telp = $_POST['no_telpon'];
    $Tahun_Masuk = $_POST['tahun_masuk'];
    $Masa_Kerja = date("Y")-$Tahun_Masuk;

    mysqli_query($koneksi, "update karyawan set Nama='$Nama', No_KTP='$No_KTP', No_Telp='$No_Telp', 
    Tahun_Masuk='$Tahun_Masuk', Masa_Kerja='$Masa_Kerja' where id='$id_karyawan'");
    header("location:index.php");

?>