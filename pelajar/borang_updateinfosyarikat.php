
<!doctype html>
<html lang="en">
<?php

require '../config.php';
$result=mysqli_query($conn,"SELECT * FROM syarikat  WHERE namasyarikat='".$_SESSION['username']."'");
$row=mysqli_fetch_array($result);

session_start();

$_SESSION['user']=$username;
$name=$_SESSION["username"];
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="form.css">

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
              <a class="nav-link" href="homepagestudent.php"> Halaman Utama </a>
            </li>

            

            <li class="nav-item">
              <a class="nav-link"href="homepagestudent.php">Panduan On-Job Training(OJT)</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="borangmaklumat.php">Borang Maklumat Pelajar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="maklumatsyarikat.php">Maklumat Syarikat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login2.php">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
  <div class="card"style="width: 45rem;">
    <div class="card-header">
      <h4>Kemaskini Maklumat Syarikat:</h4>
    </div>
    <div class="card-body">
      
    
    <form action="pros_updateinfosyarikat.php" class="form-control" id="regForm" method="POST" novalidate>
  
  <!-- One "tab" for each step in the form: -->
<div class="tab">
    <br>
    <div class="form-group row">
        <label for="namasyarikat" class="col-sm-3 col-form-label" >Nama Syarikat Yang Dimohon:</label>
        <div class="col-sm-9">
          <input type="text" name="namasyarikat" class="form-control" value="<?php echo $row['namasyarikat']; ?>" readonly><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamatsyarikat" class="col-sm-3 col-form-label" >Alamat Syarikat :</label>
        <div class="col-sm-9">
          <p><input type="text" name="alamatsyarikat" class="form-control" value="<?php echo $row['alamatsyarikat']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="emailsyarikat" class="col-sm-3 col-form-label" >Email Syarikat :</label>
        <div class="col-sm-3">
          <p><input type="date" name="emailsyarikat" class="form-control"value="<?php echo $row['emailsyarikat']; ?>" required></p>
        </div>
    </div>

    <div class="form-group row">
        <label for="namapic" class="col-sm-3 col-form-label" >Nama Person-In-Charge(PIC) :</label>
        <div class="col-sm-3">
          <p><input type="text" name="namapic" class="form-control" value="<?php echo $row['namapic']; ?>" required></p>
        </div>
    </div>

    <div class="form-group row">
        <label for="notelpic" class="col-sm-3 col-form-label" >Nombor Telefon Person-In-Charge(PIC) :</label>
        <div class="col-sm-9">
          <p><input type="number" name="notelpic" class="form-control" value="<?php echo $row['notelpic']; ?>" required ></p>
        </div>
    </div>

  <br>
    <div class="form-group row">
        <label for="emailpic" class="col-sm-3 col-form-label" >Email Person-In-Charge(PIC) :</label>
        <div class="col-sm-3">
          <p><input type="text" name="emailpic" class="form-control" value="<?php echo $row['emailpic']; ?>"  required></p>
        </div>
    </div>

    <div class="form-group row">
        <label for="responsyarikat" class="col-sm-3 col-form-label" > Respon Syarikat :</label>
        <div class="col-sm-3">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="responsyarikat" id="ditolak" value="diterima" value="<?php echo $row['responsyarikat']; ?>"  required>
              <label class="form-check-label" for="lelaki">
                Diterima
              </label>
            <!-- For Ditolak -->
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="responsyarikat" id="ditolak" value="diterima" value="<?php echo $row['responsyarikat']; ?>"  required>
            <label class="form-check-label" for="ditolak">
              Ditolak
            </label>
          </div>
        </div>
    </div><br>

<!-- ------------------------FORM UTK AYAH----------------------- -->
  <div class="tab">
    <h6 class="text-muted">Jika Tidak Berkenaan, Sila Letakkan ( - ) atau 'Tiada'</h6>
    <div class="form-group row">
        <label for="namapic" class="col-sm-3 col-form-label" >Nama Person-In-Charge(PIC) :</label>
        <div class="col-sm-3">
          <p><input type="text" name="namapic" class="form-control" value="<?php echo $row['namapic']; ?>" required></p>
        </div>
    </div>

    <div class="form-group row">
        <label for="notelpic" class="col-sm-3 col-form-label" >Nombor Telefon Person-In-Charge(PIC) :</label>
        <div class="col-sm-9">
          <p><input type="number" name="notelpic" class="form-control" value="<?php echo $row['notelpic']; ?>" required ></p>
        </div>
    </div>

  <br>
    <div class="form-group row">
        <label for="emailpic" class="col-sm-3 col-form-label" >Email Person-In-Charge(PIC) :</label>
        <div class="col-sm-3">
          <p><input type="text" name="emailpic" class="form-control" value="<?php echo $row['emailpic']; ?>"  required></p>
        </div>
    </div>

    <div class="form-group row">
        <label for="responsyarikat" class="col-sm-3 col-form-label" > Respon Syarikat :</label>
        <div class="col-sm-3">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="responsyarikat" id="ditolak" value="diterima" value="<?php echo $row['responsyarikat']; ?>"  required>
              <label class="form-check-label" for="lelaki">
                Diterima
              </label>
            <!-- For Ditolak -->
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="responsyarikat" id="ditolak" value="diterima" value="<?php echo $row['responsyarikat']; ?>"  required>
            <label class="form-check-label" for="ditolak">
              Ditolak
            </label>
          </div>
        </div>
    </div><br>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="nextBtn" onclick="nextPrev(1)"class="btn btn-success">Next</button>
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


    <script src="assets\dist\js\bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="form.js"></script>
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
