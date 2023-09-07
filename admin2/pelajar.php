<?php

session_start();
include '../config.php';
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
body {
  padding-bottom: 20px;
      background: linear-gradient(to right, CadetBlue, DarkGrey);
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
            <li>
              <a class="nav-link" href="pelajar.php">Pelajar</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="listPenyelia.php">Senarai Penyelia</a>
            </li>-->
            <li>
            <a class="nav-link" href="accPelajar.php">Cipta Akaun</a>
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

                <!-- CARD UNTUK PANDUAN OJT--->
          
    <div class="row">
     <center>
      <div class="col-md-11">        
      <div class="card">
        <div class="card-header">
           <h5>Senarai Maklumat Pelajar</h5>
          <a href="generate_pdf3.php?id_user=<?php echo $data["id_user"]; ?>" class="btn btn-success position-absolute top-0 end-0">Senarai Maklumat Pelajar</a>
        </div>
       
        <div class="card-body table-responsive">
          <div class="">
            <table class="table border 1">
              <tr>
                <th>Nama Pelajar</th>
                <th>Nombor IC</th>
                <th>Nombor Telefon</th>
                <th>Email</th>
                <th></th>
                <th></th>
              </tr>
            <?php
            $query="SELECT * FROM pelajar";
            $query_run=mysqli_query($conn,$query);
            

            if (mysqli_num_rows($query_run)>0) {
              foreach ($query_run as $data) {

                ?>
                <tr>

                  <td><a href="maklumat_pelajar.php?id_user=<?php echo $data["id_user"]; ?>" data-toggle="tooltips" placement="top" title="Maklumat Pelajar"><?= $data['namapel']?></a></td>
                  <td><?= $data['noic']?></td>
                  <td><?= $data['notel']?></td>
                  <td><?= $data['email']?></td>
                  <td>
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tindakan
                        </button>
                        <ul class="dropdown-menu">
                 
                                <li><a href="generate_pdf2.php?id_user=<?php echo $data["id_user"]; ?>" class="btn dropdown-item text-center" target="_blank">Resume Pelajar</a></li>
                                <li><a href="maklumat_syarikat.php?id_user=<?php echo $data["id_user"]; ?>"class="btn dropdown-item text-center" >Maklumat Syarikat</a></li>
                        </ul>
                      </div>
                  </td>
                  <td><a href="pros_Deletemp.php?id_user=<?= $data['id_user']; ?>" class="btn btn-danger btn-md" onClick="return confirm('Anda Pasti Mahu Hapus <?= $data['id_user']; ?>? ')">HAPUS</a></td>
                </tr> 

                <?php
              }
            }else{
            ?>
                  <tr>
                    <td colspan="3" style="text-align: center;">Tiada Data</td>
                  </tr>
            <?php
            }
            ?>
              
            </table>
            </div>
        </div>
      </div>
    </div>
  </div>  
  </div>  

  <br>
  <center>
  <!-- <a href="index.php" class="btn btn-light" tabindex="-1" role="button" aria-disabled="true">Ke Halaman Utama</a> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>