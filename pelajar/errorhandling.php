function customErrorHandler($errno, $errstr, $errfile, $errline) {
  if ($errno == E_USER_ERROR) {
    // Log the error message to a file
    error_log("Fatal error: $errstr in $errfile on line $errline");
    // Display an error message to the user
    echo "An error occurred: " . $errstr;
  }
}

set_error_handler('customErrorHandler');

// Connection
include '../../../config.php';

session_start();

$_SESSION['user'] = $username;
$name = $_SESSION["user"];

// Variables to hold form data
$id_user = $_SESSION['username'];
$jawatan = $_POST['jawatan'];
$infoprofil = $_POST['infoprofil'];

// Insert data into the database
$query = "INSERT INTO resume (
        id_user,
        jawatan,
        infoprofil
        )VALUES(
        '$id_user',
        '$jawatan',
        '$infoprofil')";

$query_run = mysqli_query($conn, $query);

if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
} else {
    // Trigger a fatal error if the query fails
    trigger_error("Fatal error: unable to insert data into the database", E_USER_ERROR);
}
