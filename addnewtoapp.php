<?php
include ("header.php");
?>
<div id="content" style="height: 800px;">
    <div class="add-app-left-side">
      <form name="add-to-app" action="aaddnewtoapp.php" method="POST">
        <label> Name: </lable>
        <input class="style-left-inputs" type="text" id="name" name="name" placeholder="name"><br><br>
        <label> Status: </lable>
        <input class="style-left-inputs" type="text" id="status" name="status" placeholder="open"><br><br>
        <label> Version: </lable>
        <input class="style-left-inputs" type="text" id="version" name="version" placeholder="0.0.0"><br><br>
        <label> Open-source: </lable>
        <input class="style-left-inputs" type="text" id="opensource" name="opensource" placeholder="yes/no"><br><br>
        <label> Price: </lable>
        <input class="style-left-inputs" type="text" id="price" name="price" placeholder="$0"><br><br>
        <label> Author mail: </lable>
        <input class="style-left-inputs" type="text" id="authormail" name="authormail" placeholder="test@example.com"><br><br>
        <label> Platform web: </lable>
        <input class="style-left-inputs" type="text" id="pweb" name="pweb" placeholder="yes/no"><br><br>
        <label> Platform linux: </lable>
        <input class="style-left-inputs" type="text" id="plinux" name="plinux" placeholder="yes/no"><br><br>
        <label> Platform windows: </lable>
        <input class="style-left-inputs" type="text" id="pwindows" name="pwindows" placeholder="yes/no"><br><br>
        <label> Platform mac: </lable>
        <input class="style-left-inputs" type="text" id="pmac" name="pmac" placeholder="yes/no"><br><br>
        <label> Platform android: </lable>
        <input class="style-left-inputs" type="text" id="pandroid" name="pandroid" placeholder="yes/no"><br><br>
        <label> Platform ios: </lable>
        <input class="style-left-inputs" type="text" id="pios" name="pios" placeholder="yes/no"><br><br>
        <label> Url download code: </lable>
        <input class="style-left-inputs" type="text" id="urlcode" name="urlcode" placeholder="example.com"><br><br>
        <label> Url download app: </lable>
        <input class="style-left-inputs" type="text" id="urlapp" name="urlapp" placeholder="example.com"><br><br>
        <input class="button-style" type="reset" value="Reset">
        <input class="button-style" type="submit" value="Save"><br><br>
      </form>

<?php
$conn->close();
include ("footer.php");
?>
