<?php
include ("header.php");

$app_old_name = $_POST["oldname"];
$newversion = $_POST["newversion"];
$newname = $_POST["newname"];
$newstatus = $_POST["newstatus"];
$newmail = $_POST["newmail"];
$newprice = $_POST["newprice"];
$newopensource = $_POST["newopensource"];
$new_p_web = $_POST["newpweb"];
$new_p_linux = $_POST["newplinux"];
$new_p_windows = $_POST["newpwindows"];
$new_p_mac = $_POST["newpmac"];
$new_p_android = $_POST["newpandroid"];
$new_p_ios = $_POST["newpios"];

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$sql = "UPDATE app SET name='$newname',status='$newstatus',version='$newversion',price='$newprice',authormail='$newmail',p_web='$new_p_web',p_linux='$new_p_linux',p_windows='$new_p_windows',p_mac='$new_p_mac',p_android='$new_p_android',p_ios='$new_p_ios' WHERE name='$app_old_name'";
if ($conn->query($sql) === false)
{
  echo "Error deleting record: " . $conn->error;
}
else {
  echo "suscess deleted.";
}


?>
<form action="" method="POST">
  <input type="text" name="oldname" placeholder="enter current name">
  <input type="text" name="newname" placeholder="enter new name">
  <input type="text" name="newstatus" placeholder="enter new status">
  <input type="text" name="newversion" placeholder="enter new version">
  <input type="text" name="newprice" placeholder="enter new price">
  <input type="text" name="newmail" placeholder="enter new mail">
  <input type="text" name="newopensource" placeholder="enter new opensource">
  <input type="text" name="newpweb" placeholder="enter new p_web">
  <input type="text" name="newplinux" placeholder="enter new p_linux">
  <input type="text" name="newpwindows" placeholder="enter new p_windows">
  <input type="text" name="newpmac" placeholder="enter new p_mac">
  <input type="text" name="newpandroid" placeholder="enter new p_android">
  <input type="text" name="newpios" placeholder="enter new p_ios">
  <input type="submit" value="update">
</form>

<?php
$conn->close();
include ("footer.php");
?>
