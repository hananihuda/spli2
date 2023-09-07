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
    
    <style>
		body{
           background: linear-gradient(to right, CadetBlue, DarkGrey);
      }
        .card{
        margin-left: 40%;
        margin-right: -18%;
    }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Edit</title>
</head>
<body style="background-color: #c4b7a6;">
  
    <div class="container mt-5">

    <?php include('message.php'); ?>
    
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h4>UPDATE PROFILE
                            <a href="accPelajar.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                          	$user_id=$_GET['id'];
                            //$user_id = mysqli_real_escape_string($conn, $_GET['username']);
                            $query = "SELECT * FROM pengguna WHERE id='$user_id' ";
                          
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>

                                <form action="pros_addPelajar.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
                                    
                                        <div class="mb-3">
                                        <label>Name :</label>
                                        <input type="text" name="nama" value="<?=$user['nama'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ID :</label>
                                        <input type="text" name="username" value="<?=$user['username'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>New Password :</label>
                                        <input type="password" name="password" value="<?=$user['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Type Of User :</label>
                                        <input type="text" name="usertype" value="<?=$user['usertype'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>