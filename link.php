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
        $sql = "SELECT id_link FROM save";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
          while($row = $result->fetch_assoc())
          {
            $id_from_save = $row["id_link"];
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
          $sql = "SELECT id,tag,url,comment FROM link WHERE id='$id'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0)
          {
            while($row = $result->fetch_assoc())
            {
              $id = $row["id"];
              $tag = $row["tag"];
              $url = $row["url"];
              $comment = $row["comment"];?>
              <div class="links link-<?php echo $id; ?>">
                <p class="link-tag link-tag-<?php echo $id; ?>"><?php echo $tag; ?></p>
                <p class="link-url link-url-<?php echo $id; ?>"><?php echo $url; ?></p>
                <p class="link-comment link-comment-<?php echo $id; ?>"><?php echo $comment; ?></p>
              </div>



              <script>
              $('.link-<?php echo $id; ?>').bind(
              {
                 click: function()
                 {
                    window.open("<?php echo $url; ?>");
                 },
                 mouseenter: function()
                 {
                   $(this).css('cursor', 'pointer');
                 }
               });
              </script>

              <?php
            }
          }

        }
        $conn->close();
        include ("footer.php");
        ?>
