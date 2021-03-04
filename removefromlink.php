<?php
include ("header.php");

$url_2_remove = $_POST["link"];
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$sql = "DELETE FROM link WHERE url='$url_2_remove'";
if ($conn->query($sql) === false)
{
  echo "Error deleting record: " . $conn->error;
}
else {
  echo "suscess deleted.";
}
?>

<form action="" method="post">
  <input type="text" name="link" placeholder="enter link for del">
  <input type="submit" value="remove">
</form>
<?php
$conn->close();
include ("footer.php");
?>
