<?php
session_start();

require '../config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

    .card{
        margin-left: 40%;
        margin-right: -18%;
    }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Tambah Maklumat Penyelia</title>
</head>
<body style="background: #c4b7a6">  

   
    <div class="container mt-5">

    <?php include('message.php'); ?>

    
        <div class="row"> 
            <div class="col-sm-8" >
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Maklumat Penyelia
                            <a href="listPenyelia.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="pros_tambahPenyelia.php" method="POST">
<?php 
$id=mt_rand(111,999);
?>

                            <div class="mb-3">
                                <label>Nama Penyelia</label>
                                <input type="text" name="nama_penyelia" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>No Telefon</label>
                                <input type="text" name="notel_penyelia" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Emel</label>
                                <input type="text" name="email_penyelia" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                
                                <button type="submit" name="cipta_penyelia" class="btn btn-primary">Hantar</button>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>