<!DOCTYPE html>
<html>
<?php
  require '../config.php';
  $result=mysqli_query($conn, "SELECT * FROM syarikat WHERE id_syarikat='".$_GET['id_syarikat']. "'");
  $row=mysqli_fetch_array($result);
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css">
    
    <title></title>
</head>

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
              <a class="nav-link "href="homepagestudent.php">Panduan On-Job Training(OJT)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paparborangmaklumat2.php">Maklumat Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="papar_resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="paparmaklumatsyarikat.php">Maklumat Syarikat</a>
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
      
          <h3> Surat Jawapan</h3>
        </div>

        
      
      <div class="card-body">
        <form action="pros_inser_surat.php" class="form-control needs-validation" id="regForm" method="POST"enctype="multipart/form-data" novalidate>

        <input type="text" name="id_syarikat" class="form-control" value="<?php echo $row['id_syarikat']; ?>" hidden>
        <div class="form-group">
        <br>
      </div>
        <div class="form-group row">
        <label for="bahasa" class="col-sm-2 col-form-label"> Surat Jawapan : </label>
          <div class="col-sm-6">
            <input type="file" name="suratjawapan" class="form-control"required>
            <div class="invalid-feedback">Sila pilih surat</div>
            </div>
          </div><br>

        <button type="submit" name="Submit" class="btn btn-success"  role="button" aria-disabled="true">Hantar</button>
      </form>
</div>
</div>
</center>
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
  </select>

        </main><br>
        <center><a href="paparmaklumatsyarikat.php" class="btn btn-light" tabindex="-1" role="button" aria-disabled="true">Kembali</a>

</body>
</html>