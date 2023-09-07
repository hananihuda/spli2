<!DOCTYPE html>
<html lang="en">
<?php
require '../config.php';
$query ="SELECT * FROM pelajar LEFT JOIN resume ON resume.id_user=pelajar.id_user WHERE pelajar.id_user='".$_SESSION['username']."'";
$result=mysqli_query($conn,"SELECT * FROM resume LEFT JOIN pelajar ON pelajar.id_user=resume.id_user WHERE id_resume ='".$_GET['id_resume']."'");
$row=mysqli_fetch_array($result);
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>

        
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    
    <style>

        body{
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
              <a class="nav-link" href="homepagestudent.php"> Halaman Utama </a>
            </li>

            <li class="nav-item">
              <a class="nav-link "href="homepagestudent.php">Panduan On-Job Training(OJT)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="borangmaklumat.php">Borang Maklumat Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="maklumatsyarikat.php">Maklumat Syarikat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login2.php">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </nav>


      <center>
      <div class="card" style="width: 46rem;">
        <div class="card-header">
      
          <h3> Kemaskini Resume Pelajar</h3>
        </div>
          <!--------------------------RESUME PELAJAR------------------------>
      
      <div class="card-body">
        <form action="pros_updateresume.php" class="form-control" id="regForm" method="POST" novalidate>
            <!--<form class="needs-validation" novalidate>-->

     <!------ kena link kan from table maklumatpel-------
            <div class="tab">
        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">NAMA </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
          </div>
        <div class="invalid-feedback">
        </div>

 

      <div class="form-group">
      <br>
    </div>
    <div class="form-group row">
          <label for="notel" class="col-sm-2 col-form-label"> NOMBOR TELEFON </label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="notel" placeholder="Nombor Telefon" required>
          </div>
        </div>
        <br>

        <div class="form-group">
      <br>
    </div>
    <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label"> E-MEL </label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="Emel" required>
          </div>
        </div>
        <br>

      <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
          <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
          <div class="col-sm-10" >
            <textarea class="form-control" name="alamat" placeholder="Alamat" rows="3"></textarea>
          </div>
        </div>
        ---------------------------------------------------------------------------------------------------->
        <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
        <label for="jawatan" class="col-sm-2 col-form-label"> Jawatan : </label>
          <div class="col-sm-6">
            <input type="text" name="jawatan" class="form-control" value="<?php echo $row['jawatan']; ?>" readonly>
            </div>
          </div>

        <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
          <label for="alamat" class="col-sm-2 col-form-label"> Info Profil : </label>
          <div class="col-sm-10" >
            <textarea class="form-control" name="infoprofil" value="<?php echo $row['']; ?>" required></textarea>
          </div>
        </div>

        

        <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label"> Bahasa : </label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="bahasa" value="<?php echo $row['bahasa']; ?>" required>
            <br>
            <input type="text" class="form-control" name="bahasa" value="<?php echo $row['bahasa']; ?>" required>
            <br>
            <input type="text" class="form-control" name="bahasa" value="<?php echo $row['bahasa']; ?>" required>
          </div>
          <div class="invalid-feedback">
          </div>
        </div>

      <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
          <label for="alamat" class="col-sm-2 col-form-label">Pendidikan :</label>
          <div class="col-sm-10" >
            <textarea class="form-control" name="pendidikan" value="<?php echo $row['pendidikan']; ?>" rows="3" required></textarea>
          </div>
        </div>

      <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
          <label for="pengalamankerja" class="col-sm-2 col-form-label">Pengalaman Kerja : </label>
          <div class="col-md-10" >
            <textarea class="form-control" name="pengalamankerja" value="<?php echo $row['pengalamankerja']; ?>" rows="3" required></textarea>
          </div>
        </div>

        <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
          <label for="pengalamankerja" class="col-sm-2 col-form-label"> Skill & Kebolehan : </label>
          <div class="col-md-10" >
            <textarea class="form-control" name="kebolehan" value="<?php echo $row['kebolehan']; ?>" rows="3" required></textarea>
          </div>
        </div>

        <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
          <label for="pengalamankerja" class="col-sm-2 col-form-label"> Rujukan : </label>
          <div class="col-md-10" >
            <textarea class="form-control" name="rujukan" value="<?php echo $row['rujukan']; ?>" rows="3" required></textarea>
          </div>
        </div>

        <div class="form-group">
        <br>
      </div>
        <!--<div class="form-group row">
          <label for="uploadgambar" class="col-sm-2 col-form-label"> Muat Naik Gambar (Berukuran Passport) :</label>
          <div class="col-md-10" >
            <input type="image" name="gambar">
          </div>
        </div>-->

        <button type="submit" name="Submit" >Hantar</button>
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

        </main>
    </body>
</html>
