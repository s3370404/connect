<?php
require_once('db.php');
try{
   $db = new PDO (
      "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" .
      DB_NAME, DB_USER, DB_PW
   );

   // How can you change the sql query below to a prepared statement?
   $sql = "select region_id, region_name from region";

   foreach ($db -> query ($sql) as $row) {
      print $row['region_id'].' - '. $row['region_name'] . '<br />';
   }
   $db = null; // close the database connection
} catch (PDOException $e){
   echo $e -> getMessage();
}
?>
