<div class="header-left">
            <div class="brand-title">
              <a href="index.html"><img src="api/images/SNLogo.php" alt="Logo that says StudyNest" id="header-logo"></a>
            </div>
            <a href="#" class="toggle-button" onclick="openNav()">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
             <div class="navbar-links">
              <ul>
                <li><a href="api/php/hub.php" title="Study Hub">Study Hub</a></li> 
                <li><a href="api/php/how.php" title="Temp">How it Works</a></li>
                <li><a href="api/php/resources.php" title="Temp">Resources</a></li>
                <li><a href="api/php/about-us.php" title="Temp">About Us</a></li>
              </ul>
            </div>
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
</div>
