<?php
    $db = new mysqli("localhost:8880","root","","demo psee");
    if($db -> connect_error)
    {
        echo $db->connect_error;
    }
    else{
    }
?>
    