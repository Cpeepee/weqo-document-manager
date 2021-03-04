<?php
include ("header.php");

$number_to_edit = $_POST["number"];
$newname = $_POST["newname"];
$newnumber = $_POST["newnumber"];
$newcomment = $_POST["newcomment"];

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$sql = "UPDATE sim SET name='$newname',number='$newnumber',comment='$newcomment' WHERE number='$number_to_edit'";
if ($conn->query($sql) === false)
{
  echo "Error deleting record: " . $conn->error;
}
else {
  echo "suscess deleted.";
}


?>
<form action="" method="POST">
  <input type="text" name="number" placeholder="enter number for edit">
  <input type="text" name="newname" placeholder="enter new name">
  <input type="text" name="newnumber" placeholder="enter new number">
  <input type="text" name="newcomment" placeholder="enter new comment">
  <input type="submit" value="edit">
</form>

<?php
$conn->close();
include ("footer.php");
?>
