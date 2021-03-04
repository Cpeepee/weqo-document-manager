<?php
include ("header.php");
?>
<div id="content" style="height: 800px;">
    <div class="add-app-left-side">
        <form ame="add-to-link" action="aaddnewtolink.php" method="POST">
        <label>Tag:</label> <input class="style-left-inputs" type="text" id="tag" name="tag" placeholder="#tag"><br><br>
        <label>Url:</label> <input class="style-left-inputs" type="text" id="url" name="url" placeholder="www.example.com"><br><br>
        <label>comment:</label> <input class="style-left-inputs" type="text" id="comment" name="comment" placeholder="this is nice"><br><br>
        <input class="button-style" type="reset" value="Reset">
        <input class="button-style" type="submit" value="Save"><br><br>
      </form>
    </div>
<?php
$conn->close();
include ("footer.php");
?>
