<?php

session_start();
require '../../config.php';
$noic = $_GET['noic'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <title>SPLI</title>
</head>
<body>

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
              <a class="nav-link"href="../homepagestudent.php">Panduan On-Job Training(OJT)</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="paparborangmaklumat2.php">Maklumat Pelajar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="papar_resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paparmaklumatsyarikat.php">Maklumat Syarikat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</main>
</div>

<br>
  
    <div class="container">

                <!-- CARD UNTUK PANDUAN OJT--->
          
    <div class="row">
     <center>
      <div class="col-sm-6">        
      <div class="card">
        <div class="card-header">
           <h5>Sila Pilih</h5>
          
        </div>
        <div class="card-body">
               <form action="pros_update_gambar.php" class="form-control needs-validation" id="regForm"
                method="POST"enctype="multipart/form-data" novalidate>

        <input type="text" name="noic" class="form-control" value="<?php echo $noic; ?>" hidden>
        <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
        <label for="gambar" class="col-sm-4 col-form-label"> Gambar Anda : </label>
          <div class="col-sm-8">
            <input type="file" name="gambar" class="form-control"required>
            <div class="invalid-feedback">Sila Pilih </div>
            </div>
          </div><br>

        <button type="submit" name="Submit" class="btn btn-success"  role="button" aria-disabled="true">Hantar</button>
      </form>
        </div>
      </div>
    </div><br>
    <a href="../paparborangmaklumat.php" class="btn btn-light" tabindex="-1" role="button" aria-disabled="true">Kembali</a>

  </div>  
  </div>  

  <br>
  <center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>