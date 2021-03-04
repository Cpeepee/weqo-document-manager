<?php
include ("header.php");
?>

<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error)
      die("Connection failed: " . $conn->connect_error);

  $id_from_save = 0;
  $sql = "SELECT id_sim FROM save";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
      $id_from_save = $row["id_sim"];
    }
  } else
  {
    echo "0 results";
  }
  $size_for_content = $id_from_save*60;
  $size_for_wall = $size_for_content+400;
  ?>
  <script> set_content_wall_size(<?php echo $size_for_content;?>,<?php echo $size_for_wall;?>); </script>
  <?php


  for($x=0; $x<= $id_from_save; $x++)
  {
    $id = $id+1;
    $sql = "SELECT id,name,number,comment FROM sim WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
        $id = $row["id"];
        $name = $row["name"];
        $number = $row ["number"];
        $comment = $row ["comment"];?>
        <div class="simcard contact-<?php echo $id;?>">
          <p class="contact-name contact-name-<?php echo $id;?>"><?php echo $name; ?></p>
          <p class="contact-number contact-number-<?php echo $id?>"><?php echo $number; ?></p>
          <p class="contact-comment contact-comment-<?php echo $id?>"><?php echo $comment;?></p>
       </div>

       <?php
       }
    }
  }
$conn->close();
include ("footer.php");
?>
