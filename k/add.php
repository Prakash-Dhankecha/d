<?php
session_start();
include('connect.php');

$fullname = $_POST['fullname'];
$id = isset($_POST['id']) ? $_POST['id'] : 0;

$filepath = "file/";
$target_file = $filepath . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["photo"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["photo"]["size"] > 50000000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if (
  $filetype != "jpg" && $filetype != "png" && $filetype != "jpeg"
  && $filetype != "gif"
) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    //   echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

if ($id) {
  $sql = "UPDATE gd_gallery_sub SET 
      fullname = '$fullname',
      photo='$target_file',
      where id = $id";
  $_SESSION['insert'] = "Record Updated Successfully";
  header("location:index.php");
}
$sql = "INSERT INTO gd_gallery_sub(gallery_name,gallery_images) 
    VALUES ('$fullname','$target_file')";
$conn->query($sql);

if ($conn->affected_rows) {
  echo "Record inserted";
  header("location:index.php");
  $_SESSION['insert'] = "Record Inserted Successfully";
} else {
  echo "errpo";
}
