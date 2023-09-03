<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$server = "localhost";
$serveruser = "u469800279_krc";
$serverpassword = "Krc@Karma3003";
$database = "u469800279_krc_lawn_db";

$conn = new mysqli($server, $serveruser, $serverpassword ,$database);
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

$sql = "INSERT INTO contactus (name, email, number, message) VALUES ('$name', '$email', $number, '$message')";
if ($conn->query($sql) === TRUE) {
  echo "<script>
window.location.href='/';
alert('Thanks For Showing Interest.');
</script>";
} else {
  echo "<script>
  window.location.href='/';
  alert('Sorry For Inconnvenience. We Are Unable To Send Your Request Right Now !');
  </script>";
}

$conn->close();

?>

