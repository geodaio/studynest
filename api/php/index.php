<!DOCTYPE html>

<?php
    $title = "Home";
    include($_SERVER["DOCUMENT_ROOT"] . "/api/php/head.php");
?>

<body class="homepage">
    <?php
        include($_SERVER["DOCUMENT_ROOT"] . "/api/php/nav.php");
    ?>
    <div class="flexboxbanner">
            <section class="intro-sect-left">
                <h1 class="h1style">Connect, Collaborate, and  Unlock Academic Success Together</h1>
                <p class="headerbody">Discover Your Ideal Study Buddy on Our Platform! Join Now to Boost Your Productivity and Achieve Academic Excellence as You Forge Meaningful Connections in Your Educational Journey</p>
                <button id="get-started">Get Started</button>
                <div class="dottedcircle">
                <img src="images/Ellipse.svg" alt="Rotating dotted circle">
            </div>
            </section>
            <section class="intro-sect-right">
                
               <img src="images/indeximage.svg" class="bannerimage" alt="Window of students imagery">
               
            </section>
        </div>
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
            <div class="quote2">
                <h2 id="home-quote">"A place where you and others can start on a studying journey"</h2>
            </div>
            
        </section>
        
             <div class="detailflexbox Aboutus">
            <section class="detail-sect-left">
                 <img src="images/indeximage2.svg" class="aboutmeimage" alt="Window of a girl smiling while she's on video chat">
       
            </section>
            <section class="detail-sect-right">
              <div class="textde">
                <h2>Welcome to Study Nest!</h2>
                <p>Where the journey to academic success becomes a collaborative adventure! Founded on the belief that learning is most effective when shared, our platform is designed to connect students seeking study buddies for a more enriching educational experience. At Study Nest, we believe that the exchange of ideas, perspectives, and knowledge not only enhances academic performance but also cultivates a sense of camaraderie among learners.</p></div>
                <div class="action_btn">
                <button id="learn-more-link">+ Learn more</button>
                <button id="site-rules-link">+ StudyNest Rules</button></div>
            </section>
        </div>
         <section id="why-strengths">
        <h2 class="centeredtext">Why Study Nest?</h2>
        <div class="picwrapper">
          <div class="picturecards">
            <img class="imgcard" src="images/service1.jpg" alt="image one">
            <h5> Tailored Connections </h5>
            <p id="bodywidth">Our quiz ensures that you find the perfect study buddy based on your academic needs, interests, and schedule.</p>
          </div>
          <div class="picturecards">
            <img class="imgcard" src="images/service2.jpg" alt="image2">
            <h5> Flexibility and Convenience: </h5>
            <p id="bodywidth2">Whether you prefer in-person study sessions or virtual collaboration, our platform accommodates various preferences to make learning accessible and convenient..</p>
          </div>
          <div class="picturecards">
            <img class="imgcard" src="images/service3.jpg" alt="image3">
             <h5>Empowering Academic Growth: </h5>
            <p id="bodywidth3">By working together, you and your study buddy can tackle challenges, share insights, and accelerate your academic progress, creating a mutually beneficial partnership.</p>
          </div>
      </div>

  </section>
        <section id="testimony">
            <div class="flexbox">
                <!--CAROSEL GOES HERE-->
           <div class="slideshow-container">

        <div class="mySlides">
          <img src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:90px">
          <q>As a busy working professional pursuing further education, StudyNest provided me with the flexibility I needed. I found a study partner with a similar schedule, and together we conquered challenging coursework. The support and motivation are priceless!”</q>
          <div class="author">
            <p class="bold">Jake D.</p>
            <p class="placeofstudy">University of Dakota</p>
          </div>
        </div>

        <div class="mySlides">
          <img src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:90px">
          <q> I can't thank StudyNest enough for creating a space where I could connect with like-minded individuals. Studying is not just about textbooks; it's about the people you learn with. My study buddy became a friend and mentor, making my academic journey unforgettable.</q>
          <div class="author">
            <p class="bold"> Emily L</p>
            <p class="placeofstudy"> Community College</p>
          </div>
        </div>

        <div class="mySlides">
          <img src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:90px">
          <q>What I love about Study Nest is the diversity of the community. I connected with peers from different backgrounds and cultures, broadening my perspective on various subjects. It's more than just studying; it's a cultural exchange of knowledge! </q>
          <div class="author">
            <p class="bold">Aisha R.,</p>
            <p class="placeofstudy">UPenn</p>
          </div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

      </div>

    </div>
        </section>
           <div class="newsflexbox news-section">
            <section class="News-sect-left">
            <div class="imageright">
                <img class="newsimg" src="images/studygroup.jpg" alt="A group of students in a stugy group studying">
            </div>
            </section>
            <section class="News-sect-right">
                <div class="textde2">
              <h2>Join Our Newsletter</h2>
                <p>Stay ahead in your academic journey by subscribing to our newsletter. Receive exclusive content, study hacks, and updates on new features directly in your inbox. Join a community of learners dedicated to success and never miss a valuable insight.</p></div>
                <div class="sub_btn">
                  <button id="join-newsletter">Subscribe</button></div>
            </section>
        </div>
    
        <footer>
            
        </footer>
        <script src="js/studynest.js"></script>
        <script src="js/favicon.js"></script>
        <script src="js/logInOut.js"></script>
 <footer>
        <div class="content">
        <div class="top">
            <div class="logo-details">
            <span class="logo_name"><img src="images/footerlogo.svg" alt="Logo of Study nest in white" id="header-logo2"></span>
        </div>
            <div class="media-icons">
                <a href="#"><i class="fa-brands fa-square-facebook fa-xl"></i></a>
                <a href="#"><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok fa-xl"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin fa-xl"></i></a>
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
<script src="js/studynest.js"></script>
 </body>
</html>
