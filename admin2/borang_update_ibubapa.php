
<!doctype html>
<html lang="en">
<?php
require '../config.php';
$result=mysqli_query($conn,"SELECT * FROM ibubapa  WHERE id_user='".$_GET['id_user']."'");
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
  </head>
  <title>Kemaskini Maklumat Ibubapa</title>
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
  <div class="card"style="width: 45rem;">
    <div class="card-header">
      <h4>Kemaskini Borang Maklumat Ibu Bapa:</h4>
    </div>
    <div class="card-body">
      
    
    <form action="pros_update_ibubapa.php" class="form-control" id="regForm" method="POST" novalidate>
  
  <!-- One "tab" for each step in the form: -->
<div class="tab">
    <br>
    <div class="form-group row">
        <div class="col-sm-9">
          <input type="text" name="id_user" class="form-control" value="<?php echo $row['id_user']; ?>" required readonly hidden><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="namabapa" class="col-sm-3 col-form-label" >Nama Bapa :</label>
        <div class="col-sm-9">
          <input type="text" name="namabapa" class="form-control" value="<?php echo $row['namabapa']; ?>" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="noic_bapa" class="col-sm-3 col-form-label" >No Kad Pengenalan Bapa :</label>
        <div class="col-sm-9">
          <p><input type="text" name="noic_bapa" class="form-control" value="<?php echo $row['noic_bapa']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="pekerjaanbapa" class="col-sm-3 col-form-label" >Pekerjaan Bapa :</label>
        <div class="col-sm-9">
          <p><input type="text" name="pekerjaanbapa" class="form-control"value="<?php echo $row['pekerjaanbapa']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="notel_bapa" class="col-sm-3 col-form-label" >Nombor Telefon Bapa :</label>
        <div class="col-sm-9">
          <p><input type="text" name="notel_bapa" class="form-control" value="<?php echo $row['notel_bapa']; ?>" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="namaibu" class="col-sm-3 col-form-label" >Nama Ibu :</label>
        <div class="col-sm-9">
          <p><input type="text" name="namaibu" class="form-control" value="<?php echo $row['namaibu']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="namaibu" class="col-sm-3 col-form-label" >No IC Ibu :</label>
        <div class="col-sm-9">
          <p><input type="text" name="noic_ibu" class="form-control" value="<?php echo $row['noic_ibu']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="pekerjaanibu" class="col-sm-3 col-form-label" >Pekerjaan Ibu :</label>
        <div class="col-sm-9">
          <p><input type="text" name="pekerjaanibu" class="form-control" value="<?php echo $row['pekerjaanibu']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="notel_ibu" class="col-sm-3 col-form-label" >notel_ibu :</label>
        <div class="col-sm-9">
          <input type="text" name="notel_ibu" class="form-control" value="<?php echo $row['notel_ibu']; ?>" required><p>
        </div>
    </div>

</div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <a href="maklumat_pelajar.php"><button class="btn btn-danger">Kembali</button></a>
      <button type="submit" id=""class="btn btn-primary">Hantar</button>
    </div>
  </div>

</form>
</div>
</div>
</center>
</main>


    <script src="../assets\dist\js\bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../form.js"></script>
      
  </body>
</html>
