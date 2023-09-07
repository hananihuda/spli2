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
      
      .footer{
        position:fixed;
        bottom:0;
        width:100%;
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
              <a class="nav-link active" href="pelajar.php">Pelajar</a>
            <li>
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
  
    <div class="container">
            <?php
                            require '../config.php';

                            $query = "SELECT * FROM pelajar WHERE id_user='".$id_user."'";
                            $query_run = mysqli_query($conn, $query);
                            $query2 = "SELECT * FROM ibubapa WHERE id_user='".$id_user."'";
                            $query_run2 = mysqli_query($conn, $query2);

                            if(mysqli_num_rows($query_run) > 0 && mysqli_num_rows($query_run2)>0)
                            {
foreach($query_run as $maklumat) {
  foreach($query_run2 as $maklumat2) {
    $imageURL='../uploads/'.$maklumat["gambar"];
    ?>
      
<div class="row gutters-sm">
  <div class="p-2 float-end">
              <a href="pelajar.php" class="btn btn-light " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </div>
  <br>
  <div class="col-md-4 mb-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
          <?php
    if(file_exists($imageURL)){
      ?>
            <img src="<?php echo $imageURL; ?>" alt="gambar" class="rounded-circle" width="50%">
          <?php
          }else {
          ?>
          <p> Tiada Gambar </p>
          <?php
          }
          ?>
          <a class="btn btn-secondary" href="update_gambar.php?noic=<?php echo $maklumat["noic"];?>">Kemaskini Gambar</a>
        <div class="mt-3">
            <h4><?= $maklumat['namapel'] ?></h4>
            <p class="text-secondary mb-1"><?= $maklumat['noic'] ?></p>
            <p class="text-secondary mb-1"><?= $maklumat['jantina'] ?></p>
        </div>
        </div>
      </div>
    </div>
  
    <div class="card mt-3">
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
          <h6 class="mb-0">Tarikh Lahir</h6>
          <span class="text-secondary"><?= $maklumat['tarikhlahir'] ?></span>
        </li>
          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
          <h6 class="mb-0">Tempat Lahir</h6>
        <span class="text-secondary"><?= $maklumat['tempatlahir'] ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
          <h6 class="mb-0">Nombor Telefon</h6>
          <span class="text-secondary"><?= $maklumat['notel'] ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
          <h6 class="mb-0">Emel</h6>
          <span class="text-secondary"><?= $maklumat['email'] ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
          <h6 class="mb-0">Bilangan Adik Beradik</h6>
          <span class="text-secondary"><?= $maklumat['adikberadik'] ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
          <h6 class="mb-0">Alamat</h6>
          <span class="text-secondary"><?= $maklumat['alamat'] ?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
          <div class="col-sm-12">
              <a class="btn btn-info " href="borang_update.php?noic=<?php echo $maklumat["noic"];?>">Kemaskini Maklumat Diri Pelajar</a>  
      </div>
        </li>
      </ul>
      
    </div>

    
  </div>

  <div class="col-md-8">
    <div class="card mb-3">
      <div class="card-header">
        <h5>A. Maklumat Ayah</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
              <h6 class="mb-0">Nama :</h6>
          </div>
          <div class="col-sm-9 text-secondary">
              <?= $maklumat2['namabapa'] ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Nombor Kad Pengenalan:</h6>
          </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['noic_bapa'] ?>
        </div>
      </div>
        <hr>
      <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Pekerjaan:</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= $maklumat2['pekerjaanbapa'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Nombor Telefon</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['notel_bapa'] ?>
        </div>
      </div>
	<!--<hr>-->
	<!--<div class="row">
		<!--<div class="col-sm-12">-->
		<!--</div>-->
	<!--</div> -->
        
      </div>
    </div>
<div class="card mb-3">
      <div class="card-header">
        <h5>B. Maklumat Ibu</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
              <h6 class="mb-0">Nama :</h6>
          </div>
          <div class="col-sm-9 text-secondary">
              <?= $maklumat2['namaibu'] ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Nombor Kad Pengenalan:</h6>
          </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['noic_ibu'] ?>
        </div>
      </div>
        <hr>
      <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Pekerjaan:</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= $maklumat2['pekerjaanibu'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Nombor Telefon</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['notel_ibu'] ?>
        </div>
      </div>
<hr>
<div class="row">
<div class="col-sm-12">
<a class="btn btn-info" href="borang_update_ibubapa.php?id_user=<?php echo $maklumat["id_user"];?>">Kemaskini Maklumat Ibubapa</a>
</div>
</div>
      </div>
    </div>


      
    <?php
  }
}
}else{
  ?>
                          <div class="card border-danger mb-3" style="max-width: 20rem;">
                              <div class="card-header">Maklumat Pelajar</div>
                              <div class="card-body text-danger">
                              <h5 class="card-title">Tiada Data</h5>
                              <a href="borang/borangmaklumat.php" class="btn btn-primary ">Tambah Maklumat Diri</a>
                            </div>
                        </div>
  <?php
}
 ?>

          


  </div> 

    

  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>