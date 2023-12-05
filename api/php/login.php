<!DOCTYPE html>

<?php
    $title = "Login";
    include($_SERVER['DOCUMENT_ROOT'] . "/api/php/head.php");
?>
<body id="body-login">
    <section class="flexbox-column">
          <div id="login-sect">
            <button class="" id="leave-login" onclick="backToHome()"><img src="temp" alt="X" title=""></button>
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
                <button class="" id="google-log"><img src="temp" alt="Google" title="Sign in with Google"></button>
                <button id="twitter-log"><img src="temp" alt="Twitter" title="Sign in with X (Formerly Twitter)"></button>
                <button id="fb-log"><img src="temp" alt="Facebook" title="Sign in with Facebook"></button>
            </div>
          </div>
    </section>
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/api/php/scripts.php");
    ?>
</body>
</html>
