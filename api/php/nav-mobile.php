<div id="mySidenav" class="sidenav">
                <div class="topheader">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="api/php/hub.php" title="Study Hub">Study Hub</a>
                    <a href="api/php/how.php">How it Works</a>
                    <a href="api/php/resources.php">Resources</a>
                    <a href="api/php/about-us.php">About Us</a>
	        <?php
                       	 if (isset($_COOKIE['loggedIn']) && $_COOKIE['loggedIn'] === 'true'){
                                include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-in.php");
                        }
                         else {
                                include($_SERVER['DOCUMENT_ROOT'] . "/api/php/nav-out.php");
                        }
                     ?>
		</div>
</div>
