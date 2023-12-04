<?php

  $input = json_decode(file_get_contents('php://input'), true);
  if(isset($_POST['submit'])) {

    $email = trim($input['email']);
    $password = trim($input['password']));
    
    include($_SERVER['DOCUMENT_ROOT'] . "/api/connect.php");

    $sql = 'SELECT email FROM accounts WHERE email = \'' . $email . '\';';

    $rowcount = $connec->exec($sql);

    echo $rowcount;
    
    if($rowcount != 0){
      $sql = 'SELECT password FROM accounts WHERE email =\'' . $email . '\';';
      $passwordOnFile = $connec->query($sql);

      if (strcmp(string $passwordOnFile, string $password) == 0){
        include($_SERVER['DOCUMENT_ROOT'] . "/api/javascript/logInOut.js");
        signIn();
      }
      else {
        var_dump(http_response_code(400));
      }
    }
    else {
      var_dump(http_response_code(404));
    }
  }
?>
