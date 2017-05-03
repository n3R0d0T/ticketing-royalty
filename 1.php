<?php
//Session starts here
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Royalty registration for kids">
    <meta name="author" content="Nero Mangollado">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BTS Royalty Registration</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.components.ext.min.css">
    <script src="js/material.components.ext.min.js"></script>
    <script>
      function skillChanged() {
      var skill = document.querySelector('input[name = "skill"]:checked').value;      
      document.getElementById("skills").value = skill;
      }   
    </script>
  </head>
  <body>
    <div id="app" class="modal">
        <form action="2" method="post" id="formData">
        	<div class='responseBox sent'><h5>The Registration is now closed.</h5><h6>Thank you!<br/><br/>
See you and Have a Great day ahead! Fighting! </h6><div class='checkmark'></div></div>
        
           <!--<div class='heading'><div class='modul'>Personal Information</div></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample3" name="fName">
            <label class="mdl-textfield__label" for="sample3">First Name</label>
        </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample4" name="lName">
            <label class="mdl-textfield__label" for="sample4">Last Name</label>
        </div>
             <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="email" id="sample5" name="email">
            <label class="mdl-textfield__label" for="sample5">Email Address</label>
        </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample6" name="mobileNo">
            <label class="mdl-textfield__label" for="sample6">Active Contact Number</label>
        </div>
            <div class="mdl-textfield mdl-js-textfield">
            <textarea class="mdl-textfield__input" type="text" id="sample7" rows= "2" name="mailingAdd"></textarea>
            <label class="mdl-textfield__label" for="sample7">Mailing Address</label>
        </div>-->
          <!--<label for="firstName">First Name</label>
          <input type="text" name="fName" value="">
          <label for="lastName">Last Name</label>
          <input type="text" name="lName" value="">
          <label for="email">Email</label>
          <input type="email" name="email" value="" id="email">
          <label for="mobileNo">Mobile Number</label>
          <input type="text" name="mNumber" value="">
          <label for="mailAddress">Mailing Address</label>
          <input type="text" name="mAddress" value="">-->

          <!--<ul class="radioList">
            <li><input type="radio" name="skill" value="Junior" id="Junior" onchange="skillChanged()"><label for="Junior"></label></li>
            <li><input type="radio" name="skill" value="Intermediate" id="Intermediate" onchange="skillChanged()"><label for="Intermediate"></label></li> 
            <li><input type="radio" name="skill" value="Senior" id="Senior" onchange="skillChanged()"><label for="Senior"></label></li> 
          </ul>  
          <input type="text" id="skills" value="">-->
            <!--<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored agreeButton">
            Next
            </button>
            
           <p class="mdl-color-text--orange"><em><strong>Strictly one (1) entry per order only.</strong></em>.</p>
                       <p id="error"><span> <?php
                    if (!empty($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </span></p>-->
        </form> 
        
    </div>
    <script src="js/script.js"></script>
  </body>
</html>