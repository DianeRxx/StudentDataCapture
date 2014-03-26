<?php
$host = "devweb2013.cis.strath.ac.uk";
$username = "ylb10122";
$pass = "hmeddlyn";

$mydb = mysql_connect($host, $username, $pass);

mysql_select_db("ylb10122", $mydb);

if (count($_POST) > 0) {

	echo "Entering";
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['user_email']);
	$phone_number = mysql_real_escape_string($_POST['phonenumber']);
	$university = mysql_real_escape_string($_POST['university']);
	$degree = mysql_real_escape_string($_POST['degree']);
	$course = mysql_real_escape_string($_POST['course']);
	$year = mysql_real_escape_string($_POST['year']);
	$scheme = mysql_real_escape_string($_POST['scheme']);

	if ($scheme==1) {
		$scheme= "Technology Graduate Scheme";
		$link= "http://techcareers.jpmorgan.com/techcareers/jpmorgan/careers/europe/tech/opportunities/graduate"; 
	} else if ($scheme==2){
		$scheme= "Spring Technology Week";
		$link= "http://techcareers.jpmorgan.com/techcareers/jpmorgan/careers/europe/tech/opportunities/preintern/springweek";
	} else if ($scheme==3) {
		$scheme = "Technology Internship";
		$link= "http://techcareers.jpmorgan.com/techcareers/jpmorgan/careers/europe/tech/opportunities/internship";
	} else {
		 $scheme= "Open Technology Position";
		$link= "http://techcareers.jpmorgan.com/index.html";
	}
	$query = "INSERT INTO studentDetails (full_name, email, phone_number, university, degree, course, year, preferred_scheme) VALUES ('$name', '$email', '$phone_number', '$university', '$degree', '$course', '$year', '$scheme')";

	$result = mysql_query($query);




$message = '
<html>
<head>
  <title>JP Morgan: Thank You!</title>
</head>
<body>
  <p>Thank you for entering your information into our Student Recruitment application.</p>
  <p>For more information about the current opportunities, please follow this link: </p>
  <p> <b>' . $link . ' </b> </p>
</body>
</html>
';


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


$headers .= 'From: JP Morgan' . "\r\n";


   $retval = mail ($email,$scheme,$message,$headers);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }

	header("location:index.html");
	if (!$result) {
		die('Invalid query: ' . mysql_error());
	}
	mysql_close($mydb);
}
?>

<!DOCTYPE html>
<html class= "detailsForm">
	<head>
		<meta charset="utf-8">

		<title>JP Morgan Student Recruitment</title>
		<meta name="description" content="Student Details form">
		<meta name="author" content="Diane Ramsay">
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=yes">

		<link rel="stylesheet" type="text/css" href="handheld.css" />
		<link rel="apple-touch-icon" href="logo.png" />
		<link rel="apple-touch-icon-precomposed" href="logo.png" />
	</head>
	<!-- This is the page where a user can enter their information into the form which will then be sent
		to JP Morgan. -->
	<body>

		<form id=studentinfo class="app" action="details.php" method= "post" >
			<h1> JP Morgan
			<br>
			Student Recruitment Application </h1>
			<p>
				Please enter all of the information below. After you have submitted your details, you will receive
				an automated email with some more information about the job scheme you selected. 
			</p>
			<p>
				<button type="reset" value="Reset">
					Reset
				</button>
			</p>
			<fieldset>
				<legend>
					Contact Details
				</legend>

				<br>

				<label for="name">Full Name:</label> <br>
				<input type="text" name="name" id="name" placeholder= "James Morgan" pattern="^([a-zA-Z]+[\'\,\.\-]?[a-zA-Z ]*)+[ ]([a-zA-Z]+[\'\,\.\-]?[a-zA-Z ]+)+$" title="Please enter your first name and last name separated by a space. For example: James Morgan" required>

				<br>

				<label for="email">Email:</label> <br>
				<input type="email" name="user_email" id="email" placeholder="james@uni.com" title="Please enter a valid email address including an @. For example: james@uni.com"  required>

				<br>

				<label for="phonenumber">Phone Number:</label> <br>
				<input type="tel" name="phonenumber" id="phonenumber" placeholder="07123456789" pattern="^((\+44\s?\d{4}|\(?\d{5}\)?)\s?\d{6})|((\+44\s?|0)7\d{3}\s?\d{6})$" title="Please enter a phone number containing 11 numbers, starting with 0 or +44"  required>
			</fieldset>
			<br>
			<fieldset>
				<legend>
					University Information
				</legend>

				<br>

				<label for="university">University:</label> <br>
				<input type="text" name="university" id="university" placeholder= "University of Strathclyde" list="scotlandUnis" pattern="^[a-zA-Z\s.\-]+$" title="Please enter letter characters only" required>
				<datalist id="scotlandUnis">
					<option value="University of Strathclyde"/>
					<option value="University of Glasgow"/>
					<option value="Glasgow Caledonian University"/>
					<option value="University of Edinburgh"/>
					<option value="University of St Andrews"/>
					<option value="University of Dundee"/>
					<option value="University of Aberdeen"/>
					<option value="University of Stirling"/>
					<option value="Edinburgh Napier University"/>
					<option value="Heriot-Watt University"/>
					<option value="University of the West of Scotland"/>
					<option value="Robert Gordon University"/>
				</datalist>
				<br>

				<label for="degree">Degree:</label> <br>
				<input type="text" name="degree" id="degree" placeholder= "MEng" list="degreeOptions" pattern="^[a-zA-Z\s.\-]+$" title="Please enter letter characters only" required>
				<datalist id="degreeOptions">
					<option value="MEng"/>
					<option value="BSc"/>
					<option value="MSc"/>
				</datalist>
				<br>

				<label for="course">Course:</label> <br>
				<input type="text" name="course" id="course" placeholder= "Computer Science" list="courseOptions" pattern="^[a-zA-Z\s.\-]+$" title="Please enter letter characters only" required>
				<datalist id="courseOptions">
					<option value="Computer Science"/>
					<option value="Software Engineering"/>
					<option value="Computer and Electrical Systems"/>
					<option value="Business Information Systems"/>
					<option value="Computer Engineering"/>
				</datalist>

				<br>

				<label for="year">Year of Study:</label> <br>
				<select id= "year" name= "year" required>
					<option value= "1st">1st Year</option>
					<option value = "2nd">2nd Year</option>
					<option value = "3rd">3rd Year</option>
					<option value = "4th">4th Year</option>
					<option value= "5th">5th Year</option>
				</select>
			</fieldset>

			<br>

			<fieldset>
				<legend>
					Schemes Available in Technology
				</legend>
				<label for="schemeSelection">Choose a scheme:</label> <br>
				<select id = "schemeSelection" name= "scheme" required>
					<option value = "1">Technology Graduate Scheme</option>
					<option value = "2">Spring Technology Week</option>
					<option value = "3">Technology Internship</option>
					<option value = "4">Open Technology Position</option>
				</select>
			</fieldset>

			<br>

			<button type="submit" value="Submit">
				Submit your Details
			</button>

		</form>
		<footer>
			<p>
				<a href= "index.html" >Back To Homepage</a>
			</p>
		</footer>
	</body>
</html>
