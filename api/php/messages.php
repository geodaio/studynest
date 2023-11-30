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
        <script src="https://kit.fontawesome.com/b32b8e4e05.js" crossorigin="anonymous"></script>
         <script src="https://kit.fontawesome.com/b32b8e4e05.js" crossorigin="anonymous"></script>
</head>
    <body class="messagepage">

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
             <a href="hub.html" title="Study Hub">Study Hub</a>
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

<div class="flexbox">
            <section id="message-section">
            <div id="message-nav">
                    <h2 id="message-header">Messages</h2>
                       <div class="discussions">
          <div id="search-user">
    <input id="search-input" type="text" placeholder="Search..." name="search" class="search">           
        </div>

                                        
  <div class="directmessages">
    <div class="msgsection">
    <div class="person">
      <div class="discussion">
          <div class="photo" style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
            <div class="online"></div>
          </div>
          <div class="desc-contact">
            <p class="name">Megan Leib</p>
            <p class="profilemessage">Ready to chat! Call me.</p>
          </div>
      </div>
   </div>
                         <div class="person">
      <div class="discussion">
          <div class="photo" style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
            <div class="online"></div>
          </div>
          <div class="desc-contact">
            <p class="name">Megan Leib</p>
            <p class="profilemessage">Awesome! I passed too😳</p>
          </div>
      </div>
   </div>
                          <div class="person">
      <div class="discussion">
          <div class="photo" style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
            <div class="online"></div>
          </div>
          <div class="desc-contact">
            <p class="name">Megan Leib</p>
            <p class="profilemessage">Thank you so much! </p>
          </div>
      </div>
   </div>
                      </div>
                        </div>
                
              </div>
                </div>
  <div id="message-right">
     <div class="msgflexbox">
      <section class="chat">
                <div class="header-chat">
                 <img class="profile-pic" src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:64px">
         <div class="online2"></div>
                <div class="person-bio">
                      <p class="selectedname">Name.</p>
                      <p class="activity">John Doe </p>
                
                  </div>
                     <img src="images/more.svg" style="width:40px" alt="three dots icon" class="morebtn">
        </div>
        <div class="messages-chat">
          <div class="message">
            <div class="response">
              <p class="text"> Hey Megan ! It's been a while 😃</p>
            </div>
          </div>
          <div class="message">
            <div class="response">
              <p class="text"> When can we meet ?</p>
            </div>
          </div>
          <p class="response-time time"> 15h04</p>
      
        </div>
        
       </section>
      
</div> 
    <div class='messagecontainer'>
     
      <div class="buttonsend">
              <input class="msginput" type="text" placeholder="Type here">
              <div class="sendbtn">Send</div>
      </div>  
  
       <i class="fa-solid fa-circle-plus fa-2xl" style="color: #293831;"></i>
    </div>
           
                  </div>
           
      </section>   
</div>
    </body>
</html>
