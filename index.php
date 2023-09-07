<!DOCTYPE html>
<html lang="en">

<style>
    @import url("reset.css");

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    background: linear-gradient(to top, #9FB2F2, #C5EBF9);
    display: flex;
    justify-content: center;
    align-items: center;
  
  /* Created with https://www.css-gradient.com */
/* background: #9FB2F2;
background: -webkit-linear-gradient(bottom, #9FB2F2, #C5EBF9);
background: -moz-linear-gradient(bottom, #9FB2F2, #C5EBF9);
background: linear-gradient(to top, #9FB2F2, #C5EBF9); */
  
}


/* Login Card */
.login-card {
    width: 450px;
    background: rgba(255, 255, 255, .5);
    padding: 4rem;
    border-radius: 10px;
    position: relative;
}

.login-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(255, 255, 255, .5);
    transform: rotate(-6deg);
    border-radius: 10px;
    z-index: -1;
}
/* ---------- */

/* Login Card Logo */
.login-card-logo {
    margin-bottom: 2rem;
}

.login-card-logo img {
    width: 60px;
}
/* ---------- */

/* Login Card Standard */
.login-card-logo,
.login-card-header,
.login-card-footer {
    text-align: center;
}

.login-card a {
    text-decoration: none;
    color: #35339a;
}

.login-card a:hover {
    text-decoration: underline;
}
/* ---------- */

/* Login Card Header */
.login-card-header {
    margin-bottom: 2rem;
}

.login-card-header h1 {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: .5rem;
}

.login-card-header h1+div {
    font-size: calc(1rem * .8);
    opacity: .8;
}
/* ---------- */

/* Login Card Form */
.login-card-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.login-card-form .form-item {
    position: relative;
}

.login-card-form .form-item .form-item-icon {
    position: absolute;
    top: .82rem;
    left: 1.4rem;
    font-size: 1.3rem;
    opacity: .4;
}

.login-card-form .form-item-other {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: calc(1rem * .8);
    margin-bottom: .5rem;
}
/* ---------- */

/* Login Card Form Elements */
.login-card input[type="text"],
.login-card input[type="password"],
.login-card input[type="email"] {
    border: none;
    outline: none;
    background: rgba(255, 255, 255, .3);
    padding: 1rem 1.5rem;
    padding-left: calc(1rem * 3.5);
    border-radius: 100px;
    width: 100%;
    transition: background .5s;
}

.login-card input:focus {
    background: white;
}

.login-card button {
    background: black;
    color: white;
    padding: 1rem;
    border-radius: 100px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: background .5s;
}

.login-card button:hover {
    background-color: rgba(0, 0, 0, 0.85);
    cursor: pointer;
}
/* ---------- */



/* Responsive */
@media (max-width: 768px) {

    body {
        padding: 2rem 0;
    }

    .login-card {
        width: 280px;
        padding: 2rem;
    }

}
/* ---------- */

</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=""/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title> Login Page </title>
</head>

<body>
    <script src="js/bootstrap.js"></script>
    <script src=""></script>

    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <!--<img src="fairy2.png" alt="logo">-->
            </div>
            <div class="login-card-header">
                <h1>E-Portal AAES</h1>
                <div>Please insert your ID & Password</div>
            </div>
            <form class="login-card-form" method="POST" action="loginserver.php">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">badge</span>
                    <input type="text" placeholder="User ID" id="username" name="username" 
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" placeholder="Password" id="password" name="password" 
                     required>
                </div>
                 <?php
                include("loginserver.php");
                // error_reporting(0);
                ?>
                <div class="form-item-other">
                   <!-- <a href="#">Lupa Kata Laluan?</a>-->
                </div>
                <button type="submit">Login</button>
            </form>
            
        </div>
        
    </div>

</body>

</html>