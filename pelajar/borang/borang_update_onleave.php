
<!doctype html>
<html lang="en">
<?php
require '../../config.php';
$result=mysqli_query($conn,"SELECT * FROM rujukan  WHERE id_user='".$_GET['id_user']."'");
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
      <h4>FORM UPDATE</h4>
    </div>
    <div class="card-body">
      
    <form action="pros_update_onleave.php" class="form-control" method="POST" novalidate>
  
  <!-- One "tab" for each step in the form: -->
    <div class="form-group row">
        <div class="col-sm-9">
          <p><input type="text" name="id_user" class="form-control" value="<?php echo $row['id_user']; ?>" required readonly hidden></p>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="onLeave" class="col-sm-3 col-form-label" >On-Leave :</label>
        <div class="col-sm-9">
          <input type="text" name="onLeave" class="form-control" value="<?php echo $row['onLeave']; ?>" oninput="this.value = this.value.toUpperCase()" required><p>
        </div>
    </div>
    <div class="form-group row">
        <label for="startDate" class="col-sm-3 col-form-label" >Date :</label>
        Start :<div class="col-sm-3">
        <input type="date" name="startDate" class="form-control" value="<?php echo $row['startDate']; ?>" oninput="this.value = this.value.toUpperCase()" required><p>
        </div> End :
        <div class="col-sm-3">
        <input type="endDate" name="endDate" class="form-control" value="<?php echo $row['endDate']; ?>" oninput="this.value = this.value.toUpperCase()" required><p>
        </div> 
    </div>
    <div class="form-group row">
        <label for="coverBy" class="col-sm-3 col-form-label" >Cover By :</label>
        <div class="col-sm-9">
          <input type="text" name="coverBy" class="form-control" value="<?php echo $row['coverBy']; ?>" oninput="this.value = this.value.toUpperCase()" required><p>
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
