<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<?php
 // variable sécurité du password mysql
 $config = parse_ini_file(__DIR__ . '/config.ini',true);
  try
  {
    // connection a mysql methode PDO connection
      $mysqlConnection = new PDO("mysql:host=$config;dbname='$db', $username, $password");
  }
  catch (Exception $e)
  {
          die('Erreur : ' . $e->getMessage());
  }

  $sqlConnection = 'SELECT * FROM people';
  $peopleStatement = $mysqlConnection ->prepare($sqlConnection);
  $peopleStatement->execute();
  $people = $peopleStatement->fetchAll();
  foreach ($people as $person) {}
?>
