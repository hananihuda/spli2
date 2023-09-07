<!DOCTYPE html>
<html lang="en">
<?php
require '../../../config.php';
$result=mysqli_query($conn,"SELECT * FROM resume LEFT JOIN pelajar ON pelajar.id_user=resume.id_user WHERE id_resume ='".$_GET['id_resume']."'");
$row=mysqli_fetch_array($result);
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../../assets/dist/css/bootstrap.min.css">
    
    <style>

        body{
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

      .button{
        background-color: lightblue;
        size: 16px;
      }
        </style>
    </head>


    <body>
        <main>
      <div class="container-xl mb-4">
        <center><p>
            <h2>SISTEM PERSEDIAAN LATIHAN INDUSTRI</h2><p>
        </center>

        <nav class="navbar navbar-expand-lg bg-light rounded" aria-label="Twelfth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main For Creating Navigation Bar-->
        <div class="collapse navbar-collapse justify-content-md-center" id="navbar">
          <ul class="navbar-nav">

            <!-- Nav Bar -->

            <li class="nav-item">
              <a class="nav-link "href="../../homepagestudent.php">Panduan On-Job Training(OJT)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../paparborangmaklumat2.php">Maklumat Pelajar</a>
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
    </div>
    </nav>


      <center>
      <div class="card" style="width: 46rem;">
        <div class="card-header">
      
          <h3> Kemaskini Jawatan</h3>
        </div>
          <!--------------------------RESUME PELAJAR------------------------>
      
      <div class="card-body">
        <form action="pros_kemaskini_maklumat_asas.php" class="form-control" id="regForm" method="POST" novalidate>

        <div class="form-group">
        <br>
      </div>
       <input type="text" name="id_user" class="form-control" value="<?php echo $row['id_user']; ?>" hidden>
        <div class="form-group row">
        <label for="jawatan" class="col-sm-2 col-form-label"> Jawatan : </label>
          <div class="col-sm-6">
            <input type="text" name="jawatan" class="form-control" value="<?php echo $row['jawatan']; ?>" 
                  oninput="this.value = this.value.toUpperCase()" required>
            </div>
          </div>

        <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
          <label for="infoprofil" class="col-sm-2 col-form-label"> Info Profil : </label>
          <div class="col-sm-10" >
          <textarea class="form-control" name="infoprofil" placeholder="<?php echo $row['infoprofil']; ?>" value="<?php echo $row['infoprofil']; ?>" 
                rows="4" required></textarea>
          </div>
        </div>  
        <br>

        <!--<div class="form-group row">
          <label for="uploadgambar" class="col-sm-2 col-form-label"> Muat Naik Gambar (Berukuran Passport) :</label>
          <div class="col-md-10" >
            <input type="image" name="gambar">
          </div>
        </div>-->

        <button type="submit" name="Submit" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Hantar</button>
      </form>

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
  </select>

        </main><br>
        <center><a href="../../papar_resume.php" class="btn btn-light" tabindex="-1" role="button" aria-disabled="true">Ke Halaman Resume</a>
    </body>
</html>
