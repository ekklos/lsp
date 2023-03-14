<!DOCTYPE html>
<html lang="en">
<head>
    <title>Schoolmart</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
  

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../assets/img/washing-machine.png" alt="" width="30" class="d-inline-block align-text-top">Eskop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link" href="home.php">Beranda</a>
            <a class="nav-link" href="#transaksi.php">Transaksi</a>
            </div>
            <div class="navbar-nav ms-auto">
            <a class="nav-link" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>

<div class="container my-5">
  <div class="row">
    <div class="col-md-6 col-sm-12">
      <h1 class="mt-5"> Selamat Datang <br> Aplikasi Ekklos</h1>
      <p>Siap Melayani dan menyajikan properti properti terbaik.</p>
      <a href="#d" class="btn btn-sm btn-dark px-5 mt-3">Daftar Properti</a>
    </div>
    <div class="col-md-6 col-sm-12">
      <img src="../img/logo.jpg" alt="logo" class="img-fluid mx-auto d-block" width="400">
    </div>
  </div>
</div>

        </div>
<div class="row">
<?php
    require "../data/data.php"; 
    //mengambil data dari luar folder pages yakni folder data dan file data.php
    foreach ($rumah as $index => $value) {
    //$rumah sebagai id lalu dijadikan $value
      //var_dump($index);
      //var_dump($value);
      ?>
<div class="col-sm-6 section-pad text-center">
  <div class="card text-center mb-4">
    <div class="card-body">
        <img src="../img/<?= $value[3] ?>" alt="" class="" width="" height="">
        <h4 class="card-text"><?= $value[0] ?></h4>
        <p class="card-text"><?= $value[1] ?></p>
        <p class="card-text">Rp.<?= $value[2] ?></p>
        <!-- id menggunakan index dari array product -->
        <!-- id tersebut akan dikirim ke halamana transaksi.php -->
    <a href="transaksi.php?index=<?= $index ?>" class="btn btn-dark w-100">Pilih Rumah</a>
    </div>    
  </div>
</div>
    
<?php
    }
    ?>

<section id="footer" class="bg-dark text-white py-2">
<div class="container">
<p class="text-center">&copy; Properti EKKLOS</p>
</div>
</section>

</body>
</html>