<!-- Study hub Page -->
<!-- Katherine Cajamarca -->
<!-- INF 362 -->
<!DOCTYPE html>

<?php
    $title = "Home";
    include($_SERVER["DOCUMENT_ROOT"] . "/api/php/head.php");
?>

<body class="studyhub">
    <!--Insert Nav bar here -->
	    <?php
        include($_SERVER["DOCUMENT_ROOT"] . "/api/php/nav.php");
    ?>

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
     	<a href="api/php/questionaire.html" class="btn2">Find Study Buddy</a>
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
                        <img src="api/images/unicon.php" alt="Graduation Cap">
                        <span>Study Together</span>
                        <img src="api/images/unicon.php" alt="Graduation Cap">
                        <span>Study Together</span>
                        <img src="api/images/unicon.php" alt="Graduation Cap">
                        <span>Study Together</span>
                        <img src="api/images/unicon.php" alt="Graduation Cap">
                        <span>  </span>
                        </div>
                        <div class="runningtext">
                         <span></span>
                        <span>Study Together</span>
                        <img src="api/images/unicon.php" alt="Graduation Cap">
                        <span>Study Together</span>
                        <img src="api/images/unicon.php" alt="Graduation Cap">
                        <span>Study Together</span>
                        <img src="api/images/unicon.php" alt="Graduation Cap">
                        <span>Study Together</span>
                        <img src="api/images/unicon.php" alt="Graduation Cap">
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
			  <img src={"api/images/student1.jpg"} alt="John" style="width:100%">
			  <h3 class="studentname">Poppy Lewis</h3>
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
			  <img src="https://picsum.photos/69" alt="John" style="width:100%">
			  <h3 class="studentname">Olive Williams</h3>
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
			  <img src="api/images/student4.jpg" alt="John" style="width:100%">
			  <h3 class="studentname">Ella Thomas</h3>
			   <div class="cardcontent">
			  <p class="title">@ Computer Science</p>
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
			  <img src="https://picsum.photos/68" alt="John" style="width:100%">
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
  <img src="https://picsum.photos/61"  alt="Avatar" style="width:56px">
  <p class="name">Vijaya R</p>
  <p class="points">409 hours</p>
 </div>
</div>

<div class="personcontainer">
  <div class="userboard">
  <p class="rank"> 2</p>
  <img src="https://picsum.photos/64"  alt="Avatar" style="width:56px">
  <p class="name">Olive W</p>
  <p class="points">380 hours</p>
 </div>
</div>

<div class="personcontainer">
  <div class="userboard">
  <p class="rank"> 3</p>
  <img src="https://picsum.photos/63"  alt="Avatar" style="width:56px">
  <p class="name">John D</p>
  <p class="points">320 hours</p>
 </div>
</div>

<div class="personcontainer">
  <div class="userboard">
  <p class="rank"> 4</p>
  <img src="https://picsum.photos/62"  alt="Avatar" style="width:56px">
  <p class="name">Emily S</p>
  <p class="points">301 hours</p>
 </div>
</div>
  
<div class="personcontainer">
  <div class="userboard">
  <p class="rank"> 5</p>
  <img src="https://picsum.photos/60"  alt="Avatar" style="width:56px">
  <p class="name">Isak G</p>
  <p class="points">290 hours</p>
 </div>
</div>
  
  
  
  </div>
  <div class="flex-item-right">
  	<div class="leadercontainer">
  <img src="api/images/student2Test.jpg" alt="Avatar" style="width:136px" class="image1rank">
  <div class="rank1">
  <p><span>Vijaya R</span></p>
  <p>Rank 1</p>
</div>
</div></div>
</div>

	</div>
        <?php
            include("$_SERVER[DOCUMENT_ROOT]/api/php/footer.php");
            include("$_SERVER[DOCUMENT_ROOT]/api/php/scripts.php");
        ?>
</div>
</body>
</html>
