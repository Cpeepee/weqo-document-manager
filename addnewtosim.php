<?php
include ("header.php");
?>
<div id="content" style="height: 800px;">
    <div class="add-app-left-side">
        <form name="add-to-sim" action="aaddnewtosim.php" method="POST">
        <label>Name:</label> <input class="style-left-inputs" type="text" id="name" name="name" placeholder="name"><br><br>
        <label>Number:</label> <input class="style-left-inputs" type="text" id="number" name="number" placeholder="09123456789"><br><br>
        <label>Comment:</label> <input class="style-left-inputs" type="text" id="comment" name="comment" placeholder="comment"><br><br>
        <input class="button-style" type="reset" value="Reset">
        <input class="button-style" type="submit" value="Save"><br><br>
      </form>
    </div>
<?php
$conn->close();
include ("footer.php");
?>
