<!doctype html>
<html lang="en">
<?php
include'../loginserver.php';
include '../config.php';
session_start();
// LAST SEEN BUAT EDIT USING AJAX TENGOK ERROR CODE BALIK

$_SESSION['user']=$username;
$name=$_SESSION["username"];
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>


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
              <a class="nav-link active"href="panduanojt.php">Panduan On-Job Training(OJT)</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="paparborangmaklumat2.php">Maklumat Pelajar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="papar_resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paparmaklumatsyarikat.php">Maklumat Syarikat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login2.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-header">Borang Yang Perlu Di Isi</h5>
        <p class="card-text">
            <ol class="list-group list-group-flush">
                <li class="list-group-item">
                    <img src="icon/info-circle.svg"><a href="borang/borangmaklumat.php">Borang Maklumat Pelajar</a>
                </li>
                <li class="list-group-item">
                    <img src="icon/file-person.svg"><a href="papar_resume.php">Borang Resume Pelajar</a>
                </li>
                <li class="list-group-item">
                    <img src="icon/building.svg"><a href="maklumatsyarikat.php">Borang Maklumat Syarikat</a>
                </li>
            </ol>

            </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-header">Muat Turun Garis Panduan On-Job-Training(OJT)</h5>
        <p class="card-text">
            <ol class="list-group list-group-flush">
                <li class="list-group-item">
                  <?php
                  $query="SELECT * FROM panduanojt";
                  $query_run=mysqli_query($conn,$query);
                  if (mysqli_num_rows($query_run)>0) {
                    foreach ($query_run as $data) {
                    ?>
    <img src="icon/file-person.svg"><a href="download_panduan.php?panduan=<?php echo $data["panduan"]; ?>"><?php echo $data["panduan"]; ?></a>
    <br>


                    <?php  
                    }
                  }else{
?>
        TIADA DATA

<?php
                  }

                  ?>
                    
                </li>
            </ol>

            </p>
      </div>
    </div>
  </div>
</div>
</center>
</main>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

      <!-- <script type="text/javascript" src="assets/dist/js/function.js"></script> -->
  </body>
</html>
