
<!doctype html>
<html lang="en">
<?php
require '../config.php';
$result=mysqli_query($conn,"SELECT * FROM pelajar  WHERE noic='".$_GET['noic']."'");
$row=mysqli_fetch_array($result);

?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../form2.css">

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
  <title>Kemaskini Maklumat Pelajar</title>
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
              <a class="nav-link active" href="pelajar.php">Pelajar</a>
            <li>
            <!--<li class="nav-item">
              <a class="nav-link" href="listPenyelia.php">Senarai Penyelia</a>
            </li>-->
            <li>
            <a class="nav-link" href="accPelajar.php">Cipta Akaun Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
  <div class="card" style="width: 46rem;">
    <div class="card-header">
      <h4>Kemaskini Maklumat Pelajar</h4>
    </div>
    <div class="card-body">
      
    <form action="pros_update.php" class="form-control" method="POST" novalidate>
  
  <!-- One "tab" for each step in the form: -->
    <br>
    <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label" >Nama :</label>
        <div class="col-sm-9">
          <input type="text" name="nama" class="form-control" value="<?php echo $row['namapel']; ?>" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="no_ic" class="col-sm-3 col-form-label" >No Kad Pengenalan :</label>
        <div class="col-sm-9">
          <p><input type="text" name="noic" class="form-control" value="<?php echo $row['noic']; ?>" readonly></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="tarikh_lahir" class="col-sm-3 col-form-label" >Tarikh Lahir :</label>
        <div class="col-sm-3">
          <p><input type="date" name="tarikhlahir" class="form-control"value="<?php echo $row['tarikhlahir']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="tempat_lahir" class="col-sm-3 col-form-label" >Tempat Lahir :</label>
        <div class="col-sm-9">
          <p><input type="text" name="tempat_lahir" class="form-control" value="<?php echo $row['tempatlahir']; ?>" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="bil_adik" class="col-sm-3 col-form-label" >Bilangan Adik Beradik :</label>
        <div class="col-sm-3">
          <p><input type="number" name="bil_adik" class="form-control" value="<?php echo $row['adikberadik']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="jantina" class="col-sm-3 col-form-label" >Jantina :</label>
        <div class="col-sm-3">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="jantina" id="lelaki" value="Lelaki" >
              <label class="form-check-label" for="lelaki">
                Lelaki
              </label>
            <!-- For Lelaki -->
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jantina" id="Perempuan" value="Perempuan"checked>
            <label class="form-check-label" for="Perempuan">
              Perempuan
            </label>
          </div>
        </div>
    </div><br>
    <div class="form-group row">
        <label for="bil_adik" class="col-sm-3 col-form-label" >Bangsa :</label>
        <div class="col-sm-3">
        <select id="select1" class="form-select" name="bangsa" value="<?php echo $row['bangsa']; ?>" required>
            <option selected>Sila Pilih</option>
            <option value="melayu">Melayu</option>
            <option value="cina">Cina</option>
            <option value="india">India</option>
            <option>Lain-Lain</option>
          </select>  
        </div>
    </div><br>
    <div class="form-group row">
        <label for="nama" class="col-sm-3 col-form-label" >Agama :</label>
        <div class="col-sm-3">
          <input type="text" name="agama" class="form-control" value="<?php echo $row['agama']; ?>" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
          <div class="col-sm-9" >
          <input type="text" class="form-control" name="alamat" placeholder="<?php echo $row['alamat']; ?>" value="<?php echo $row['alamat']; ?>" rows="3" required>
      </div>
    </div><br>

  <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label" >Email :</label>
        <div class="col-sm-9">
          <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required><p>
        </div>
  </div>

  <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label" >Nombor Telefon :</label>
        <div class="col-sm-9">
          <input type="text" name="notel" class="form-control" value="<?php echo $row['notel']; ?>" required><p>
        </div>
  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <a href="../paparborangmaklumat.php"><button class="btn btn-danger">Kembali</button></a>
      <button type="submit" id=""class="btn btn-primary">Hantar</button>
    </div>
  </div>

</form>
</div>
</div>
</center>
</main>

    <script src="../assets\dist\js\bootstrap.bundle.min.js"></script>
    <!-- <script type="text/javascript" src="../form.js"></script> -->
      
  </body>
</html>
