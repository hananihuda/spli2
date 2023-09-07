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

    <title>Student Information</title>
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
              <a class="nav-link" href="index.php">Panduan On-Job Training(OJT)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listPelajar.php">Maklumat Pelajar</a>
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

    <?php include('message.php'); ?>
    
        <div class="row">
            <center>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                      <center>
                        <h4>Senarai Nama Pelajar</h4>
                      </center>
                    </div>
                    <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>BIL</th>
                <th>NAMA</th>
                <th>NO KAD PENGENALAN</th>
                <th>EMAIL PELAJAR</th>
                <th>NO TELEFON</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM pelajar";
                $query_run = mysqli_query($conn,$query);
                $cnt=1;
                if (mysqli_num_rows($query_run)>0) {
                    foreach ($query_run as $pelajar) {
                        
            ?>
                    <tr>
                    <td><?= $cnt; ?></td>
                    <td><?= $pelajar['namapel']; ?></td>
                    <td><?= $pelajar['noic']; ?></td>
                    <td><?= $pelajar['email']; ?></td>
                    <td><?= $pelajar['notel']; ?></td>
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
    </div>
        <br>
    <center>
    <a href="index.php" class="btn btn-primary" role="button">Ke Halaman Utama</a>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>