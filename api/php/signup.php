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
              <input type="fname" id="fname" name="fname"><br>
              <label for="lname">Last Name:</label><br>
              <input type="lname" id="lname" name="lname"><br>
              <label for="username">Username:</label><br>
              <input type="username" id="username" name="username"><br>
              <label for="email">Email Address:</label><br>
              <input type="email" id="email" name="email"><br>
              <label for="password">Password:</label><br>
              <input type="password" id="password" name="password"><br>
              <input type="submit" id="login-button" value="Login" onclick="signIn()">
            </form>
            <div id="myDiv"></div>
            <button class="" id="forgot-password" onclick="">Have an account? Sign In!</button>
            <div id="button-log">
                <a href="#"><i class="fa-brands fa-google fa-xl"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-square-facebook fa-xl"></i></a>
            </div>
          </div>
    </section>
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/scripts.php");
    ?>
</body>
</html>
