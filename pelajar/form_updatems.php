<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
require '../config.php';
$result=mysqli_query($conn,"SELECT * FROM syarikat  WHERE id_syarikat='".$_GET['id_syarikat']."'");
$row=mysqli_fetch_array($result);

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
      
    
    <form action="pros_updatems.php" class="form-control" id="regForm" method="POST" novalidate>
  <input type="text" name="id_syarikat" class="form-control" value="<?php echo $row['id_syarikat']; ?>" hidden>
  <!-- One "tab" for each step in the form: -->
<div class="tab">

    <div class="form-group row">
      <h6 class="text-muted">Jika Tidak Berkenaan, Sila Letakkan ( - ) atau 'Tiada'</h6>
      <br>
        <label for="namasyarikat" class="col-sm-3 col-form-label">Nama Syarikat : </label>
        <div class="col-sm-9">
          <input type="text" name="namasyarikat" class="form-control" value="<?php echo $row['namasyarikat']; ?>" 
                 oninput="this.value = this.value.toUpperCase()" required><p>
        </div>
    </div>

    <div class="form-group row">
          <label for="alamatsyarikat" class="col-sm-3 col-form-label"> Alamat Syarikat : </label>
          <div class="col-sm-9" >
          <input type="text" name="alamatsyarikat" class="form-control" value="<?php echo $row['alamatsyarikat']; ?>" 
                oninput="this.value = this.value.toUpperCase()" required><p>
            <!-- <textarea class="form-control" name="alamatsyarikat" rows="2" value="<?php echo $row['alamatsyarikat']; ?>"required></textarea> -->
          </div>
    </div>

    <div class="form-group">
        <br>
    </div>
        <div class="form-group row">
        <label for="emailsyarikat" class="col-sm-3 col-form-label"> Email Syarikat : </label>
          <div class="col-sm-7">
            <input type="email" class="form-control" name="emailsyarikat" value="<?php echo $row['emailsyarikat']; ?>" required>
          </div>
        </div>

        <div class="form-group">
          <br>
        </div>
       <div class="form-group row">
        <label for="notelsyarikat" class="col-sm-3 col-form-label" >Nombor Telefon Syarikat :</label>
        <div class="col-sm-9">
          <input type="text" name="notelsyarikat" class="form-control" value="<?php echo $row['notelsyarikat']; ?>"><p>
        </div>
    </div>  

</div>
  
<!---------------------- TAB KE 2 --------------------------->
  <div class="tab">
    
  <div class=""></div>
    <div class="form-group row">
        <label for="namapic" class="col-sm-3 col-form-label" >Nama Person-In-Charge(PIC) : </label>
        <div class="col-sm-9">
          <input type="text" name="namapic" class="form-control" value="<?php echo $row['namapic']; ?>" oninput="this.value = this.value.toUpperCase()" ><p>
        </div>
    </div>

    <div class="form-group row">
        <label for="notelpic" class="col-sm-3 col-form-label" >Nombor Telefon Person-In-Charge(PIC) :</label>
        <div class="col-sm-9">
          <input type="text" name="notelpic" class="form-control" value="<?php echo $row['notelpic']; ?>"><p>
    </div>
    </div>

    <div class="form-group row">
        <label for="emailpic" class="col-sm-3 col-form-label"> Email Person-In-Charge(PIC)  : </label>
          <div class="col-sm-7">
            <input type="email" class="form-control" name="emailpic" value="<?php echo $row['emailpic']; ?>">
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
              <input class="form-check-input" type="radio" name="responsyarikat" id="diterima" value="diterima" value="<?php echo $row['responsyarikat']; ?>">
              <label class="form-check-label" for="diterima">
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
            <input class="form-check-input" type="radio" name="responsyarikat" id="tidakpasti" value="tidakpasti">
            <label class="form-check-label" for="tidakpasti">
              Tidak Pasti
            </label>
          </div>
          
        </div>
    </div><br>

  </div><!--- penutup 1st tab-->
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-warning">Sebelum</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)"class="btn btn-success">Seterusnya</button>
      <button type="reset" id="resetBtn" onclick="reset(1)" class="btn btn-reset">Kosongkan</button>

      
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
