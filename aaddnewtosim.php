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
$sql = "SELECT id_sim FROM save";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    $newid = $row["id_sim"];
  }
}

$newid = ++$newid;
$name = $_POST['name'];
$number = $_POST['number'];
$comment = $_POST['comment'];

$newdata = "INSERT INTO sim (id,name,number,comment)
VALUES ('$newid','$name','$number','$comment')";

if ($conn->query($newdata) === TRUE)
{
  echo "New record created successfully<br>";
  $save = "UPDATE save SET id_sim='$newid';";
  if ($conn->query($save) === TRUE)
  {
    echo "Record updated successfully";
    ?> <script> gotox("simcard"); </script><?php
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
