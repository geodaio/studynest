<?php
    $title = "Settings";
    include($_SERVER["DOCUMENT_ROOT"] . "/api/php/head.php");
?>
    <body class="homepage">
        <?php
            include($_SERVER["DOCUMENT_ROOT"] . "/api/php/nav.php");
        ?>
        <div id="settings-block">
            <section id="settings-switch">
                <button type="button" onclick="toGen()">General</button>
                <button type="button"  onclick="toProf()">Profile</button>
                <button type="button"  onclick="toNofif()">Notifications</button>
                <button type="button"  onclick="toPriv()">Privacy</button>
            </section>
            
            <section id="gen-settings">
                <h2>General</h2>
                <div id="change-email">
                    <h3>Change Email</h3>
                    <p>Your current email is: </p>
                    <p>fakeemail@gmail.com</p>
                    <label for="newEmail">New Email</label>
                    <input type="email" id="newEmail">
                    <button type="button" id="changeEmailButton">
                </div>
                <div id="change-password"> 
                    <h3>Change Password</h3>
                    <label for="passChange">New Password</label>
                    <input type="text" id="passChange">
                    <button type="button">Change Password</button>
                </div>
                <div id="delete-account"> 
                    <h3>Delete Account</h3>
                    <p>Warning! Deleting your account is a PERMANENT ACTION! Once your account is deleted, it CANNOT BE RECOVERED.</p>
                    <button type="button" onclick="accDelete()">Delete Account</button>
                </div>
            </section>
    
            <section id="prof-settings">
                <h2>Profile</h2>
                <div id="change-hp"> 
                    <h3>Change Header Picture</h3>
                    <input type="file">
                    <button type="button">Upload Image</button>
                </div>
                <div id="change-pfp">
                    <h3>Change Profile Picture</h3>
                    <input type="file">
                    <button type="button">Upload Image</button>
                </div>
                <div id="edit-user">
                    <h3>Edit Username</h3>
                    <p>Your current username is: </p>
                    <p>Qualisquec.66</p>
                    <input type="text">
                    <p>Warning! You can only change your username every 30 days.</p>
                    <button type="button">Change Username</button>
                </div>
                <div id="edit-am">
                    <h3>Edit About Me</h3>
                    <input type="text">
                </div>
            </section>
            
            <section id="notif-settings">
                <h2>Notifications</h2>
                <div id="push-notif">
                    <h3>Push Notifications</h3>
                </div>
                <div id="muted-notif">
                    <h3>Muted Notifications</h3>
                </div>
            </section>
            
            <section id="priv-settings">
                <h2>Privacy</h2>
                <div id="blocked-accounts">
                    <h3>Blocked Accounts</h3>
                </div>
                <div id="priv-profile">
                    <h3>Mark Profile as Private</h3>
                </div>
                <div id="hide-online">
                    <h3>Hide Online Status</h3>
                </div>
            </section>
        </div>
        <?php
            include($_SERVER["DOCUMENT_ROOT"] . "/api/php/footer.php");
            include($_SERVER["DOCUMENT_ROOT"] . "/api/php/scripts.php");
        ?>
    </body>
</html>
