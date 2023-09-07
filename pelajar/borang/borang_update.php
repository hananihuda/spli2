
<!doctype html>
<html lang="en">
<?php
require '../../config.php';
$result=mysqli_query($conn,"SELECT * FROM pelajar  WHERE id_user='".$_GET['id_user']."'");
$row=mysqli_fetch_array($result);

header("Refresh: 10");

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
  </head>
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
  <div class="card"style="width: 45rem;">
    <div class="card-header">
      <h4>FORM UPDATE </h4>
    </div>
    <div class="card-body">
      
    <form action="pros_update.php" class="form-control" method="POST" novalidate>
  
  <!-- One "tab" for each step in the form: -->
    <div class="form-group row">
        <div class="col-sm-9">
          <p><input type="text" name="id_user" class="form-control" value="<?php echo $row['id_user']; ?>" required readonly hidden></p>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="md" class="col-sm-3 col-form-label" >Medical Director :</label>
        <div class="col-sm-9">
          <input type="text" name="md" class="form-control" value="<?php echo $row['md']; ?>" oninput="this.value = this.value.toUpperCase()" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="noic" class="col-sm-3 col-form-label" >Medical Officer In-Charge :</label>
        <div class="col-sm-9">
          <p><input type="text" name="noic" class="form-control" value="<?php echo $row['noic']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="notel" class="col-sm-3 col-form-label" >Chief Nursing Officer :</label>
        <div class="col-sm-9">
          <p><input type="text" name="notel" class="form-control"value="<?php echo $row['notel']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-sm-3 col-form-label" >Head Of Department :</label>
        <div class="col-sm-9">
          <p><input type="text" name="alamat" class="form-control"value="<?php echo $row['alamat']; ?>" oninput="this.value = this.value.toUpperCase()" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="agama" class="col-sm-3 col-form-label" >U.M (AM) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="agama" class="form-control" value="<?php echo $row['agama']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="tempatlahir" class="form-control" value="<?php echo $row['tempatlahir']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label" >U.M (PM) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="umPm2" class="form-control" value="<?php echo $row['umPm2']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="umNi1" class="col-sm-3 col-form-label" >U.M (Night) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="umNi1" class="form-control" value="<?php echo $row['umNi1']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="umNi2" class="form-control" value="<?php echo $row['umNi2']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="moAm1" class="col-sm-3 col-form-label" >M.O (AM) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="moAm1" class="form-control" value="<?php echo $row['moAm1']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="moAm2" class="form-control" value="<?php echo $row['moAm2']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="moPm1" class="col-sm-3 col-form-label" >M.O (PM) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="moPm1" class="form-control" value="<?php echo $row['moPm1']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="moPm2" class="form-control" value="<?php echo $row['moPm2']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="moNi1" class="col-sm-3 col-form-label" >M.O (Night) :</label>
        <div class="col-sm-9">
          <p><input type="text" name="moNi1" class="form-control" value="<?php echo $row['moNi1']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
          <p><input type="text" name="moNi2" class="form-control" value="<?php echo $row['moNi2']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="lab1" class="col-sm-3 col-form-label" >Lab 1 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="lab1" class="form-control" value="<?php echo $row['lab1']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="lab2" class="col-sm-3 col-form-label" >Lab 2 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="lab2" class="form-control" value="<?php echo $row['lab2']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="radiog" class="col-sm-3 col-form-label" >Radiograph :</label>
        <div class="col-sm-9">
          <p><input type="text" name="radiog" class="form-control" value="<?php echo $row['radiog']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="radiol" class="col-sm-3 col-form-label" >Radiologist :</label>
        <div class="col-sm-9">
          <p><input type="text" name="radiol" class="form-control" value="<?php echo $row['radiol']; ?>" oninput="this.value = this.value.toUpperCase()" required ></p>
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
