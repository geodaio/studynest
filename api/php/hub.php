<!-- Study hub Page -->
<!-- Katherine Cajamarca -->
<!-- INF 362 -->
<!DOCTYPE html>
<html class="hubpage" lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Study Hub</title>
	<link rel="stylesheet" href="css/studynest.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=PT+Serif&display=swap" rel="stylesheet"> <!--Previous three links are links for Google Fonts-->
</head>
<body class="studyhub">
    <!--Insert Nav bar here -->
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
             <button class="signin2"  onclick="toLogin()">Sign In</button>
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
    <!-- -->

<div class="container">
   	<div class="row main">
    <div class="left">
    	<!-- Banner for studyhub -->
       <div class="row details">
        <h1>Study Hub</h1>
        <p>Tailor your search to meet your specific criteria and connect with like-minded learners who share your academic goals.</p>
        <form role="search" id="form">
		<input type="search" id="query" name="q" placeholder="Search..." aria-label="Search through site content">
		<button id="formButton">
		<svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg>
		 </button>
     	</form>
     	<div class="style2">
     	<a href="questionaire.html" class="btn2">Find Study Buddy</a>
        <a href="" class="btn3">Find Study Group</a>
    	</div>
    	</div>
    </div>
	</div>
	<!-- Running text-->
   <div class="right">
  <section id="quote">
                <!--KAT CODE-->
                <div class="right">
                 <div class="row scrolling_text">
                        <div class="runningtext">
                        <span>Study Together</span>
                        <img src="images/unicon.svg" alt="Graduation Cap">
                        <span>Study Together</span>
                         <img src="images/unicon.svg" alt="Graduation Cap">
                        <span>Study Together</span>
                         <img src="images/unicon.svg" alt="Graduation Cap">
                        <span>Study Together</span>
                         <img src="images/unicon.svg" alt="Graduation Cap">
                        <span>Study Together</span>
                        </div>
                        <div class="runningtext">
                         <span>Study Together</span>
                          <img src="images/unicon.svg" alt="Graduation Cap">
                        <span>Study Together</span>
                         <img src="images/unicon.svg" alt="Graduation Cap">
                        <span>Study Together</span>
                         <img src="images/unicon.svg" alt="Graduation Cap">
                        <span>Study Together</span>
                         <img src="images/unicon.svg" alt="Graduation Cap">
                        <span>Study Together</span>
                        </div>
                    </div>
                    </div>
                <!--END KAT CODE-->
       
        </section>
	</div>
	<!--Carousel in progress of Study Buddies looking for pals-->
	<div class="row main2">
		<h2 class="heading3">Looking for study buddies</h2>
		<div class="nearyou">
		<div class="card">
			  <img src="images/student2.jpg" alt="John" style="width:100%">
			  <h3 class="studentname">Student Name</h3>
			   <div class="cardcontent">
			  <p class="title">@ Informatics</p>
			  <p>Calculus 1 course</p>
			  <div style="margin: 24px 0;">
			    <a href="#"><i class="fa fa-dribbble"></i></a> 
			    <a href="#"><i class="fa fa-twitter"></i></a>  
			    <a href="#"><i class="fa fa-linkedin"></i></a>  
			    <a href="#"><i class="fa fa-facebook"></i></a> 
			  </div>
			  <p><button id="get-started1">Message</button></p></div>
		</div>

		<div class="card">
			  <img src="images/student1.jpg" alt="John" style="width:100%">
			  <h3 class="studentname">Student Name</h3>
			   <div class="cardcontent">
			  <p class="title">@ Computer Science</p>
			  <p>Mobile Computing course</p>
			  <div style="margin: 24px 0;">
			    <a href="#"><i class="fa fa-dribbble"></i></a> 
			    <a href="#"><i class="fa fa-twitter"></i></a>  
			    <a href="#"><i class="fa fa-linkedin"></i></a>  
			    <a href="#"><i class="fa fa-facebook"></i></a> 
				</div>
			  <p><button id="get-started2">Message</button></p></div>
		</div>

		<div class="card">
			  <img src="images/student4.jpg" alt="John" style="width:100%">
			  <h3 class="studentname">Student Name</h3>
			   <div class="cardcontent">
			  <p class="title">@ Cybersecurity</p>
			  <p>Networking and Security course</p>
			  <div style="margin: 24px 0;">
			    <a href="#"><i class="fa fa-dribbble"></i></a> 
			    <a href="#"><i class="fa fa-twitter"></i></a>  
			    <a href="#"><i class="fa fa-linkedin"></i></a>  
			    <a href="#"><i class="fa fa-facebook"></i></a> 
			  </div>
			  <p><button id="get-started3">Message</button></p></div>
		</div>

		<div class="card">
			  <img src="images/student6.jpg" alt="John" style="width:100%">
			  <h3 class="studentname">John Doe</h3>
			  <div class="cardcontent">
			  <p class="title">@ Cybersecurity </p>
			  <p>Computer Security Basics course</p>
			  <div style="margin: 24px 0;">
			    <a href="#"><i class="fa fa-dribbble"></i></a> 
			    <a href="#"><i class="fa fa-twitter"></i></a>  
			    <a href="#"><i class="fa fa-linkedin"></i></a>  
			    <a href="#"><i class="fa fa-facebook"></i></a> 
			  	</div>
			  <p><button id="get-started">Message</button></p></div>
		</div>
		</div>
			<div class="pagcontainer">
				    <div class="pagination p1">
				        <a href="#"> &lt; </a>
				        <a class="is-active" href="#">1</a>
				        <a href="#">2</a>
				        <a href="#">3</a>
				        <a href="#">4</a>
				        <a href="#">5</a>
				        <a href="#">6</a>
				        <a href="#"> &gt; </a>
				      
				  </div>
			</div>

	<h2 class="heading3">Active Study Groups </h2>
<!--Trending study communities-->
	<div class="nearyou2">
	 	<div class="cardtype" id="#grad2">
     	<div class="row">
		<div class="avatars">
			<span class="avatar">
			<img src="https://picsum.photos/70" alt="Profile picture on front">
			</span>
			<span class="avatar">
			<img src="https://picsum.photos/70" alt="Profile picture on middle">
			</span>
			<span class="avatar">
			<img src="https://picsum.photos/70" alt="Profile picture on back">
			</span>
		</div>
		<h4> IT Majors </h4>
		<p> Placeholder for GC Bio </p>
		</div>
		</div>
 	 	<div class="cardtype">
    	<div class="row">
		<div class="avatars">
			<span class="avatar">
			<img src="https://picsum.photos/70" alt="Profile picture on front">
			</span>
			<span class="avatar">
			<img src="https://picsum.photos/70" alt="Profile picture on middle">
			</span>
			<span class="avatar">
			<img src="https://picsum.photos/70" alt="Profile picture on back">
			</span>
		</div>
		<h4> Uni of Albany</h4><p> Placeholder for GC Bio </p>
		</div>
		</div>
        <div class="cardtype">
     	<div class="row">
		<div class="avatars">
			<span class="avatar">
			<img src="https://picsum.photos/70" alt="Profile picture on front">
			</span>
			<span class="avatar">
				<img src="https://picsum.photos/70" alt="Profile picture on middle">
			</span>
			<span class="avatar">
				<img src="https://picsum.photos/70" alt="Profile picture on back">
			</span>
		</div>
		<h4> The Freshmans </h4><p> Placeholder for GC Bio </p>
		</div>
		</div>
        
     <div class="cardtype">
     	<div class="row">
		<div class="avatars">
			<span class="avatar">
			<img src="https://picsum.photos/70" alt="Profile picture on front">
			</span>
			<span class="avatar">
			<img src="https://picsum.photos/70" alt="Profile picture on middle">
			</span>
			<span class="avatar">
			<img src="https://picsum.photos/70" alt="Profile picture on back">
			</span>
		</div>
		<h4> Grad Students hub </h4><p> Placeholder for GC Bio </p>
		</div>
	</div>
	</div>
	<h2 class="heading4">Study Nest Leaderboard</h2>
	<p>Lorem ipsum dolor sit amet, inani labores persequeris pri ut, ex sit primis necessitatibus.</p>


	<div class="flex-container">
  <div class="flex-item-left">
  <div class="personcontainer">
  <div class="userboard">
  <p class="rank"> 1</p>
  <img src="images/student9.jpg"  alt="Avatar" style="width:56px">
  <p class="name">Vijaya R</p>
  <p class="points">409 hours</p>
 </div>
</div>

<div class="personcontainer">
  <div class="userboard">
  <p class="rank"> 2</p>
  <img src="images/student2.jpg"  alt="Avatar" style="width:56px">
  <p class="name">Shah M</p>
  <p class="points">380 hours</p>
 </div>
</div>

<div class="personcontainer">
  <div class="userboard">
  <p class="rank"> 3</p>
  <img src="images/student5.jpg"  alt="Avatar" style="width:56px">
  <p class="name">Chris F</p>
  <p class="points">320 hours</p>
 </div>
</div>

<div class="personcontainer">
  <div class="userboard">
  <p class="rank"> 4</p>
  <img src="images/student8.jpg"  alt="Avatar" style="width:56px">
  <p class="name">Emily L</p>
  <p class="points">301 hours</p>
 </div>
</div>
  
<div class="personcontainer">
  <div class="userboard">
  <p class="rank"> 5</p>
  <img src="images/student3.jpg"  alt="Avatar" style="width:56px">
  <p class="name">Isak G</p>
  <p class="points">290 hours</p>
 </div>
</div>
  
  
  
  </div>
  <div class="flex-item-right">
  	<div class="leadercontainer">
  <img src="images/student9.jpg" alt="Avatar" style="width:136px" class="image1rank">
  <div class="rank1">
  <p><span>Vijaya R</span></p>
  <p>Rank 1</p>
</div>
</div></div>
</div>

	</div>
		<footer>
		<div class="content">
		<div class="top">
			<div class="logo-details">
			<span class="logo_name"><img src="images/SNLogo.svg" alt="Logo Temp"></span>
		</div>
			<div class="media-icons">
				<a href="#"><i class="fa-facebook"></i></a>
				<a href="#"><i class="fa-facebook"></i></a>
				<a href="#"><i class="fa-facebook"></i></a>
				<a href="#"><i class="fa-facebook"></i></a>
				<a href="#"><i class="fa-facebook"></i></a>
			</div>
		  </div>
		  	<hr class="hrstyle">
			<div class="bottom-details">
			<div class="bottom_text">
				<span class="copyright_text"><a href="#"> Study Nest© 2023. All rights reserved</a></span>
				<span class="Policy-terms">
				   	<a href="#">Privacy policy</a>
				   	<a href="#">Terms and condtions</a>
				</span>
			</div>
			</div>
		  <div class="link-boxes"></div>
		</div>
		</footer>
</div>
</body>
</html>