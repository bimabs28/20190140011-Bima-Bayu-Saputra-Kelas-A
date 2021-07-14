<?php
    include './config.php';

    $id = $_POST['id_karyawan'];
    $Nama = $_POST['nama'];
    $No_KTP = $_POST['no_ktp'];
    $No_Telp = $_POST['no_telpon'];
    $Tahun_Masuk = $_POST['tahun_masuk'];
    $Masa_Kerja = date("Y")-$Tahun_Masuk;

    mysqli_query($koneksi, "insert into karyawan (nama,no_ktp,no_telpon,tahun_masuk,masa_kerja,id_karyawan)
    values('$Nama','$No_KTP','$No_Telp','$Tahun_Masuk','$Masa_Kerja', '')");
    header("location:./index.php");
?>