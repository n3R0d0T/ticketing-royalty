//<?php
//Session starts here
//session_start();
//?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Royalty registration for kids">
    <meta name="author" content="Nero Mangollado">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10; url=http://btspulproyalty.pulpliveworld.com/1">
    <title>BTS Royalty Registration</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/getmdl-select.min.css">
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.components.ext.min.css">
    <script src="js/material.components.ext.min.js"></script>
    <script>
/*       (function() {
    'use strict';
    var dialogButton = document.querySelector('.dialog-button');
    var dialog = document.querySelector('#dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
    });
  }()); */
    </script>
  </head>
  <body>
    <div id="app" class="modal">
        <div id="formData">
             <?php
               error_reporting(E_ERROR | E_PARSE);
               //error_reporting(0);
               session_start();

                if (isset($_POST['concert'])) {
                    if (!empty($_SESSION['post'])){

                        if (empty($_POST['statuscheck'])
						|| empty($_POST['concert'])
						|| empty($_POST['messagetext'])){
                            
							//Setting error for page 3
							$_SESSION['error_page5'] = "Mandatory field(s) are missing, Please fill it again";
                            header("location: 4.php"); //redirecting to third page
                        } else {
                            
                            foreach ($_POST as $key => $value) {
                                $_SESSION['post'][$key] = $value;
                                
                            }
							//function to extract array
                            extract($_SESSION['post']);
                            
                         /**     if ($_SESSION['dayoption'] = 'Both Days') {
                            	if ($_SESSION['section'] = NULL){
                            	$array = array($_SESSION['day1section'], $_SESSION['day2section']);
                            	$_SESSION['section'] = implode(" ", $array); }
                            	$query = mysql_query("insert into royalty_list (FirstName, LastName, Email, mobileNumber, MailingAddress, IDPicture, Facebook, Twitter, Instagram, DayOption, Section, paymentOption, PulpStatus, ConcertExp, Message, orderdatetime) values('$fName','$lName','$email','$mobileNo','$mailingAdd','" . $_SESSION['picture'] . "','$facebook','$twitter','$instagram','$dayoption','$section', '$paymentOption','$statuscheck', '$concert', '$messagetext', current_timestamp())", $connection);
                            		if ($query){
                            		echo "Bothdays";
                            		}else{
                            		
                            		$_SESSION['section']=$_SESSION['dsection'];
                            		
                            }
                            }**/
							
							//Storing values in database
                            $con = mysql_connect("localhost", "pulpweb_nero", "PU1P@dmiN");
                            $db = mysql_select_db("pulpweb_btsroyalty", $con);
                           /** mysql_query("insert into royalty_list (FirstName, LastName, Email, mobileNumber, MailingAddress, IDPicture, Facebook, Twitter, Instagram, DayOption, Section, section2, section3, paymentOption, PulpStatus, ConcertExp, Message, orderdatetime) values('$fName','$lName','$email','$mobileNo','$mailingAdd','" . $_SESSION['picture'] . "','$facebook','$twitter','$instagram','$dayoption', '$dsection', '$day1section', '$day2section', '$paymentOption','$statuscheck', '$concert', '$messagetext', current_timestamp())", $con);**/
                            
                            $result = mysql_query("SELECT * FROM royalty_list WHERE FirstName='".$fName."' AND LastName='".$lName."' LIMIT 1");
$num_rows = mysql_num_rows($result);

if ($num_rows >= 1) {
  	echo "<div class='responseBox returned'><div class='warrning'></div><h5>YOU ALREADY REGISTERED!</h5><h4>Duplicate entries are not allowed.</h4></div>";
}
else {
  // do something else
    
    $query =  mysql_query("insert into royalty_list (FirstName, LastName, Email, mobileNumber, MailingAddress, IDPicture, Facebook, Twitter, Instagram, DayOption, Section, section2, section3, paymentOption, PulpStatus, ConcertExp, Message, orderdatetime) values('$fName','$lName','$email','$mobileNo','$mailingAdd','" . $_SESSION['picture'] . "','$facebook','$twitter','$instagram','$dayoption', '$dsection', '$day1section', '$day2section', '$paymentOption','$statuscheck', '$concert', '$messagetext', current_timestamp())", $con);
  // do something else
  if ($query){
                               
    echo "<div class='responseBox sent'><h5>Thank you for registering for Pulp Royalty program!</h5><h6>This is not a first reserve first serve basis. We will be contacting/messaging you confirmation depending on the availability of slots.<br/><br/> For other information, you may refer to our FAQ pages at <strong>HAPPEE HOUR Facebook Page</strong>.<br/><br/>
See you and Have a Great day ahead! Fighting! </h6><div class='checkmark'></div></div>";
      
                                
                               // echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
                             
  } else {
                echo mysql_error();
             }
}
                               

                            

							//destroying session
                            unset($_SESSION['post']);
                            unset($_SESSION['picture']);
                          
   			// header("Location: 1.php", true, 303);

                        }
                    } else {
                        header("location: 1"); //redirecting to first page
                    }
                } else {
                    header("location: 1"); //redirecting to first page
                }
                ?>
        </div>
    </div>
    <script src="js/getmdl-select.min.js"></script>
  </body>
</html>