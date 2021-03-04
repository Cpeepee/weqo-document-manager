<?php
include ("header.php");

$url_to_edit = $_POST["url"];
$newtag = $_POST["newtag"];
$newurl = $_POST["newurl"];
$newcomment = $_POST["newcomment"];

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$sql = "UPDATE link SET tag='$newtag',url='$newurl',comment='$newcomment' WHERE url='$url_to_edit'";
if ($conn->query($sql) === false)
{
  echo "Error deleting record: " . $conn->error;
}
else {
  echo "suscess deleted.";
}


?>
<form action="" method="POST">
  <input type="text" name="url" placeholder="enter link for edit">
  <input type="text" name="newtag" placeholder="enter new tag">
  <input type="text" name="newurl" placeholder="enter new url">
  <input type="text" name="newcomment" placeholder="enter new comment">
  <input type="submit" value="edit">
</form>

<?php
$conn->close();
include ("footer.php");
?>
