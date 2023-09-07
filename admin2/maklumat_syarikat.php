<?php

session_start();
require '../config.php';
$id_user=$_GET['id_user'];
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
.nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
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
              <a class="nav-link active" href="admin_panduanojt.php">Panduan On-Job-Training(OJT)</a>
            </li>
              <a class="nav-link" href="pelajar.php">Pelajar</a>
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
      <center>
      <?php

$query ="SELECT * FROM pelajar  WHERE id_user='".$id_user."'";
$query_run=mysqli_query($conn,$query);

if (mysqli_num_rows($query_run)>0) {
  ?>
     <?php
              require '../config.php';

              $query ="SELECT * FROM syarikat LEFT JOIN pelajar ON pelajar.id_user=syarikat.id_user WHERE pelajar.id_user='".$id_user."'";
              $query_run=mysqli_query($conn,$query);

              if (mysqli_num_rows($query_run)>0) {
                 foreach ($query_run as $maklumat) {
                   ?>
                            <div class="col-sm-7">
                              <div class="card border-dark">
                                 <div class="card-header bg-transparent border-success">
                                   <h5 class="card-title"><?= $maklumat['namasyarikat']?></h5>
                                 </div>
                                <div class="card-body">
                                  
                                  <p class="card-text text-start ">
                                    Alamat : <?= $maklumat['alamatsyarikat']?><br>
                                    Email : <?= $maklumat['emailsyarikat']?><br>
                                    No telefon syarikat : <?= $maklumat['notelsyarikat']?><br>
                                    Respon Syarikat : <?= $maklumat['responsyarikat']?><br>

                                  </p>
                                </div>
                                <div class="card-body">
                                  
                                  <p class="card-text text-start ">
                                    Nama Person In Charger : <?= $maklumat['namapic']?><br>
                                    nombor telefon : <?= $maklumat['notelpic']?><br>
                                    Email : <?= $maklumat['emailpic']?><br>
                                    Surat Jawapan :
                                    <?= (!empty($maklumat['suratjawapan']))
                                       ? '<a href="download2.php?suratjawapan='.$maklumat["suratjawapan"].'">'.$maklumat['suratjawapan'].'</a><br>'
                                       : 'Hantar Surat Jawapan<br>';
                                     ?>
                                  </p>
                                </div>

                                                      
                              </div>
                            </div>
                            <br>

                   <?php
                 }
               }else{
                ?>
                            <div class="col-sm-7">
                              <div class="card border-danger">
                                 <div class="card-header bg-transparent border-danger">
                                   <h5 class="card-body">Tiada Maklumat</h5>
                                 </div>
                                    
                                
                              </div>
                            </div>

                <?php
               } 

            ?>
            <br>
       <?php 
}else{
  ?>
  <br>
      <h5>Sila Isi Borang Maklumat Pelajar Terlebih Dahulu</h5>
    <button class="btn btn-light"><a href="homepagestudent.php">KEMBALI</a></button>
  <?php
}

?>
</center>
  </div>  
  <center>
<a href="pelajar.php" class="btn btn-light" tabindex="-1" role="button" aria-disabled="true">Kembali</a>
  <br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>