<?php session_start(); 
error_reporting(0);
if(isset($_SESSION['username'])=='admin'){

}
else{
    header("Location: logout.php");
}

?>
<?php
$Image1 = $_FILES['fileToUpload1'];
$Image2 = $_FILES['fileToUpload2'];
$Image3 = $_FILES['fileToUpload3'];

$Image = array($Image1, $Image2, $Image3); 
foreach ($Image as $Get) {
$target_dir = "uploads/";
$target_file = $target_dir . basename($Get["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($Get["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}
// Check file size
if ($Get["size"] > 500000) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($Get["tmp_name"], $target_file)) {
        echo "The file ". basename( $Get["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}
}

?>