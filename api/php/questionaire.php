<!DOCTYPE html>

<?php
    $title = "Home";
    include($_SERVER["DOCUMENT_ROOT"] . "/api/php/head.php");
?>

    <body class="Query">

<div class="containerbox">
  <a href="hub.html">
  <i class="fa-solid fa-xmark fa-2xl" id="exit"></i></a>
<h1 class="titletext"> Before we begin your search, let's answer a few questions </h1>
<h3> Please enter at least one search item </h3>
<form id="introQuiz" action="/action_page.php">
      <div class="row">

<div class="leftcolumn">
  <label class="querylabel" for="Subject">Subject Course</label>
  <input type="text" id="subject" name="Subject" placeholder="Subject of interest">
  

 <label class="querylabel" for="prep">Level of prep</label>
  <select id="prep" name="prep">
    <option value="None"selected>None</option>
    <option value="Expert">Expert</option>
    <option value="Knowledgable">Knowledgable</option>
    <option value="Familiarity">Some Familiarity</option>
    <option value="Lost">Lost</option>
  </select>
  

  <label class="querylabel"for="Language"> Preferred Language</label>
  <select id="Language" name="Language">
    <option value="English" selected>English</option>
     <option value="Spanish">Spanish</option>
    <option value="French">French</option>
    <option value="German">German</option>
    <option value="Russian">Russian</option>
  </select>
</div>                   


<div class="rightcolumn">
  <label class="querylabel" for="Major">Major of choice</label>
  <input type="text" id="Major" name="Major" placeholder="Major of choice">
  
  <label class="querylabel" for="Timezone">Timezone</label>
  <select id="Timezone" name="Timezone">
    <option value="NONE"selected>None</option>
      <option value="HST">Hawaii Standard Time</option>
     <option value="HDT">Hawaii-Aleutian Daylight Time</option>
    <option value="AKDT">Alaska Daylight Time</option>
    <option value="PDT">Pacfific Daylight Time</option>
    <option value="MST">Mountain Standard Time</option>
     <option value="MDT">Mountain Daylight Time</option>
      <option value="CDT">Central Daylight Time</option>
       <option value="EDT">Eastern Daylight Time</option>
  </select>
    <div class="row">
<div class="buttonholder">
 <a href="#" class="nextbn" onclick="signInNew()">Search Now</a>
</div>

</div>

</form> 
</div>
          <?php
            include("$_SERVER[DOCUMENT_ROOT]/api/php/scripts.php");
        ?>
</body>
</html>
