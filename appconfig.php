<?php
include ("header.php");
?>

<form action="upload.php" method="post">
    <input type="submit" value="Update preview">
</form>

<form action="uploadother.php" method="post">
  <input type="submit" value="Add new version">
</form>

<?php
$conn->close();
include ("footer.php");
?>
