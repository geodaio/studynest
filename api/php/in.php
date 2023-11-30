<?php
  if(isset($_POST['submit'])) {
    include($_SERVER["DOCUMENT_ROOT"] . "connect.js");

    $email = trim($_POST("email"));
    $password = trim($_POST("password"));

    pool.query("SELECT * FROM accounts WHERE email = \'" . $email ."\';");
    $rowcount = pool.query("SELECT @@ROWCOUNT");
    if ($rowcount > 0){
      if (pool.query("SELECT userpassword FROM accounts WHERE email = \'" . $email . "\';") == $password){
        pool.query("UPDATE accounts SET online = true WHERE email = \'" . $email . "\';");
        include($_SERVER["DOCUMENT_ROOT"] . "logInOut.js");
        pool.end();
      }
    }
    else {
      echo("<p>No account found for this email!</p>);
    }
  }
?>
