<?php
        include("include/connection.php");
        $id = isset($_GET['id'])?$_GET['id']:"";
        
            $sql = "delete from gd_gallery_sub where id = $id";
            $db -> query($sql);
            
        
        header("location:index.php");
?>
 
