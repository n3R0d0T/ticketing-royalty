<?php
session_start();
//checking second page values for empty,If it finds any blank field then redirected to second page
if (isset($_POST['dayoption'])){
    if (empty($_POST['paymentOption'])){		
	
	                       /** if ($_SESSION['dayoption'] = 'Both Days') {
                            	$array = array($_SESSION['day1section'], $_SESSION['day2section']);
                            	$_SESSION['section'] = implode(" ", $array);

                            		}else{
                            		$_SESSION['section']=$_SESSION['dsection'];
                            		
                            }**/
		//setting error message
        $_SESSION['error_page4'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: 4");//redirecting to second page
    
	} else {

		//fetching all values posted from second page and storing it in variable
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
    }
} else {
    if (empty($_SESSION['error_page4'])) {
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
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.components.ext.min.css">
    <script src="js/material.components.ext.min.js"></script>
  </head>
  <body>
    <div id="app" class="modal">
        <form action="c" method="post" id="formData">
            <div class='heading'><div class='modul'>PLEASE FILL UP THIS SURVEY</div></div>
                            <ul class=" mdl-list">
                                <li class="mdl-list__item">
                                    <h4> Pulp Royalty since?</h4>
                                </li>
  <li class="mdl-list__item">
   <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="trbcheck">
                                <input type="checkbox" name="statuscheck" id="trbcheck" value="The Red Bullet in Manila" class="mdl-checkbox__input"/>
                                <span class="mdl-checkbox__label">The Red Bullet in Manila</span>
                            </label>
  </li><li class="mdl-list__item">
    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="epiloguecheck">
                                <input type="checkbox" name="statuscheck" id="epiloguecheck" value="Epilogue in Manila" class="mdl-checkbox__input"/>
                                <span class="mdl-checkbox__label">Epilogue in Manila</span>
                            </label>
  </li>
  <li class="mdl-list__item">
    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="firsttimecheck">
                                <input type="checkbox" name="statuscheck" id="firsttimecheck" value="First Timer" class="mdl-checkbox__input"/>
                                <span class="mdl-checkbox__label">It&#39;s my first time.</span>
                            </label>
  </li>
            </ul>
            
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="concert" type="text" id="concerttext">
    <label class="mdl-textfield__label" for="concerttext">Favorite concert experience...</label>
  </div>
            <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" name="messagetext" type="text" rows= "3" id="messegetext" ></textarea>
    <label class="mdl-textfield__label" for="messagetext">Message to PULP...</label>
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
                    if (!empty($_SESSION['error_page5'])) {
                        echo $_SESSION['error_page5'];
                        unset($_SESSION['error_page5']);
                    }
                   // echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
                    ?>
                </span>
            </p>
        </form>
    </div>
       <script>alert('Notes:\n\n'
    + '\t• We reserve the rights to respond to each royalty at our own discretion.\n' 
    + '\t• STRICTLY NON-TRANSFERRABLE\n' 
    + '\t• STRICTLY NON-REFUNDABLE\n' 
    + '\t• You cannot choose exact seats, only preferred section. For Standing, priority queue numbers will be given.\n'
    + '\t• Schedule, rules and regulations for the fan activity are subject to the artists\' and their management\'s decision.\n'
    + '\t• Management may implement last minute changes upon the request of the artists\' without prior notice.\n'
    + '\t• Promoter reserves the rights to refuse the selling of tickets/entry to anyone deemed inappropriate.');</script>
    <script src="js/getmdl-select.min.js"></script>
  </body>
</html>