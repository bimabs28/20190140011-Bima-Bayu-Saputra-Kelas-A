<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Welcome Employee!</title>
  </head>
  <body style="background-color: red">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Data Employee
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </div>
                </div>
        </div>
    </nav>
    <?php
    include 'config.php';

    $id = $_GET['id'];

    $karyawan = mysqli_query($connection, "select * from karyawan where id= '$id'");
    while ($data = mysqli_fetch_assoc($karyawan)){
    ?>
        <div class="container mt-5">
            <p><a href="index.php">Home</a> / Detail Employee / <?php echo $data['Nama'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Profile Employee</p>
                </div>
                <div class="card-body fw-bold">
                    <p>Nama : <?php echo $data['nama'] ?></p>
                    <p>NoKTP : <?php echo $data['no_ktp'] ?></p>
                    <p>NoTelp : <?php echo $data['no_telpon'] ?></p>
                    <p>TahunMasuk : <?php echo $data['tahun_masuk'] ?></p>
                    <p>MasaKerja : <?php echo $data['masa_kerja'] ?></p>
                    <a href="print.php?id=<?php echo $data['id_karyawan']; ?>" class="btn btn-primary">Print</button>
                </div>
            </div>
        </div>
    <?php
    }
    ?>    
    </div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>