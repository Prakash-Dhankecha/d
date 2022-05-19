<?php
    include("include/connection.php");
    $id = isset($_POST['id'])?$_POST['id']:"";
    $gallery_name = $_POST['gallery_name'];
    $gallery_images = $_POST['gallery_images'];

    $sql = "update gd_gallery_sub set gallery_name = '".$gallery_name."' , gallery_images = '".$gallery_images."' where id =".$id;
    $db->query($sql);
    header("location:index.php");
?>
