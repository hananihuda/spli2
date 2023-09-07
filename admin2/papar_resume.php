<!doctype html>
<html lang="en">
<?php
include'../loginserver.php';
include '../config.php';
session_start();
$id_user=$_GET['id_user'];

?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>


    <style>
body{
        background-color:#c4b7a6;
    }

.navbar {
  margin-bottom: 20px;
      background: linear-gradient(to right, gray, beige);

}

    </style>
    
  </head>
  <body>
    
<main>


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
            <li class="nav-item">
              <a class="nav-link" href="resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paparmaklumatsyarikat.php">Maklumat Syarikat Pelajar</a>
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
<center>
  <h3>MAKLUMAT RESUME</h3>
  <br>


    <?php

$query ="SELECT * FROM pelajar  WHERE id_user='$id_user'";
$query_run=mysqli_query($conn,$query);

if (mysqli_num_rows($query_run)>0) {

  //echo ("Maklumat bla bla")
  ?>

<div class="accordion" id="accordionExample">
   <!-- START MODEL -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">      
        Maklumat Asas
      </button>
    </h2>
  <!------------------------------------------------- SUB TAJUK 1------------------------------------------>

    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <ol class="list-group list-group-numbered">
            <?php
              require '../config.php';

              $query ="SELECT * FROM pelajar LEFT JOIN resume ON resume.id_user=pelajar.id_user WHERE pelajar.id_user='$id_user'";
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
                      <!-- <a href="borang/maklumat_asas/kemaskini_maklumat_asas.php" class="btn btn-primary" style="max-width: 20rem;">Kemaskini Maklumat Asas</a> -->

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
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        
        <!------------------------------------------- SUB TAJUK 2--------------------------->
        Jawatan
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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

                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-1 me-auto">
                          <div class="fw-bold">Tentang Anda : <?= $maklumat['infoprofil']?> <br>
                      <br>
                      <a href="borang/maklumat_asas/kemaskini_maklumat_asas.php?id_resume=<?php echo $maklumat["id_resume"]; ?>" class="btn btn-primary" style="max-width: 20rem;">Kemaskini Jawatan</a><a href="">

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
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        
    <!----------------------------- SUB TAJUK 3 = TAHAP PENDIDIKAN -------------------->
        Tahap Pendidikan
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
                      <a href="borang/tahap_pendidikan/kemaskini_tahap_pendidikan.php?id_pendidikan=<?php echo $maklumat["id_pendidikan"]; ?>" class="btn btn-primary" style="max-width: 20rem;">Kemaskini Tahap Pendidikan</a>
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
            <a href="borang/tahap_pendidikan/tambah_pendidikan.php" class="btn btn-primary" style="max-width: 20rem;">Tambah Pendidikan</a>
          </ol>
          <br>
      </div>
    </div>
  </div>
  <!-- END MODEL -->

  <!-- START MODEL -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        
      <!---------------------------------- SUB TAJUK 4 = BAHASA ------------------------------>
        Bahasa
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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
                      <a href="borang/bahasa/kemaskini_bahasa.php?id_bahasa=<?php echo $maklumat["id_bahasa"]; ?>" class="btn btn-primary" style="max-width: 20rem;">Kemaskini bahasa</a>

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
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
       
      <!--------------------------- SUB TAJUK 4 = PENGALAMAN BEKERJA -------------------------->
        Pengalaman Bekerja
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
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
                            Tarikh tamat : <?= $maklumat['tarikh_tamat']?><br>

                      <br>
                      <a href="borang/pengalaman_kerja/kemaskini_pengalaman_kerja.php?id_syarikat=<?php echo $maklumat["id_syarikat"]; ?>" class="btn btn-primary" style="max-width: 20rem;">Kemaskini Pengalaman Kerja</a>
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
            <a href="borang/pengalaman_kerja/tambah_pengalaman_kerja.php" class="btn btn-primary" style="max-width: 20rem;">Tambah Pengalaman Kerja</a>
          </ol>
      </div>
    </div>
  </div>
  <!-- END MODEL -->

  <!-- START MODEL -->
        <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      
      <!------------------------------------- SUB TAJUK 7------------------------------>
      Kebolehan
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
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
                      <a href="borang/kebolehan/kemaskini_kebolehan.php?id_kebolehan=<?php echo $maklumat["id_kebolehan"]; ?>" class="btn btn-primary" style="max-width: 20rem;">Kemaskini Pengalaman Kerja</a>
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

  <!----------------------------------------------- SUB TAJUK 8 ------------------------------------>
  <!-- START MODEL -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      
        Rujukan
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
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
                          <div class="fw-bold">Nama Rujukan : <?= $maklumat['nama_rujukan']?><br>
                            Jawatan : <?= $maklumat['jawatan_rujukan']?><br>
                            No Telefon : <?= $maklumat['no_tel_rujukan']?><br>
                      <br>
                      <a href="borang/rujukan/kemaskini_rujukan.php?id_rujukan=<?php echo $maklumat["id_rujukan"]; ?>" class="btn btn-primary" style="max-width: 20rem;">Kemaskini Rujukan</a>


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

<!---Closing Line 89---->  </div><br>


<center>
<form class="form-inline" method="post" action="test.php">
<button type="submit" id="pdf" name="generate_pdf" formtarget="_blank">
Generate PDF</button>

<br>
 
  <a href="resume.php" class="btn btn-light" tabindex="-1" role="button" aria-disabled="true">Kembali</a>

</center>
</main>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

  </body>
</html>
