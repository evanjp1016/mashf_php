<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>MASHF - Home</title>
	<?php include "bootstrap.php" ?>
	<!-- a helper script for vaidating the form-->
	<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
</head>
<body>
	<?php include "nav.php" ?>
	<div class="container index_white">
		<div class="row">
			<h2>About</h2>

			<p class="col-sm-6"> Organized in 1986, the Muskegon Area Sports Hall of Fame honors our own heroes and legends, spanning the rich history of sports achievement in the Lake Michigan shoreline area anchored by Ludington to the North and Grand Haven to the south.</p>

			<p class="col-sm-6">The Hall of Fame exhibit, located in downtown Muskegon on the concourse level of the L.C. Walker Arena, features a fascinating collection of artifacts, photos and commemorative plaques honoring the area's sports heritage. Displays highlight the accomplishments of the over 100 sports notables enshrined over the last 20 years.</p>

		    <p class="col-sm-6">Inductees include <a href="#">Earl Morrall</a>, a 21-year veteran of the National Football League; <a href="#">Sherm Poppen</a>, the inventor of the snowboard; <a href="#">Bennie Oosterbaan</a>, one of only two athletes honored as a three-time All American in football at the University of Michigan; <a href="#">Sally Sessions</a>; one of the 13 founding members of the Ladies Professional Golf Association, <a href="#">Donna Cook & Doris Cook</a>, players in the All-American Girls Professional Baseball League and many more.  Sports as diverse as boxing, with world lightweight contender <a href="#">Kenny Lane</a> and Olympic quarterfinalist  <a href="#">Phil Baldwin</a> and Speed Roller Skating, with <a href="#">Kenny Sutton</a>, a two-time gold medalist at the Pan-American games, are represented.</p>

		    <p class="col-sm-6">Two <a href="#">Scholar-Athletes</a>, one male and one female, are honored annually at the hall's annual induction banquet hosted in June in downtown Muskegon.  A member of the community also is selected for his or her dedication to the sports community with the organization's <a href="#">Distinguished Service Award</a>.</p>

		    <p class="col-sm-6">Take time to explore the site and learn about the area's incredible sports history!</p>
	    </div>
	</div>

	<div>
		<div>
			<h2>History</h2>

			<p>Organized in 1985, the Hall of Fame was a dream of longtime Muskegon Chronicle sportswriter Dick Hedges. As  president, Hedges assembled a board of directors and the group went about the task of organizing the new entity. Geographic boundaries, spanning from Ludington to the north and Grand Haven to the south, were established and funding to start the Hall was raised.</p>

		    <p>A home to display memorabilia was found at the Muskegon County Museum. The group solicited the community to suggest candidates for the hall of fame and the first group of honorees were chosen in September of 1986.</p>

		    <p>After 11 years and two different physical locations at the museum, the Hall of Fame made plans to move to the renovated L.C. Walker Arena in 1997. New showcases and displays were designed to house the organization's growing collection of artifacts and memorabilia.</p>
		</div>
	</div>

	<div>
		<div>
			<h2>Who Are We?</h2>

			<p>The Hall of Fame is guided by a Board of Directors, comprised of 13 members.</p>

			<p>This group of volunteers solicits nominees, biographical information, assembles a ballot and elects members to the Hall of Fame.</p>

			<p>In addition, the board honors a member of the community with the Hall's Distinguished Service Award.  This award recognizes the meritorious service of individuals who have made a major contribution to the area of athletics in a supportive role.  A category to honor a male and a female Scholar/Athlete was added in 1996.  Awarded annually by the Hall of Fame, the honor is bestowed upon the students that best exemplify a combination of scholastic achievement, athletic excellence and community service.</p>

			<span>Current Board Members <span class="glyphicon glyphicon-menu-down" id="btn-down"></span></span>
		</div>
	</div>


	<div>
		<div>
			<h2><span>Find Us</span> <i>&</i> <span class="photo-header">Discover</span></h2>
			<h5>L.C. Walker Arena</h5>
			<h4>955 4th Street  at Shoreline Drive</h4>
			<h6>Muskegon, MI 49440</h6>
		</div>
	</div>

	<div>
		<div>
			<h2>Contact</h2>
			<div>
				<p>The board of the Muskegon Area Sports Hall of Fame is interested in hearing from you.</p>

				<p>Contact us at: <a>mail@mashf.com</a></p>

				<p>Please include your full name and contact information.</p>

				<p>Thank You!</p>

				<form method="post" name="myemailform" action="form-to-email.php">
					<p>
						<label for='name'>Name*</label><br>
						<input type="text" name="name" placeholder="Joe Smhoe">
					</p>
					<p>
						<label for='email'>Email*</label><br>
						<input type="text" name="email" placeholder="joeshmoe@mashf.com">
					</p>
					<p>
						<label for='message'>Message*</label> <br>
						<textarea name="message" placeholder="Message"></textarea>
					</p>
					<input type="submit" name='submit' value="submit">
				</form>
				<script language="JavaScript">
					// Code for validating the form
					// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
					// for details
					var frmvalidator  = new Validator("myemailform");
					frmvalidator.addValidation("name","req","Please provide your name"); 
					frmvalidator.addValidation("email","req","Please provide your email"); 
					frmvalidator.addValidation("email","email","Please enter a valid email address"); 
				</script>
			</div>
		</div>
	</div>
</body>
</html>

<?php
// if(!isset($_POST['submit']))
// {
// 	//This page should not be accessed directly. Need to submit the form.
// 	echo "error; you need to submit the form!";
// }

// if (isset($_POST['name'])) {
//     $name = $_POST['name'];
// }
// if (isset($_POST['email'])) {
//     $visitor_email = $_POST['email'];
// }
// if (isset($_POST['message'])) {
//     $message = $_POST['message'];
// }

// //Validate first
// if(empty($name)||empty($visitor_email)) 
// {
//     echo "Name and email are mandatory!";
//     exit;
// }

// if(IsInjected($visitor_email))
// {
//     echo "Bad email value!";
//     exit;
// }

// $email_from = 'mail@mashf.com';//<== update the email address
// $email_subject = "New Form submission";
// $email_body = "You have received a new message from the user $name.\n".
//     "Here is the message:\n $message".
    
// $to = "evanjp1016@gmail.com";//<== update the email address
// $headers = "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";
// //Send the email!
// mail($to,$email_subject,$email_body,$headers);
// //done. redirect to thank-you page.
// header('Location: thank-you.html');


// // Function to validate against any email injection attempts
// function IsInjected($str)
// {
//   $injections = array('(\n+)',
//               '(\r+)',
//               '(\t+)',
//               '(%0A+)',
//               '(%0D+)',
//               '(%08+)',
//               '(%09+)'
//               );
//   $inject = join('|', $injections);
//   $inject = "/$inject/i";
//   if(preg_match($inject,$str))
//     {
//     return true;
//   }
//   else
//     {
//     return false;
//   }
// }

?>