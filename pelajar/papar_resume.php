<!doctype html>
<html lang="en">
<?php
include'../loginserver.php';
include '../config.php';
session_start();

$_SESSION['user']=$username;
$name=$_SESSION["username"];
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>


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
    
  </head>
  
  <title>RESUME PELAJAR</title>
  <body>
    
<main>


  <div class="container-xl mb-4">
    <center><p>
      <h2>SISTEM PERSEDIAAN LATIHAN INDUSTRI</h2><p>
    </center>
    

   <nav class="navbar navbar-expand-sm bg-light rounded" aria-label="Twelfth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" 
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main For Creating Navigation Bar-->
        <div class="collapse navbar-collapse justify-content-md-center" id="navbar">
          <ul class="navbar-nav">

            <!-- Nav Bar -->
            <li class="nav-item">
              <a class="nav-link" href="panduanojt.php">Panduan On-Job Training(OJT)</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="paparborangmaklumat.php">Maklumat Pelajar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="papar_resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paparmaklumatsyarikat.php">Maklumat Syarikat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
  <h3>MAKLUMAT RESUME</h3>
  <br>


    <?php

$query ="SELECT * FROM pelajar  WHERE id_user='".$_SESSION['username']."'";
$query_run=mysqli_query($conn,$query);

if (mysqli_num_rows($query_run)>0) {

  //echo ("Maklumat bla bla")
  ?>

<div class="accordion" id="accordionExample">

 <!-- START MODEL -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" 
      aria-controls="collapse1">
     
      <!---------------------------------------------- SUB TAJUK 1---------------------------------->
        Maklumat Asas
      </button>
    </h2>
    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <ol class="list-group list-group-numbered">
            <?php
              require '../config.php';

              $query ="SELECT * FROM pelajar LEFT JOIN resume ON resume.id_user=pelajar.id_user WHERE pelajar.id_user='".$_SESSION['username']."'";
              $query_run=mysqli_query($conn,$query);

              if (mysqli_num_rows($query_run)>0) {
                 foreach ($query_run as $maklumat) {
                   ?>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-1 me-auto">
                          <div class="fw-bold">Nama : <?= $maklumat['namapel']?> </div>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">No Telefon : <?= $maklumat['notel']?></div>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Alamat : <?= $maklumat['alamat']?></div>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Email : <?= $maklumat['email']?></div>
                        </div>
                      </li>
                     <!-- <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Jawatan : <?= $maklumat['jawatan']?></div>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Tentang Anda : <?= $maklumat['infoprofil']?></div>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Gambar : <?= $maklumat['gambar']?></div>
                        </div>
                      </li>-->
                      <br>

                      <h6 class="text-muted"> MAKLUMAN : Maklumat Asas Hanya Boleh Dikemaskini Melalui Halaman Maklumat Pelajar Sahaja</h6>
                      <!-- <a href="borang/maklumat_asas/kemaskini_maklumat_asas.php" class="btn btn-primary" 
                      style="max-width: 20rem;">Kemaskini Maklumat Asas</a> -->

                   <?php
                 }
               }else{
                ?>
                  <h5>Tiada Maklumat</h5>
                  
                <?php
               } 
            ?>
        </ol>
      </div>
    </div>
  </div>
  <!-- END MODEL -->

  <!-- START MODEL -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" 
      aria-controls="collapse2">
      
        <!------------------------------------------- SUB TAJUK 2--------------------------->
        Mengenai Diri Anda
      </button>
    </h2>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ol class="list-group list-group-numbered">
        <?php
        //CHECK SINI DHOOOO ADE ERROR DATA TAK KELUAQ EHEK
              require '../config.php';

              //$query ="SELECT * FROM resume WHERE jawatan ='".$_SESSION['username']."'";
              //$query_run=mysqli_query($conn,$query);

              $query2 ="SELECT * FROM  resume WHERE id_user='".$_SESSION['username']."'";
              $query_run2=mysqli_query($conn,$query2);

              if (mysqli_num_rows($query_run2)>0) {
                 foreach ($query_run2 as $maklumat) {
                   ?>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-1 me-auto">
                          <div class="fw-bold">Jawatan Yang Dimohon : <?= $maklumat['jawatan']?> <br>
                          Deskripsi : <?= $maklumat['infoprofil']?> 

                      <br>
                      <a href="borang/maklumat_asas/kemaskini_maklumat_asas.php?id_resume=<?php echo $maklumat["id_resume"]; ?>" 
                      class="btn btn-primary" style="max-width: 20rem;">Kemaskini Jawatan</a><a href="">

                          </div>
                        </div>
                      </li>
                   <?php
                 }
               }else{
                ?>
                <h5>Tiada Maklumat</h5>
                
                <?php
               } 
            ?> 
            <br>
            <a href="borang/maklumat_asas/tambah_maklumat_asas.php" class="btn btn-primary" style="max-width: 20rem;">Tambah Jawatan</a>
        </ol>
      </div>
    </div>
  </div>
  <!-- END MODEL -->

 <!-- START MODEL -->
 <div class="accordion-item">
    <h2 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" 
      aria-controls="collapse3">
        
    <!----------------------------- SUB TAJUK 3 = TAHAP PENDIDIKAN -------------------->
        Pengajian
      </button>
    </h2>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <ol class="list-group list-group-numbered">
         <?php
              require '../config.php';

              $query ="SELECT * FROM pendidikan  WHERE id_user='".$_SESSION['username']."'";
              $query_run=mysqli_query($conn,$query);

              if (mysqli_num_rows($query_run)>0) {
                 foreach ($query_run as $maklumat) {
                   ?>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-1 me-auto">
                          <div class="fw-bold">Tempat Pengajian : <?= $maklumat['nama_kolej']?> <br>
                              Tahap: <?= $maklumat['tahap']?><br>
                              Nama Kursus / Subjek : <?= $maklumat['nama_kursus']?><br>
                              Diskripsi :<?= $maklumat['diskripsi_pendidikan']?>

                      <br>
                      <a href="borang/tahap_pendidikan/kemaskini_tahap_pendidikan.php?id_pendidikan=<?php echo $maklumat["id_pendidikan"]; ?>" 
                      class="btn btn-primary" style="max-width: 20rem;">Kemaskini Pengajian</a>
                      <p>
                      

                          </div>
                        </div>
                      </li>
                   <?php
                 }
               }else{
                ?>
                <h5>Tiada Maklumat</h5>
                
                <?php
               } 
            ?>
            <br>
            <a href="borang/tahap_pendidikan/tambah_pendidikan.php" class="btn btn-primary" 
            style="max-width: 20rem;">Tambah Pengajian</a>
          </ol>
          <br>
      </div>
    </div>
  </div>
  <!-- END MODEL -->

  <!-- START MODEL -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" 
      aria-controls="collapse4">
        
      <!---------------------------------- SUB TAJUK 4 = BAHASA ------------------------------>
        Bahasa
      </button>
    </h2>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ol class="list-group list-group-numbered">
       <?php
              require '../config.php';

              $query ="SELECT * FROM bahasa WHERE id_user='".$_SESSION['username']."'";
              $query_run=mysqli_query($conn,$query);

              if (mysqli_num_rows($query_run)>0) {
                 foreach ($query_run as $maklumat) {
                   ?>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-1 me-auto">
                          <div class="fw-bold">Bahasa : <?= $maklumat['bahasa']?><br>
                            Tahap : <?= $maklumat['tahap']?><br>

                      <br>
                      <a href="borang/bahasa/kemaskini_bahasa.php?id_bahasa=<?php echo $maklumat["id_bahasa"]; ?>" class="btn btn-primary" 
                      style="max-width: 20rem;">Kemaskini Bahasa</a>

                          </div>
                        </div>
                      </li>
                   <?php
                 }
               }else{
                ?>
                <h5>Tiada Maklumat</h5>
                
                <?php
               }
            ?>
            <br>
            <a href="borang/bahasa/tambah_bahasa.php" class="btn btn-primary" style="max-width: 20rem;">Tambah Bahasa</a>
        </ol>
      </div>
    </div>
  </div>
  <!-- END MODEL -->

  <!-- START MODEL -->
      <div class="accordion-item">
    <h2 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
       
      <!--------------------------- SUB TAJUK 5 = PENGALAMAN BEKERJA -------------------------->
        Pengalaman Bekerja
      </button>
    </h2>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <ol class="list-group list-group-numbered">
         <?php
              require '../config.php';

              $query ="SELECT * FROM pengalamankerja WHERE id_user='".$_SESSION['username']."'";
              $query_run=mysqli_query($conn,$query);

              if (mysqli_num_rows($query_run)>0) {
                 foreach ($query_run as $maklumat) {
                   ?>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-1 me-auto">
                          <div class="fw-bold">Nama Syarikat : <?= $maklumat['nama_syarikat']?><br>
                            Jawatan : <?= $maklumat['jawatan_pass']?><br>
                            Tarikh Mula : <?= $maklumat['tarikh_mula']?><br>
                            Tarikh Tamat : <?= $maklumat['tarikh_tamat']?><br>

                      <br>
                      <a href="borang/pengalaman_kerja/kemaskini_pengalaman_kerja.php?id_syarikat=<?php echo $maklumat["id_syarikat"]; ?>" 
                        class="btn btn-primary" style="max-width: 20rem;">Kemaskini Pengalaman Bekerja</a>
                          </div>
                        </div>
                      </li>
                   <?php
                 }
               }else{
                ?>
                <h5>Tiada Maklumat</h5>
                
                <?php
               } 
            ?>
            <br>
            <a href="borang/pengalaman_kerja/tambah_pengalaman_kerja.php" class="btn btn-primary" 
            style="max-width: 20rem;">Tambah Pengalaman Bekerja</a>
          </ol>
      </div>
    </div>
  </div>
  <!-- END MODEL -->

  <!-- START MODEL -->
        <div class="accordion-item">
    <h2 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false"
       aria-controls="collapse6">
      
      <!------------------------------------- SUB TAJUK 6------------------------------>
      Kebolehan
      </button>
    </h2>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ol class="list-group list-group-numbered">
       <?php
              require '../config.php';

              $query ="SELECT * FROM kebolehan WHERE id_user='".$_SESSION['username']."'";
              $query_run=mysqli_query($conn,$query);

              if (mysqli_num_rows($query_run)>0) {
                 foreach ($query_run as $maklumat) {
                   ?>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-1 me-auto">
                          <div class="fw-bold">Kebolehan : <?= $maklumat['kebolehan']?><br>
                            Tahap : <?= $maklumat['tahap_kebolehan']?><br>
 
                      <br>
                      <a href="borang/kebolehan/kemaskini_kebolehan.php?id_kebolehan=<?php echo $maklumat["id_kebolehan"]; ?>" 
                      class="btn btn-primary" style="max-width: 20rem;">Kemaskini Kebolehan</a>
                      <!-- <a href="borang/kebolehan/kemaskini_kebolehan.php" class="btn btn-primary" style="max-width: 20rem;">Kemaskini Kebolehan</a> -->

                          </div>
                        </div>
                      </li>
                   <?php
                 }
               }else{
                ?>
                <h5>Tiada Maklumat</h5>
                
                <?php
               } 

            ?>
            <br>
            <a href="borang/kebolehan/insert_kebolehan.php" class="btn btn-primary" style="max-width: 20rem;">Tambah Kebolehan</a>
          </ol>
      </div>
    </div>
  </div>
  <!------ END MODEL ---->

<!-- START MODEL -->
<div class="accordion-item">
    <h2 class="accordion-header" id="heading7">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" 
      aria-controls="collapse7">
      
      <!------------------------------------- SUB TAJUK 7------------------------------>
      Pencapaian
      </button>
    </h2>
    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ol class="list-group list-group-numbered">
       <?php
              require '../config.php';

              $query ="SELECT * FROM pencapaian WHERE id_user='".$_SESSION['username']."'";
              $query_run=mysqli_query($conn,$query);

              if (mysqli_num_rows($query_run)>0) {
                 foreach ($query_run as $maklumat) {
                   ?>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-1 me-auto">
                          <div class="fw-bold">Pencapaian : <?= $maklumat['pencapaian']?><br>
                            Tahap Pencapaian : <?= $maklumat['tahap_pencapaian']?><br>
 
                      <br>
                      <a href="borang/pencapaian/kemaskini_pencapaian.php?id_kebolehan=<?php echo $maklumat["id_kebolehan"]; ?>" 
                      class="btn btn-primary" style="max-width: 20rem;">Kemaskini Pencapaian</a>
                      <!-- <a href="borang/kebolehan/kemaskini_kebolehan.php" class="btn btn-primary" style="max-width: 20rem;">Kemaskini Kebolehan</a> -->

                          </div>
                        </div>
                      </li>
                   <?php
                 }
               }else{
                ?>
                <h5>Tiada Maklumat</h5>
                
                <?php
               } 

            ?>
            <br>
            <a href="borang/pencapaian/tambah_pencapaian.php" class="btn btn-primary" style="max-width: 20rem;">Tambah Pencapaian</a>
          </ol>
      </div>
    </div>
  </div>
  <!------ END MODEL ---->

  <!-- START MODEL -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading8">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" 
      aria-controls="collapse8">
       
       <!----------------------------------------------- SUB TAJUK 8 ------------------------------------>
        Rujukan
      </button>
    </h2>
    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ol class="list-group list-group-numbered">
            <?php
              require '../config.php';

              $query ="SELECT * FROM rujukan  WHERE id_user='".$_SESSION['username']."'";
              $query_run=mysqli_query($conn,$query);

              if (mysqli_num_rows($query_run)>0) {
                 foreach ($query_run as $maklumat) {
                   ?>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-1 me-auto">
                          <div class="fw-bold">Nama : <?= $maklumat['nama_rujukan']?><br>
                            Jawatan : <?= $maklumat['jawatan_rujukan']?><br>
                            Nombor Telefon : <?= $maklumat['no_tel_rujukan']?><br>
                      <br>
                      <a href="borang/rujukan/kemaskini_rujukan.php?id_rujukan=<?php echo $maklumat["id_rujukan"]; ?>" class="btn btn-primary" 
                      style="max-width: 20rem;">Kemaskini Rujukan</a>


                          </div>
                        </div>
                      </li>
                      <br>
                   <?php
                 }
               }else{
                ?>
                <h5>Tiada Maklumat</h5>
               
                <?php
               }
            ?> 
            <br>
            <a href="borang/rujukan/tambah_rujukan.php" class="btn btn-primary" style="max-width: 20rem;">Tambah Rujukan</a>
          </ol>
      </div>
    </div>
      </div>
  <?php 
}else{
  ?>
  
  <?php
}

?>
</div><br>



<?php
require '../config.php';
$query ="SELECT * FROM pelajar  WHERE id_user='".$_SESSION['username']."'";
$query_run=mysqli_query($conn,$query);
if (mysqli_num_rows($query_run)>0) {
  foreach($query_run as $data)
  ?>
    <a href="generate_pdf2.php?id_user=<?php echo $data["id_user"]; ?>" class="btn btn-primary" style="max-width: 20rem;" target="_blank">Generate Resume</a>
<?php
}

?>
</main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

  </body>
  
    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: hsla(0, 0%, 0%, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href=""> Sistem Persediaan Latihan Industri Kolej Vokasional Shah Alam</a>
  </div>
  <!-- Copyright -->
</footer>
  
</html>
