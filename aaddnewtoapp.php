<?php
include ("header.php");
?>
<div id="content" style="height: 800px;">
<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}


$newid = "-";
$sql = "SELECT id_app FROM save";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    $newid = $row["id_app"];
  }
}

$newid = ++$newid;
$name = $_POST['name'];
$status = $_POST['status'];
$version = $_POST['version'];
$opensource = $_POST['opensource'];
$price = $_POST['price'];
$authormail = $_POST['authormail'];
$p_web = $_POST['pweb'];
$p_linux = $_POST['plinux'];
$p_windows = $_POST['pwindows'];
$p_mac = $_POST['pmac'];
$p_android = $_POST['pandroid'];
$p_ios = $_POST['pios'];
$url_download_code = $_POST['urlcode'];
$url_download_app = $_POST['urlapp'];

$newdata = "INSERT INTO app (id,name,status,version,opensource,price,authormail,p_web,p_linux,p_windows,p_mac,p_android,p_ios,urlcode,urlapp)
VALUES ('$newid','$name','$status','$version','$opensource','$price','$authormail','$p_web','$p_linux','$p_windows','$p_mac','$p_android','$p_ios','$url_download_code','$url_download_app')";

if ($conn->query($newdata) === TRUE)
{
  echo "New record created successfully<br>";
  $save = "UPDATE save SET id_app='$newid';";
  if ($conn->query($save) === TRUE)
  {
    echo "Record updated successfully";
    ?> <script> gotox("uploadimage"); </script><?php
  }
  else
  {
    echo "Error updating record: " . $conn->error;
  }
}
else
{
  echo "Error: " . $newdata . "<br>" . $conn->error;
}

$conn->close();
include ("footer.php");
?>
