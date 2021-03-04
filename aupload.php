<?php
    include ("header.php");
    $baseaddress = "img/apps/";
    $dirname = $_POST["name-directory-to-make"];
    $slash = "/";
    $fa = $baseaddress . $dirname;
    mkdir($fa);

    $aicon = "icon";
    $apre1 = "preview1";
    $apre2 = "preview2";
    $apre3 = "preview3";
    $apre4 = "preview4";
    $apre5 = "preview5";
    $apre6 = "preview6";
    function upload_image($targetname,$fa)
    {
      $file_name= "";
      if(isset($_FILES[$targetname]))
      {
         $errors= array();
         $file_name = $_FILES[$targetname]['name'];
         $file_size = $_FILES[$targetname]['size'];
         $file_tmp = $_FILES[$targetname]['tmp_name'];
         $file_type = $_FILES[$targetname]['type'];
         if(empty($errors)==true)
         {
           move_uploaded_file($file_tmp, $fa .$file_name);
           if($file_tmp == "" || empty($file_tmp) == true || $file_name == "" || empty($file_name) == true)
           {
               copy("img/apps/previewnotavailable.jpg", $fa . $targetname . ".jpg");
           }
           else
           {
               $ft = substr($file_name, strpos($file_name,"."));
               rename($fa . $file_name, $fa . $targetname . $ft);
           }
         }
         else
         {
           print_r($errors);
         }
      }
    }
      $fa = $fa . $slash;
        upload_image($aicon,$fa);
        upload_image($apre1,$fa);
        upload_image($apre2,$fa);
        upload_image($apre3,$fa);
        upload_image($apre4,$fa);
        upload_image($apre5,$fa);
        upload_image($apre6,$fa);
        ?> <script> gotox("upload-code-and-version"); </script><?php
        $conn->close();
        include ("footer.php");
    ?>
