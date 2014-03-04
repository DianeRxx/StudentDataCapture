<!DOCTYPE html>
<html class= "quizAnswers">
<head>
<meta charset="utf-8" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="handheld.css" />
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
<script type="text/javascript" charset="utf-8" src="cordova.js"></script>
<title>Job Matching Quiz</title>
</head>
<body>
<h1> The results of the quiz are as follows:</h1>
<?php

$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];
$answer6 = $_POST['question-6-answers'];
$answer7 = $_POST['question-7-answers'];
$answer8 = $_POST['question-8-answers'];

$totalCorrect = 0;

if ($answer1 == "B") { $totalCorrect++;
}
if ($answer2 == "A") { $totalCorrect++;
}
if ($answer3 == "D") { $totalCorrect++;
}
if ($answer4 == "B") { $totalCorrect++;
}
if ($answer5 == "C") { $totalCorrect++;
}
if ($answer6 == "D") { $totalCorrect++;
}
if ($answer7 == "C") { $totalCorrect++;
}
if ($answer8 == "A") { $totalCorrect++;
}


echo "<div id='results'>$totalCorrect / 8 correct</div>";
?>
<p>Your quiz results indicate that you are most suited to the role of a: </p>
	<h2>BUSINESS ANALYST</h2>