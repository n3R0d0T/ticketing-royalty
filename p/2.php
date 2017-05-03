<?php
session_start();

//checking first page values for empty,If it finds any blank field then redirected to first page
if (isset($_POST['email'])){
    if (empty($_POST['fName'])
    || empty($_POST['lName'])
	|| empty($_POST['email'])
	|| empty($_POST['mobileNo'])){
//    || empty($_POST['picture'])
//    || !empty($_FILES['picture']["tmp_name"])){
        
		//setting error message
		$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: 1"); //redirecting to first page
    
        
	} else {
    
	//Sanitizing email field to remove unwanted characters
        $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	
	//After sanitization Validation is performed
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		
	//Validating Contact Field	using regex
            if (!preg_match('/^[\+0-9\-\(\)\s]*$/', $_POST['mobileNo'])){
			
                $_SESSION['error'] = "Not a valid phone number.";
                header("location: 1");
            }
            
        } else {
            $_SESSION['error'] = "Invalid Email Address";
            header("location: 1");//redirecting to first page
        }
/*        $_SESSION['fName'] = $_POST['fName'];
        $_SESSION['lName'] = $_POST['lName'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['mobileNo'] = $_POST['mobileNo'];
        $_SESSION['mailingAdd'] = $_POST['mailingAdd'];*/
             foreach ($_POST as $key => $value) {
                $_SESSION['post'][$key] = $value;
        }
    }
} else {
    if (empty($_SESSION['error_page2'])) {
        header("location: 1.php");//redirecting to first page
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
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.components.ext.min.css">
    <script src="js/material.components.ext.min.js"></script>
<!--
    <script>
      function skillChanged() {
      var skill = document.querySelector('input[name = "skill"]:checked').value;      
      document.getElementById("skills").value = skill;
      }   
    </script>
-->
  </head>
  <body>
    <div id="app" class="modal">
        <form action="3" method="post" id="formData" enctype="multipart/form-data">
        <div class='heading'><div class='modul'>Please Provide an Image</div></div>
            
         <div class="mdl-file mdl-js-file mdl-file--floating-label">
            <input type="file" name="picture" id="idpicture" accept="image/jpeg, image/png, image/gif">
            <label class="mdl-file__label" for="idpicture">Valid ID</label>
        </div>
          <p><em>*You have to present this upon claiming your pass and freebies</em>.</p>
          <p><em>*Upload at least 1MB of image</em>.</p>
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
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored agreeButton" name="submitButton">
            Next
            </button>
            <p id="error"> <span><?php
//To show error of page 2
if (!empty($_SESSION['error_page2'])) {
    echo $_SESSION['error_page2'];
    unset($_SESSION['error_page2']);
}
?>
                </span>
        </form>
        
    </div>
    <script src="js/script.js"></script>
  </body>
</html>