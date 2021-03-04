<?php
include ("header.php");

$appname_2_remove = $_POST["appname"];
$appversion_2_remove = $_POST["appversion"];
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$sql = "DELETE FROM app WHERE name='$appname_2_remove' AND version='$appversion_2_remove'";
if ($conn->query($sql) === false)
{
  echo "Error deleting record: " . $conn->error;
}
else
{
  echo "suscess deleted.<br>";
  function deleteDir($path)
  {
      return is_file($path) ?
              @unlink($path) :
              array_map(__FUNCTION__, glob($path.'/*')) == @rmdir($path);
  }
  if(strlen($appname_2_remove) >= 1)
  {
    $remove_address = "./img/apps/" . $appname_2_remove;
    deleteDir($remove_address);
  }
  else
  {
    echo "the target not found, the bug stopped for remove /apps/<br>";
  }
}

?>

<form action="" method="post">
  <input type="text" name="appname" placeholder="enter app name for del">
  <input type="text" name="appversion" placeholder="enter version for del">
  <input type="submit" value="remove">
</form>
<?php
$conn->close();
include ("footer.php");
?>
