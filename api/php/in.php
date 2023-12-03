<?php
  if(isset($_POST['submit'])) {

    $email = trim($_POST("email"));
    $password = trim($_POST("password"));
    
    echo $email;
    echo $password;
    
    include($_SERVER('DOCUMENT_ROOT') . "connect.php");

    $sql = 'SELECT email FROM accounts WHERE email = \'' . $email . '\';';

    $rowcount = $connec->exec($sql);

    echo $rowcount;
    
    if($rowcount != 0){
      $sql = 'SELECT password FROM accounts WHERE email =\'' . $email . '\';';
      $passwordOnFile = $connec->query($sql);

      if (strcmp(string $passwordOnFile, string $password) == 0){
        include($_SERVER('DOCUMENT_ROOT') . "logInOut.js");
        signIn();
      }
      else {
        echo "<p>Incorrect password for this email address. Please enter the password associated with this account, or reset your password.</p>";
      }
    }
    else {
      echo "<p>No account attatched to this email. Please enter a valid email address, or sign up now!</p>";
    }
  }
?>
