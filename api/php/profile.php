<!DOCTYPE html>
<?php
	$title = "Profile";
	include($_SERVER["DOCUMENT_ROOT"] . "/api/php/head.php");
?>

<body id="profilepage">
	<?php
        	include($_SERVER["DOCUMENT_ROOT"] . "/api/php/nav.php");
    	?>
        <section id="profile-sect-1">
            	<div class="flexbox-column">
               		<img src="api/images/SNbackground.jpg" alt="" title="" id="profile-header-img-profile">
			<div class="profilecontainer">
  				<div class="profile-header">
    					<div class="profile-img">
      						<img src="https://picsum.photos/70" width="200" alt="Profile Image">
    					</div>
    					<div class="profile-nav-info">
      						<h3 class="user-name">Bright Code</h3>
      						<div class="address">
        						<p id="state" class="state">New York</p>
      						</div>
  						<div class="buttonsarea">
         						<button id="Useraddress">New York, NY</button>
        						<button id="Twitteruser">Qualisquec.66 </button>
       							<button id="Instagramlink">Qualisquec.66 </button>
   	 					</div>
                			</div>
    					<div class="profile-option">
      						<a href="api/php/messages.php" id="message-user">Message</a>
    						<a href="" id="add-buddy">Connect</a>
   					</div>
  				</div>
  			</div>
		</div>
        </section>
        <section id="profile-section-main">
            	<div class="flexboxprofile">
                	<aside id="profile-section-about">
                    		<h2 id="about">About</h2>
                   		<p id="fast-facts">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    		<div class="flexbox-column" id="fast-facts2">
                        		<div id="uni">
                            			<h3 id="university">University</h3>
                            			<p id="university-name">University at Albany</p>
                        		</div>
                        		<div id="locat">
                            			<h3 id="location">Location</h3>
                            			<p id="location-name">Albany, New York</p>
                        		</div>
                        		<div id="join-profile">
                            			<h3 id="joined">Joined</h3>
                            			<p id="joined-date">August 2023</p>
                        		</div>
                        		<div id="person-contact-info">
                            			<h3 id="contact-info-profile">Contact Information</h3>
                            			<p id="contact-profile-phone">518-123-4567</p>
                            			<p id="contact-profile-email">fakeemail@gmail.com</p>
                       			</div>
                    		</div>
                	</aside>
                	<aside id="study-group-buddy-activity">
                    		<button id="sg" onclick="toSGProfile()">Study Groups</button>
                    		<button id="sb" onclick="toSBProfile()">Study Buddies</button>
                    		<button id="ra" onclick="toRAProfile()">Recent Activity</button>
                    		<div id="profile-section-sg">
                        		<div class="study-group">
                            			<!--START KAT CODE-->
                            			<div class="avatars">
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                            			</div>
                            			<!--END KAT CODE-->
						<h3 class="study-group-name">Study Group</h3>
                            			<p class="study-group-description">Study Group Description Placeholder</p>
                        		</div>
					<div class="study-group">
                            			<!--START KAT CODE-->
                            			<div class="avatars">
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                            			</div>
                            			<!--END KAT CODE-->
						<h3 class="study-group-name">Study Group</h3>
                            			<p class="study-group-description">Study Group Description Placeholder</p>
                        		</div>
					<div class="study-group">
                            			<!--START KAT CODE-->
                            			<div class="avatars">
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                            			</div>
                            			<!--END KAT CODE-->
						<h3 class="study-group-name">Study Group</h3>
                            			<p class="study-group-description">Study Group Description Placeholder</p>
                        		</div>
                        		<div class="study-group">
                            			<!--START KAT CODE-->
                            			<div class="avatars">
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                            			</div>
                            			<!--END KAT CODE-->
						<h3 class="study-group-name">Study Group</h3>
                            			<p class="study-group-description">Study Group Description Placeholder</p>
                        		</div>
                        		<div class="study-group">
                            			<!--START KAT CODE-->
                            			<div class="avatars">
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                                			<span class="avatar">
                                    				<img src="https://picsum.photos/70" alt="temp">
                                			</span>
                            			</div>
                           			<!--END KAT CODE-->
						<h3 class="study-group-name">Study Group</h3>
                            			<p class="study-group-description">Study Group Description Placeholder</p>
                        		</div>
                    		</div>  
                    		<div id="profile-section-sb">
                        		<div class="person">
                				<img src="https://picsum.photos/70" alt="temp" title="" class="pfp-buddy">
                				<div class="person-text">
		                                    <h3 class="first-last-name-buddy">FIRSTNAME LASTNAME</h3>
		                                    <h4 class="username-buddy">@username</h4>
		                                    <p class="degree-buddy">Bachelors Degree in Informatics</p>
		                                    <p class="university-buddy">University at Albany</p>
                				</div>
                        		</div>
					<div class="person">
                				<img src="https://picsum.photos/70" alt="temp" title="" class="pfp-buddy">
                				<div class="person-text">
		                                    <h3 class="first-last-name-buddy">FIRSTNAME LASTNAME</h3>
		                                    <h4 class="username-buddy">@username</h4>
		                                    <p class="degree-buddy">Bachelors Degree in Informatics</p>
		                                    <p class="university-buddy">University at Albany</p>
                				</div>
                        		</div>
					<div class="person">
                				<img src="https://picsum.photos/70" alt="temp" title="" class="pfp-buddy">
                				<div class="person-text">
		                                    <h3 class="first-last-name-buddy">FIRSTNAME LASTNAME</h3>
		                                    <h4 class="username-buddy">@username</h4>
		                                    <p class="degree-buddy">Bachelors Degree in Informatics</p>
		                                    <p class="university-buddy">University at Albany</p>
                				</div>
                        		</div>
            			</div>
				<div id="profile-section-ra">
                        		<p>Check back soon to see recent activity!</p>
                    		</div>
			</aside>
        	</div>
        </section>
        <?php
            include("$_SERVER[DOCUMENT_ROOT]/api/php/scripts.php");
        ?>
    </body>
</html>
