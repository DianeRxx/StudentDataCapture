<?php

if (count($_POST) > 0) {

$BAanswer1 = $_POST['BA_q1'];
$BAanswer2 = $_POST['BA_q2'];
$BAanswer3 = $_POST['BA_q3'];
$BAanswer4 = $_POST['BA_q4'];

$ADanswer1 = $_POST['AD_q1'];
$ADanswer2 = $_POST['AD_q2'];
$ADanswer3 = $_POST['AD_q3'];
$ADanswer4 = $_POST['AD_q4'];

$SAanswer1 = $_POST['SA_q1'];
$SAanswer2 = $_POST['SA_q2'];
$SAanswer3 = $_POST['SA_q3'];
$SAanswer4 = $_POST['SA_q4'];

//Checking answers for BA questions
$BAtotalCorrect = 0;

if ($BAanswer1 == "A") { $BAtotalCorrect++;
}
if ($BAanswer2 == "D") { $BAtotalCorrect++;
}
if ($BAanswer3 == "B") { $BAtotalCorrect++;
}
if ($BAanswer4 == "C") { $BAtotalCorrect++;
}

$bestJob= "Business Analyst";
$bestScore= $BAtotalCorrect;

//Checking answers for AD questions
$ADtotalCorrect = 0;

if ($ADanswer1 == "B") { $ADtotalCorrect++;
}
if ($ADanswer2 == "C") { $ADtotalCorrect++;
}
if ($ADanswer3 == "D") { $ADtotalCorrect++;
}
if ($ADanswer4 == "A") { $ADtotalCorrect++;
}

if($ADtotalCorrect > $bestScore){
	$bestJob= "Application Development";
	$bestScore= $ADtotalCorrect;
} else if ($ADtotalCorrect == $bestScore){
	$bestJob= $bestJob . " or Application Development";
}

//Checking answers for SA questions
$SAtotalCorrect = 0;

if ($SAanswer1 == "A") { $SAtotalCorrect++;
}
if ($SAanswer2 == "D") { $SAtotalCorrect++;
}
if ($SAanswer3 == "C") { $SAtotalCorrect++;
}
if ($SAanswer4 == "B") { $SAtotalCorrect++;
}

if($SAtotalCorrect > $bestScore){
	$bestJob= "Software Architecture";
} else if ($SAtotalCorrect == $bestScore){
	$bestJob= $bestJob . " or Software Architecture";
}


$totalScore= $BAtotalCorrect + $ADtotalCorrect + $SAtotalCorrect;

}
?>

<!DOCTYPE html>
<html class= "quizResults">
	<head>
		<meta charset="utf-8">

		<title>Your Quiz Results</title>"Results of the quiz and a job recommendation">
		<meta name="author" content="Diane Ramsay">
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=yes">

		<link rel="stylesheet" type="text/css" href="handheld.css" />
		<link rel="apple-touch-icon" href="logo.png" />
		<link rel="apple-touch-icon-precomposed" href="logo.png" />
	</head>
	<!-- This is the results page of the quiz where the user can view their score from the quiz.
		A suitable job role will also be displayed to them.  -->
	<body>
		<h1>Your scores from the quiz were as follows: </h1><br>
		<h2>System Design and Analysis: </h2>
		<p><?php echo $BAtotalCorrect; ?> out of 4</p>	
		<br>
		<h2>Software Development: </h2>
		<p><?php echo $ADtotalCorrect; ?> out of 4</p>	
		<br>
		<h2>System Architecture: </h2>
		<p><?php echo $SAtotalCorrect; ?> out of 4</p>	
		<br>
		<h2>Total Score: </h2>
		<p><?php echo $totalScore; ?> out of 12</p>	
		<br>
		<h2> You are most suited to a <?php echo $bestJob; ?> job role!</h2>	

		<footer>
				<p>
					<a href= "index.html" >Back To Homepage</a>
				</p>
			</footer>
	</body>
</html>

