<?php

session_start();
require '../config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

body{
        background-color:#c4b7a6;
    }

.navbar {
  margin-bottom: 20px;

}


    </style>

    <title>SPLI</title>
</head>
<body>

<div class="container-xl mb-4">
    <center><p>
      <h2>SISTEM PERSEDIAAN LATIHAN INDUSTRI</h2><p>
    </center>
    
    <nav class="navbar navbar-expand-sm bg-light rounded" aria-label="Twelfth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main For Creating Navigation Bar-->
        <div class="collapse navbar-collapse justify-content-md-center" id="navbar">
          <ul class="navbar-nav">

            <!-- Nav Bar -->
            <li class="nav-item">
              <a class="nav-link" href="admin_panduanojt.php">Panduan On-Job-Training(OJT)</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="resume.php" role="button" aria-expanded="false">Pelajar</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="accPelajar.php">Akaun Pelajar
                <li><a class="dropdown-item" href="listPelajar2.php">Senarai Nama Pelajar
                <li><hr class="dropdown-divider">
                <li><a class="dropdown-item" href="listPelajar.php">Maklumat Pelajar
                <li><a class="dropdown-item" href="#">Resume Pelajar
                <li><a class="dropdown-item" href="paparmaklumatsyarikat.php">Maklumat Syarikat Pelajar</a></li>
              </ul>
              </li>
            <li>
            <li class="nav-item">
              <a class="nav-link " href="listPenyelia.php">Senarai Penyelia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</main>
</div>

    <br>
  
    <div class="container">

    <!-------------------------------------------------- CARD FOR SENARAI NAMA PELAJAR -------------------------------------------->
    <?php include('message.php'); ?>
    
        <div class="row">
          <center>
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h4>Akaun Pelajar
                            <a href="studentCreate.php" class="btn btn-primary float-end">Cipta Akaun Pelajar</a>
                        </h4>
                    </div>
          <div class="card-body">
            <table class="table">
            <thead> 
            <tr>
                <th>BIL</th>
                <th>NAMA</th>
                <th>ID PELAJAR</th>
                <th>KATA LALUAN</th>
                <th>JENIS AKAUN</th>
                <th>TINDAKAN</th>
            </tr> 
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM pengguna WHERE usertype = 'user' || 'USER'";
                $query_run = mysqli_query($conn,$query);
                $id=mt_rand(111,999);
                $cnt=1;
                if (mysqli_num_rows($query_run)>0) {
                    foreach ($query_run as $user) {
                        
            ?>
                    <tr>
                    <td><?= $cnt; ?></td>
                    <td><?= $user['nama']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['password']; ?></td>
                    <td><?= $user['usertype']; ?></td> 
                    <td>
                           
                        <a href="studentUpdate_acc.php?id=<?= $user['id']; ?>" class="btn btn-success btn-sm">KEMASKINI</a>
                        <a href="studentDelete.php?id=<?= $user['id']; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Anda Pasti Mahu Hapus <?= $user['nama']; ?>? ')">HAPUS</a> 
                    </td>
                    </tr>
            <?php 
            $cnt=$cnt+1;
                    }
                }
                else {
                    echo "<h5> No Record Found";
                }
            ?>
        </tbody>
    </table>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------------------------------------------- END ------------------------------------------------------------>

        </div>


    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>