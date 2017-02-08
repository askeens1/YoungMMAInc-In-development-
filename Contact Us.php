<?php

if($_POST["submit"]) {
    $recipient="askeens1@ivytech.edu"; 
    $subject="Form to email message";
    $senderFirstName=$_POST["first_name"];
	$senderLastName=$_POST["last_name"];
    $senderEmail=$_POST["email_address"];
	$senderPhone=$_POST["phone_number"];
	$message=$_POST["message"];

    $mailBody="Name: $senderFirstName $senderLastName\nEmail: $senderEmail\nPhone: $senderPhone\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd<!DOCTYPE html>
<html>
<head>


<link rel="Stylesheet" href="./Main.css" type="text/css" />
</head>
<body>
<ul>
	<li class="dropdown">
	<a href="javascript.void(0)" class="dropbtn">Introduction </a>
  <div class ="dropdown-content">
		<a href="index.html">Introduction </a>
	<a href="OurMission.html">Our Mission </a>
	<a href="OurCoach.html">Our Coach </a>

  
	<li><a href="Safety.html">Safety</a>

      
	  

	<li><a href="WhatIsMMA.html">What is MMA</a>

		

	<li><a href="Location.html">Location/Hours </a>
	<li><a href="Contact Us2.html">Contact Us </a>
			
    </div>
  </li>
</ul>
<article>Contact Us
</article>

	<?=$thankYou ?> 
	
	<form id = "form" method="post" action="lab5.php">
	
		<label>First Name </label><br>
			<input type="text" id="fname" name="first_name"><br><br>
		<label>Last Name </label><br>
			<input type="text" id="lname" name="last_name"><br><br>
		
	
		<label>Email Address </label><br>
			<input type="text" id="email" name="email_address"><br><br>
		<label>Phone Number </label><br>
			<input type="text" id="phone" name="phone_number"><br><br>
	
		<label>Message </label><br>
			<textarea type="textarea" id="message" name="message"></textarea><br><br>
		<input type="submit" name="submit" id="submit" value="Submit">
		

</form>
</body>


</html>