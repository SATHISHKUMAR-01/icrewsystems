<?php

   $conn = mysqli_connect('localhost','root','1234','registration');
   if(mysqli_connect_errno()){
       echo 'Connection_error : '.mysqli_connect_error();
   }

?>