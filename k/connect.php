<?php
   $conn =new  mysqli("localhost","root","","pseedemo");
   if ($conn->connect_errno){
       echo "connection fail".$conn->connect_errno;
   }

?>