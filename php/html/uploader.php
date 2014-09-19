<?php
$dir = "/pictures/";
$path = $_FILES['uploadedfile']['name'];
$info     = pathinfo($path);
$filename = $info['filename'];
$ext      = $info['extension'];
$picid   = md5($filename.$now);
$url  = $dir.$picid.".".$ext;
$target_path = "static".$url;

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
    echo "The file ".basename($_FILES['uploadedfile']['name'])." has been uploaded";
} else {
    echo "There was an error uploading the file, please try again!";
}

?>