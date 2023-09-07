<?php
include'../../loginserver.php';
include '../../config.php';
session_start();

$_SESSION['user']=$username;
$name=$_SESSION["username"];
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

    <script>
    function submitForm() {
      // Validate form fields
      // Submit form to server
      alert("Maklumat Anda Berjaya Dihantar!");
      return false;
    }
  </script>

  </head>
  <title>Borang Maklumat Pelajar</title>
  
  <body>
    
<main>

  <div class="container-xl mb-4">
    <center><p>
      <h2>E-PORTAL AAES</h2><p>
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
              <a class="nav-link " href="../paparborangmaklumat.php">Information Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
  <?php

$query ="SELECT * FROM pelajar LEFT JOIN ibubapa ON pelajar.id_user=ibubapa.id_user WHERE pelajar.id_user='".$_SESSION['username']."'";
$query_run=mysqli_query($conn,$query);

if (mysqli_num_rows($query_run)>0) {
    ?>
    <br>
    <h5>Form Created</h5>
    <button class="btn"><a href="../homepagestudent.php">Back</a></button>
    <?php
}else{
  ?>

  <div class="card"style="width: 45rem;">
    <div class="card-header">
      <h4>CONSULTANTS FORM :</h4>
    </div>
    <div class="card-body">
    <!--<h6 class="text-muted">Sila Isi Menggunakan Huruf Besar</h6>-->
    <form onsubmit="return submitForm()" action="prosborangmaklumat.php" class="form-control" id="regForm" method="POST"enctype="multipart/form-data" novalidate>
  
  <!-- One "tab" for each step in the form: -->
<div class="tab">
    <br>
    <div class="form-group row">
        <label for="md" class="col-sm-3 col-form-label" >Medical Dirctor :</label>
        <div class="col-sm-9">
          <input type="text" name="md" class="form-control" oninput="this.value = this.value.toUpperCase()" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="noic" class="col-sm-3 col-form-label" >Medical Officer In-Charge :</label>
        <div class="col-sm-9">
          <p><input type="text" name="noic" class="form-control" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="notel" class="col-sm-3 col-form-label" >Chief Nursing Officer :</label>
        <div class="col-sm-9">
          <p><input type="text" name="notel" class="form-control" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-sm-3 col-form-label" >Head Of Department :</label>
        <div class="col-sm-9">
          <p><input type="text" name="alamat" class="form-control" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="agama" class="col-sm-3 col-form-label" >U.M (AM) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="agama" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="tempatlahir" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label" >U.M (PM) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="email" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="umPm2" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="umNi1" class="col-sm-3 col-form-label" >U.M (Night) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="umNi1" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="umNi2" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="moAm1" class="col-sm-3 col-form-label" >M.O (AM) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="moAm1" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="moAm2" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="moPm1" class="col-sm-3 col-form-label" >M.O (PM) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="moPm1" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="moPm2" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="moNi1" class="col-sm-3 col-form-label" >M.O (Night) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="moNi1" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="moNi2" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="lab1" class="col-sm-3 col-form-label" >Lab 1 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="lab1" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="lab2" class="col-sm-3 col-form-label" >Lab 2 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="lab2" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="radiog" class="col-sm-3 col-form-label" >Radiograph :</label>
        <div class="col-sm-9">
          <p><input type="text" name="radiog" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="radiol" class="col-sm-3 col-form-label" >Radiologist :</label>
        <div class="col-sm-9">
          <p><input type="text" name="radiol" class="form-control" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
</div>

<!-- ------------------------FORM UTK AYAH------------------------ -->
  <div class="tab">
    Maklumat Bapa:
    <h6 class="text-muted">Jika Tidak Berkenaan, Sila Letakkan ( - ) atau 'Tiada'</h6>
    <div class="form-group row">
        <label for="namabapa" class="col-sm-3 col-form-label" >Anaethetist :</label>
        <div class="col-sm-9">
          <input type="text" name="namabapa" class="form-control" oninput="this.value = this.value.toUpperCase()" 
          placeholder="" maxlength="60" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="noic_bapa" class="col-sm-3 col-form-label" >Cardiac Surgeon :</label>
        <div class="col-sm-9">
          <input type="text" name="noic_bapa" class="form-control" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="pekerjaanbapa" class="col-sm-3 col-form-label" >Pekerjaan :</label>
        <div class="col-sm-9">
          <input type="text" name="pekerjaanbapa" class="form-control" oninput="this.value = this.value.toUpperCase()" 
          placeholder="" maxlength="60" required><p>
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
            <input type="text" name="namaibu" class="form-control" oninput="this.value = this.value.toUpperCase()" 
          placeholder="" maxlength="60" required><p>
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
            <input type="text" name="pekerjaanibu" class="form-control" oninput="this.value = this.value.toUpperCase()" 
          placeholder="" maxlength="60" required><p>
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
  <?php
}
  ?>
</center>
</main>


    <script src="..\assets\dist\js\bootstrap.bundle.min.js"></script>
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
