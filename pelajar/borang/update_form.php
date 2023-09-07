<?php
include'../../loginserver.php';
include '../../config.php';

$result=mysqli_query($conn,"SELECT * FROM ibubapa  WHERE id_user='".$_GET['id_user']."'");
$row=mysqli_fetch_array($result);


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
      background: linear-gradient(to left, White, CadetBlue);
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
  <title>Form Information</title>
  
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
              <a class="nav-link active" href="../paparborangmaklumat.php" active>Information Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
  
  <div class="card"style="width: 45rem;">
    <div class="card-header">
      <h4>CONSULTANTS FORM :</h4>
    </div>
    <div class="card-body">
    <!--<h6 class="text-muted">Sila Isi Menggunakan Huruf Besar</h6>-->
    <form onsubmit="return submitForm()" action="pros_update_ibubapa.php" class="form-control" id="regForm" method="POST"enctype="multipart/form-data" novalidate>
  
  <!-- One "tab" for each step in the form: -->
<div class="tab">
    <br>
    <div class="form-group row">
        <div class="col-sm-9">
          <p><input type="text" name="id_user" class="form-control" value="<?php echo $row['id_user']; ?>" required readonly hidden></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="namabapa" class="col-sm-3 col-form-label" >Anaethetist :</label>
        <div class="col-sm-9">
          <p><input type="text" name="namabapa" class="form-control" value="<?php echo $row['namabapa']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="noic_bapa" class="col-sm-3 col-form-label" >Cardiac Surgeon :</label>
        <div class="col-sm-9">
          <p><input type="text" name="noic_bapa" class="form-control" value="<?php echo $row['noic_bapa']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="pekerjaanbapa" class="col-sm-3 col-form-label" >Cardiologist :</label>
        <div class="col-sm-9">
          <p><input type="text" name="pekerjaanbapa" class="form-control"value="<?php echo $row['pekerjaanbapa']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="notel_bapa" class="col-sm-3 col-form-label" >Ear, Nose & Throat Surgeon :</label>
        <div class="col-sm-9">
          <p><input type="text" name="notel_bapa" class="form-control" value="<?php echo $row['notel_bapa']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="namaibu" class="col-sm-3 col-form-label" >General Physician :</label>
        <div class="col-sm-9">
          <p><input type="text" name="namaibu" class="form-control" value="<?php echo $row['namaibu']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="noic_ibu" class="col-sm-3 col-form-label" >General Surgeon :</label>
        <div class="col-sm-9">
          <p><input type="text" name="noic_ibu" class="form-control" value="<?php echo $row['noic_ibu']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="pekerjaanibu" class="col-sm-3 col-form-label" >Nephrologist :</label>
        <div class="col-sm-9">
          <p><input type="text" name="pekerjaanibu" class="form-control" value="<?php echo $row['pekerjaanibu']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="notel_ibu" class="col-sm-3 col-form-label" >Gastroentologist :</label>
        <div class="col-sm-9">
          <p><input type="text" name="notel_ibu" class="form-control" value="<?php echo $row['notel_ibu']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="neuro" class="col-sm-3 col-form-label" >Neurosurgeon :</label>
        <div class="col-sm-9">
          <p><input type="text" name="neuro" class="form-control" value="<?php echo $row['neuro']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="obstre" class="col-sm-3 col-form-label" >Obstretrician & Gynaecologist :</label>
        <div class="col-sm-9">
          <p><input type="text" name="obstre" class="form-control" value="<?php echo $row['obstre']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="ophtal" class="col-sm-3 col-form-label" >Ophtalmologist  :</label>
        <div class="col-sm-9">
          <p><input type="text" name="ophtal" class="form-control" value="<?php echo $row['ophtal']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="ortho" class="col-sm-3 col-form-label" >Orthopaedic Surgeon :</label>
        <div class="col-sm-9">
          <p><input type="text" name="ortho" class="form-control" value="<?php echo $row['ortho']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="paed" class="col-sm-3 col-form-label" >Paediatrician :</label>
        <div class="col-sm-9">
          <p><input type="text" name="paed" class="form-control" value="<?php echo $row['paed']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="plastic" class="col-sm-3 col-form-label" >Plastic Surgeon :</label>
        <div class="col-sm-9">
          <p><input type="text" name="plastic" class="form-control" value="<?php echo $row['plastic']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="urol" class="col-sm-3 col-form-label" >Urologist :</label>
        <div class="col-sm-9">
          <p><input type="text" name="urol" class="form-control" value="<?php echo $row['urol']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="psych" class="col-sm-3 col-form-label" >Psychologist :</label>
        <div class="col-sm-9">
          <p><input type="text" name="psych" class="form-control" value="<?php echo $row['psych']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
</div>
  <!---tab IBU----->
  <div class="tab">On-Leave Form:
    <h6 class="text-muted">Jika tiada sila isi (-)</h6>
    <div class="form-group row">
          <label for="onleave" class="col-sm-3 col-form-label" >On-Leave :</label>
          <div class="col-sm-9">
            <input type="text" name="onleave" class="form-control" oninput="this.value = this.value.toUpperCase()" 
          placeholder="" maxlength="60" required><p>
          </div>
      </div>
    <div class="form-group row">
        <label for="date" class="col-sm-3 col-form-label" >Date :</label>
        Start :<div class="col-sm-3">
        <input type="date" name="date1" class="form-control" value="<?php echo $row['date1']; ?>" oninput="this.value = this.value.toUpperCase()" required><p>
        </div> End :
        <div class="col-sm-3">
        <input type="date" name="date2" class="form-control" value="<?php echo $row['date2']; ?>" oninput="this.value = this.value.toUpperCase()" required><p>
        </div> 
    </div>
      <div class="form-group row">
          <label for="cover" class="col-sm-3 col-form-label" >Cover By :</label>
          <div class="col-sm-9">
            <input type="text" name="cover" class="form-control" oninput="this.value = this.value.toUpperCase()" 
          placeholder="" maxlength="60" required><p>
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
  </div>
</form>
</div>
</div>
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
