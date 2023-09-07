<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../form.css">

  <title> </title>
</head>

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
              <a class="nav-link"href="../../homepagestudent.php">Panduan On-Job Training(OJT)</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="../../paparborangmaklumat2.php">Maklumat Pelajar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="../../papar_resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../paparmaklumatsyarikat.php">Maklumat Syarikat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
  <div class="card"style="width: 45rem;">
    <div class="card-header">
      <h4> Tambah Jawatan </h4>
    </div>
    <div class="card-body">
      
    <!-- ACTION AFTER KLIK SUBMIT -->
    <form action="pros_tambah_maklumat_asas.php" class="form-control" id="regForm" method="POST" novalidate>


      <!-- <b><h5 class="text-muted">Sila Isi Dengan Huruf Besar</h5></b> -->

<br>

    <div class="form-group row">
        <label for="kebolehan" class="col-sm-3 col-form-label" > Jawatan :</label>
        <div class="col-sm-8">
          <input type="text" name="jawatan" class="form-control" placeholder="Isi Jawatan" required><p>
        </div>
    </div>

    <div class="form-group"> 
      </div>
        <div class="form-group row">
          <label for="alamat" class="col-sm-3 col-form-label"> Info Profil : </label>
          <div class="col-sm-8" >
          <textarea class="form-control" name="infoprofil" placeholder="Huraian Ringkas Mengenai Diri Anda" rows="6" required></textarea>
          </div>
        </div> 

        <br>

<button type="submit" name="Submit">Hantar</button>
</p>
</div>
</div>
</form>
</center>
</main>
<center><center><a href="../../papar_resume.php" class="btn btn-light" tabindex="-1" role="button" aria disabled="true">Ke Halaman Resume</a></center>

<script src="assets\dist\js\bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../form.js"></script>
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