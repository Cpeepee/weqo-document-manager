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

if($con_text == "confirm clear app;")
{
  $sql = "DROP TABLE app";
  if ($conn->query($sql) === false)
  {
    echo "Error deleting record: " . $conn->error;
  }
  else
  {
    echo "suscess deleted.";
    function deleteDir($path)
    {
        return is_file($path) ?
                @unlink($path) :
                array_map(__FUNCTION__, glob($path.'/*')) == @rmdir($path);
    }
    deleteDir("img/apps");
    $sql = "UPDATE save SET id_app='0'";
    if ($conn->query($sql) === false)
      echo "Error updating id_app: " . $conn->error;
    else
      echo "suscess id_app update.";

   mkdir("img/apps");

    $sql = "CREATE TABLE app (
    id INT(500) PRIMARY KEY,
    name VARCHAR(500),
    version VARCHAR(500),
    status VARCHAR(500),
    price VARCHAR(500),
    opensource VARCHAR(500),
    authormail VARCHAR(500),
    p_web VARCHAR(500),
    p_linux VARCHAR(500),
    p_windows VARCHAR(500),
    p_mac VARCHAR(500),
    p_android VARCHAR(500),
    p_ios VARCHAR(500))";
    if ($conn->query($sql) === TRUE) echo "Table app created successfully";
    else echo "Error creating table: " . $conn->error;
  }
}



?>
<form action="" method="POST">
  <input type="text" name="confirmtext" placeholder="type: confirm clear app;">
  <input type="submit" value="clear 4ever">
</form>

<?php
$conn->close();
include ("footer.php");
?>
