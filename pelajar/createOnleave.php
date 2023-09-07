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
        .card{
        margin-left: 40%;
        margin-right: -18%;
    }
</style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create Account</title>
</head>
<body style="background-color: #c4b7a6;">
   
  <div class="container-xl mb-4">
    <center><p>
      <h2>E-PORTAL AAES</h2><p>
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
              <a class="nav-link " href="paparborangmaklumat.php">Information Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../logout.php" onclick="return confirm('Are you sure want to logout?')">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</main>
</div>
  
  
    <div class="container mt-5">

        <div class="row"> 
            <div class="col-md-8">
                <div class="card" style="width: 39rem;">
                    <div class="card-header">
                        <h4>Add New</h4>
                    </div>
                    <div class="card-body">
                        <form action="pros_addOnleave.php" method="POST">

                        <?php 
                        $id=mt_rand(111,999);
                        ?>
                          
                            <div class="mb-3">
                                <input type="text" name="id_user" class="form-control mb-6" value="<?php echo $id_user; ?>" required readonly hidden>
                            </div>
                            <div class="mb-3">
                                <label>On-Leave</label>
                                <input type="text" name="onleave" class="form-control" oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <div class="mb-3">
                                <label>Date</label>
                                Start :<div class="col-sm-3">
                                <input type="date" name="date1" class="form-control" oninput="this.value = this.value.toUpperCase()"><p>
                                </div> 
                                End :<div class="col-sm-3">
                                <input type="date" name="date2" class="form-control" oninput="this.value = this.value.toUpperCase()"><p>
                                </div> 
                            </div>
                            <div class="mb-3">
                                <label>Cover</label>
                                <input type="text" name="cover" class="form-control" oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                  <button type="submit" name="save_onleave" class="btn btn-primary">Save</button>
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