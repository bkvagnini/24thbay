<!DOCTYPE HTML>
<html>
<head>
<title>Contact Us</title>
<meta name="keywords" content="recording, Tallahassee, music, techno, rock, hard rock, techno-rock, triphop, ambient, label, record label" />
<meta name="description" content="This is the contact page for 24thbay.com">
<meta name="revisit-after" content="31 days">
<meta name="author" content="Brian K Vagnini">
<link rel="stylesheet" type="text/css" href="stylesheets/24thbay.css">
<body>

<img align="center" src="images/24thBay.gif" width="100%" height="100%" alt="24thBay record label logo" />
<nav>
<ul>
<li><a href="index.htm" class="myButton">Home</a></li>
<li><a href= "music.htm">Music player</a></li>
<li><a href="http://24thbay.bandcamp.com/" target="_blank">24thbay Merchandise</a></li>
</ul>
</nav>




<h2> Contact us</h2>
<ul>
  <li> <strong>850-583-0842</strong></l>
<li><a href="mailto:brian@24thbay.com">brian@24thbay.com</a></li>
     </ul>
	 
	 <div id="feedback"> 
  <?php 
if (!isset($_POST["firstname"])) { 
?>
  <h1 class="header">Feedback/Comments</h1>


  <form method="post">

<pre>
First Name     		<input name="firstname" size="35" maxlength="70" />
Last Name      		<input name="lastname" size="35" maxlength="70" />
E-mail          	<input name="email" size="45" maxlength="70" />
Phone			<input name="phone" size="20" maxlength="70" />	
Comments:		<textarea rows="4" cols="50" name="comments">Type your comments here...</textarea>

			<input type="submit" value="Submit" /> <input type="reset" />
</pre>
  </form>
<?php
} else {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$comments = $_POST["comments"];

	$subject = "Feedback or Comment on 24thbay.com by $firstname $lastname";
	
	$message = "Feedback or Comment
	
First name:         	$firstname
Last name:         		$lastname
E-Mail:            		$email
Phone:					$phone
Comments:				$comments";

	$mailresult = mail("brian@24thbay.com", $subject, $message, "From: " . $email);
	if ($mailresult){
		echo "<h1 class=\"header\">Feedback Received for $firstname $lastname </h1>
<pre>$message</pre>";
	} else {
		echo "<h2>Error! Please go <a href=\"javascript:history.back()\">back</a> and fill in the form again.</h2>";
	}
}
?>

</body>
</html>



