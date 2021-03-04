<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];
$user = md5($user);
$pass = md5($pass);

$trueusername = "";
$truepassword = "";

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

$sql = "SELECT username,password FROM save";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    $trueusername = $row['username'];
    $truepassword = $row['password'];
  }
}

  if($user == $trueusername && $pass == $truepassword)
  {
      $_SESSION["state_login"] = true;
      $_SESSION["user_type"] = "3e6405ebeb13a7e240de6b5c3c441316"; //a type like admin or something else with a uid
      ?><script> window.location= "index.php";</script><?php
  }
  else
  {
      ?>
      <script> window.location = "login.php"; </script> <?php
  }
  $conn->close();
?>
