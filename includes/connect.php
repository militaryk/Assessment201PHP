<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=kadenadlington_gamespeedrun', 'kadenadlington', 'fxRuyhZrQXo850');
}
catch (PDOException $e)
{
  echo 'Unable to connect to the database server.';
  exit;	
}
?>
