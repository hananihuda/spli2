<!doctype html>
<html lang="en">

<?php
include'../loginserver.php';
include '../config.php';
session_start();

$_SESSION['user']=$username;
$name=$_SESSION["username"];

header("Refresh: 10");
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>


    <style>
body {
  padding-bottom: 20px;
      background: linear-gradient(to left, CadetBlue, White);
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
      .rounded-circle {
    border: 2px solid black;
    border-radius: 50%;
}
      
      .footer{
        position:fixed;
        bottom:0;
        width:100%
      }
      
      
    </style>
    
  </head>
  <body>
    
<main>


  <div class="container-xl mb-4">
    <center>
      <p><h2>E-PORTAL AAES</h2><p>
    </center>
    
<?php

// Set the timezone to "Asia/Tokyo"
date_default_timezone_set('Asia/Kuala_Lumpur');

// Get the current date and time in the specified timezone
$currentDateTime = date('d-m-y H:i:s');

echo $currentDateTime;
?>

    <?php
  if(isset($_GET['message'])){
    ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> </strong> <?php echo $_GET['message']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php
  }
  elseif(isset($_GET['error'])){
    ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong> </strong> <?php echo $_GET['error']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php
  }
    ?>
<div class="container">
            <?php
                            require '../config.php';
                            $query = "SELECT * FROM pelajar WHERE id_user='".$_SESSION['username']."'";
                            $query_run = mysqli_query($conn, $query);
                            $query2 = "SELECT * FROM ibubapa WHERE id_user='".$_SESSION['username']."'";
                            $query_run2 = mysqli_query($conn, $query2);

                            if(mysqli_num_rows($query_run) > 0 && mysqli_num_rows($query_run2)>0)
                            {

  foreach($query_run as $maklumat) {
    foreach($query_run2 as $maklumat2) {
    ?>

<div class="row">
  


  <br>

  
  <div class="col-md-6">
    <div class="card mb-3">
      <div class="card-header">
        <h5>Consultants On-Call</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
              <h6 class="mb-0">Anaethetist</h6>
          </div>
          <div class="col-sm-9 text-secondary">
              <?= $maklumat2['namabapa'] ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Cardiac Surgeon</h6>
          </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['noic_bapa'] ?>
        </div>
      </div>
        <hr>
      <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Cardiologist</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= $maklumat2['pekerjaanbapa'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Ear, Nose & Throat Surgeon</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['notel_bapa'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">General Physician</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['namaibu'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">General Surgeon</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['noic_ibu'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Nephrologist</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['pekerjaanibu'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Gastroentologist</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['notel_ibu'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Neurosurgeon</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['neuro'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Obstretrician & Gynaecologist</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['obstre'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Ophtalmologist</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['ophtal'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Orthopaedic Surgeon</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['ortho'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Paediatrician</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['paed'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Plastic Surgeon</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['plastic'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Urologist</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['urol'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Psychiatrist</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['psych'] ?>
        </div>
      </div>
<!-- <hr> -->
<!-- <div class="row">
<div class="col-sm-12">
<a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
</div>
</div> -->
      </div>
    </div>
  <div class="card mb-4">
      <div class="card-header">
        <h5>Hospital Personnel</h5>
      </div>
    <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
              <h6 class="mb-0">Medical Director</h6>
          </div>
          <div class="col-sm-9 text-secondary">
              <?= $maklumat['md'] ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Medical Officer In-Charge</h6>
          </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat['noic'] ?>
        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Head Of Department</h6>
          </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat['notel'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Chief Nursing Officer</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= $maklumat['alamat'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Unit Manager (AM)</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            1. <?= $maklumat['agama'] ?>
            <br>
            2. <?= $maklumat['tempatlahir'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Unit Manager (PM)</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            1. <?= $maklumat['email'] ?>
            <br>
            2. <?= $maklumat['umPm2'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Unit Manager (Night)</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            1. <?= $maklumat['umNi1'] ?>
            <br>
            2. <?= $maklumat['umNi2'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Medical Officer (AM)</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            1. <?= $maklumat['moAm1'] ?>
            <br>
            2. <?= $maklumat['moAm2'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Medical Officer (PM)</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            1. <?= $maklumat['moPm1'] ?>
            <br>
            2. <?= $maklumat['moPm2'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Medical Officer (Night)</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            1. <?= $maklumat['moNi1'] ?>
            <br>
            2. <?= $maklumat['moNi2'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Lab 1</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= $maklumat['lab1'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Lab 2</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= $maklumat['lab2'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Radiograph</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= $maklumat['radiog'] ?>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Radiologist</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= $maklumat['radiol'] ?>
        </div>
      </div>     
    </div>
  </div>
  <div class="card mb-3">
      <div class="card-header">
        <h5>On-Leave</h5>
      </div>
    <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
              <h6 class="mb-0">On-Leave</h6>
          </div>
          <div class="col-sm-9 text-secondary">
              <?= $maklumat2['onleave'] ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Date</h6>
          </div>
        <div class="col-sm-9 text-secondary">
            Start : <?= $maklumat2['date1'] ?> || End : <?= $maklumat2['date2'] ?>
        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Cover By</h6>
          </div>
        <div class="col-sm-9 text-secondary">
            <?= $maklumat2['cover'] ?>
        </div>
      </div>
  </div>

  </div>
</div>
    <?php
  }
}
}else{
  ?>
            <center>
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
</main>


           <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <!-- <script type="text/javascript" src="assets/dist/js/function.js"></script> -->
         <script type="text/javascript">
      $('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
    </script>
  </body>
  
  <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: hsla(0, 0%, 0%, 0.2);">
    © 2023 Copyright:
    <a href=""> Accident & Emergency KPJ Klang Specialist Hospital</a>
  </div>
  <!-- Copyright -->
</footer>
</html>
