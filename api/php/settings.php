<?php
    $title = "Settings";
    include($_SERVER["DOCUMENT_ROOT"] . "/api/php/head.php");
?>
    <body class="homepage">
        <?php
            include($_SERVER["DOCUMENT_ROOT"] . "/api/php/nav.php");
        ?>

        <section>
            <h2>General</h2>
            <h3>Change Email</h3>
            <h3>Change Password</h3>
            <h3>Delete Account</h3>
        </section>
        
        <section>
            <h2>Profile</h2>
            <h3>Change Header Picture/h3>
            <h3>Change Profile Picture/h3>
            <h3>Edit Username</h3>
            <h3>Edit About Me</h3>
        </section>
        
        <section>
            <h2>Notifications</h2>
            <h3>Push Notifications</h3>
            <h3>Muted Notifications</h3>
        </section>
        
        <section>
            <h2>Privacy</h2>
            <h3>Blocked Accounts</h3>
            <h3>Mark Profile as Private</h3>
            <h3>Hide Online Status</h3>
        </section>
        
        <?php
            include($_SERVER["DOCUMENT_ROOT"] . "/api/php/footer.php");
            include($_SERVER["DOCUMENT_ROOT"] . "/api/php/scripts.php");
        ?>
    </body>
</html>
