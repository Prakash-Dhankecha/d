<?php
    include("include/connection.php");
    $gallery_name=isset($_POST['gallery_name'])?$_POST['gallery_name']:"";
    $gallery_images=isset($_POST['gallery_images'])?$_POST['gallery_images']:"";
    $sql = "insert into gd_gallery_sub(gallery_name,gallery_images)values('$gallery_name','$gallery_images')";
    $db->query($sql);
    header("location:index.php");
?>