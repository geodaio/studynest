<!DOCTYPE html>

<?php
    $title = "Login";
    include($_SERVER['DOCUMENT_ROOT'] . "/api/php/head.php");
?>
<body id="body-login">
    <section class="flexbox-column">
          <div id="login-sect">
            <a href="api/php/index.php" id="back-to-home"><i class="fa-solid fa-xmark fa-2xl" id="leave-login"></i></a>
            <h2>Login</h2>
            <p>Sign in to continue access</p>
            <form id="form-login">
              <label for="email">Email Address:</label><br>
              <input type="email" id="email" name="email"><br>
              <label for="password">Password:</label><br>
              <input type="password" id="password" name="password"><br>
              <input type="submit" id="login-button" value="Login" onclick="signIn()">
            </form>
            <div id="myDiv"></div>
            <button class="" id="forgot-password" onclick="">Forgot password?</button>
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
