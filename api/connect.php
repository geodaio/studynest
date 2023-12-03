<?php
  try {
    $username = process.env.POSTGRES_USER;
    $password = process.env.POSTGRES_PASSWORD;
    $dbhost = process.env.POSTGRES_HOST;
    $dbname= process.env.POSTGRES_DATABASE;
    $connec = new PDO("pgsql:host=$dbhost;dbname=$dbname", $username, $password, array(PDO::ATTR_PERSISTENT => true));
  }
  catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
  }
?>
