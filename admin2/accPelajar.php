<?php

session_start();
include '../config.php';
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

    <title>Create Account</title>
</head>

<body>
  <div class="container-xl mb-4">
    <center><p>
      <h2>E-PORTAL AAES</h2><p>
    </center>

    <div class="container-xl mb-4">
    <center><p>

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
              <a class="nav-link " href="accPelajar.php">Profile</a>
            </li> 
           <li class="nav-item">
              <a class="nav-link " href="../pelajar/paparborangmaklumat.php">Information Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../../logout.php" onclick="return confirm('Are you sure want to logout?')">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</main>
</div>

<br>
 <div class="container">

    <!-------------------------------------------------- CARD FOR SENARAI NAMA PELAJAR -------------------------------------------->
    <?php include('message.php'); ?>
    
        <div class="row">
          <center>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>List User
                            <a href="studentCreate.php" class="btn btn-primary float-end">Create New User</a>
                        </h4>
                    </div>
          <div class="card-body">
            <table class="table">
            <thead> 
            <tr>
                <th>NO.</th>
                <th>NAME</th>
                <th>USER ID</th>
                <th>PASSWORD</th>
                <th>TYPE</th>
                <th>ACTIONS</th>
            </tr> 
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM pengguna WHERE usertype = 'staff' OR usertype='admin' ORDER BY nama ASC";
                $query_run = mysqli_query($conn,$query);
                $id=mt_rand(111,999);
                $cnt=1;
                if (mysqli_num_rows($query_run)>0) {
                    foreach ($query_run as $user) {
                        
            ?>
                    <tr>
                    <td><?= $cnt; ?></td>
                    <td><?= $user['nama']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['password']; ?></td>
                    <td><?= $user['usertype']; ?></td> 
                    <td>
                           
                        <a href="studentUpdate_acc.php?id=<?= $user['id']; ?>" class="btn btn-success btn-sm">UPDATE</a>
                        <a href="studentDelete.php?id=<?= $user['id']; ?>" class="btn btn-danger btn-sm" 
                        onClick="return confirm('Are you serious want to delete <?= $user['nama']; ?>? ')">DELETE</a> 
                    </td>
                    </tr>
            <?php 
            $cnt=$cnt+1;
                    }
                }
                else {
                    echo "<h5> No Record Found";
                }
            ?>
        </tbody>
    </table>
                    </div>
                </div>
            </div>
        </div>

<br>
    <center>
    <a href="../pelajar/paparborangmaklumat.php" class="btn btn-secondary" role="button">Back To Homepage</a>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>