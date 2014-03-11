<?php
$host = "localhost";
$username = "root";
$pass = "";

$mydb = mysql_connect($host, $username, $pass);

mysql_select_db("studentInfo", $mydb);

if (count($_POST) > 0) {

	echo "Entering";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone_number = $_POST['phonenumber'];
	$university = $_POST['university'];
	$degree = $_POST['degree'];
	$course = $_POST['course'];
	$year = $_POST['year'];
	$scheme = $_POST['scheme'];

	$query = "INSERT INTO studentInfo VALUES (NULL,'" . mysql_real_escape_string($name) . "','" . mysql_real_escape_string($email) . "','" . mysql_real_escape_string($phone_number) . "','" . mysql_real_escape_string($university) . "','" . mysql_real_escape_string($degree) . "','" . mysql_real_escape_string($course) . "','" . mysql_real_escape_string($year) . "','" . mysql_real_escape_string($scheme) . ")";

	$query = "INSERT INTO studentInfo (full_name, email, phone_number, university, degree, course, year, preferred_scheme) VALUES ('$name', '$email', '$email', '$university', '$degree', '$course', '$year', '$scheme')";

	$result = mysql_query($query);
	header("location:index.html");
	//show error if query fails.
	if (!$result) {
		die('Invalid query: ' . mysql_error());
	}
	mysql_close($mydb);
	//close the connection
}
?>

<html class= "detailsForm">
	<head>
		<meta charset="utf-8" />
		<meta name="format-detection" content="telephone=no" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="handheld.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="cordova.js"></script>
		<title>JPMorgan Recruitment</title>
	</head>
	<body>
		
		<script type="text/javascript" charset="utf-8">

    var mydb;

    // Wait for PhoneGap to connect with the device
    function onLoad() {
        document.addEventListener("deviceready",onDeviceReady,false);
    }

    // PhoneGap is ready to be used!

    function onDeviceReady() {
        console.log("it is in ondevice ready method..");
    	db = window.openDatabase("ylb10122", "1.0", "Trial Database", 200000);
    	if (dbCreated)
    	console.log("table created");
    	db.transaction(populateDB, transaction_error, populateDB_success);
   	 	else alert("No database created");
   }
   
   function transaction_error(tx, error) {
	$('#busy').hide();
    alert("Database Error: " + error);
}

function populateDB_success() {
	dbCreated = true;
	alert("database updated, no error");
}

function populateDB(tx) {
	$('#busy').show();

    tx.executeSql("INSERT INTO studentDetails (ID,full_name,email,phone_number,university,degree,course,year,preferred_scheme) VALUES ('$name', '$email', '$email', '$university', '$degree', '$course', '$year', '$scheme')");
    
}

</script>
		
		<form id=studentinfo class="app" action="details.php" method= "post"  >
			<h1> JP Morgan Student Recuitment Application </h1>
			<p>
				Please enter the required information below. We will keep you informed of upcoming events.
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
				Name:
				<input type="text" name= "name" placeholder="James Morgan" required pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+">
				<br>
				Email:
				<input type="email" name= "user_email" placeholder="james@uni.com">
				<br>
				Phone Number:
				<input type="number" name= "phonenumber" placeholder="07749751234" required>
			</fieldset>

			<fieldset>
				<legend>
					University Information
				</legend>
				University:
				<input type="text" name="university" placeholder="University of Strathclyde" required>
				<br>
				Degree:
				<input type="text" name= "degree" placeholder="MEng" required>
				<br>
				Course:
				<input type="text" name="course" placeholder="Computer Science" required>
				<br>
				Year of Study:
				<select id= "year" name= "year" required>
					<option value= "1st">1st Year</option>
					<option value = "2nd">2nd Year</option>
					<option value = "3rd">3rd Year</option>
					<option value = "4th">4th Year</option>
					<option value= "5th">5th Year</option>
				</select>
			</fieldset>

			<fieldset>
				<label>Schemes Available</label>
				<select id = "schemeSelection" name= "scheme" required>
					<option value = "1">Technology Graduate Scheme</option>
					<option value = "2">Spring Technology Week</option>
					<option value = "3">Technology Internship</option>
					<option value = "4">Open Technology Position</option>
				</select>
			</fieldset>
			<fieldset>
				<input type="submit" value="Submit your details"/>

			</fieldset>

		</form>
		<footer>
			<p>
				<a href= "index.html">Back To Homepage</a>
			</p>
		</footer>
	</body>
</html>
