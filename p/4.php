<?php
session_start();
//checking second page values for empty,If it finds any blank field then redirected to second page
if (isset($_POST['facebook'])){
    if (empty($_POST['facebook'])
	|| empty($_POST['twitter'])
	|| empty($_POST['instagram'])){
		
		//setting error message
  /*      $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: 3.php");*///redirecting to second page
    
	} else {
		//fetching all values posted from second page and storing it in variable
        
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
    }
} else {
    if (empty($_SESSION['error_page3'])) {
        header("location: 1");//redirecting to first page
    }
}
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
    <link rel="stylesheet" href="css/getmdl-select.min.css">
    <link rel="stylesheet" href="css/dialog-polyfill.css">
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.components.ext.min.css">
    <script src="js/material.components.ext.min.js"></script>
    <script src="js/dialog-polyfill.js"></script>
    
  </head>
  <body>
    <div id="app" class="modal">
        <form action="5" method="post" id="formData">
            <div class='heading'><div class='modul'>Order Details</div></div>
                            <!--<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="dayOne">
                                <input type="radio" id="dayOne" class="mdl-radio__button" name="dayoption" value="1" checked/>
                                <span class="mdl-radio__label">Day 1</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="dayTwo">
                                <input type="radio" id="dayTwo" class="mdl-radio__button" name="dayoption" value="2"/>
                                <span class="mdl-radio__label">Day 2</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="bothDays">
                                <input type="radio" id="bothDays" class="mdl-radio__button" name="dayoption" value="3"/>
                                <span class="mdl-radio__label">Both Days</span>
             
</label>-->
            
            <ul class="list-control mdl-list">
  <li class="mdl-list__item">
    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="dayOne">
                                <input type="radio" id="dayOne" class="mdl-radio__button" name="dayoption" value="Day 1"  onClick="javascript:return selectSection(1)" checked/>
                                <span class="mdl-radio__label">Day 1</span>
                            </label>
  </li>
  <li class="mdl-list__item">
   <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="dayTwo">
                                <input type="radio" id="dayTwo" class="mdl-radio__button" name="dayoption" value="Day 2"  onClick="javascript:return selectSection(1)"/>
                                <span class="mdl-radio__label">Day 2</span>
                            </label>
  </li>
  <li class="mdl-list__item">
    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="bothDays">
                                <input type="radio" id="bothDays" class="mdl-radio__button" name="dayoption" value="Both Days" onClick="javascript:return selectSection(2)"/>
                                <span class="mdl-radio__label">Both Days</span>
                            </label>
  </li>
</ul>    
                 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" id="section-select">
        <input class="mdl-textfield__input" id="dsection" name="dsection" value="" type="text" readonly tabIndex="-1" data-val="VIP Seated 201"/>
        <label for="dsection">
                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
            </label>
                                <label class="mdl-textfield__label" for="dsection">Section</label>
        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="dsection">
          <li class="mdl-menu__item" data-val="VIP201">VIP Seated 201</li>
          <li class="mdl-menu__item" data-val="VIP202">VIP Seated 202</li>
            <li class="mdl-menu__item" data-val="VIP203">VIP Seated 203</li>
            <li class="mdl-menu__item" data-val="VIP204">VIP Seated 204</li>
            <li class="mdl-menu__item" data-val="VIP205">VIP Seated 205</li>
            <li class="mdl-menu__item" data-val="VIP206">VIP Seated 206</li>
            <li class="mdl-menu__item" data-val="VIP207">VIP Seated 207</li>
            <li class="mdl-menu__item" data-val="VIP216">VIP Seated 216</li>
            <li class="mdl-menu__item" data-val="VIP217">VIP Seated 217</li>
            <li class="mdl-menu__item" data-val="VIP218">VIP Seated 218</li>
            <li class="mdl-menu__item" data-val="VIP219">VIP Seated 219</li>
            <li class="mdl-menu__item" data-val="VIP220">VIP Seated 220</li>
            <li class="mdl-menu__item" data-val="VIP221">VIP Seated 221</li>
            <li class="mdl-menu__item" data-val="VIP222">VIP Seated 222</li>
            <li class="mdl-menu__item" data-val="STANDING A">Standing A</li>
            <li class="mdl-menu__item" data-val="STANDING B">Standing B</li>
            <li class="mdl-menu__item" data-val="STANDING C">Standing C</li>
            <li class="mdl-menu__item" data-val="STANDING D">Standing D</li>
            <li class="mdl-menu__item" data-val="STANDING E">Standing E</li>
        </ul>
    </div>
    
     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" id="day1-section-select" style="display: none;">
        <input class="mdl-textfield__input" id="day1section" name="day1section" value="" type="text" readonly tabIndex="-1" data-val="Day 1 VIP Seated 201"/>
        <label for="day1section">
                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
            </label>
                                <label class="mdl-textfield__label" for="day1section">Day 1 Section</label>
        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="day1section">
          <li class="mdl-menu__item" data-val="VIP201">Day 1 VIP Seated 201</li>
          <li class="mdl-menu__item" data-val="VIP202">Day 1 VIP Seated 202</li>
            <li class="mdl-menu__item" data-val="VIP203">Day 1 VIP Seated 203</li>
            <li class="mdl-menu__item" data-val="VIP204">Day 1 VIP Seated 204</li>
            <li class="mdl-menu__item" data-val="VIP205">Day 1 VIP Seated 205</li>
            <li class="mdl-menu__item" data-val="VIP206">Day 1 VIP Seated 206</li>
            <li class="mdl-menu__item" data-val="VIP207">Day 1 VIP Seated 207</li>
            <li class="mdl-menu__item" data-val="VIP216">Day 1 VIP Seated 216</li>
            <li class="mdl-menu__item" data-val="VIP217">Day 1 VIP Seated 217</li>
            <li class="mdl-menu__item" data-val="VIP218">Day 1 VIP Seated 218</li>
            <li class="mdl-menu__item" data-val="VIP219">Day 1 VIP Seated 219</li>
            <li class="mdl-menu__item" data-val="VIP220">Day 1 VIP Seated 220</li>
            <li class="mdl-menu__item" data-val="VIP221">Day 1 VIP Seated 221</li>
            <li class="mdl-menu__item" data-val="VIP222">Day 1 VIP Seated 222</li>
            <li class="mdl-menu__item" data-val="STANDING A">Day 1 Standing A</li>
            <li class="mdl-menu__item" data-val="STANDING B">Day 1 Standing B</li>
            <li class="mdl-menu__item" data-val="STANDING C">Day 1 Standing C</li>
            <li class="mdl-menu__item" data-val="STANDING D">Day 1 Standing D</li>
            <li class="mdl-menu__item" data-val="STANDING E">Day 1 Standing E</li>
        </ul>
    </div>
    
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" id="day2-section-select" style="display: none;">
        <input class="mdl-textfield__input" id="day2section" name="day2section" value="" type="text" readonly tabIndex="-1" data-val="Day 2 VIP Seated 201"/>
        <label for="day2section">
                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
            </label>
                                <label class="mdl-textfield__label" for="day2section">Day 2 Section</label>
        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="day2section">
          <li class="mdl-menu__item" data-val="VIP201">Day 2 VIP Seated 201</li>
          <li class="mdl-menu__item" data-val="VIP202">Day 2 VIP Seated 202</li>
            <li class="mdl-menu__item" data-val="VIP203">Day 2 VIP Seated 203</li>
            <li class="mdl-menu__item" data-val="VIP204">Day 2 VIP Seated 204</li>
            <li class="mdl-menu__item" data-val="VIP205">Day 2 VIP Seated 205</li>
            <li class="mdl-menu__item" data-val="VIP206">Day 2 VIP Seated 206</li>
            <li class="mdl-menu__item" data-val="VIP207">Day 2 VIP Seated 207</li>
            <li class="mdl-menu__item" data-val="VIP216">Day 2 VIP Seated 216</li>
            <li class="mdl-menu__item" data-val="VIP217">Day 2 VIP Seated 217</li>
            <li class="mdl-menu__item" data-val="VIP218">Day 2 VIP Seated 218</li>
            <li class="mdl-menu__item" data-val="VIP219">Day 2 VIP Seated 219</li>
            <li class="mdl-menu__item" data-val="VIP220">Day 2 VIP Seated 220</li>
            <li class="mdl-menu__item" data-val="VIP221">Day 2 VIP Seated 221</li>
            <li class="mdl-menu__item" data-val="VIP222">Day 2 VIP Seated 222</li>
            <li class="mdl-menu__item" data-val="STANDING A">Day 2 Standing A</li>
            <li class="mdl-menu__item" data-val="STANDING B">Day 2 Standing B</li>
            <li class="mdl-menu__item" data-val="STANDING C">Day 2 Standing C</li>
            <li class="mdl-menu__item" data-val="STANDING D">Day 2 Standing D</li>
            <li class="mdl-menu__item" data-val="STANDING E">Day 2 Standing E</li>
        </ul>
    </div>
<!--        <div><h6 class="mdl-color-text--light-blue">Payment options</h6>
            <ul>
              <li>Cash</li>
              <li>Bank Deposit</li>
              <li>Paypal</li>
            </ul></div>-->
            
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height" id="payment-select">
        <input class="mdl-textfield__input" id="paymentOption" name="paymentOption" value="Cash" type="text" readonly tabIndex="-1" data-val="Cash"/>
        <label for="paymentOption">
                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
            </label>
                                <label class="mdl-textfield__label" for="paymentOption"><span><strong>Payment options</strong></span></label>
        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu" for="paymentOption">
          <li class="mdl-menu__item" data-val="Cash">Cash</li>
          <li class="mdl-menu__item" data-val="Bank Deposit">BDO Bank Deposit</li>
          <li class="mdl-menu__item" data-val="Paypal">Paypal</li>
        </ul>
    </div>
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


            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored agreeButton">
            Next
            </button>

            <p id="error"><span><?php
                    if (!empty($_SESSION['error_page4'])) {
                        echo $_SESSION['error_page4'];
                        unset($_SESSION['error_page4']);
                    }
                    ?>
                </span>
            </p>
        </form>
        
    </div>
    <script>
	 function selectSection(radioid)
{
if(radioid == 1)
{    
   	document.getElementById('section-select').style.display = 'block';
    document.getElementById('day1-section-select').style.display = 'none';
	document.getElementById('day2-section-select').style.display = 'none';
 }
 else if(radioid == 2)
{  
	document.getElementById('section-select').style.display = 'none';
	document.getElementById('day1-section-select').style.display = 'block';
    	document.getElementById('day2-section-select').style.display = 'block';
}
}
    </script>
    <script src="js/getmdl-select.min.js"></script>
  </body>
</html>