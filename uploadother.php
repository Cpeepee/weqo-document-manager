<?php
include ("header.php");
?>
      <form action = "auploadother.php" method = "POST" enctype = "multipart/form-data">
        <label> App name 1:</label>
         <input type = "text" class="style-left-inputs" name = "applicationname" placeholder="enter app name"/><br/><br/>
         <input class="button-style" type = "submit"/>
      </form>
<?php
$conn->close();
include ("footer.php");
?>
