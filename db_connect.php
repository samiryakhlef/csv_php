<?php
  
 $config = parse_ini_file(__DIR__ . '/config.ini',true);
  try
  {
      $db = new PDO("mysql:host=$config;dbname='$db', $username, $password");
  }
  catch (Exception $e)
  {
          die('Erreur : ' . $e->getMessage());
  }
  ?>
?>