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

if($con_text == "confirm clear simcard;")
{
  $sql = "DROP TABLE sim";
  if ($conn->query($sql) === false)
  {
    echo "Error deleting record: " . $conn->error;
  }
  else {
    echo "suscess deleted.";
    $sql = "UPDATE save SET id_sim='0'";
    if ($conn->query($sql) === false)
      echo "Error updating id_sim: " . $conn->error;
    else
      echo "suscess id_sim update.";

      $sql = "CREATE TABLE sim (
      id INT(500) PRIMARY KEY,
      name VARCHAR(500),
      number VARCHAR(500),
      comment VARCHAR(500))";
      if ($conn->query($sql) === TRUE) echo "Table sim created successfully";
      else echo "Error creating table: " . $conn->error;
  }
}



?>
<form action="" method="POST">
  <input type="text" name="confirmtext" placeholder="type: confirm clear simcard;">
  <input type="submit" value="clear 4ever">
</form>

<?php
$conn->close();
include ("footer.php");
?>
