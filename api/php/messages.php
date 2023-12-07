<!DOCTYPE html>
    
    <?php
        $title = "Messages";
        include($_SERVER["DOCUMENT_ROOT"] . "/api/php/head.php");
    ?>
    
    <body class="messagepage">
        <?php
            include($_SERVER["DOCUMENT_ROOT"] . "/api/php/nav.php");
        ?>  

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
                    <p class="selectedname bold">Vijaya R</p>
                     <p class="activity">@ Informatics</p>
                
                  </div>
                     <img src="api/images/more.php" style="width:40px" alt="three dots icon" class="morebtn">
        </div>
        <div class="messages-chat">
          <div class="message">
            <div class="response">
              <p class="text">Hey Viv!😃</p>
            </div>
          </div>
          <div class="message">
            <div class="response">
              <p class="text">How are you?</p>
            </div>
          </div>
          <p class="response-time time">Now</p>
      
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
        <?php
            include("$_SERVER[DOCUMENT_ROOT]/api/php/scripts.php");
        ?>
    </body>
</html>
