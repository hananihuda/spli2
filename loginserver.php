<?php
include 'config.php';


if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="SELECT * from pengguna where username ='".$username."' AND password='".$password."' ";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    if ($row["usertype"]=="staff") {
        session_start();
        $_SESSION["username"]=$username;
        echo ("<script LANGUAGE='JavaScript'>
                    window.alert('WELCOME TO E-PORTAL AAES');
                    document.location = 'pelajar/paparborangmaklumat.php';
                    </script>");
    }

    elseif ($row["usertype"]=="admin") {
        $_SESSION["username"]=$username;
        echo ("<script LANGUAGE='JavaScript'>
                    window.alert('WELCOME TO E-PORTAL AAES');
                    document.location = 'admin2/accPelajar.php';
                    </script>");
    }

    else {
        echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Whoops! We seem to have hit a snag. Please try again later...');
                    document.location = 'index.php';
                    </script>");//tukar jadi alert
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="// cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    </head>
    <body>
        <script src="" async defer></script>
    </body>
</html>


