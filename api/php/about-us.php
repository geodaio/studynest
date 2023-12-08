<!DOCTYPE html>
<?php
    $title = "About Us";
    include($_SERVER["DOCUMENT_ROOT"] . "/api/php/head.php");
?>
    <body class="homepage">
        <?php
            include($_SERVER["DOCUMENT_ROOT"] . "/api/php/nav.php");
        ?>
        <div id="how-page">
            <h1>Welcome to Study Nest</h1>
            
            <h2>What is Study Nest?</h2>
            <p>Etiam sodales maximus dui, vel tristique neque luctus et. Donec sem nunc, scelerisque ac varius hendrerit, rutrum in urna. Sed sit amet arcu finibus, vestibulum orci nec, volutpat metus. Nulla facilisi. Nulla ultricies facilisis feugiat. Ut sagittis neque ex, sed posuere purus condimentum vitae.</p>
            
            <h2>How did Study Nest Come to Be?</h2>
            <p>Donec elementum consequat justo, ac hendrerit justo. Etiam leo ante, rhoncus eget sem nec, rutrum tincidunt nibh. Nulla fringilla semper diam, ac varius mauris. Aliquam euismod tincidunt justo sed luctus. Mauris quis bibendum orci, ac aliquet metus. Aliquam erat volutpat. Donec viverra ligula nec rhoncus aliquam. </p>
            
            <h2>Who created Study Nest?</h2>
            <p>Suspendisse at nunc fermentum, consectetur dui non, mattis elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque et consequat arcu. Duis hendrerit faucibus vehicula. Vivamus iaculis nibh eget velit malesuada semper.</p>
            
            <h2>How does Study Nest Work?</h2>
            <h3>Local</h3>
            <p>Maecenas iaculis nisi sed augue condimentum vehicula. Nunc commodo nibh in elit accumsan molestie.</p>
            <h3>Global</h3>
            <p>Donec bibendum in dui quis vehicula. Aenean ultrices pulvinar diam, non vestibulum lacus faucibus at. </p>
    
            <h3>So, what are you waiting for? Sign up for Study Nest today!</h3>
            <button type="button" id="">Sign Up Today!</button>
        </div>
        <?php
            include($_SERVER["DOCUMENT_ROOT"] . "/api/php/footer.php");
            include($_SERVER["DOCUMENT_ROOT"] . "/api/php/scripts.php");
        ?>
    </body>
</html>
