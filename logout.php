<?php
   session_start();
   
   if(session_destroy()) {
      header("Location:/FacilityManagement/FacilityManagement/home.php");
   }
   exit();
?>