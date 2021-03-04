<?php
include ("header.php");
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
  die("Connection failed: " . $conn->connect_error);

$name = $_POST['applicationname'];
$appname = $name;
$opensource = "";
$p_web = "";
$p_linux = "";
$p_windows = "";
$p_mac = "";
$p_android = "";
$p_ios = "";

$sql = "SELECT opensource,p_web,p_linux,p_windows,p_mac,p_android,p_ios FROM app WHERE name='$name'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    $opensource = $row["opensource"];
    $p_web = $row["p_web"];
    $p_linux = $row["p_linux"];
    $p_windows = $row["p_windows"];
    $p_mac = $row["p_mac"];
    $p_android = $row["p_android"];
    $p_ios = $row["p_ios"];
    $appname = $name;
    ?>
    <form action = "aappandcodepload.php" method = "POST" enctype = "multipart/form-data">
      <label> app (code/app): </label>
        <input type = "text" class="style-left-inputs" name = "name" value="<?php echo $name;?>"/><br/><br/>
      <?php
      function set_what_to_upload($ver,$platform_type,$app_name,$download_type)
      {
        if($platform_type == "yes" || $platform_type == "Yes")
        {
          mkdir("img/apps/$app_name/download-$download_type/$ver");
          ?>
          <label> <?php echo $ver; echo "-";echo $download_type;?>: </label>
            <input type = "file" name = "<?php echo $ver.$download_type;?>"/><br/><br/><?php
        }
      }
      if($opensource == "yes" || $opensource == "Yes")
      {
        mkdir("img/apps/$appname/download-code");
        set_what_to_upload("web",$p_web,$appname,"code");
        set_what_to_upload("linux",$p_linux,$appname,"code");
        set_what_to_upload("windows",$p_windows,$appname,"code");
        set_what_to_upload("mac",$p_mac,$appname,"code");
        set_what_to_upload("android",$p_android,$appname,"code");
        set_what_to_upload("ios",$p_ios,$appname,"code");
      }

        mkdir("img/apps/$appname/download-app");
        set_what_to_upload("web",$p_web,$appname,"app");
        set_what_to_upload("linux",$p_linux,$appname,"app");
        set_what_to_upload("windows",$p_windows,$appname,"app");
        set_what_to_upload("mac",$p_mac,$appname,"app");
        set_what_to_upload("android",$p_android,$appname,"app");
        set_what_to_upload("ios",$p_ios,$appname,"app");
      ?>
      <br/>
      <input class="button-style" type = "submit"/>
    </form><?php
      }
}
$conn->close();
include ("footer.php");
?>
