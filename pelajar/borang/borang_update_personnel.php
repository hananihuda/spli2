
<!doctype html>
<html lang="en">
<?php
require '../../config.php';
$result=mysqli_query($conn,"SELECT * FROM personnel  WHERE id_user='".$_GET['id_user']."'");
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
              <a class="nav-link " href="../paparborangmaklumat.php">Maklumat Pelajar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
  <div class="card"style="width: 45rem;">
    <div class="card-header">
      <h4>Form Update :</h4>
    </div>
    <div class="card-body">
      
    
    <form action="pros_update_personnel.php" class="form-control" id="regForm" method="POST" novalidate>
  
  <!-- One "tab" for each step in the form: -->
<div class="tab">
    <br>
    <div class="form-group row">
        <div class="col-sm-9">
          <p><input type="text" name="id_user" class="form-control" value="<?php echo $row['id_user']; ?>" required readonly hidden></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="md" class="col-sm-3 col-form-label" >Medical Director :</label>
        <div class="col-sm-9">
          <p><input type="text" name="md" class="form-control" value="<?php echo $row['md']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="hod" class="col-sm-3 col-form-label" >Head Of Department :</label>
        <div class="col-sm-9">
          <p><input type="text" name="hod" class="form-control" value="<?php echo $row['hod']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="moic" class="col-sm-3 col-form-label" >Medical Officer In-Charge :</label>
        <div class="col-sm-9">
          <p><input type="text" name="moic" class="form-control"value="<?php echo $row['moic']; ?>" required></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="umAm1" class="col-sm-3 col-form-label" >U.M (am) 1 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="umAm1" class="form-control" value="<?php echo $row['umAm1']; ?>" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="umAm2" class="col-sm-3 col-form-label" >U.M (am) 2 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="umAm2" class="form-control" value="<?php echo $row['umAm2']; ?>" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="umPm1" class="col-sm-3 col-form-label" >U.M (pm) 1 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="umPm1" class="form-control" value="<?php echo $row['umPm1']; ?>" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="umPm2" class="col-sm-3 col-form-label" >U.M (pm) 2 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="umPm2" class="form-control" value="<?php echo $row['umPm2']; ?>" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="umNi1" class="col-sm-3 col-form-label" >U.M (night) 1 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="umNi1" class="form-control" value="<?php echo $row['umNi1']; ?>" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="umNi2" class="col-sm-3 col-form-label" >U.M (night) 2 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="umNi2" class="form-control" value="<?php echo $row['umNi2']; ?>" required ></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="moAm1" class="col-sm-3 col-form-label" >M.O (am) 1 :</label>
        <div class="col-sm-9">
          <p><input type="text" name="moAm1" class="form-control" value="<?php echo $row['moAm1']; ?>" required ></p>
        </div>
    </div>
</div>
<div style="overflow:auto;">
    <div style="float:right;">
      <a href="../paparborangmaklumat.php" class="btn btn-danger">Kembali</a>
      <button type="submit" id="" class="btn btn-primary">Hantar</button>
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
