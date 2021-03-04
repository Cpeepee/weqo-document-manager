<?php
include ("header.php");

$sim_2_remove = $_POST["phone"];
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$sql = "DELETE FROM sim WHERE number='$sim_2_remove'";
if ($conn->query($sql) === false)
{
  echo "Error deleting record: " . $conn->error;
}
else {
  echo "suscess deleted.";
}
?>

<form action="" method="post">
  <input type="text" name="phone" placeholder="enter number for del">
  <input type="submit" value="remove">
</form>
<?php
$conn->close();
include ("footer.php");
?>
