  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
include'../loginserver.php';
include '../config.php';
session_start();

$_SESSION['user']=$username;
$name=$_SESSION["username"];
?>

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="form.css">

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
      <h2>SISTEM PERSEDIAAN LATIHAN INDUSTRI</h2>
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
              <a class="nav-link" href="homepagestudent.php">Panduan On-Job Training(OJT)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pelajar/paparborangmaklumat2.php">Borang Maklumat Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="papar_resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="paparmaklumatsyarikat.php">Maklumat Syarikat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
  <div class="card"style="width: 45rem;">
    <div class="card-header">
      <h4> MAKLUMAT SYARIKAT :</h4>
    </div>
    <div class="card-body">
      
    
    <form action="prosmaklumatsyarikat.php" class="form-control" id="regForm" method="POST"enctype="multipart/form-data" novalidate>
  
  <!-- One "tab" for each step in the form: -->
<div class="tab">
    <div class="form-group row">
      <h6 class="text-muted">Jika Tidak Berkenaan, Sila Letakkan ( - ) atau 'Tiada'</h6>
      <br>
        <label for="namasyarikat" class="col-sm-3 col-form-label">Nama Syarikat : </label>
        <div class="col-sm-9">
          <input type="text" name="namasyarikat" class="form-control" oninput="this.value = this.value.toUpperCase()"><p>
        </div>
    </div>

    <div class="form-group row">
          <label for="alamatsyarikat" class="col-sm-3 col-form-label"> Alamat Syarikat : </label>
          <div class="col-sm-9" >
            <textarea class="form-control" name="alamatsyarikat" rows="3" oninput="this.value = this.value.toUpperCase()"></textarea>
          </div>
    </div>

    <div class="form-group">
        <br>
    </div>
        <div class="form-group row">
        <label for="emailsyarikat" class="col-md-3 col-form-label"> Email Syarikat : </label>
          <div class="col-sm-7">
            <input type="email" class="form-control" name="emailsyarikat">
          </div>
        </div>

        <div class="form-group">
          <br>
        </div>
       <div class="form-group row">
        <label for="notelsyarikat" class="col-sm-3 col-form-label" >Nombor Telefon Syarikat :</label>
        <div class="col-sm-9">
          <input type="text" name="notelsyarikat" class="form-control"><p>
        </div>
    </div> 

    

</div>
  
<!-- ------------------------untuk bapak2 punya form------------------------ -->
  <div class="tab">


    
  <div class=""></div>
    <div class="form-group row">
        <label for="namapic" class="col-sm-3 col-form-label" >Nama Person-In-Charge (PIC) : </label>
        <div class="col-sm-9">
          <input type="text" name="namapic" class="form-control" oninput="this.value = this.value.toUpperCase()"><p>
        </div>
    </div>

    <div class="form-group row">
        <label for="notelpic" class="col-sm-3 col-form-label" >Nombor Telefon Person-In-Charge(PIC) :</label>
        <div class="col-sm-9">
          <input type="text" name="notelpic" class="form-control"><p>
    </div>
    </div>

    <div class="form-group row">
        <label for="emailpic" class="col-md-3 col-form-label"> Email Person-In-Charge(PIC)  : </label>
          <div class="col-sm-7">
            <input type="email" class="form-control" name="emailpic">
          </div>
        </div>
        <br>

<!--         <div class="form-group row">
          <label for="suratjawapan" class="col-sm-3 col-form-label" >Surat Penerimaan / Penolakan Permohonan On-Job-Training(OJT) : </label>
          <div class="col-sm-7">
            <input type="file" name="suratjawapan" class="form-control"><p>
          </div>
        </div> -->

        <div class="form-group row">
        <label for="responsyarikat" class="col-sm-3 col-form-label" > Respon Syarikat :</label>
        <div class="col-sm-3">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="responsyarikat" id="diterima" value="diterima">
              <label class="form-check-label" for="lelaki">
                Diterima
              </label>
            <!-- For Ditolak -->
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="responsyarikat" id="ditolak" value="ditolak">
            <label class="form-check-label" for="ditolak">
              Ditolak
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="responsyarikat" id="Tidak Pasti" value="tidakpasti">
            <label class="form-check-label" for="tidakpasti">
              Tidak Pasti
            </label>
          </div>
          
        </div>
    </div><br>

    <!--<h6 class="text-muted">Jika tiada ayah sila isi tiada</h6>
    </div>----->

  </div><!--- penutup 1st tab-->
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-warning">Sebelum</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)"class="btn btn-success">Seterusnya</button>
      <button type="reset" id="resetBtn" onclick="reset(1)" class="btn btn-secondary">Kosongkan</button>

      
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

</script>
      
  </body>
</html>
