<?php
$target_path = "static/pictures/";
$path = $_FILES['uploadedfile']['name'];
$target_path = $target_path.basename($path);

$info     = pathinfo($path);
$filename = $info['filename'];
$ext      = $info['extension'];

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
    echo "The file ".basename($_FILES['uploadedfile']['name'])." has been uploaded";
} else {
    echo "There was an error uploading the file, please try again!";
}

?>