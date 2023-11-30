<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" id="favicon"/>
    
    <link rel="stylesheet" type="text/css" href="css/studynest.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=PT+Serif&display=swap" rel="stylesheet"> <!--Previous three links are links for Google Fonts-->

</head>
    <body id="profilepage">
	   <header id="header-out">
      <nav class="navbar flexbox ">
         <div class="header-left">
        <div class="brand-title">
          <a href="index.html"><img src="images/SNLogo.svg" alt="Logo Temp" id="header-logo"></a>
        </div>
        <a href="#" class="toggle-button" onclick="openNav()">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
     <div class="navbar-links">
          <ul>
       <li><a href="hub.html" title="Study Hub">Study Hub</a></li> 
            <li><a href="" title="Temp">How it Works</a></li>
            <li><a href="" title="Temp">Resources</a></li>
            <li><a href="" title="Temp">About Us</a></li>
          </ul>
        </div>
           
           <div id="mySidenav" class="sidenav">
             <div class="topheader">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="#">How it Works</a>
              <a href="#">Resources</a>
              <a href="#">About Us</a>
             <button class="signin2" onclick="toLogin()">Sign In</button>
             <button class="signup2" onclick="">Sign Up</button>
             
           </div>
</div>
        </div>
        
        <div class="header-right">
          
                    <div class="dropdown">
                        <button class="dropdown-button" id="lang"><img src="images/Globe_icon.svg" alt="ALTTEXT" id="dropdown-img">English</button>
                        <div class="lang-options">
                            <a href="" title="English" id="English" onclick="changeLang(this.id)">English</a>
                            <a href="" title="Spanish" id="Spanish" onclick="changeLang(this.id)">Spanish</a>
                            <a href="" title="French" id="French" onclick="changeLang(this.id)">French</a>
                            <a href="" title="German" id="German" onclick="changeLang(this.id)">German</a>
                            <a href="" title="Russian" id="Russian" onclick="changeLang(this.id)">Russian</a>
                        </div>
                    </div>
                    <button class="signin" id="signin" onclick="toLogin()">Sign In</button>
                      <button class="signup" onclick="">Sign Up</button>
                </div>
 
      </nav>
      </header>   
        
        <section id="profile-sect-1">
            <div class="flexbox-column">
               <img src="images/SNbackground.jpg" alt="" title="" id="profile-header-img-profile">
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
      <a href="messages.html" id="message-user">Message</a>
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
                        <!--STUDY GROUP OBJECT TO READ THIS ONE IN?????-->
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
                </aside>
                    <div id="profile-section-sb">
                        <!--NOTE TO SELF: MAKE A BUDDY OBJECT TO MAKE THIS SECTION WORK, BUDDY CONSTRUCTOR IS CALLED FOR LENGTH OF BUDDY ARRAY AFTER BEING READ IN FROM FILE-->
                        <div class="person">
                <img src="https://picsum.photos/70" alt="temp" title="" class="pfp-buddy">
                <div class="person-text">
                                    <h3 class="first-last-name-buddy">FIRSTNAME LASTNAME</h3>
                                    <h4 class="username-buddy">@username</h4>
                                    <p class="degree-buddy">Bachelors Degree in Informatics</p>
                                    <p class="university-buddy">University at Albany</p>
                </div>
                        </div>
                        
                    <div id="profile-section-ra">
                        <p>Check back soon to see recent activity!</p>
                    </div>
             
            </div>
        </div>
        </section>
        
    </body>
</html>