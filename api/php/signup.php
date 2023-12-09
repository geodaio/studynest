<!DOCTYPE html>

<?php
    $title = "Sign Up";
    include($_SERVER['DOCUMENT_ROOT'] . "/api/php/head.php");
?>
<body id="body-login">
    <section class="flexbox-column">
          <div id="login-sect">
            <a href="api/php/index.php" id="back-to-home"><i class="fa-solid fa-xmark fa-2xl" id="leave-login"></i></a>
            <h2>Sign Up</h2>
            <p>Sign up to gain access</p>
            <form id="form-login">
              <label for="fname">First Name:</label><br>
              <input type="text" id="fname" name="fname"><br>
              <label for="lname">Last Name:</label><br>
              <input type="text" id="lname" name="lname"><br>
              <label for="uname">Username:</label><br>
              <input type="text" id="uname" name="uname"><br>
              <label for="email">Email Address:</label><br>
              <input type="email" id="email" name="email"><br>
              <label for="password">Password:</label><br>
              <input type="password" id="password" name="password"><br>
              <input type="submit" id="login-button" value="Sign Up" onclick="signIn()">
            </form>
          </div>
    </section>
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/scripts.php");
    ?>
</body>
</html>
