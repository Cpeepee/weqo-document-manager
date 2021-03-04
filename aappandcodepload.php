<?php
include ("header.php");
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
  die("Connection failed: " . $conn->connect_error);


$slash = "/";
$appiname = $_POST["name"];
$appname = $appiname;
$opensource = "";
$p_web = "";
$p_linux = "";
$p_windows = "";
$p_mac = "";
$p_android = "";
$p_ios = "";

$sql = "SELECT opensource,p_web,p_linux,p_windows,p_mac,p_android,p_ios FROM app WHERE name='$appiname'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    $appname = $row["name"];
    $opensource = $row["opensource"];
    $p_web = $row["p_web"];
    $p_linux = $row["p_linux"];
    $p_windows = $row["p_windows"];
    $p_mac = $row["p_mac"];
    $p_android = $row["p_android"];
    $p_ios = $row["p_ios"];
    // echo "variable starts with= ". $appname . " " . $opensource . " " . $p_web . " " . $p_linux . " " . $p_windows . " " . $p_mac . " " . $p_android . " " . $p_ios . "<br>";
  }
}

    $fa = "img/apps/$appiname/";
    // echo "fa address= " . $fa ."<br>";
    function make_ok($ver,$platform_type,$download_type,$fa)
    {
      // echo "make ok starts. <br>";
       if($platform_type == "yes" || $platform_type == "Yes")
       {
         $addresz = $fa."download-".$download_type . "/";
         // echo "im join for move uploaded file to addresz= " . $addresz ."<br>";
         the_upload_file($ver,$platform_type,$addresz,$download_type);
       }
       // echo "make ok end. <br>";
    }

    function the_upload_file($ver,$targetname,$faa,$downloadtype)
    {
      // echo "the upload file starts. <br>";
      if(isset($_FILES[$ver.$downloadtype]))
      {
         $errors= array();
         $file_name = $_FILES[$ver.$downloadtype]['name'];
         $file_tmp = $_FILES[$ver.$downloadtype]['tmp_name'];
         // echo "file_name= " . $file_name . "<br>";
         if(empty($errors)==true)
         {
           $dest_address = $faa. $ver . "/";
           // echo "ver= " . $ver . "<br>";
           // echo "faa= " . $faa . "<br>";
           // echo "dest_address= " . $dest_address . "<br>";
           move_uploaded_file($file_tmp, $dest_address . $file_name);
         }
         else
            print_r($errors);
      }
      // echo "the upload file end.<br>";
    }


    if($opensource == "yes" || $opensource == "Yes")
    {
      // echo "it is opensource and now make it.<br>";
       make_ok("web",$p_web,"code",$fa);
       make_ok("linux",$p_linux,"code",$fa);
       make_ok("windows",$p_windows,"code",$fa);
       make_ok("mac",$p_mac,"code",$fa);
       make_ok("android",$p_android,"code",$fa);
       make_ok("ios",$p_ios,"code",$fa);
    }
    // echo "not opensource part.<br>";
    make_ok("web",$p_web,"app",$fa);
    make_ok("linux",$p_linux,"app",$fa);
    make_ok("windows",$p_windows,"app",$fa);
    make_ok("mac",$p_mac,"app",$fa);
    make_ok("android",$p_android,"app",$fa);
    make_ok("ios",$p_ios,"app",$fa);
    $conn->close();
    include ("footer.php");
    ?>
    <script> gotox("app"); </script>
