<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'spa';
 
 $db = mysqli_connect( $db_host, $db_user, $db_password, $db_db)
 or die( "error connect" . msqli_error($db)) ;
 mysqli_set_charset($db, "utf8");
 

  //$mysqli->close();
?>