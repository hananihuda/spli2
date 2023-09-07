<?php



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../form.css">

    <style>
body {
  padding-bottom: 20px;
      background: linear-gradient(to right, CadetBlue, DarkGrey);
}

.navbar {
  margin-bottom: 20px;
      background: linear-gradient(to right, gray, beige);

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
              <a class="nav-link"href="../homepagestudent.php">Panduan On-Job Training(OJT)</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="../paparborangmaklumat2.php">Maklumat Pelajar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../papar_resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../paparmaklumatsyarikat.php">Maklumat Syarikat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../login2.php">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
  <div class="card"style="width: 45rem;">
    <div class="card-header">
      <h4>Borang Maklumat Resume:</h4>
    </div>
    <div class="card-body">
      
    
    <form action="pros_resume.php" class="form-control" id="regForm" method="POST" novalidate>
  
  <!-- One "tab" for each step in the form: -->
  <!-- START FORM -->
  <!-- FOR TBL RESUME -->
<div class="tab">
  <h5>Maklumat diri</h5>
    <br>
    <div class="form-group row">
        <label for="jawatan" class="col-sm-3 col-form-label" >Jawatan :</label>
        <div class="col-sm-9">
          <input type="text" name="jawatan" class="form-control" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="jawatan" class="col-sm-3 col-form-label" >Info Profil :</label>
        <div class="col-sm-9">
          <input type="text" name="info" class="form-control" required><p>
        </div>
    </div>

</div>
<!-- END FOR TABLE RESUME -->

<!-- START FOR TABLE PENDIDIKAN -->
  <div class="tab">
   <h5>Maklumat Pendidikan</h5> 
    <div class="form-group row">
        <label for="namabapa" class="col-sm-3 col-form-label" >Nama Kolej</label>
        <div class="col-sm-9">
          <input type="text" name="namabapa" class="form-control" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="noic_bapa" class="col-sm-3 col-form-label" >Tahap :</label>
        <div class="col-sm-9">
          <input type="text" name="noic_bapa" class="form-control" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="pekerjaanbapa" class="col-sm-3 col-form-label" >Pekerjaan :</label>
        <div class="col-sm-9">
          <input type="text" name="pekerjaanbapa" class="form-control" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="nocontact" class="col-sm-3 col-form-label" >Nombor Telefon :</label>
        <div class="col-sm-9">
          <input type="text" name="notelbapa" class="form-control" required><p>
        </div>
    </div>
  </div>
  <!---tab IBU----->
  <div class="tab">Maklumat Ibu:
    <h6 class="text-muted">Jika tiada Ibu sila isi tiada</h6>
    <div class="form-group row">
          <label for="namaibu" class="col-sm-3 col-form-label" >Nama Ibu/Penjaga :</label>
          <div class="col-sm-9">
            <input type="text" name="namaibu" class="form-control" required><p>
          </div>
      </div>
    <div class="form-group row">
          <label for="no_ic" class="col-sm-3 col-form-label" >Nombor Kad Pengenalan :</label>
          <div class="col-sm-9">
            <input type="text" name="noic_ibu" class="form-control" required><p>
          </div>
      </div>
      <div class="form-group row">
          <label for="pekerjaanibu" class="col-sm-3 col-form-label" >Pekerjaan :</label>
          <div class="col-sm-9">
            <input type="text" name="pekerjaanibu" class="form-control" required><p>
          </div>
      </div>
      <div class="form-group row">
          <label for="nocontact" class="col-sm-3 col-form-label" >No Telefon :</label>
          <div class="col-sm-9">
            <input type="text" name="notel_ibu" class="form-control" required><p>
          </div>
      </div>
</div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-warning">Kembali</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)"class="btn btn-success">Seterusnya</button>
      <button type="reset" id="resetBtn" onclick="reset(1)" class="btn btn-primary">Kosongkan</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>
</div>
</center>
</main>


    <script src="assets\dist\js\bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../form.js"></script>
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
      
  </body>
</html>
