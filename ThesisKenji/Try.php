<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload1" id="fileToUpload1">
    <input type="file" name="fileToUpload2" id="fileToUpload2">
    <input type="file" name="fileToUpload3" id="fileToUpload3">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>