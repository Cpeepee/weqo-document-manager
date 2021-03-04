<?php
include ("header.php");
?>
      <form action = "aupload.php" method = "POST" enctype = "multipart/form-data">
        <label> App name:</label>
         <input type = "text" class="style-left-inputs direcotry-name-to-upload" name = "name-directory-to-make" placeholder="directory"/><br/><br/>
         <label> Icon: </label>
         <input type = "file" name = "icon"/><br/><br/>
         <label> Preview Image 1: </label>
         <input type = "file" name = "preview1"/><br/><br/>
         <label> Preview Image 2: </label>
         <input type = "file" name = "preview2"/><br/><br/>
         <label> Preview Image 3: </label>
         <input type = "file" name = "preview3"/><br/><br/>
         <label> Preview Image 4: </label>
         <input type = "file" name = "preview4"/><br/><br/>
         <label> Preview Image 5: </label>
         <input type = "file" name = "preview5"/><br/><br/>
         <label> Preview Image 6: </label>
         <input type = "file" name = "preview6"/><br/><br/>
         <input class="button-style" type = "submit"/>
      </form>
<?php
$conn->close();
include ("footer.php");
?>
