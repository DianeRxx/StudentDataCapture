<!DOCTYPE html>
<html lang="en" class="quiz">
	<head>
		<meta charset="utf-8">

		<title>Skills Job Matcher</title>
		<meta name="description" content="Check your skills to receive a job recommendation">
		<meta name="author" content="Diane Ramsay">
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=yes">

		<link rel="stylesheet" type="text/css" href="handheld.css" />
		<link rel="apple-touch-icon" href="logo.png" />
		<link rel="apple-touch-icon-precomposed" href="logo.png" />
	</head>
<!-- This is the quiz page of the application where users can answer the questions then submit their answers for marking. -->
	<body>
		<div>
			<header>
				<h1>Skills Checker</h1>
				<p>
					The following questions have been chosen to assess your technical skills and adivse you on a suitable job role.
				</p>
			</header>

			<form class= "quiz" action="quizResults.php" method="post" id="quiz">

				<fieldset>
					<legend>
						System Design and Analysis
					</legend>

					
						<h3> 1. Which description best describes Top-Down design? </h3>

						<div>
							<input type="radio" name="BA_q1" id="BA_q1a1" value="A" required />
							<label for="BA_q1a1">A) to identify a top level function and then create a hierarchy of lower-level modules and components</label>
						</div>

						<div>
							<input type="radio" name="BA_q1" id="BA_q1a2" value="B" required/>
							<label for="BA_q1a2">B) to prepare flow charts after programming has been completed</label>
						</div>

						<div>
							<input type="radio" name="BA_q1" id="BA_q1a3" value="C" required/>
							<label for="BA_q1a3">C) to identify the top level functions by combining many smaller components into a single entity</label>
						</div>

						<div>
							<input type="radio" name="BA_q1" id="BA_q1a4" value="D" required/>
							<label for="BA_q1a4">D) all of the above</label>
						</div>
					

						<h3> 2. Which of the following statements is NOT true with respect to a use case? </h3>

						<div>
							<input type="radio" name="BA_q2" id="BA_q2a1" value="A" />
							<label for="BA_q2a1">A)  A use case is a scenario for understanding the requirements</label>
						</div>

						<div>
							<input type="radio" name="BA_q2" id="BA_q2a2" value="B" />
							<label for="BA_q2a2">B) It is an interaction between the users and the system</label>
						</div>

						<div>
							<input type="radio" name="BA_q2" id="BA_q2a3" value="C" />
							<label for="BA_q2a3">C) It captures the responsibility of the system to its users</label>
						</div>

						<div>
							<input type="radio" name="BA_q2" id="BA_q2a4" value="D" />
							<label for="BA_q2a4">D) It represents the flow of activities of various processes in the system</label>
						</div>
					

					<li>
						<h3> 3. What is the testing of software WITHOUT the knowledge of source code called?</h3>

						<div>
							<input type="radio" name="BA_q3" id="BA_q3a1" value="A" />
							<label for="BA_q3a1">A)  white box testing </label>
						</div>

						<div>
							<input type="radio" name="BA_q3" id="BA_q3a2" value="B" />
							<label for="BA_q3a2">B) black box testing</label>
						</div>

						<div>
							<input type="radio" name="BA_q3" id="BA_q3a3" value="C" />
							<label for="BA_q3a3">C) glass box testing</label>
						</div>

						<div>
							<input type="radio" name="BA_q3" id="BA_q3a4" value="D" />
							<label for="BA_q3a4">D) clear box testing</label>
						</div>
					</li>

					<li>
						<h3> 4. What is the primary advantage of the Waterfall Design methodology?</h3>

						<div>
							<input type="radio" name="BA_q4" id="BA_q4a1" value="A" />
							<label for="BA_q4a1">A)  A version of the system is quickly delivered into the users' hands </label>
						</div>

						<div>
							<input type="radio" name="BA_q4" id="BA_q4a2" value="B" />
							<label for="BA_q4a2">B) Requirements evolve through users' feedback about the system</label>
						</div>

						<div>
							<input type="radio" name="BA_q4" id="BA_q4a3" value="C" />
							<label for="BA_q4a3">C) Requirements are completely specified and held relatively constant prior to programming</label>
						</div>

						<div>
							<input type="radio" name="BA_q4" id="BA_q4a4" value="D" />
							<label for="BA_q4a4">D) Features and functionality of the system are explored through simple models</label>
						</div>
					</li>
				</fieldset>
				<br>
				<fieldset>
					<legend>
						Software Development
					</legend>
					<li>
						<h3>1. What type of programming language is Java?</h3>
						<div>
							<input type="radio" name="AD_q1" id="AD_q1a1" value="A" />
							<label for="AD_q1a1">A) Event-driven language </label>
						</div>

						<div>
							<input type="radio" name="AD_q1" id="AD_q1a2" value="B" />
							<label for="AD_q1a2">B) Object-Oriented language</label>
						</div>

						<div>
							<input type="radio" name="AD_q1" id="AD_q1a3" value="C" />
							<label for="AD_q1a3">C) Functional language</label>
						</div>

						<div>
							<input type="radio" name="AD_q1" id="AD_q1a4" value="D" />
							<label for="AD_q1a4">D) Machine language</label>
						</div>
					</li>

					<li>
						<h3>2. What does TDD stand for? </h3>
						<div>
							<input type="radio" name="AD_q2" id="AD_q2a1" value="A" />
							<label for="AD_q2a1">A) Text Document Development </label>
						</div>

						<div>
							<input type="radio" name="AD_q2" id="AD_q2a2" value="B" />
							<label for="AD_q2a2">B) Time Driven Development</label>
						</div>

						<div>
							<input type="radio" name="AD_q2" id="AD_q2a3" value="C" />
							<label for="AD_q2a3">C) Test Driven Development</label>
						</div>

						<div>
							<input type="radio" name="AD_q2" id="AD_q2a4" value="D" />
							<label for="AD_q2a4">D) Track Data Development</label>
						</div>
					</li>

					<li>
						<h3> 3. Which one of the following is NOT a software development methodology? </h3>
						<div>
							<input type="radio" name="AD_q3" id="AD_q3a1" value="A" />
							<label for="AD_q3a1">A) Agile </label>
						</div>

						<div>
							<input type="radio" name="AD_q3" id="AD_q3a2" value="B" />
							<label for="AD_q3a2">B) Waterfall</label>
						</div>

						<div>
							<input type="radio" name="AD_q3" id="AD_q3a3" value="C" />
							<label for="AD_q3a3">C) Incremental</label>
						</div>

						<div>
							<input type="radio" name="AD_q3" id="AD_q3a4" value="D" />
							<label for="AD_q3a4">D) Flexible</label>
						</div>
					</li>

					<li>
						<h3>4. Which of the following is NOT part of object oriented programming? </h3>
						<div>
							<input type="radio" name="AD_q4" id="AD_q4a1" value="A" />
							<label for="AD_q4a1">A) Functions </label>
						</div>

						<div>
							<input type="radio" name="AD_q4" id="AD_q4a2" value="B" />
							<label for="AD_q4a2">B) Inheritance</label>
						</div>

						<div>
							<input type="radio" name="AD_q4" id="AD_q4a3" value="C" />
							<label for="AD_q4a3">C) Classes</label>
						</div>

						<div>
							<input type="radio" name="AD_q4" id="AD_q4a4" value="D" />
							<label for="AD_q4a4">D) Objects</label>
						</div>
					</li>
				</fieldset>
				<br>
				<fieldset>
					<legend>
						Systems Architecture
					</legend>
					<li>
						<h3>1. What does TCP break data into? </h3>
						<div>
							<input type="radio" name="SA_q1" id="SA_q1a1" value="A" />
							<label for="SA_q1a1">A) Packets </label>
						</div>

						<div>
							<input type="radio" name="SA_q1" id="SA_q1a2" value="B" />
							<label for="SA_q1a2">B) Files</label>
						</div>

						<div>
							<input type="radio" name="SA_q1" id="SA_q1a3" value="C" />
							<label for="SA_q1a3">C) Bits</label>
						</div>

						<div>
							<input type="radio" name="SA_q1" id="SA_q1a4" value="D" />
							<label for="SA_q1a4">D) Binary</label>
						</div>
					</li>

					<li>
						<h3>2. Thrashing... </h3>
						<div>
							<input type="radio" name="SA_q2" id="SA_q2a1" value="A" />
							<label for="SA_q2a1">A) is a natural consequence of virtual memory systems </label>
						</div>

						<div>
							<input type="radio" name="SA_q2" id="SA_q2a2" value="B" />
							<label for="SA_q2a2">B) can always be avoided by swapping</label>
						</div>

						<div>
							<input type="radio" name="SA_q2" id="SA_q2a3" value="C" />
							<label for="SA_q2a3">C)  always occurs on large computers</label>
						</div>

						<div>
							<input type="radio" name="SA_q2" id="SA_q2a4" value="D" />
							<label for="SA_q2a4">D) can be caused by poor paging algorithms</label>
						</div>
					</li>

					<li>
						<h3>3. What is the name of the system program which sets up an executable program in main memory ready for execution? </h3>
						<div>
							<input type="radio" name="SA_q3" id="SA_q3a1" value="A" />
							<label for="SA_q3a1">A) Assembler</label>
						</div>

						<div>
							<input type="radio" name="SA_q3" id="SA_q3a2" value="B" />
							<label for="SA_q3a2">B) Linker</label>
						</div>

						<div>
							<input type="radio" name="SA_q3" id="SA_q3a3" value="C" />
							<label for="SA_q3a3">C) Loader</label>
						</div>

						<div>
							<input type="radio" name="SA_q3" id="SA_q3a4" value="D" />
							<label for="SA_q3a4">D) Compiler</label>
						</div>
					</li>

					<li>
						<h3>4. The simplest way to determine cache locations in which to store memory blocks is the, </h3>
						<div>
							<input type="radio" name="SA_q4" id="SA_q4a1" value="A" />
							<label for="SA_q4a1">A) Associative Mapping technique</label>
						</div>

						<div>
							<input type="radio" name="SA_q4" id="SA_q4a2" value="B" />
							<label for="SA_q4a2">B) Direct Mapping technique</label>
						</div>

						<div>
							<input type="radio" name="SA_q4" id="SA_q4a3" value="C" />
							<label for="SA_q4a3">C) Set-Associative Mapping technique</label>
						</div>

						<div>
							<input type="radio" name="SA_q4" id="SA_q4a4" value="D" />
							<label for="SA_q4a4">D) Paging technique</label>
						</div>
					</li>
				</fieldset>
			<br>
			
				<div>
				<button type="submit" value="Submit">Submit your Answers </button>
			</div>
			</form>

		

			<footer>
				<p>
					<a href= "index.html" >Back To Homepage</a>
				</p>
			</footer>
		</div>
	</body>
</html>
