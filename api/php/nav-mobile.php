<div id="mySidenav" class="sidenav">
                <div class="topheader">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="api/php/hub.php" title="Study Hub">Study Hub</a>
                    <a href="api/php/how.php">How it Works</a>
                    <a href="api/php/resources.php">Resources</a>
                    <a href="api/php/about-us.php">About Us</a>
	        <?php
                       	 if (isset($_COOKIE['loggedIn']) && $_COOKIE['loggedIn'] === 'true'){
				echo '<a href="api/php/profile.php" title="" id="profile-drop-header">Profile</a>';
				echo '<a href="api/php/messages.php" title="" id="messages-header">Messages</a>';
				echo '<a href="api/php/settings.php" title="" id="settings-header">Settings</a>';
				echo '<a href="#" title="" id="log-out-header" onclick="signOut()">Log Out</a>';
                        }
                         else {
                               echo '<a href="#" title="" onclick="signIn()">Sign In</a>';
				echo '<a href="#" title="" onclick="toQNA()">Sign Up</a>';
                        }
                     ?>
		</div>
</div>
