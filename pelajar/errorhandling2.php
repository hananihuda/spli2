// Connection
include '../../../config.php';

session_start();

$_SESSION['user'] = $username;
$name = $_SESSION["user"];

// Variables to hold form data
$id_user = $_SESSION['username'];
$jawatan = $_POST['jawatan'];
$infoprofil = $_POST['infoprofil'];

try {
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

  if (!$query_run) {
    throw new Exception("Fatal error: unable to insert data into the database");
  }

  echo "Data Berjaya Disimpan";
header('location:../../papar_resume.php');
} catch (Exception $e) {
  // Log the error message to a file
  error_log($e->getMessage());
  // Display an error message to the user
  echo "An error occurred: " . $e->getMessage();
}

