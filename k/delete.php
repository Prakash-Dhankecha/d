<?php 
    include "connect.php";
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    echo"$id";
    $sql ="UPDATE gd_gallery_sub SET isdelete = 1 WHERE id=$id";
    $conn->query($sql);


?>