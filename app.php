<?php
include ("header.php");

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error)
                die("Connection failed: " . $conn->connect_error);

            $id_from_save = 0;
            $sql = "SELECT id_app FROM save";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {
                $id_from_save = $row["id_app"];
              }
            }
            else
            {
              echo "0 results";
            }

            $sec = $id_from_save/5;
            if($sec <= 0)
             $sec = $sec ;
            else
               $sec = $sec+0.4;
            $sec = round($sec,0,PHP_ROUND_HALF_UP);
            $sec = $sec* 305;
            $size_for_content = $sec;
            $size_for_wall = $size_for_content+400;
            ?>
              <script> set_content_wall_size(<?php echo $size_for_content;?>,<?php echo $size_for_wall;?>); </script>

               <!-- app-show   change content height to 600px -->
           <div class="dontselectme closer-itemshow"> </div>
               <div class="dontselectme item-show item-0">
                   <img id="slider-show-app" class="dontselectme" src="">
                   <p id="appname-dom" class="dontselectme" style="color:transparent;width:0px;height:0px;position:absolute;"></p>
                   <p id="appstatus-dom" class="dontselectme" style="color:transparent;width:0px;height:0px;position:absolute;"></p>
                   <p id="appcurrent-dom" class="dontselectme" style="color:transparent;width:0px;height:0px;position:absolute;"></p>
                   <p id="download-dom" class="dontselectme" style="color:transparent;width:0px;height:0px;position:absolute;"></p>



                   <div id="slider-manager-app">
                     <div id="slider-right-app"> <h3 class="dontselectme slider-right-text"> > </h3> </div>
                     <div id="slider-left-app"> <h3 class="dontselectme slider-left-text"> < </h3></div>
                   </div>
                  <img class="item-image-show item-image-0" src="img/apps/code.png">
                  <p class="item-text-show item-text-0">
                    Name: <span id="name-app">Management</span><br/>
                    Price: <span id="price-app">$10</span><br/>
                    Status: <span id="status-app">working on</span><br/>
                    Version: <span id="version-app">6.2.3</span><br/>
                    Author mail: <a id="author-mail-app" href="mailto:research@senioradministrator.com"> send mail</a><br/>
                    Open-source: <span id="opensource-app">Yes</span><br/>
                    <span id="platforms-app">Platforms:</span>
                    <img class="platform-icon-show platform-web-app-show" src="img/platforms/web.png">
                    <img class="platform-icon-show platform-windo-app-show" src="img/platforms/windows.png">
                    <img class="platform-icon-show platform-linux-app-show" src="img/platforms/linux.png">
                    <img class="platform-icon-show platform-mac-app-show" src="img/platforms/mac.png">
                    <img class="platform-icon-show platform-android-app-show" src="img/platforms/android.png">
                    <img class="platform-icon-show platform-ios-app-show" src="img/platforms/ios.png">
                  </p>
                  <div id="download-app"><p class="text-download-button">Download App</p></div>
                    <div id="download-code"><p class="text-download-button">Download Code</p></div>
                  <img id="icon-close-item-show" src="img/icons/close.png">
              </div>

            <?php


            for($x=0; $x<= $id_from_save; $x++)
            {
              $id = $id+1;
              $sql = "SELECT id,name,status,version,opensource,price,authormail,p_web,p_linux,p_windows,p_mac,p_android,p_ios,urlcode,urlapp FROM app WHERE id='$id'";
              $result = $conn->query($sql);
              if ($result->num_rows > 0)
              {
                while($row = $result->fetch_assoc())
                {
                    $id = $row["id"];
                    $name = $row["name"];
                    $status = $row["status"];
                    $version = $row["version"];
                    $opensource = $row["opensource"];
                    $price = $row["price"];
                    $authormail = $row["authormail"];
                    $p_web = $row["p_web"];
                    $p_linux = $row["p_linux"];
                    $p_windows = $row["p_windows"];
                    $p_mac = $row["p_mac"];
                    $p_android = $row["p_android"];
                    $p_ios = $row["p_ios"];
                    $url_download_code = $row["urlcode"];
                    $url_download_app = $row["urlapp"];
                    $slash = "/";
                    ?>
                    <div class="item item-<?php echo $id; ?>">
                      <script>
                      var web,lin,win,mac,ios,andr;
                            $('.item-<?php echo $id; ?>').bind(
                            {
                               click: function()
                               {
                                $('.item-show').css('visibility', 'visible');
                                $('.closer-itemshow').css('visibility', 'visible');
                                //set data



                                <?php
                                $icon_format = "nan";
                                $icon_name = "icon";
                                if(file_exists("img/apps/$name/icon.png") == true)
                                     $icon_format = "png";
                                else if(file_exists("img/apps/$name/icon.jpg") == true)
                                     $icon_format = "jpg";
                                else if(file_exists("img/apps/$name/icon.jpeg") == true)
                                     $icon_format = "jpeg";
                                else
                                {
                                  $icon_name = "notfound";
                                  $icon_format = "jpeg";
                                }


                                if($icon_name == "notfound" && $icon_format == "jpeg")
                                {?>
                                  $('.item-image-0').attr('src', 'img/apps/<?php echo $icon_name;?>.<?php echo $icon_format;?>');
                                  <?php
                                }
                                else
                                {?>
                                  $('.item-image-0').attr('src', 'img/apps/<?php echo $name; echo $slash; echo $icon_name;?>.<?php echo $icon_format;?>');
                                    <?php
                                }
                                ?>


                                   document.getElementById("name-app").innerHTML = "<?php echo $name;?>" ;
                                   document.getElementById("appname-dom").innerText = "<?php echo $name;?>/";
                                   document.getElementById("appstatus-dom").innerText = "enable";
                                   document.getElementById("appcurrent-dom").innerText = "1";
                                   document.getElementById("download-dom").innerText = "<?php echo $name;?>";


                                   $('#slider-show-app').attr('src', 'img/apps/<?php echo $name; echo $slash;?>preview1.jpg');
                                    $("#slider-right-app").css('visibility', 'visible');
                                    $("#slider-left-app").css('visibility', 'hidden');


                                   document.getElementById("price-app").innerHTML = "<?php echo $price; ?>";
                                   document.getElementById("status-app").innerHTML = "<?php echo $status; ?>";
                                   document.getElementById("version-app").innerHTML = "<?php echo $version; ?>";
                                   document.getElementById("author-mail-app").href = "mailto:<?php echo $authormail; ?>";
                                   document.getElementById("opensource-app").innerHTML = "<?php echo $opensource; ?>";
                                   web = "<?php echo $p_web;?>";
                                   lin = "<?php echo $p_linux;?>";
                                   win = "<?php echo $p_windows;?>";
                                   mac = "<?php echo $p_mac;?>";
                                   ios = "<?php echo $p_ios;?>";
                                   andr = "<?php echo $p_android;?>";
                                   check_platforms_to_show(web,lin,win,mac,ios,andr);
                                   check_opensource_for_dl_button('<?php echo $opensource;?>');
                               },
                               mouseenter: function()
                               {
                                 $(this).css('cursor', 'pointer');
                               }
                             });
                      </script>
                      <?php
                        if(file_exists("img/apps/$name/icon.png") == true || file_exists("img/apps/$name/icon.jpg") == true || file_exists("img/apps/$name/icon.jpeg") == true)
                        {?>
                          <img class="item-image dontselectme item-image-<?php echo $id; ?>" src="img/apps/<?php echo $name; echo $slash;?>icon.png">
                          <?php
                        }

                        else
                        {?>
                          <img class="item-image dontselectme item-image-<?php echo $id; ?>" src="img/apps/notfound.jpeg">
                          <?php
                        }?>

                        <p class="item-text dontselectme item-text-<?php echo $id; ?>">
                          Name: <span id="name-app"><?php echo $name; ?></span><br/>
                          Status: <span id="status-app"><?php echo $status; ?></span><br/>
                          Version: <span id="version-app"> <?php echo $version; ?></span><br/>
                          Open-source: <span id="opensource-app"><?php echo $opensource;?></span><br/>
                          Platforms:
                          <?php
                          $yes = "yes"; $Yes = "Yes";
                          $no = "no"; $No = "No";
                          if($p_web == $yes || $p_web == $Yes)
                          {?>
                            <img class="platform-icon platform-web-app" src="img/platforms/web.png">
                            <?php
                          }
                          if($p_windows ===  $yes || $p_windows === $Yes)
                          {?>
                            <img class="platform-icon platform-windows-app" src="img/platforms/windows.png">
                            <?php
                          }
                          if($p_linux === $yes || $p_linux === $Yes)
                          {?>
                            <img class="platform-icon platform-linux-app" src="img/platforms/linux.png">
                            <?php
                          }
                          if($p_mac == "Yes" || $p_mac == "yes")
                          {?>
                            <img class="platform-icon platform-mac-app" src="img/platforms/mac.png">
                            <?php
                          }
                          if($p_android == "Yes" || $p_android == "yes")
                          {?>
                            <img class="platform-icon platform-android-app" src="img/platforms/android.png">
                            <?php
                          }
                          if($p_ios == "Yes" || $p_ios == "yes")
                          {?>
                            <img class="platform-icon platform-ios-app" src="img/platforms/ios.png">
                            <?php
                          }?>
                        </p>
                    </div>
                    <?php
                }
              }

            }
            $conn->close();
            include ("footer.php");
            ?>
