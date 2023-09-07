<!doctype html>
<html lang="en">
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
 .b-example-divider {
          height: 2rem;
          border-width: 1px 0;
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
      <h2>SISTEM PERSEDIAAN LATIHAN INDUSTRI</h2>
    </center>
    
    <nav class="navbar navbar-expand-lg bg-light rounded" aria-label="Twelfth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbar">
          <ul class="navbar-nav">
            
            <li class="nav-item">
              <a class="nav-link" href="homepagestudent.php">Halaman Utama</a>
            </li>

            <li class="nav-item">
              <a class="nav-link"href="homepagestudent.php">Panduan On-Job Training(OJT)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="borangmaklumat.php">Borang Maklumat Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="maklumatsyarikat.php">Maklumat Syarikat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
<div class="container">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <!---Tab Pelajar--->
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Maklumat Pelajar</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="b-example-divider"></div>
                      <!-- USIK DARI SINI JE -->
    <table id="myTable" class="table table-hover table-bordered table-responsive">
                        <tr>
                        <!-- PANGGIL DARIPADA B.M.S 
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>NO TEL</th> -->
                        <th>Jawatan</th>
                        <th>Info Profil</th>
                        <th>Bahasa</th>
                        <th>Pendidikan</th>
                        <th>Pengalaman Kerja</th>
                        <th>Kebolehan</th>
                        <th>Rujukan</th>
                        <th>Action</th>
                        <!--<th>Gambar</th>-->
                    </tr>
                </thead>
              
              <tbody>
                    <?php
                        require '../config.php';

                        $query = "SELECT * FROM resume";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0)
                          {
                            foreach($query_run as $maklumat)
                              {
                    ?>
                            <tr> <!-- [''] ikut DB -->
                              <!-- NAMA 
                                EMEL
                                NO TEL --->
                              <td><?= $maklumat['jawatan'] ?></td>
                              <td><?= $maklumat['infoprofil'] ?></td>
                              <td><?= $maklumat['bahasa'] ?></td>
                              <td><?= $maklumat['pendidikan'] ?></td>
                              <td><?= $maklumat['pengalamankerja'] ?></td>
                              <td><?= $maklumat['kebolehan'] ?></td>
                              <td><?= $maklumat['rujukan'] ?></td>
                              <td><a><a href="borang_updateresume.php?jawatan=<?php echo $maklumat["jawatan"];?>">Kemaskini</a></a></td>
                              <!--<td>
                                <= $maklumat['gambar'] ?></td>-->
                            </tr>
                        <?php
                          }
                            }
                        ?>
                            
              </tbody>
        </table>
                        <!-- SAMPAI SINI -->
  </div>
  <!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div> -->
</div>
</div>
</center>
</p>
</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
      $('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
    </script>

  </body>
</html>
