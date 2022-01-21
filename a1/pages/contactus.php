<!DOCTYPE html>
<html lang="en">
<!--colors: green: #99bbad, beige: #ebd8b7, pink #c6a9a3, purple: #9a8194, burnt orange: #BA4B2F, light pink: #FCE4DE!-->

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="donations, charity, milwaukee, wisconsin">
    <meta name="author" content="Danielle Leslie">


    <!--title & media responsiveness-->
    <title>Handcrafted | Charity &amp; Donation Drive - Milwaukee, WI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--stylesheets & fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Averia+Serif+Libre:wght@300&family=Bebas+Neue&family=Big+Shoulders+Display&family=Lobster&family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/cqt5ntd.css">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/contactus.css">
</head>

<body>
    <header>
        <div class="header">
            <a href="../index.html" class="logo"><img src="../images/handcrafted-logo.png" alt=CompanyLogo width="150"
                    height="200"></a>
            <br>
            <br>
            <div class="header-right">
            <nav><a href="../index.html">HOME</a>
                <a href="blog.html">BLOG</a>
                <a href="error.html">DONATIONS</a>
                <a href="contactus.html">CONTACT</a>
            </nav>
            </div>
    </header>
    <br>
    <section class="backgroundindex"><section class="contactbackdrop">
	    <h1>Email Confirmation</h1>
		<fieldset>
        	<legend>Contact Information</legend>
    		<label for="name">First Name</label>
			<input type="text" name="name" id="name" value="<?php echo $_REQUEST['name'] ?>" disabled><br>
        	<label for="email">Email Address</label>
        	<input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
			<label for="phone">Phone Number</label>
			<input type="tel" name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ?>" disabled><br>
    		<legend>Message Information</legend>
			<label for="subject">Subject</label>
			<input type="text" name="subject" id="subject" value="<?php echo $_REQUEST['subject'] ?>" disabled><br>
			<label for="Message">Message</label>
			<textarea id="message" name="message" rows="4" disabled><?php echo $_REQUEST['message'] ?></textarea>
            <div class="buttons2"><label>&nbsp;</label>
			<a href="contactus.html"><input type="submit" id="buttons2" value="Return to Contact Form"></a></div></fieldset></section>
    </section>
        
    
<!-- This entire script, including the opening and closing ?php tags, can be nested inside of any other tag, such as div or p, to control positioning and formatting of confirmation message spit out by the email script -->
<h2>
<?php
  if (isset($_REQUEST['email'])) { //if "email" variable is filled out, send email
  
  //Set admin email for email to be sent to (use you own MATC email address)
    $admin_email = "leslied1@gmatc.matc.edu"; 

  //Set PHP variable equal to information completed on the HTML form
    $email = $_REQUEST['email']; //Request email that user typed on HTML form
    $phone = $_REQUEST['phone']; //Request phone that user typed on HTML form
    $subject = $_REQUEST['subject']; //Request subject that user typed on HTML form
    $message = $_REQUEST['message']; //Request message that user typed on HTML form
    $name = $_REQUEST['name']; //Request Name that user typed on HTML form
            
  //Start building the email body combining multiple values from HTML form    
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n"; //Continue the email body
    $body .= "Phone: " . $phone . "\n"; //Continue the email body
    $body .= "Message: " . $message; //Continue the email body
  
  //Create the email headers for the from and CC fields of the email     
    $headers = "From: " . $name . " <" . $email . "> \r\n"; //Create email "from"
    $headers .= "CC: " . $name . " <" . $email . ">"; //Send CC to visitor
    
  //Actually send the email from the web server using the PHP mail function
  mail($admin_email, $subject, $body, $headers); 
    
  //Display email confirmation response on the screen
  echo "Thank you for contacting us!"; 
  }
  
  //if "email" variable is not filled out, display an error
  else  { 
      echo "There has been an error!";
        }
?>

</h2>
      </body>
    <footer>
        <div id="socialsleft"><a href="https://www.facebook.com"><img id="socialsleft"
                    src="../images/socials/facebook.png" class="logo" alt="facebook" width="40" height="40"></a>
            <a href="https://www.youtube.com"><img id="socialsleft" src="../images/socials/youtube.png" class="logo"
                    alt="youtube" width="40" height="40"></a>
        </div>
        <p id="pcopyright">&copy; Handcrafted Charity &amp; Donation Drive || 2021 - Milwaukee, WI</p>

        <div id="socialsright"><a href="https://www.instagram.com"><img id="socialsright"
                    src="../images/socials/instagram.png" class="logo" alt="instagram" width="40" height="40"></a>
            <a href="https://www.linkedin.com"><img id="socialsright" src="../images/socials/linkedin.png" class="logo"
                    alt="linkedin" width="40" height="40"></a>
        </div>
    </footer>
</body>
</html>