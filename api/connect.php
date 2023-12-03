<?php
  try {
    $dbuser = 'postgres';
    $dbpass = 'abc123';
    $dbhost = 'localhost';
    $dbname='postgres';
    $connec = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
  }
  catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
  }
</php>
