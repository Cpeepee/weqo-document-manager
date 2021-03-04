<?php
session_start();
if(isset($_SESSION["user_type"]) && $_SESSION["user_type"] === "3e6405ebeb13a7e240de6b5c3c441316")
{
  if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
  {

  }
}
else {
  ?>
  <script> window.location = "login.php"; </script><?php

}
?>
<!-- current version r1.0.1-->
<!DOCTYPE html>
<html>
<head>
<noscript><meta http-equiv="refresh" content="0;url=bye.php"></noscript>
  <link rel="icon" href="img/icon.png">
  <title> my-doc </title>
  <link rel="stylesheet" href="css/main.css">
   <script src="js/jquery.js"></script>
  <script src="js/main.js"></script>
</head>
  <body>
      <div id="wall" style="height: 1200px;">
          <img class="dontselectme" id="logo" src="img/logo.png" alt="logo">

          <div class="dontselectme" id="menu">
              <div class="menu-item menu-item-0"> Code <img class="menu-icon" src="img/icons/code.png"></div>
              <div class="menu-item menu-item-1"> Link <img class="menu-icon" src="img/icons/link.png"></div>
              <div class="menu-item menu-item-2"> Simcard <img class="menu-icon" src="img/icons/simcard.png"></div>
              <div class="menu-item menu-item-3"> Manage <img class="menu-icon" src="img/icons/box.png"></div>
              <div class="menu-manage menu-item-4">add-link</div>
              <div class="menu-manage menu-item-5">add-sim</div>
              <div class="menu-manage menu-item-6">add-app</div>
          </div>

          <div id="main-slider">
            <img class="dontselectme image-slider" src="img/slider/3.jpg">
            <?php
            $servername = "localhost";
            $username = "";
            $password = "";
            $dbname = "";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error)
                die("Connection failed: " . $conn->connect_error);

            $sql = "SELECT title,text FROM board";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
              while($row = $result->fetch_assoc())
              {
                $title = $row["title"];
                $text = $row["text"];
              }

            ?>
            <h1 class="title-slider"><?php echo $title; ?></h1>
            <p class="text-slider"><?php echo $text; ?></p>
          </div>

          <div id="content" style="height: 800px;">
