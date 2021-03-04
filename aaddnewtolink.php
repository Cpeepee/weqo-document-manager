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
$sql = "SELECT id_link FROM save";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    $newid = $row["id_link"];
  }
}

$newid = ++$newid;
$tag = $_POST['tag'];
$url = $_POST['url'];
$comment = $_POST['comment'];

$newdata = "INSERT INTO link (id,tag,url,comment)
VALUES ('$newid','$tag','$url','$comment')";

if ($conn->query($newdata) === TRUE)
{
  echo "New record created successfully<br>";
  $save = "UPDATE save SET id_link='$newid';";
  if ($conn->query($save) === TRUE)
  {
    echo "Record updated successfully";
    ?> <script> gotox("link"); </script><?php
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
