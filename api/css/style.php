<?php
 header('Content-Type: text/css');
?>

/*Kat code*/
/*Minfied Css for Search results page*/
.cardcontainer::after,.row:after,.row:before{content:"";clear:both;display:table}body{margin:0;font-family:'Nimbus Sans L',sans-serif}.searchcontainer,.searching, html{height:100%;width:100%;max-height:100%}.searching{display:flex}

.backbtn{
  width:100%;
  border:none;
  text-align: left;
  padding:16px 16px 16px 0;
  font-size:16px;
  cursor:pointer;
  text-decoration: none
}
.backbtn i {padding-left: 16px}.backbtn a{text-decoration:none;color:#293730}.backbtn a:hover{color:#5b6c3a}.lefthub{padding:22px 48px 16px 72px;flex:14}.righthub{background-color:gray;flex:12; scrollbar-width: none;
            overflow-Y: hidden;}.searchcontent{display:flex;overflow:hidden}.searchcontainer{display:flex;flex-direction:column}.searchcontent div{overflow:auto}.sideleft{float:left;line-height:20px}

.righthub{
  overflow: hidden;
}

iframe{
  overflow: hidden;
  width:100%;
  height:99%;
}

  .filtersearch{float:right;margin-top:24px;margin-bottom:20px;}

  .sideright{border-radius:5px;font-size:1em;width:104px;padding:1.5%;background-color:#FEFCF8;border:2px solid #293730;color:black;cursor:pointer}

  .searchsubtitle{margin-bottom:0px}p{font-size:18px}.rightnow{margin-bottom:-10px}.usercardinfo p{margin-left:72px}mar .usercardinfo p span{font-weight:700}
  .rightnow .row img{float:left;border-radius:50%;margin-right:20px}.searching ::-webkit-scrollbar{width:10px}.searching ::-webkit-scrollbar-track{box-shadow:inset 0 0 5px grey;border-radius:10px;background:#adb299}.searching ::-webkit-scrollbar-thumb{background:#293730;border-radius:10px}

  .cardcontainer{position:relative;border:1px solid #000;background-color:#fff;border-radius:10px;padding:16px;margin:16px 0}
  .cardcontainer img{border:1px solid #000;float:left;margin-top:10px;margin-left:10px;margin-right:20px;border-radius:50%}.textright{padding-bottom:10px;}.rightfloat{float:left;width:80%;padding:16px 0}

    .testingsome{text-decoration:none;position:absolute;top:6%;right:3%; border-radius: 5px;font-size: 16px;width:16%;padding:2%;text-align:center;background-color:#293730;border-width: 1px;border-color: #293730;margin:auto;border-style: solid;color: #FEFCF8;cursor: pointer;}
.testingsome2{text-decoration:none;position:absolute;top:6%;right:3%; border-radius: 5px;font-size: 16px;width:16%;padding:2%;text-align:center;background-color:#293730;border-width: 1px;border-color: #293730;margin:auto;border-style: solid;color: #FEFCF8;cursor: pointer;

}.testingsome:hover,.testingsome2:hover{background-color: #5B6C3A}



  .something99{margin-bottom:10px}@media screen and (min-width:1020px){.something{margin-bottom:-20px}.sideleft{float:left;line-height:20px;padding-bottom:8px; margin-top: 10px}}@media screen and (min-width:825px) and (max-width:1020px){.something{margin-bottom:-10px}.sideleft{float:left;line-height:20px;padding-bottom:8px}.lefthub{padding:10px 30px 10px 20px;flex:32}}

  @media screen and (min-width:611px) and (max-width:825px){.rightloat,.searchcontainer,.searchcontent{display:inline;}p{font-size:18px}.lefthub{padding:24px 28px;flex:48}.rightloat{margin:auto;float:none}.sideright{margin-bottom:0}.something{margin-bottom:-10px} .cardcontainer{margin-top:20px}}

  @media screen and (max-width:611px){.cardcontainer img,.rightfloat{margin:auto; margin-bottom:8px;float:none;display:block}.rightfloat,.searchcontainer,.searchcontent{display:inline;}.lefthub{padding:10px 20px;flex:15}.sideright{margin-top:0}.something{margin-bottom:-10px}.cardcontainer{text-align:center;margin-top:20px}
    .righthub{display: none;}
    .testingsome{position:relative;margin-top:16px;right:0;width:50%;text-align:center;background:#293730;color:#fff;padding:12px 20px}
      .cardcontainer{position:relative;border:1px solid #000;background-color:#fff;border-radius:10px;padding:32px;margin:16px 0}
    .testingsome2{position:relative; top:90%;right:0%;padding:4% 8% 4% 8%;}
      .w3r{top: 40%}
  }
  

.studyhub h3{
  font-size: 18px;
}

 .cardcontainer p{
  padding: 4px;
 }
 /*CSS for Hub */
.row {
    width: 100%;
}
.row:after,
.row:before {
    content: "";
    display: table;
    clear: both;
}
.studyhub {
    overflow-y: scroll;
overflow-x: hidden;
    font-size: 16px;
    margin: 0;
    font-family: 'Nimbus Sans L', sans-serif;
}
img {
    max-width: 100%;
}

h1{
   font-size: 64px;
   font-family: "Lora";
}
h2{
  font-size: 32px;
}
/* Left Column Styles */
.left {
    width: 600px;
    display: block;
    margin-right:auto;
    margin-left: auto;
}


.details {
   overflow-y: hidden;
    border:1px solid black;
    border-radius: 5%;
    padding: 20px 60px 60px 60px;
}

.style2{
    width: 100%;
    margin-top: 50px;
}

.details h1{
    text-align: center;
}
.details p {
    text-align: center;
    color: black;
    font-size: 18px;
    margin-bottom: 20px;
    margin-top: -20px;
}

.main{
  background-color: #ADB499 ; /* For browsers that do not support gradients */
   background: linear-gradient(182deg, #488455, #dad299);
    background-size: 400% 400%;
    -webkit-animation: AnimationName 15s ease infinite;
    -moz-animation: AnimationName 15s ease infinite;
    animation: AnimationName 15s ease infinite;
  width: 100%;
  padding: 20px 0;
}

@-webkit-keyframes AnimationName {
    0%{background-position:58% 0%}
    50%{background-position:43% 100%}
    100%{background-position:58% 0%}
}
@-moz-keyframes AnimationName {
    0%{background-position:58% 0%}
    50%{background-position:43% 100%}
    100%{background-position:58% 0%}
}
@keyframes AnimationName {
    0%{background-position:58% 0%}
    50%{background-position:43% 100%}
    100%{background-position:58% 0%}
}

.main2{
    padding:40px;
}

.heading3 {padding:20px 0 20px 0}
.heading4{padding: 20px 0 0 0}
.nearyou {
display: grid;
  grid-template-columns: 280px 280px 280px 280px;
  grid-gap: 24px;
  justify-content: center;
}

.nearyou2{
   display: grid;
  grid-template-columns: 568px 568px;
   grid-template-rows: 240px 240px; 
    column-gap: 24px;
  row-gap: 24px;
  justify-content: center;
}


.card {
  border-radius: 10px;
  border: 1px solid black;
  background: white;
  max-width: 270px;
  margin: auto;
  text-align: center;
}

.card p{
  font-size: 16px;
}

.card:hover{
   transform: scale(1.1)
}
.card img{
  width: 100%;
  border-radius: 10px 10px 0 0;
}
.studentname, .studentname2,.studentname3, .studentname4 {
  padding: 16px 0 0 0;
}
.title {
  color: grey;
  font-size: 18px;
  padding-bottom: 8px;
}

.cardtype{
border:1px solid black;
  border-radius:10px;
  background-color:white;
  padding: 24px;
  text-align: left;
}
.avatars {
  width:20%;
  margin-left:8px;
  margin-right:24px;
  margin-top:0px;
  float:left;
  display: inline-flex;
  flex-direction: row-reverse;
}

.avatar {
  position: relative;
  border: 2px solid black;
  border-radius: 50%;
  overflow: hidden;
  width: 100%;
}

.avatar:not(:last-child) {
  margin-left: -60px;
}

.avatar img {
  width: 100%;
  display: block;
}

.btn2{
  margin: 0 auto;
  text-decoration: none;
border-radius: 5px;
font-size: 1em;
width:190px;
padding:4%;
background-color:#293730;
border-width: 2px;
border-color: #293730;
border-style: solid;
color: #FEFCF8;
cursor: pointer
}
.btn2:hover{
  background-color:#5B6C3A;
}

.btn3{
  margin: 0 auto;
text-decoration: none;
margin-left: 32px;
border-radius: 5px;
font-size: 1em;
width:190px;
padding:4%;
background-color:#293730;
border-width: 2px;
border-color: #293730;
border-style: solid;
color: #FEFCF8;
cursor: pointer;
}
.btn3:hover{
  background-color:#5B6C3A;
}

#get-started, #get-started1, #get-started2, #get-started3{
border-radius: 5px;
font-size: 1em;
width:48%;
padding:4%;
background-color:#293730;
border-width: 2px;
border-color: #293730;
border-style: solid;
color: #FEFCF8;
cursor: pointer;
}
 #get-started1:hover, #get-started2:hover, #get-started3:hover{
  background-color:#5B6C3A ;
 }

.studyhub #form {
  overflow-y: hidden;
  margin-top: 16px;
  text-align: left;
  border: 1px solid black;
  border-radius: 5px;
  display:flex;
  flex-direction:row;
  align-items:center;
  background: white;
      }
.cardcontent{
  padding: 16px;
}
.studyhub input {
        all: unset;
        font: 16px system-ui;
        color: green;
        height: 100%;
        width: 100%;
        padding: 6px 10px;
      }

      ::placeholder {
        color: black;
        opacity: 0.7; 
      }

      #formButton {
        all: unset;
        cursor: pointer;
        width: 44px;
        height: 44px;
      }

.avatars {display: inline-flex;flex-direction: row-reverse;}

.avatar {
  position: relative;
  border: 4px solid #fff;
  border-radius: 50%;
  overflow: hidden;
  width: 100px;
}

.avatar:not(:last-child) {
  margin-left: -60px;
}

.avatar img {width: 100%;display: block;}

*,
*::before,
*::after {
  box-sizing: border-box;
}

iframe{
  overflow-y: hidden;
}
.scrolling_text {
  background: #293730;
  width: 100%;
  padding: 24px;
  overflow: hidden;
  display: flex;
  white-space: nowrap;
}
.runningtext {
    font-size: 24px;
    font-weight: 700;
    text-transform: uppercase;
    color: white;
   animation: animate_text 20s linear infinite;
}
.runningtext span {margin: 0 40px;}

.pagcontainer{
  width: 100%;
  max-width: 940px;
  margin: 0 auto;
  position: relative;
  text-align: center;
}
/*footer */
footer {
  position: relative;
  background:#293730;
  width: 100%;
  bottom: 0;
  left: 0;
}

footer .content{
max-width: 100%;
margin:auto;
padding: 30px 40px 40px 40px;
}

footer .content .top {
  display: flex;
  align-items: center;
  justify-content: space-between;

}
.content .top .media-icons{display: flex;}
.copyright_text a, .Policy-terms a{ text-decoration:none; color:white}
.Policy-terms a{padding-right:5px}
.content .top .media-icons a{height:40px;width: 40px;color: white;margin: 0 8px;}
footer .bottom-details{width: 100%;margin-top:16px}
footer .bottom-details .bottom_text{max-width: 100%;margin: auto;display: flex;justify-content: space-between;}
.hrstyle{margin:40px 0 30px 0}
footer .content .link-boxes{width:100%;display:flex;justify-content: space-between;}

.pagination{padding: 30px 0;display: inline-block;}
.pagination a{float:left;padding: 10px 18px;color: #222; margin: 0;padding: 0;list-style-type: none}
.p1 a{width:40px;height:40px;line-height:40px;padding:0;text-align:center;text-decoration:none}
.p1 a.is-active{background-color: #293730;border-radius: 100%;color: #FEFCF8;}

@keyframes animate_text {
    from {
      transform: translate3d(0, 0, 0);
    }
    to {
      transform: translate3d(-100%, 0, 0);
    }
}

/*Media queries */
@media screen and (min-width:1190px){.left{width:600px;display:block;margin-right:auto;margin-left:auto}.main{padding:64px 56px 64px 56px}.style2{width:100%}.btn3{margin-top:24px;border-radius:5px;font-size:1em;width:190px;padding:4%;background-color:#293730;border:2px solid #293730;color:#fefcf8;cursor:pointer}.details{text-align:center;background:#fff;height:432px;border:1px solid #000;border-radius:5%;padding:20px 50px 40px} }

@media screen and (min-width:765px) and (max-width:1190px){

.header-left {
  width:80%;
  margin-left:0%;
}.lefthub{padding:24px 28px;flex:48}.left{width:600px;display:block;margin-right:auto;margin-left:auto}.main{padding:64px 48px 42px 48px}.style2{width:100%}.btn3{margin-top:24px;border-radius:5px;font-size:1em;width:178px;padding:4%;background-color:#293730;border:2px solid #293730;color:#fefcf8;cursor:pointer}.details{text-align:center;background:#fff;height:440px;border:1px solid #000;border-radius:5%;padding:20px 50px 40px}.nearyou{ grid-template-columns: 210px 210px 210px 210px;grid-template-columns:repeat(3,1fr)}.nearyou2{grid-template-columns:repeat(2,1fr)}}

@media screen and (min-width:613px) and (max-width:765px){
  .left{width:80%;display:block;margin-right:auto;margin-left:auto}
  .main{padding:40px 0px 40px 0px}.style2{width:100%}.btn3{margin-top:24px;border-radius:5px;font-size:1em;width:178px;padding:4%;background-color:#293730;border:2px solid #293730;color:#fefcf8;cursor:pointer}

  .details{text-align:center;background:#fff;height:440px;border:1px solid #000;border-radius:5%;padding:20px 28px 40px 28px}
  .nearyou{grid-template-columns:repeat(2,1fr)}.nearyou2{grid-template-columns:repeat(1,1fr);grid-template-rows:240px 240px 240px 240px}
  h2{font-size:32px}



}

@media screen and (min-width:518px) and (max-width:613px){.testingsome{position:relative;right:0;width:50%; margin-top: 12px}.backbtn{
  width:100%;
  border:none;
  text-align: left;
  padding:16px 16px 16px 0;
  font-size:16px;
  cursor:pointer;
  text-decoration: none
}

.lefthub{padding:24px 28px;flex:48}
.sideright{margin:0 0px 16px 0px;}
.backbtn i {padding-left: 16px}h1{font-size:56px} .left{width:100%;display:block;margin-right:auto;margin-left:auto}.main{padding:40px 16px 40px 16px }.btn3{margin-top:24px;border-radius:5px;font-size:1em;width:176px;padding:4%;background-color:#293730;border:2px solid #293730;color:#fefcf8;cursor:pointer}.style2{width:100%}.details{text-align:center;background:#fff;height:432px;border:1px solid #000;border-radius:5%;padding:20px 27px 40px 27px}.main2 h2{padding-right:8px}.nearyou2{grid-template-columns:repeat(1,1fr);grid-template-columns:400px;grid-template-rows:240px 240px 240px 240px}.nearyou{grid-template-columns:repeat(1,1fr);grid-gap:20px}.card{max-width:100%}.scrolling_text{overflow:hidden;display:flex;white-space:nowrap}.runningtext span{margin:0 20px}}
    /*For smaller screens size like phones*/
@media screen and (min-width:471px) and (max-width:518px){.left,.style2{width:100%}.lefthub{padding:24px 28px;flex:48}.nearyou,.nearyou2{grid-template-columns:repeat(1,1fr)}.main2 h2{padding-right:8px}.left{display:block;margin-right:auto;margin-left:auto}.main{padding:40px 16px 40px 16px }.btn3{width:170px;margin-top:24px;border-radius:5px;font-size:1em;background-color:#293730;border:2px solid #293730;color:#fefcf8;cursor:pointer}.details{text-align:center;background:#fff;height:408px;border:1px solid #000;border-radius:5%;padding:16px}.nearyou{grid-gap:20px}.nearyou2{grid-template-columns:320px;grid-template-rows:240px 240px 240px 240px}h1{font-size:48px}.sideright{border-radius:5px;font-size:1em;width:128px;padding:1.5%;border:2px solid #293730;color:black;cursor:pointer;margin:0 0px 16px 2px;}}
/* Super small screens */
@media screen and (max-width: 471px) and (min-width:320px){
.filtersearch{float:left;margin-top:24px;margin-bottom:8px;}.lefthub{padding:24px 28px;flex:48}.sideright{border-radius:5px;font-size:1em;width:128px;padding:1.5%;/*REMOVED BACKGROUND COLOR*/;border:2px solid #293730;color:black;cursor:pointer;margin:0 0px 16px 4px;}.testingsome{position:relative;right:0;width:80%; margin-top: 90px}.left {width: 100%;display:block;margin-right:auto;margin-left: auto}

.btn2{
  display:block;
  margin: 0 0 8px 0;
width:100%;
}


.btn3{
    display:block;
  margin: 0;
margin-left: 0px;
width:100%;
}
 .style2{;width: 100%;margin-top: 20px}.main{padding: 32px 16px 32px 16px;}
 .details {text-align: center;background: white;height: 428px;border:1px solid black;border-radius: 5%;padding: 16px}h1{font-size: 48px}h2{font-size:24px}.nearyou2{ grid-template-columns: repeat(1, 1fr);grid-template-rows: 240px 240px 240px 240px }.nearyou{grid-template-columns: repeat(1, 1fr);grid-gap: 20px}.card {max-width: 100%;}


}
/*END KAT CODE*/

/* Homepage*/
/*Abi Code */

#notification-bell {
  display: flex;
  position: absolute;
  max-width: 100%;
  max-height: 100%;
  float: right;
  top: 2.8%;
}
#header-logo, #header-logo2{
  max-width:48%;
}
#body #header-logo{
  max-width:10%;
}
.header-left {
  width:60%;
  float:left;
  display:inherit;
  flex-direction:inherit;
  margin-left:4%;
}

.navbar {
    display: flex;
   background-color: #FEFCF8;
    border-bottom: 1px solid black;
}

.brand-title {
    font-size: 1.5rem;
    margin: 15px -56px 15px 32px;
}
.navbar-links ul {display: flex}
.navbar-links li {list-style: none;}

.navbar-links li a {
      display: block;
    text-decoration: none;
    color:black;
    padding: 1rem 1rem 1rem 1rem;
}

.navbar-links li:hover {
   border-bottom: 3px solid #5B6C3A
}

.toggle-button {
    position: absolute;
    top: .75rem;
    right: 1rem;
    margin: 1.2rem;
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
}

.toggle-button .bar {
    height: 3px;
    width: 100%;
    background-color: black;
    border-radius: 10px;
}

.header-right{
  width:40%;
  float:right;
  display:inherit;
  flex-direction:row-reverse;
 margin-right:4%;
}

.lang-options {
  display:none;
  background-color:#FEFCF8; 
  border-color:#FEFCF8;
  border-style:solid;
  width:100%;
  position:absolute;
  box-shadow:0px 1px 4px 0px #293730;
  border-radius:5px;
}

.profile-options{
  display:none;
  background-color:#FEFCF8; 
  border-color:#FEFCF8;
  border-style:solid;
  width:32px;
  height: 32px;
  position:absolute;
  box-shadow:0px 1px 4px 0px #293730;
  border-radius:5px;
}
.lang-options a{
  display:block;
  font-size:.9em;
  text-decoration:none;
}
.dropdown:hover .lang-options{
  display:block;
}
.lang-options a:hover{
  background-color:#293730;
  color:#FEFCF8;
}
.sign-in, .sign-up {
  width:25%;
  padding: 10px;
  margin:auto;
  font-size:.7em;
}
.signin2, .signup2{
  margin-left:16px;
  width:25%;
  padding: 10px;
  font-size:.7em;
   border-width: 2px;
  border-color:#293730;
  border-style:solid;
}
.sign-in {
    background-color: #FEFCF8;
    border-width: 2px;
    border-color: #293730;
    border-style: solid;
}

.sign-up {
    background-color: #293730;
    border-width: 2px;
    border-color: #293730;
    border-style: solid;
    color: #FEFCF8;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #293730;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

#body #header-logo{
 max-width:10%;
}
.sidenav a {
  padding: 8px 8px 40px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  text-align:left;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #5B6C3A;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.flexbox {
  width:100%;
  justify-content:space-around;
  display:flex;
  flex-direction:row;
}

.whyflexbox {
  width:100%;
  justify-content:space-around;
  display:flex;
  flex-direction:row;}

.flexboxbanner{
   width:100%;
  justify-content:space-around;
  display:flex;
  flex-direction:row;
}

.flexboxprofile{
   display:flex;
  flex-direction:row;
    background-color:#eae9e1;
}
.flexbox-column {
  height:100%;
  width:100%;
  justify-content:space-around;
  display:flex;
  flex-direction:column;
}
.profile-header {
  background: white;
  display: flex;
  height: 190px;
  position: relative;

}

.profile-img {
  float: left;
  width: 304px;
  height: 200px;
}

.profile-img img {
  border: 2px solid #293730;
  border-radius: 50%;
  height: 248px;
  width: 248px;
  position: absolute;
  left: 40px;
  bottom: 56px;
  z-index: 5;
  background: #fff;
}

.profile-nav-info {
  float: left;
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-left: 0px;
}

.profile-nav-info h3 {
  margin-bottom: 8px;
  font-size: 1.6rem;
  font-weight: bold;
}

.profile-nav-info .address {
   display: flex;
  font-weight: 500;
  color: #777;
}
.buttonsarea{
  margin-left:-14px;
}

#Useraddress, #Twitteruser,#Instagramlink{
  float:left;
  margin-top:16px;
  margin-left:8px;
font-size: 1em;
border-width: 0;
border-color: white;
border-style: solid;
color: #293730;
background-color: white;
cursor: pointer;

}

.profile-option {
  float: right;
  position: absolute;
  right: 48px;
  width:24%;
  top: 37%;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}/*Buttons area*/


#profile-header {
  width:40%;
  float:right;
  display:inherit;
  flex-direction:inherit;
  position:relative;
}
#profile-pic-heaevaluationder {
  max-width:100%;
  display:inherit;
  position:relative;
  border-radius: 100%;
}
#notifications-header {
  display:inherit;
  position:relative;
  float: right;
  left: 2%;
  background-color:#FEFCF8; 
  border-color:#FEFCF8;
  border-style:solid;
}
#notification-bell-img{
  max-width:32px;
  height: 32px;
  display:inherit;
  position:relative;
  margin:auto;
  left: 100%;
  background-color:#FEFCF8; 
  border-style:none;
}
.intro-sect-left {
  width:60%;
  float:left;
  padding: 24px 96px 32px 40px;
  flex-direction:column;
  margin:4%;
}

.intro-sect-right {
  width:40%;
  float:right;
  display:inherit;
  background-color: #FDF8DC;
  border-left-width: 2px;
  border-left-color:black;
  border-left-style:solid;
  padding-right:1%;
  padding-top:1%;
}

.bannerimage{
  position: relative;
  right: 16%;
  top: 0%;
  width: 488px;
  height: 488px;
}

.aboutmeimage{
   position: relative;
  left:11%;
  width: 548px;
}
.homepage #get-started {
  width:24%;
  padding:1.5%;
  background-color:#293730;
  border-width: 2px;
  border-color:#293730;
  border-style:solid;
  color:#FEFCF8;
}

 .headerbody {
  overflow-y: hidden;
  margin-top: 24px;
  margin-bottom: 32px;
}

.row {
    width: 100%;
}
.row:after,
.row:before {
    content: "";
    display: table;
    clear: both;
}

.quote2{
  display: flex;text-align:center;
  align-items: center;
   justify-content: center;margin: 10% 0 10% 0;
}

#line-home-3 {
  stroke:black;
}
.detail-sect-left {
  width:50%;
  height: 500px;
  float:left;
  display:inherit;
  background-color: #ADB499;
}
.detail-sect-right {
  width:50%;
  height: 500px;
  float:right;
  display:inherit;
  padding:0% 5% 0% 5%;
  flex-direction:column;
  background-color:#ADB499;
}
.textde{
  padding-top:16%;
}
.detail-sect-right p{
margin-top:24px;
  margin-bottom:32px
}

.signup:hover{
  background-color: #5B6C3A;
}


.detail-sect-right button{
  height:100%;
  float:left;
display: inline;
font-weight:bold;
  background-color:#ADB499;
  border-color:#ADB499;
  border-style:solid;
  font-size:.9em;
  text-align:left;
}
.detailflexbox {
  width:100%;
  justify-content:space-around;
  display:flex;
  flex-direction:row;
}
#rect-home-3 {
  fill:#FEFCF8;
  stroke:#293730;
  stroke-width:2px;
}
#join-newsletter{
  background-color:#293730;
  border-width: 2px;
  border-color:#293730;
  border-style:solid;
  color:#FEFCF8;
  border-radius:5px;font-size:1em;color:white;width:112px;padding:1.5%;background-color:#293730;border:2px solid #293730;color:#fefcf8;cursor:pointer
}

#login-sect form, input{
        font: unset;
        color: unset;
        height: unset;
        width: unset;
        padding: unset;
}
#body-login{
  background-color: #ADB499;
}
#login-sect{
  margin:auto;
  text-align:center;
  width:33.3%;
  height:80%;
  border-radius: 25px;
  display:flex;
  flex-direction:column;
  background-color: #FEFCF8;
  overflow:auto;
}
#form-login{
  margin-bottom:10%;
}
#leave-login{
  width:6%;
  margin-top:2%;
  margin-right:2%;
  border-radius:100%;
  align-self:flex-end;
}
#button-log{
  flex-direction:row;
  height:100%;
  align-items: flex-end;
  display: flex;
  align-self: center;
  padding: 10%;
}
#back-to-home {
  position: relative;
  display: flex;
  flex-direction: row-reverse;
  top: 2%;
}
#login-button{
  background-color:#293730;
  border-width: 2px;
  border-color:#293730;
  border-style:solid;
  color:#FEFCF8;
  margin-top:15%;
  width:33%;
  height:25%;
  font-size:.7em;
  border-radius:5px;
  font-size:1em;
  font-family: 'PT Serif', serif;
}
#email, #password {
  width:70%;
  line-height:3em;
}
#google-log, #twitter-log, #fb-log {
  width:25%;
  margin:auto;
  margin-bottom:2%;
  height:50%;
  border-radius:0px;
  border:none;
}
#google-log {
  margin-right:3%;
  margin-left:3%;
}
#fb-log {
  margin-right:3%;
  margin-left:3%;
}
#forgot-password {
  width:50%;
  height:10%;
  margin:auto;
  margin-top:2%;
  margin-bottom:2%;
  font-weight:bold;
  background-color:#FEFCF8;
  border-style:solid;
  border-color:#FEFCF8;
}

/*TEST MARKER*/
#profile-header-img-profile{
  height:300px;
}
#profile-pic-profile{
  height:300px;
  max-width:100%;
  max-height:100%;
  width:20%;
  height:40%;
  left:50%;
  position:absolute;
  border-radius:100%;
}
.user {
  width:20%;
  float:left;
  padding-left:2%;
  margin-left:5%;
}
#user-name{
  font-size:3.75em;
 font-family:'Nimbus Sans L',sans-serif;
  margin-bottom:0%;
  margin-top:10%;
}
#username{
  font-size:1.75em;
  font-family:'Nimbus Sans L',sans-serif;
}
#user-description{
  width:90%;
  padding-right:2%;
  float:right;
  text-align:end;
  margin-top:4%;
}
#profile-header-right{
  display:inherit;
  align-content:center;
}
#message-user, #add-buddy{
  margin-left:4%; 
}
#message-user:hover{
  background-color:#eae9e1}

#add-buddy{color: white;}
#message-user,
#add-buddy{
  width:90%; 
  margin: 0 auto;
  margin-left: 16px;
  text-decoration: none;
  padding:4%;
   text-align: center;
  background-color:#293730;
  border-width: 2px;
  border-color:#293730;
  border-style:solid;
}
#join-newsletter:hover{
  background-color:#5B6C3A;
}
.dottedcircle{
  height: 0;
  position: relative;
   width: 500px;
  margin: 0 auto;
  right: 82%;
  bottom: 100%;
}
.dottedcircle img{
  position: static;
  animation-name: rotate;
  animation-duration: 20s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
@keyframes rotate{
    from{ transform: rotate(-360deg); }
    to{ transform: rotate(360deg); }
}
#message-user{
   margin: 0 auto;
  text-decoration: none;
padding:4%;
   width:90%;
   text-align: center;
  background-color:white;
  border-width: 2px;
  border-color:#293730;
  border-style:solid;
}
#profile-header-right{
  width:50%;
  margin:auto;
}

#profile-section-main{
  background:#eae9e1;
  display: inline-block;
  width:100%;
  height: 670px;
  margin:auto;
}

#profile-section-sg{
  display:block;
}
#profile-section-sb{
  display:none;
}
#profile-section-ra{
  display:none;
}
#profile-section-about{
  float: left;
  width:50%;
  height:560px;
  background-color:#FEFCF8;
  padding:2%;
  margin:3%;
  border-radius:25px;
}
#study-group-buddy-activity{
  float: right;
  width:50%;
  height:560px;
  background-color:#FEFCF8;
  margin:3% 3% 0% 0;
  border-radius:25px;
  position:relative;
}
#sg, #sb, #ra{
  background-color: #293730;
  color: white;
}

#profile-section-sg, #profile-section-sb, #profile-section-ra{
  background-color:#FEFCF8;
  height:85%;
  width:96%;
  margin:auto;
  border-radius:inherit;
  position:absolute;
  top:15%;
}
#study-group-buddy-activity button{
  width:33.3%;
  height:12%;
  float:left;
  border:none;
}
#sg{
  border-radius:0px;
  border-top-left-radius:25px;
}
#ra{
  border-radius:0px;
  border-top-right-radius:25px;
}
#sb{
  border-radius:0px;
}
.study-group{
  padding-left:5%;
  height:35%;
}

.person{
  height:35%;
  padding-top:1%;
  padding-left:5%;
  text-align:left;
  margin:auto;
  position:relative;
}
.action_btn{
  width: 75%;
  margin-left: 16px;
    margin-top: -20px;
}
.person-text{
  position:relative;
  top:2%;
}
.person h3, h4, p{
  margin-top:0px;
  margin-bottom:0px;
}
.pfp-buddy{
  max-width:100%;
  max-height:100px;
  height: 300px;
  width: 20%;
  margin-left:70%;
  top:-1%;
  position: absolute;
  border-radius: 100%;
}
#about{
  float:left;
  width:45%;
  margin-top:8px;
  margin-bottom:8px;
  margin-left:2%;
}
 #about-p-2 {
  height:50%;
  width:100%;
  margin:2%;
}

#about-p-2 p {
  margin: 2%;
}
#fast-facts2{
  width:75%;
  height:56%;
  border-width: 1.5px;
  border-color:#293730;
  border-style:solid;
  border-radius:25px;
  padding:2% 4% 2% 4%;
  margin-top: 16px;
  margin-left: 2%;;
}
#uni, #locat, #join-profile, #person-contact-info{
  margin-top: 2%;
}
#fast-facts{
  width:100%;
  float: right;
  font-size: 16px;
  padding:2%;
  margin-left: 4%;
  margin-bottom: 4%;
}
#fast-facts p,h3 {
  margin:0px;
  font-size:95%;
}


#first-last-message-select, #user-select{
  padding:2%;
  position:relative;
  left:6%;
}
#chat{
  float:right;
  background-color:#FEFCF8;
  width:55%;
  height:70%;
  position:absolute;
  top:25%;
  left:40%;
  border-radius:25px;
}
#message-to-send{
  margin:auto;
  width:90%;
  height:40px;
  position:relative;
  top:90%;
}

#message-send-button{
  float:right;
  position:relative;
  top:91%;
  left:-2%;
}
#person-message-search {
  width:50%;
  float:left;
}
#message-nav{
    border:2px solid black;
  border-right:0px;
  border-radius:15px 0px 0 0;
  width:50%;
  height:100%;
}
.directmessages{
  padding: 2%;
  float:left;
  display:inherit;
  flex-direction:column;
  padding-right:30%;
  padding-top:0px;
  margin-top:0px;
}
#message-right{
    border-radius:0px 15px 0 0;
    border:2px solid black;
  width:100%;
  height:100%;
}
#message-right img{
  max-width:100%;
  width:20%;
  float:left;
  margin:auto;
}
#message-nav img{
  max-width:100%;
  width:40%;
  max-height:100%;
  height:70%;
  position:absolute;
  left:43%;
  top:27%;
}
#message-nav .person {
  margin-top:10%;
  font-size:90%;
}
.msgsection{
  margin-top: 24px;
}

body {
  background-color: #FEFCF8;
  margin:0px;
  height: 100vh;
}
h1, h2, p, a, button {
  color: #293730;
}
.svg-close{
    overflow:visible;
}
/*END ABI code */

/*kat code*/

.picturecards {
  text-align: center;
  width: 33%;
  padding: 1em;
  margin-bottom: 72px;
}

.picturecards h5{
  font-size: 20px;
  margin:24px 0 16px 0;
}

.imgcard {
  width: 70%;
  border-radius: 15px;
  border: 2px solid black;
}
.picturecards p {
  font-size: 20px;
  padding-right: 50px;
  padding-left: 50px;
}

.centeredtext {
  padding-top: 40px;
  padding-bottom: 24px;
  text-align: center;
}
.picwrapper {
  display: flex;
  justify-content: space-between;
}
.picwrapper p {
  font-size: 16px;
}

.slideshow-container {
  position: relative;
  background: #293730;
  color:white;
  width: 100%;
  height: 488px;
}

/* Slides */
.mySlides {
  display: none;
  padding: 100px;
  text-align: center;
}
.mySlides img {
  border-radius: 50%;
  margin: auto auto 40px auto;
  float: none;
  display: block;
}

.mySlides q {
  font-size: 18px;

}
#exit{
  position: absolute;
  left: 40%;
  top: 6%;
  width: 100%;
  color: #293831;
}
#grad2{
  background: orange;
  background-image: linear-gradient(to right, red , yellow);
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 32%;
  width: auto;
  margin-top: 16px;
      margin: 4%;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
  color: white
}

/* The dot/bullet/indicator container */
.dot-container {
  text-align: center;
  padding: 20px;
  background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active,
.dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {
  font-style: italic;
  font-size: 24px;
}

.author{
    margin-top: 48px;

}
.author p {
  color: white;
}

.placeofstudy{
  margin-top: 10px;
}


.bold{
  font-weight: bold;
  text-decoration: none;
  font-size: 18px;
}
.h1style {
  margin: 0;
  line-height: 72px;
}

header .icon{
  display: none;
}
#news-img {
  background:white;
  border:1px solid black
}

.news-section{
  height: 464px;
}
.News-sect-left{
  width:50%;
  float:left;
  margin-left: 4%;
  margin-right: 2%;
  display:inherit;
  flex-direction:column;
}
.sub_btn #join-newsletter{
margin-top:16px;
border-radius: 5px;
font-size: 1em;
text-align:center;
background-color:#293730;
border-width: 2px;
border-color: #293730;
border-style: solid;
color: #FEFCF8;
cursor: pointer;

}
.News-sect-right {
  width:50%;
  float:right;
  display:inherit;
 margin-left: 2%;
 margin-right: 4%;
  flex-direction:column;
}
.Something{
float:left;
margin:60px 64px;
height: 400px;
border:2px solid black;
background:gray;
width:25%}


 .newsimg{
  border-radius: 10px;
max-width: 100%;
height: auto;
}

.newsflexbox {
  width:100%;
  display:flex;
  align-items: center;
  justify-content: center;
  flex-direction:row;
}

.flex-container {
  display: flex;
  flex-direction: row;
  height:100%;
}

.flex-item-left {
border-radius:15px;
  flex: 60%;
margin:48px;
}


.flex-item-right {
border-radius:15px;
    background: #FDF8DC;
  border: 2px solid black;
  padding: 24px;
  margin:40px;
  flex: 40%;
}
.leadercontainer {
  text-align:center;
}

.leadercontainer::after {
  content: "";
  clear: both;
  display: table;
}

.leadercontainer img {
   margin: 80px auto auto auto;
   border-radius:50%;
      float: none;
      display: block;
}
.rank1{
  margin-top: 24px;
}

.image1rank{
  border: 2px solid #293730;
}
.leadercontainer span {
  font-size: 24px;
}
.personcontainer {
font-size:16px;
  border: 2px solid #293730;
  background-color: white;
  border-radius: 5px;
  padding: 8px;
  margin: 0px 0 16px 0;
  
}

.personcontainer img {
  border-radius: 50%;
  border:2px solid #293730;
}

.name{
  font-size: 16px;
}.rank{ font-weight: bold; font-size:24px; color: #293730}

.userboard{
display: flex;
  justify-content: space-evenly;
  align-items: center;}
/*Questionaire page*/
.containerbox{
            padding:1em 12em;
            width: 100%;
            text-align: center;
            margin: 0 auto;
        }
.Query .titletext{
            font-size: 48px
        }

        .leftcolumn{
            float: left;
            width: 50%;
            margin-top: 40px;
        }
        .rightcolumn{
            float: right;
            width: 50%;
            margin-top: 40px;
        }
           .Query input, .querylabel {
            display: block;
        }

        
        .Query input {
            margin-bottom: 1em;
            color: #293730;
        }

     .Query input[type=text], select {
          width: 400px;
          padding: 12px 20px;
          margin: 16px 0;
          display: inline-block;
          border: 1px solid #293730;
          border-radius: 4px;
          box-sizing: border-box;
}

.nextbn{  margin: 0 auto;
width: 10%;
  background-color: #293730;
  color: white;
  text-align: center;
  padding: 16px;
  margin-top: 22px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  position: absolute;
  right: 17%;
  text-decoration: none;
}.nextbn:hover{
  background-color: #5B6C3A;
}

.querylabel{
    text-align: left;
    margin-left: 12%;
}

select{
    font-size: 16px;
}


.messagecontainer{
  padding: 15px 25px;
   display: flex;
   flex-direction: row;
    justify-content: center;
    align-items: center;
  background:#eae9e1;
  height:90px;
  width: 64%;
  gap:20px;
   box-sizing: border-box;
  border-radius:10px;
  margin:0 20px 0 14px;
   position:absolute;
  bottom:2%
}

.messages-chat{
     position:relative;
  top:82%
}

.buttonsend{
    position: relative;
    width: 100%;
}
 .msginput {
  position: relative;
    width: 100%;
    display: block;
    box-sizing: border-box;
    padding: 10px 15px;
    border-radius: 25px;
    outline: none;
    border: 2px solid #293730 ;
}


*,
*::before,
*::after {
  box-sizing: border-box;
}


.msgflexbox{
  width:100%;
  justify-content:space-around;
  display:flex;
  flex-direction:row;
}

.discussions .discussion {
  width: 100%;
  height: 87.2px;
  display:flex;
  align-items: center;
  cursor: pointer;
}

.person{
  border:1.5px solid black;
  border-radius:5px;
  width:100%;
  padding-top:1%;
  padding-left:5%;
  text-align:left;
  margin:auto;
  position:relative;
}
/*#message-nav .person {
  margin-top:3%;
  font-size:90%;
}*/
.person-text{
  position:relative;
  top:2%;
}
.person h3, h4, p{
  margin-top:0px;
  margin-bottom:0px;
}
.runningtext img{
  width: 2%;
}
/*message*/
#message-section{
  width:90%;
  margin:auto;
  background-color:white;
  height:80%;
  display:flex;
  flex-direction: row;
  align-items:center;
  position:absolute;
  top:16%;
}
#message-header{
  width:100%;
  padding-left: 20px;
  height:10%;
  border-bottom: 2px solid black;
}

#person-select{
  float:left;
  text-align:left;
  height:20%;
  border-bottom: 2px solid black;
  width:100%;
  position:relative;
  left:-36%;
}
.chat{width:100%}

.header-chat {
  padding:10px 0 12px 24px;
  border-bottom: 2px solid black;
  height: 83.5px;

}
.person-bio{float:left; position: relative;display: block;}
.header-chat .person-bio{
  margin:-6px 4px 0 20px
}
.selectedname, .activity{
  padding-bottom:2px;
  position:relative;
  left:4%;
}
.profile-pic{
  border-radius:50%;
  border: 2px solid #293730;
  margin:auto;
float:left;
}

#first-last-message-select, #user-select{
  padding:1%;
  position:relative;
  left:6%;
}
#chat{
  float:right;
  background-color:#FEFCF8;
  width:40%;
  height:70%;
  position:absolute;
  top:25%;
  left:40%;
  border-radius:25px;
}

#message-nav{
    border:2px solid black;
  border-right:0px;
  border-radius:15px 0px 0 0;
  width:50%;
  height:100%;
}

.discussions{padding:16px 0 16px 0;position:relative;border-bottom:2px solid black;bottom:27px}

.directmessages{
  padding: 2%;
  float:left;
  width:100%;
  display:inherit;
  flex-direction:column;
  padding-top:0px;
  margin-top:0px;
}

#message-nav img{
  max-width:100%;
  width:40%;
  max-height:100%;
  height:70%;
  position:absolute;
  left:43%;
  top:27%;
}
#message-nav .person {
  margin-top:3%;
  font-size:90%;
}
.search{
  margin:0 16px 0 8px;
    padding: 10px 15px;
    border-radius: 15px;
    border: 2px solid #949494;
    outline: none;
    width: 96%;
}

.discussion .photo {
    margin-left:0px;
    display: block;
  float:left;
    width: 45px;
    height: 45px;
    border-radius: 50px;
}
.morebtn{
  position: absolute;
  display: block;
  right: 2%;
  top: 4%;
}

.sendbtn{
  position: absolute;
  right: 4%;
  color: #5B6C3A;
  font-weight: bold;
  top: 11px;
  display: block;
}

@media screen and (min-width:770px) and (max-width: 850px){
#message-section{
  width:90%;
  margin:auto;
  background-color:white;
  height:80%;
  display:flex;
  flex-direction: row;
  align-items:center;
  position:absolute;
  top:18%;
}
.messagecontainer{
  padding: 15px 25px;
   display: flex;
   flex-direction: row;
    justify-content: center;
    align-items: center;
  background:#eae9e1;
  height:90px;
  width: 62%;
  gap:20px;
   box-sizing: border-box;
  border-radius:10px;
  margin:0 20px 0 16px;
  position:absolute;
  bottom:2%
}

.messages-chat{
     position:relative;
  top:78%
}
}

@media screen and (min-width:480px) and (max-width: 770px){
 #message-section{
  width:95%;
  margin:auto;
  background-color:white;
  height:75%;
  display:flex;
  flex-direction: row;
  align-items:center;
  position:absolute;
  top:18%;
} 
  .messages-chat{
     position:relative;
  top:100%
}
.messages-chat {
  padding: 8px 0 0 0;
   top:58%
}

.chat .messages-chat .message{
  display:flex;
  align-items: center;
  margin-bottom: 10px;
}

.chat .messages-chat .text {
  margin: 4px 20px;
  background-color: #293730;
  color:white;
  padding: 15px;
  border-radius: 15px;
}
.messagecontainer{
  padding: 10px 20px;
   display: flex;
   flex-direction: row;
    justify-content: center;
    align-items: center;
  background:#eae9e1;
  height:90px;
  width: 62%;
  gap:10px;
   box-sizing: border-box;
  border-radius:10px;
  margin:0 0px 0 8px;
  position:absolute;
  bottom:2%
}
 .message-nav{
width: 50%;
 }
}
@media screen and (min-width:390px) and (max-width: 480px){
  .desc-contact{
    display:none;
  }
  .directmessages{
  padding:0%;
  flex-direction:row;
}
#message-nav .person {
  margin-top:0%;
  font-size:0%;
}
.morebtn{
  position: absolute;
  right: 6%;
  bottom: 18%;
}
  .msgsection
  .person{
  width:30%;
  margin:auto;
}
.msgsection{
  margin-top: 0px;
}

.person{
  border:0px solid black;
  border-radius:5px;
  width:100%;
  padding-top:1%;
  padding-left:5%;
  text-align:left;
  margin:auto;
  position:relative;
}

  #message-section{
     flex-direction: column;
  height:100%;
     top:16%;
  }


  #message-nav { 
  border-right:2px solid black;
    border-bottom:0px;
     width:100%;
  height:36%;
    margin-bottom:0%;
    border-radius:15px 15px 0 0;
    
  }
  #message-header{
  width:100%;
  font-size: 24px;
  padding-bottom: 48px;
  padding-left: 20px;
  height:10%;
  border-bottom: 2px solid black;
}

  #message-right{  
  background:none;
  border:2px solid black;
     border-radius:0;
  width:100%;
  height:100%;
  }
 
.msgflexbox{
  flex-direction:column;
}

  .profile-option {
    width: 30px;
    height: 30px;
    position: absolute;
    right: 15px;
    top: 83%;
  }
  .directmessages .msgsection{
    display:flex;
    padding-top: 2%;
    flex-direction:row;
  }


.time {
  font-size: 10px;
  margin-bottom:10px;
}

.response-time {
  float: right;
  margin-right: 40px;
}
.messages-chat{
  margin-top: 0%;
}
.response {
  float: right;
  margin-right: 0px;
  margin-left:auto; /* flexbox alignment rule */
}

.messagecontainer{
  padding: 15px 6px;
   height:90px;
   width: 99%;
  border-radius:0;
    position:absolute;
   display: flex;
  gap:8px;
  margin:0;
  bottom:.13em
}

  .discussion .photo {
    margin:auto;
    padding: 0%;
    width: 45px;
    height: 45px;
    border-radius: 50px;
}
}
@media screen and (min-width:380px) and (max-width: 390px){
  .desc-contact{
    display:none;
  }
  .directmessages{
  padding:0%;
  flex-direction:row;
}
#message-nav .person {
  margin-top:0%;
  font-size:0%;
}
.morebtn{
  position: absolute;
  right: 6%;
  bottom: 32%;
}
  .msgsection
  .person{
  width:30%;
  margin:auto;
}
.msgsection{
  margin-top: 0px;
}

.person{
  border:0px solid black;
  border-radius:5px;
  width:100%;
  padding-top:1%;
  padding-left:5%;
  text-align:left;
  margin:auto;
  position:relative;
}

  #message-section{
     flex-direction: column;
  height:90%;
     top:12%;
  }


  #message-nav { 
  border-right:2px solid black;
    border-bottom:0px;
     width:100%;
  height:30%;
    margin-bottom:0%;
    border-radius:15px 15px 0 0;
    
  }
  #message-header{
  width:100%;
  font-size: 24px;
  padding-bottom: 48px;
  padding-left: 20px;
  height:10%;
  border-bottom: 2px solid black;
}

  #message-right{  
  background:none;
  border:2px solid black;
     border-radius:0;
  width:100%;
  height:100%;
  }
 
.msgflexbox{
  flex-direction:column;
}

  .profile-option {
    width: 30px;
    height: 30px;
    position: absolute;
    right: 15px;
    top: 83%;
  }
  .directmessages .msgsection{
    display:flex;
    padding-top: 4%;
    flex-direction:row;
  }


.time {
  font-size: 10px;
  margin-bottom:10px;
}

.response-time {
  float: right;
  margin-right: 40px;
}
.messages-chat{
  margin-top: 42%;
}
.response {
  float: right;
  margin-right: 0px;
  margin-left:auto; /* flexbox alignment rule */
}

.messagecontainer{
  padding: 15px 6px;
   height:90px;
   width: 99%;
  border-radius:0;
    position:absolute;
   display: flex;
  gap:8px;
  margin:0;
  bottom:.13em
}

  .discussion .photo {
    margin:auto;
    padding: 0%;
    width: 45px;
    height: 45px;
    border-radius: 50px;
}

}

@media screen and (min-width:350px) and (max-width: 380px){
   
.desc-contact{
    display:none;
  }
  .directmessages{
  padding:0%;
  flex-direction:row;
}
#message-nav .person {
  margin-top:0%;
  font-size:0%;
}
.morebtn{
  position: absolute;
  right: 6%;
  bottom: 18%;
}
  .msgsection
  .person{
  width:30%;
  margin:auto;
}
.msgsection{
  margin-top: 0px;
}

.person{
  border:0px solid black;
  border-radius:5px;
  width:100%;
  padding-top:1%;
  padding-left:5%;
  text-align:left;
  margin:auto;
  position:relative;
}

  #message-section{
     flex-direction: column;
  height:100%;
     top:16%;
  }


  #message-nav { 
  border-right:2px solid black;
    border-bottom:0px;
     width:100%;
  height:36%;
    margin-bottom:0%;
    border-radius:15px 15px 0 0;
    
  }
  #message-header{
  width:100%;
  font-size: 24px;
  padding-bottom: 48px;
  padding-left: 20px;
  height:10%;
  border-bottom: 2px solid black;
}

  #message-right{  
  background:none;
  border:2px solid black;
     border-radius:0;
  width:100%;
  height:100%;
  }
 
.msgflexbox{
  flex-direction:column;
}

  .profile-option {
    width: 30px;
    height: 30px;
    position: absolute;
    right: 15px;
    top: 83%;
  }
  .directmessages .msgsection{
    display:flex;
    padding-top: 4%;
    flex-direction:row;
  }


.time {
  font-size: 10px;
  margin-bottom:10px;
}

.response-time {
  float: right;
  margin-right: 40px;
}
.messages-chat{
  margin-top: 0%;
}
.response {
  float: right;
  margin-right: 0px;
  margin-left:auto; /* flexbox alignment rule */
}

.messagecontainer{
  padding: 15px 6px;
   height:90px;
   width: 99%;
  border-radius:0;
    position:absolute;
   display: flex;
  gap:8px;
  margin:0;
  bottom:.13em
}

  .discussion .photo {
    margin:auto;
    padding: 0%;
    width: 45px;
    height: 45px;
    border-radius: 50px;
}
}

@media screen and (min-width:320px) and (max-width: 350px){
.desc-contact{
    display:none;
  }
  .directmessages{
  padding:0%;
  flex-direction:row;
}
#message-nav .person {
  margin-top:0%;
  font-size:0%;
}
.morebtn{
  position: absolute;
  right: 6%;
  bottom: 18%;
}
  .msgsection
  .person{
  width:30%;
  margin:auto;
}
.msgsection{
  margin-top: 0px;
}

.person{
  border:0px solid black;
  border-radius:5px;
  width:100%;
  padding-top:1%;
  padding-left:5%;
  text-align:left;
  margin:auto;
  position:relative;
}

  #message-section{
     flex-direction: column;
  height:100%;
     top:16%;
  }


  #message-nav { 
  border-right:2px solid black;
    border-bottom:0px;
     width:100%;
  height:36%;
    margin-bottom:0%;
    border-radius:15px 15px 0 0;
    
  }
  #message-header{
  width:100%;
  font-size: 24px;
  padding-bottom: 48px;
  padding-left: 20px;
  height:10%;
  border-bottom: 2px solid black;
}

  #message-right{  
  background:none;
  border:2px solid black;
     border-radius:0;
  width:100%;
  height:100%;
  }
 
.msgflexbox{
  flex-direction:column;
}

  .profile-option {
    width: 30px;
    height: 30px;
    position: absolute;
    right: 15px;
    top: 83%;
  }
  .directmessages .msgsection{
    display:flex;
    padding-top: 4%;
    flex-direction:row;
  }


.time {
  font-size: 10px;
  margin-bottom:10px;
}

.response-time {
  float: right;
  margin-right: 40px;
}
.messages-chat{
  margin-top: 0%;
}
.response {
  float: right;
  margin-right: 0px;
  margin-left:auto; /* flexbox alignment rule */
}

.messagecontainer{
  padding: 15px 6px;
   height:90px;
   width: 99%;
  border-radius:0;
    position:absolute;
   display: flex;
  gap:8px;
  margin:0;
  bottom:.13em
}

  .discussion .photo {
    margin:auto;
    padding: 0%;
    width: 45px;
    height: 45px;
    border-radius: 50px;
}

  }

/*END ABI code */


.centeredtext {
  padding-top: 40px;
  padding-bottom: 40px;
  text-align: center;
}

.picturecards {
  text-align: center;
  width: 33%;
  padding: 1em;
  margin: 1em;
  margin-bottom: 40px;
}


/* The dot/bullet/indicator container */
.dot-container {
  text-align: center;
  padding: 20px;
  background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active,
.dot:hover {
  background-color: #717171;
}



.online {
  position: relative;
  top: 0px;
  left: 35px;
  width: 13px;
  height: 13px;
  background-color: #8BC34A;
  border-radius: 13px;
  border: 3px solid #FAFAFA;
}

.online2{
  position: relative;
  top: 2px;
  width: 16px;
  height: 16px;
  left: 44px;
  border-radius: 13px;
  background-color: #8BC34A;
  border: 3px solid #FAFAFA;
}


.discussions .discussion .name {
  margin: 0 0 0 20px;
  font-size: 11pt;
  color:#515151;
}

.discussions .discussion .profilemessage {
  margin: 6px 0 0 20px;
  font-size: 9pt;
  color:#515151;
}

.messages-chat {
  padding: 25px 0;
}

.chat .messages-chat .message{
  display:flex;
  align-items: center;
  margin-bottom: 10px;
}

.chat .messages-chat .text {
  margin: 0 20px;
  background-color: #293730;
  color:white;
  padding: 15px;
  border-radius: 15px;
}

.time {
  font-size: 10px;
  margin-bottom:10px;
}

.response-time {
  float: right;
  margin-right: 40px;
}

.response {
  float: right;
  margin-right: 0px;
  margin-left:auto; /* flexbox alignment rule */
}


@media screen and (min-width:986px) and (max-width:1237px){
.containerbox{
            padding:1em 5em;
            width: 100%;
            text-align: center;
            margin: 0 auto;
        }

.Query .nextbn {
  width: 13%;
  background-color: #293730;
  color: white;
  text-align: center;
  padding: 16px;
  margin-top: 22px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  position: absolute;
  right: 11%;
}

}

@media screen and (min-width:765px) and (max-width:986px){

.containerbox{
            padding:1em 2em;
            width: 100%;
            text-align: center;
            margin: 0 auto;
        }

         .Query input[type=text], select {
  width: 340px;
  padding: 12px 20px;
  margin: 16px 0;
  display: inline-block;

  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.nextbn {
     position: absolute;
  right: 9%;
  width: 20%;
}

.Query .nextbn {
}
}

@media screen and (min-width:613px) and (max-width:765px){

.containerbox{
            padding:1em 2em;
            width: 100%;
            text-align: center;
            margin: 0 auto;
    
        }

         .Query input[type=text], select {
  width: 272px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.Query .titletext{
            font-size: 40px;
        }

        .nextbn {
position: absolute;
  right: 9%;
  width: 24%;
}
}

@media screen and (min-width:518px) and (max-width:613px){
 .containerbox{
            padding:1.4em;
            width: 100%;
            text-align: center;
            margin: 0 auto;

        }
  .Query input[type=text], select {
  width: 228px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.Query .titletext{
            font-size: 36px
        }
.nextbn {
  position: absolute;
  right: 6%;
  width: 24%;
}

}

@media screen and (min-width:471px) and (max-width:518px) {
     .query{
     }
     .containerbox{
            padding:10px;
            width: 100%;
            text-align: center;
            margin: 0 auto;
            padding-bottom: 90px;

        }
    .Query .titletext{
            font-size: 32px
        }
  .leftcolumn, .rightcolumn, .Query .nextbn {
    width: 100%;
    margin-top: 12px;
  }
  .querylabel{
    text-align: center;
    margin-left: 0%;
}

.Query .nextbn {
    margin: 0 auto;
width: 75%;
  padding: 16px;
  margin-top: 8px;
  right: 12%;
}

}
@media screen and (min-width:320px) and (max-width:471px) {
         .containerbox{
            padding:16px;
            width: 100%;
            text-align: center;
            margin: 0 auto;
              padding-bottom: 104px;
        }
    .Query .titletext{
            font-size: 24px;
             margin-top: 96px;
        }
  .leftcolumn, .rightcolumn, .Query .nextbn {
    width: 100%;
    margin-top: 40px;
    margin-bottom: -16px;
  }
  .Query input[type=text], select {
  width: 280px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.Query .nextbn {
    margin: 0 auto;
width: 62%;
  padding: 16px;
  margin-top: 16px;
  right: 19%;
}
  .querylabel{
    text-align: center;
    margin-left: 0%;
}

}

@media screen and (min-width:1020px) and (max-width:1040px){

  .intro-sect-left {
  width:100%;
  float:none;
  padding: 16px 72px 32px 64px;
  flex-direction:column;
  margin: 4% 0% 4% 0%;
}
  .dottedcircle{
  height: 0;
  position: relative;
   width: 500px;
  margin: 0 auto;
  right: 80%;
  bottom: 100%;
}
.navbar-links li a {
      display: block;
    text-decoration: none;
    color:black;
    padding: 1rem .5rem 1rem .5rem;
}
#dropdown-img {
  max-width:16px;
  max-height: 16px;
  margin-right: 8px;
  display:inherit;
  position:relative;
}
.dropdown-button{
  width:100%;
  height:100%;
  margin-left: 49px;
  padding: 1rem 1rem 1rem 1rem;
  background-color:#FEFCF8;
  border-color:#FEFCF8;
  border-style:solid;
  font-size:.9em;
}

}
/*END KAT CODE*/


@media screen and (min-width:900px) and (max-width:1020px){
 .profile-nav-info{margin-left: 0px;}
 #body #header-logo{
  max-width:10%;
}
#header-logo{max-width:56%;}
.header-left {
  width:88%;
  margin-left:0%;
}

.navbar-links li a {
      display: block;
    text-decoration: none;
    color:black;
    padding: 1.5rem .5rem 1.5rem .5rem;
}
.dropdown-button{
  margin-left: 16px;
}
.homepage #get-started {width:39%;padding:3%;}
.quote2{
    margin-top:10%;
    margin-right: 20px;
     margin-left: 20px;
    margin-bottom:10%;
}
.svg-container{
  width: 900px;
 height: 950px;
 resize: both;
 overflow: auto;
 border: 1px dashed #aaa;
}


#home-quote{font-size: 29px}
 .headerbody {
  font-size: 16px;
  padding: 0 48px 0 0;
  margin-top: 16px;
  margin-bottom: 24px;
}
.h1style{font-size: 56px;line-height: 64px}
.intro-sect-left {
  width:100%;
  float:none;
  padding: 16px 72px 32px 32px;
  flex-direction:column;
  margin: 4% 0% 4% 0%;
}

.intro-sect-right{
  width:40%;
  float:right;
  display:inherit;
  background-color: #FDF8DC;
  border-left-width: 1px;
  border-left-color:black;
  border-left-style:solid;
  padding-right:0%;
  padding-top:1%;
}
.homepage #get-started {
  width:24%;
  padding:2%;
  background-color:#293730;
  border-width: 2px;
  border-color:#293730;
  border-style:solid;
  color:#FEFCF8;
}
#get-started:hover{
  background-color:#5B6C3A;
}
 #bodywidth, #bodywidth2, #bodywidth3{
    width:100%;
      margin:16px auto 16px auto;
  }
  .homepage #rect-home-1, #rect-home-2 {
  fill:#FEFCF8;
  stroke:#293730;
  stroke-width:2px;
  height: 35%;
  width: 86%;
}
.bannerimage{
  position: absolute;
  right: 2%;
  top: 10%;
  width: 346px;
}
.aboutmeimage{
   position: relative;
  left: 4%;
  top: 0%;
  width: 480px;
}
}


@media screen and (min-width:480px) and (max-width:900px){
   #body #header-logo{max-width:2%}.toggle-button {display: flex}.signin,.signup{display:none }
.navbar-links {display: none;width: 100%;}
.sidenav {padding-top: 15px;}
.sidenav a {font-size: 18px;} 
.header-left {
  width:100%;
  float:left;
  display:inherit;
  flex-direction:inherit;
  margin:0
}

.picturecards {
  width:100%;
  margin: auto;
  padding: 0em;
  margin-bottom: 24px;
}

.picturecards p {
  font-size: 16px;
  padding-right: 0px;
  padding-left: 0px;
}

.homepage #rect-home-1, #rect-home-2 {
  fill:#FEFCF8;
  stroke:#293730;
  stroke-width:2px;
  height: 64%;
  width: 80%;
}


.dottedcircle{
  display: none;
}
.dropdown-button{
  margin-left: 40x;
}
  .header-right{width:100%}
  .navbar-links ul {width: 100%;flex-direction: column;}

  .navbar-links ul li {text-align: center;}

  .navbar-links ul li a {padding: .5rem 1rem;}

  .navbar-links.active {display: flex;}

  .flexboxbanner{max-width: 100%;flex-direction: column-reverse;}
  
  .h1style {margin: auto;overflow-x:hidden;font-size: 40px;line-height: 48px}


 .headerbody {
  overflow-y: hidden;
  margin-top: 24px;
  margin-bottom: 32px;
}
.intro-sect-left {
  width:100%;
  float:none;
  padding: 32px 46px 32px 46px;
  flex-direction:column;
  margin: 4% 0% 4% 0%;

}

.picturecards h5{
  font-size: 18px;
  margin:24px 0 16px 0;
}

.mySlides {
  padding: 50px;
  text-align: center;
}
.mySlides img {
  border-radius: 50%;
  margin: auto auto 40px auto;
  float: none;
  display: block;
}

.mySlides q {
  font-size: 16px;

}


.author{
    margin-top: 32px;
}

.bold{font-size: 16px}.placeofstudy{font-size: 16px}
.intro-sect-right {
  width:100%;
  height: 280px;
  float:none;
  display:inherit;
  background-color: #FDF8DC;
  border-left: 0px;
  border-bottom-width: 2px;
  border-bottom-color:black;
  border-bottom-style:solid;
  padding-left:29%;
  padding-top:0%;
}

.prev,
.next {
      margin: 1%;
  color: white;
  font-size: 16px;
}

#dropdown-img {
  max-width:16px;
  max-height: 16px;
  margin-right: 8px;
  display:inherit;
  position:relative;
}

.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev,
.next {top:40%;}
  
  .imgcard {
  width: 48%;
  border: 2px solid black;
  margin-bottom: 8px;
}
  #bodywidth, #bodywidth2, #bodywidth3{
    width:70%;
      margin:20px auto 20px auto;
  }
.picwrapper {
  display: flex;
  flex-direction: column;
  justify-content: center
}
  .centeredtext {
  padding-bottom: 48px;
  text-align: center;
}
.detailflexbox, .newsflexbox {
  flex-direction:column;
}
.news-section{
  height: 800px;
}
  .detail-sect-left {
  width:100%;
  height:372px;
  float:none;
}
.detail-sect-right {
  width:100%;
  float:none;
  padding:0%;
  height:348px;
  background-color:#ADB499;
  }

  q {font-size: 16px}
  .textde{padding-top:0%;padding-right:40px; padding-left:40px;margin-top:-60px}.detail-sect-right p{
margin-top:24px; margin-bottom:32px}
.textde2{padding-top:0%;padding-right:40px; padding-left:40px}
  .detail-sect-right button{
  float:none;
   margin-left:32px;
  font-size:.9em;
  text-align:left;
}

 .News-sect-left {
  width:100%;
  float:none;
  margin:0 auto 0 auto;}


.News-sect-right {
  width:100%;
  float:none;
  display:inherit;
  }
   .News-sect-right button{
  float:none;
   margin-left:38px;
  font-size:.9em;
  text-align:left;
}
.imageright{
  padding: 0 4% 0% 4%;
}
 .newsimg{
  border-radius: 15px;
max-width:100%;
height: auto;
}

.bannerimage{
  position: relative;
  right: 15%;
  top:-25%;
  width: 432px;
}
.aboutmeimage{
   position: relative;
  left:10%;
  width: 400px;
}
.homepage #get-started {
  width:32%;
padding:2.5%;}

.News-sect-left{
  width:100%;
  float:none;
  margin-left: 4%;
  margin-right: 4%;
  display:inherit;
  flex-direction:column;
}
.sub_btn #join-newsletter{
margin-top:16px;
border-radius: 5px;
font-size: 1em;
text-align:center;
background-color:#293730;
border-width: 2px;
border-color: #293730;
border-style: solid;
color: #FEFCF8;
cursor: pointer;

}
.news-section{
  height: 700px;
}
.imageright{
  padding: 0% 4% 0% 4%;
}
.dropdown{display: none;}
.flexboxprofile{
  flex-direction: column;
    background-color:#eae9e1;
}
.quote2{
    margin-top:15%;
    margin-right: 20px;
     margin-left: 20px;
    margin-bottom:15%;
}
#home-quote{font-size: 24px}
#profile-header-right{
 margin: 24px auto 16px auto;
}
  .profile-header {
    display: flex;
    height: 100%;
    flex-direction: column;
    text-align: center;
    padding-bottom: 20px;
  }

  .profile-img {
    float: left;
    width: 100%;
    height: 200px;
  }

  .profile-img img {
    position: relative;
    height: 240px;
    width: 240px;
    left: 0px;
  }

  #Useraddress, #Twitteruser,#Instagramlink{font-size: 14px;padding: 0;padding: 10px }

  .profile-nav-info {
    text-align: center;
    margin: auto 8px;
  }

.picturecards {
  text-align: center;
  width: 100%;
  padding: 1em;
  margin: 1em;
  margin-bottom: 48px;
}

  .main-bd {
    flex-direction: column;
    padding-right: 0;
  }

  .profile-side {
    width: 100%;
    text-align: center;
    padding: 20px;
    margin: 5px 0;
  }

  .profile-nav-info .address {
    justify-content: center;
  }

  .user-rating {
    justify-content: center;
  }
 

#profile-section-about{
  width:94%;
  float:left;
  background-color:orange;
  margin:5% auto auto auto;
  border-radius:25px;
}
#study-group-buddy-activity{
  width:94%;
  height:560px;
  background-color:#FEFCF8;
  margin:5% auto 5% auto;
  border-radius:25px;
  position:relative;
}
#message-user, #add-buddy{
  width:100%;  
}
#fast-facts2{
  width:80%;
  height:56%;
  border-width: 1.5px;
  border-color:#293730;
  border-style:solid;
  border-radius:25px;
  padding:2% 4% 2% 4%;
  margin-top: 16px;
  margin-left: 2%;;
}

#uni, #locat, #join-profile, #person-contact-info{
  margin-top: 2%;
}
 #about-p-2 {
  height:50%;
  width:100%;
  margin:1%;
}

#about-p-2 p {
  margin: 2%;
}
 .picturecards {
  width: 100%;
  padding: 0;
  margin:auto;
  margin-bottom: 40px;
}


.flex-container {
    flex-direction: column-reverse;
  }
 .leadercontainer img {
   margin: 40px auto auto auto}
   
  .profile-option {
  position: initial;
  width:40%;
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
}
  .buttonsarea{
      display:flex;
    align-itemst:center;
    justify-content:center }
#Useraddress, #Twitteruser,#Instagramlink{
  float:left;
  margin-top:24px;
  margin-bottom:24px;
  margint:auto;
text-align:center}

.profilepage p{
  font-size: 16px;
}
}

#home-quote{font-size:22px}

}


@media screen and (min-width:320px) and (max-width:480px){
 #body #header-logo{max-width:2%}.toggle-button {display: flex}.signin,.signup{display:none }
.navbar-links {display: none;width: 100%;}
.sidenav {padding-top: 15px;}
.sidenav a {font-size: 18px;} 
.header-left {
  width:100%;
  float:left;
  display:inherit;
  flex-direction:inherit;
  margin:0
}
.flex-container{
  flex-direction: column-reverse;
}
.flex-item-right {
  padding: 32px;
  margin:20px 0 20px 0;
}
.rank1{
  margin-top: 16px;
}
.flex-item-left {
  flex: 60%;
margin:0px;
}
.leadercontainer img {
   margin: 16px auto auto auto;
      float: none;
      display: block;
}

.homepage #rect-home-1, #rect-home-2 {
  fill:#FEFCF8;
  stroke:#293730;
  stroke-width:2px;
  height: 64%;
  width: 80%;
}


.dottedcircle{
  display: none;
}
.dropdown-button{
  margin-left: 40x;
}
  .header-right{width:100%}
  .navbar-links ul {width: 100%;flex-direction: column;}

  .navbar-links ul li {text-align: center;}

  .navbar-links ul li a {padding: .5rem 1rem;}

  .navbar-links.active {display: flex;}

  .flexboxbanner{max-width: 100%;flex-direction: column-reverse;}
  
  .h1style {margin: auto;overflow-x:hidden;font-size: 32px;line-height: 40px}

#home-quote{font-size: 16px; margin:16% 5% 16% 5%}
 .headerbody {
  overflow-y: hidden;
  margin-top: 8px;
  margin-bottom: 16px;
}
.intro-sect-left {
  width:100%;
  float:none;
  padding: 8px 46px 8px 32px;
  flex-direction:column;
  margin: 4% 0% 4% 0%;

}

.picturecards h5{
  font-size: 18px;
  margin:24px 0 16px 0;
}

.mySlides {
  padding: 50px;
  text-align: center;
}
.mySlides img {
  border-radius: 50%;
  margin: auto auto 40px auto;
  float: none;
  display: block;
}

.mySlides q {
  font-size: 16px;}

.author{
    margin-top: 32px;
}

.bold{font-size: 16px}.placeofstudy{font-size: 16px}
.intro-sect-right {
  width:100%;
  height: 240px;
  float:none;
  display:inherit;
  background-color: #FDF8DC;
  border-left: 0px;
  border-bottom-width: 2px;
  border-bottom-color:black;
  border-bottom-style:solid;
  padding-left:29%;
  padding-top:0%;
}

.prev,
.next {
      margin: 1%;
  color: white;
  font-size: 16px;
}

#dropdown-img {
  max-width:16px;
  max-height: 16px;
  margin-right: 8px;
  display:inherit;
  position:relative;
}

.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev,
.next {top:40%;}
  
  .imgcard {
  width: 48%;
  border: 2px solid black;
  margin-bottom: 8px;
}
  #bodywidth, #bodywidth2, #bodywidth3{
    width:70%;
      margin:20px auto 20px auto;
  }
.picwrapper {
  display: flex;
  flex-direction: column;
  justify-content: center
}
  .centeredtext {
  padding-bottom: 48px;
  text-align: center;
}
.detailflexbox, .newsflexbox {
  flex-direction:column;
}
.news-section{
  height: 560px;
}
  .detail-sect-left {
  width:100%;
  height:240px;
  float:none;
}
.detail-sect-right {
  width:100%;
  float:none;
  padding:0%;
  height:400px;
  }

  q {font-size: 16px}
  .textde{padding-top:0%;padding-right:40px; padding-left:40px;margin-top:-0px}.detail-sect-right p{
margin-top:24px; margin-bottom:32px}
.textde2{padding-top:16%;padding-right:40px; padding-left:40px}
  .detail-sect-right button{
  float:none;
   margin-left:32px;
  font-size:.9em;
  text-align:left;
}

 .News-sect-left {
  width:100%;
  height: 180px;
  float:none;
  margin:-40px auto 0 auto;}


.News-sect-right {
  width:100%;
  float:none;
  display:inherit;
  }
   .News-sect-right button{
  float:none;
   margin-left:38px;
  font-size:.9em;
  text-align:left;
}
.imageright{
  padding: 0 4% 0% 4%;
}
 .newsimg{
  border-radius: 15px;
max-width:100%;
height: auto;
}

.bannerimage{
  position: relative;
  right: 15%;
  top:-50%;
  width: 432px;
}
.aboutmeimage{
   position: relative;
  left:4%;
  width: 300px;
}
.homepage #get-started {
  width:32%;
padding:2.5%;}


.sub_btn #join-newsletter{
margin-top:16px;
border-radius: 5px;
font-size: 1em;
text-align:center;
background-color:#293730;
border-width: 2px;
border-color: #293730;
border-style: solid;
color: #FEFCF8;
cursor: pointer;

}

.dropdown{display: none;}
 .picturecards {
  width:100%;
  margin: auto;
  padding: 0em;
  margin-bottom: 24px;
}

.picturecards p {
  font-size: 16px;
  padding-right: 0px;
  padding-left: 0px;
}
.homepage #get-started {
  width:48%;
padding:4%;
}
.sub_btn #join-newsletter{
margin-top:16px;
border-radius: 5px;
font-size: 1em;
text-align:center;
background-color:#293730;
border-width: 2px;
border-color: #293730;
border-style: solid;
color: #FEFCF8;
cursor: pointer;

}


.flexboxprofile{
  flex-direction: column;
    background-color:#eae9e1;
}
.quote2{
    margin-top:15%;
    margin-right: 20px;
     margin-left: 20px;
    margin-bottom:15%;
}
#home-quote{font-size: 24px}
#profile-header-right{
 margin: 24px auto 16px auto;
}
  .profile-header {
    display: flex;
    height: 100%;
    flex-direction: column;
    text-align: center;
    padding-bottom: 20px;
  }

  .profile-img {
    float: left;
    width: 100%;
    height: 200px;
  }

  .profile-img img {
    position: relative;
    height: 240px;
    width: 240px;
    left: 0px;
  }

  #Useraddress, #Twitteruser,#Instagramlink{font-size: 14px;padding: 0;padding: 10px }

  .profile-nav-info {
    text-align: center;
    margin: auto 8px;
  }

.picturecards {
  text-align: center;
  width: 100%;
  padding: 1em;
  margin: 1em;
  margin-bottom: 48px;
}

  .main-bd {
    flex-direction: column;
    padding-right: 0;
  }

  .profile-side {
    width: 100%;
    text-align: center;
    padding: 20px;
    margin: 5px 0;
  }

  .profile-nav-info .address {
    justify-content: center;
  }

  .user-rating {
    justify-content: center;
  }
 

#profile-section-about{
  width:94%;
  float:left;
  background-color:#FEFCF8;
  margin:5% auto auto auto;
  border-radius:25px;
}
#study-group-buddy-activity{
  width:94%;
  height:560px;
  background-color:#FEFCF8;
  margin:5% auto 5% auto;
  border-radius:25px;
  position:relative;
}
#message-user, #add-buddy{
  width:100%;  
}
#fast-facts2{
  width:80%;
  height:56%;
  border-width: 1.5px;
  border-color:#293730;
  border-style:solid;
  border-radius:25px;
  padding:2% 4% 2% 4%;
  margin-top: 16px;
  margin-left: 2%;;
}

#uni, #locat, #join-profile, #person-contact-info{
  margin-top: 2%;
}
 #about-p-2 {
  height:50%;
  width:100%;
  margin:1%;
}

#about-p-2 p {
  margin: 2%;
}
 .picturecards {
  width: 100%;
  padding: 0;
  margin:auto;
  margin-bottom: 40px;
}


.flex-container {
    flex-direction: column-reverse;
  }
 .leadercontainer img {
   margin: 40px auto auto auto}
   
  .profile-option {
  position: initial;
  width:40%;
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
}
  .buttonsarea{
      display:flex;
    align-itemst:center;
    justify-content:center }
#Useraddress, #Twitteruser,#Instagramlink{
  float:left;
  margin-top:24px;
  margin-bottom:24px;
  margint:auto;
text-align:center}

 #Useraddress,#Twitteruser{
  margin-bottom: 0;
} #Instagramlink{
  margin-top: 0;
}
.profilepage p{
  font-size: 16px;
}

}
@media (max-width: 400px) {

   .buttonsarea{
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;

  }
.flex-container {
    flex-direction: column-reverse;
  }

.dottedcircle{
  display: none;
}


  .profile-header h3 {
  }


  .profile-nav-info h3 {
    font-size: 1.9rem;
  }

  .profile-nav-info .address p,
  .profile-nav-info .address span {
    font-size: 0.7rem;
  }
  .flex-item-right {
  padding: 32px;
  margin:20px 0 20px 0;
}
.rank1{
  margin-top: 16px;
}
.flex-item-left {
  flex: 60%;
margin:0px;
}
.leadercontainer img {
   margin: 16px auto auto auto;
      float: none;
      display: block;
}
.textde2{padding-top:8%;padding-right:40px; padding-left:40px;}


.imageright{
  padding: 0 4% 0% 4%;
}
.personcontainer {
  padding: 16px;
  margin: 0px 0 16px 0;
  
}


.h1style{font-size: 32px;line-height: 48px;margin-bottom: -8px}
.headerbody{font-size: 16px}
.textde p{
  font-size: 16px;
}
.textde h2{
  font-size: 20px;
}
.News-sect-right {
  width:100%;
  float:none;
  display:inherit;
 margin-left: 2%;
 margin-right: 4%;
  flex-direction:column;
}
#home-quote{font-size: 18px}
.textde{
  padding-top:0%;
}
.action_btn{
  width: 100%;
  margin-left: 0px;
    margin-top: -20px;
}
 .detail-sect-right button{
  float:none;
   margin-left:24px;
  font-size:.9em;
  text-align:left;
}
#see-more-bio,
#see-less-bio {
  color: blue;
  cursor: pointer;
  text-transform: lowercase;
}
.tab h1 {
  font-family: "Bree Serif", sans-serif;
  display: flex;
  justify-content: center;
  margin: 20px auto;
}
}



