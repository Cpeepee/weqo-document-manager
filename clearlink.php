<?php
include ("header.php");

$con_text = $_POST["confirmtext"];

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

if($con_text == "confirm clear link;")
{
  $sql = "DROP TABLE link";
  if ($conn->query($sql) === false)
  {
    echo "Error deleting record: " . $conn->error;
  }
  else {
    echo "suscess deleted.<br>";
    $sql = "UPDATE save SET id_link='0'";
    if ($conn->query($sql) === false)
      echo "Error updating id_link: " . $conn->error;
    else
      echo "suscess id_link update. <br>";

      $sql = "CREATE TABLE link (
      id INT(500) PRIMARY KEY,
      tag VARCHAR(500),
      url VARinclude ("footer.php");CHAR(500),
      comment VARCHAR(500))";
      if ($conn->query($sql) === TRUE) echo "Table link created successfully";
      else echo "Error creating table: " . $conn->error;
  }
}



?>
<form action="" method="POST">
  <input type="text" name="confirmtext" placeholder="type: confirm clear link;">
  <input type="submit" value="clear 4ever">
</form>

<?php
$conn->close();
include ("footer.php");
?>
