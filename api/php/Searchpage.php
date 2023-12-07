<!DOCTYPE html>
<?php
    $title = "About Us";
    include($_SERVER["DOCUMENT_ROOT"] . "/api/php/head.php");
?>

<body class="searching">
	<div class="searchcontainer">
      <div class="top">
       	<?php
        	include($_SERVER["DOCUMENT_ROOT"] . "/api/php/nav.php");
   		?>   
      </div>
	<div class="searchcontent">
  		<div class="lefthub">
         	<a href="hub.html" class="backbtn"><i class="fa fa-arrow-right fa-rotate-180" style="color: #29382f;"></i>Back to Study Hub</a>
    <div class= something>
      <div class="subsection">
        <h2 class="searchsubtitle">Possible Study Buddies</h2>
         <p class="sideleft">6 Search results in <b>University at Albany </b> within <b> Informatics Major </b>with some <b>familarity.</b></p></div>
         <div class="filtersearch">
             <button class="sideright">Major</button>
            <button class="sideright">Course</button>
            <button class="sideright">Knowledge</button>
            <button class="sideright">Language</button>
        <button class="sideright">Sort By</button></div><!-- Put icon here-->
    </div>
     <div class="rightnow row">
        <div class="cardcontainer">
         <img class="imageprofile" src="images/profile1.png" alt="Avatar" style="height:72px">
         <div class="rightfloat">
        <div class="textright">
        <a href="profile.html" class="bold"><span>Vijaya R</span></a>
        <p>@ Informatics</p></div>
        <div class="something99">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero interdum, fermentum odio vitae.</p>
       </div>
       <p><b>Course:</b> Intro to Web dev</p>
       <p><b>Knowledge:</b> Expert</p>
        <p><b>Language:</b> Exglish</p></div>
        <a href="messages.html" class="testingsome2 w3r">Message</a>
        </div></div>

     <div class="rightnow row">
        <div class="cardcontainer">
        <img class="imageprofile" src="images/profile1.png" alt="Avatar" style="height:72px">
        <div class="rightfloat">
             <div class="textright">
        <p class="bold"><span>Emily Smith</span><br> </p>
        <p>@ Informatics</p></div>
        <div class="something99">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero interdum, fermentum odio vitae.</p></div>
        <p><b>Course:</b> Intro to Web dev</p>
        <p><b>Knowledge:</b> Expert</p>
        <p><b>Language:</b> English</p></div>
        <button class="testingsome">Message</button>            
        </div></div>

    <div class="rightnow row">
        <div class="cardcontainer">
        <img class="imageprofile" src="images/profile1.png" alt="Avatar" style="height:72px">
        <div class="rightfloat">
             <div class="textright">
       <p class="bold"><span>Lily Johnson </span><br></p>
            <p>@ Informatics</p></div>
        <div class="something99">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero interdum, fermentum odio vitae.</p></div>
            <p><b>Course:</b> Intro to Web dev</p>
            <p><b>Knowledge:</b> Expert</p>
            <p><b>Language:</b> English, Spanish</p></div>
        <button class="testingsome">Message</button>
        </div></div>

    <div class="rightnow row">
        <div class="cardcontainer">
        <img src="images/profile1.png" alt="Avatar" style="height:72px">
        <div class="rightfloat">
             <div class="textright">
        <p class="bold"><span>Mia Davies</span></p></p>@ Computer Science</p></div>
        <div class="something99">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero interdum,</p></div>
        <p><b>Course:</b> Intro to Web dev</p>
        <p><b>Knowledge:</b> Expert</p>
        <p><b>Language:</b> English</p>
        </div>
        <button class="testingsome">Message</button>
        </div></div>
        <div class="rightnow row">
        <div class="cardcontainer">
        <img src="images/profile1.png" alt="Avatar" style="height:72px">
        <div class="rightfloat">

             <div class="textright">
        <p class="bold"><span>Olivia Williams</span><br></p><p>@ Computer Science</p></div>
        <div class="something99">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero interdum,</p></div>
        <p><b>Course:</b> Intro to Web dev</p>
        <p><b>Knowledge:</b> Expert</p>
        <p><b>Language:</b> English, Chinese</p>
        </div>
        <button class="testingsome">Message</button>
        </div></div>
        <div class="rightnow row">
        <div class="cardcontainer">
        <img src="images/profile1.png" alt="Avatar" style="height:72px">
        <div class="rightfloat">

             <div class="textright">
        <p class="bold"><span>Ella Thomas</span><br></p><p>@ Computer Science</p></div>
        <div class="something99">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero interdum,</p></div>
        <p><b>Course:</b> Intro to Web dev</p>
        <p><b>Knowledge:</b> Expert</p>
        <p><b>Language:</b> English</p>
        </div>
        <button class="testingsome">Message</button>
        </div></div>
    	</div>
        	<div class="righthub">
            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2932.8825009416455!2d-73.82736522427992!3d42.68503121450953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89de0b3b15c5cb35%3A0xc7c3edbfb0809e9e!2sUniversity%20at%20Albany!5e0!3m2!1sen!2sus!4v1701107071580!5m2!1sen!2sus" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapmoment"></iframe>
        	</div>
		</div>
	</div>

	<?php
        include($_SERVER["DOCUMENT_ROOT"] . "/api/php/footer.php");
        include($_SERVER["DOCUMENT_ROOT"] . "/api/php/scripts.php");
    ?>
</body>
</html>
