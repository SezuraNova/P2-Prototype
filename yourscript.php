<html lang="en"> 
<head>

	<title>The Anti-Twitter Project</title> 

	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<meta name="description" content="This webpage explains the problem with the Attention Economy, how it effects our political landscape and some potential tech-based solutions" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css" />

	<link rel="stylesheet" href="css/main.css" /> 

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>

<body>

	<section>

		<header>

			<h3>
				The Anti-Twitter Project
			</h3>

		</header>
	</section>

	<section class="hero">
		<div class="scrim">
			<h2></h2>
		</div>
	</section>
	
	<section  class="body-section">
		
		<h3>
			Welcome <?php echo $_GET["name"]; ?> <br>
		</h3>


<?php

$profilecheck = ($_GET["name"] . " Profile.txt");
$profileName = $_GET["name"];
if(!file_exists($profilecheck)){
	if(strcmp($_GET["Issue"], "ProfileName")==0){
		$myprofile = fopen($_GET["name"] . " Profile.txt", "w+") or die("Unable to open file!");
	} 
	else {

		$myfile = fopen("newfile.txt", "w+") or die("Unable to open file!");


		//Writing answers to text file
		if (isset($_GET['Q1'])) {
			$x = $_GET["Q1"];
			$txt =$x . "\n";
			fwrite($myfile, $txt);
		}

		if (isset($_GET['Q2'])) {
			$x = $_GET["Q2"];
			$txt = $x . "\n";
			fwrite($myfile, $txt);
		}
		if (isset($_GET['Q3'])) {
			$x = $_GET["Q3"];
			$txt = $x . "\n";
			fwrite($myfile, $txt);
		}
		if (isset($_GET['Q4'])) {
			$x = $_GET["Q4"];
			$txt = $x . "\n";
			fwrite($myfile, $txt);
		}
		if (isset($_GET['Q5'])) {
			$x = $_GET["Q5"];
			$txt = $x . "\n";
			fwrite($myfile, $txt);
		}
		//echo file_get_contents("newfile.txt") . "<br>";
		rewind($myfile);


		//Answer Analysis
		$Score = 0;

		while(!feof($myfile)) {
			$value = fgets($myfile);
			if (strcmp($value, "VP\n")==0) {
				$Score = $Score + 3;
			} 
			else if (strcmp($value, "P\n")==0) {
				$Score = $Score + 1;
			} 
			else if (strcmp($value, "N\n")==0) {
				$Score = $Score - 1;
			} 
			else if (strcmp($value, "VN\n")==0) {
				$Score = $Score - 3;
			}   
		}
		fclose($myfile);
		//Creates/(adds to) a user's profile.txt 
		
		$IssueDone = false;
		if (file_exists($profilecheck)){
		  // echo "<br>THIS FILE EXISTS<br><br>";
			$myprofile = fopen($profilecheck, "a+") or die("Unable to open file!");
			while(!feof($myprofile)) {
				$IssueCheck = fgets($myprofile);
				if (strcmp($IssueCheck, $_GET["Issue"] . "\n")==0) {
					$IssueDone = true;
				}
			}
			if ($IssueDone){
		    // echo "<br>" . $_GET["Issue"] . " " . $IssueDone ? 'true' : 'false' . "<br>";
			} else {
				AddToProfile($myprofile);
			}
		}
		else {
			$myprofile = fopen($profilecheck, "w+") or die("Unable to open file!");
			AddToProfile($myprofile);
		}
		echo "<br>" . file_get_contents($_GET["name"] . " Profile.txt") . "<br>";
	}

	function AddToProfile($File){
		global $Score;
		if ($Score==15){
			$Stance = "You have an extremely positive Stance to issue " . $_GET["Issue"];
		} else if ($Score>=10){
			$Stance = "You have a very positive Stance to issue " . $_GET["Issue"];
		} else if ($Score>=5){
			$Stance = "You have a positive Stance to issue " . $_GET["Issue"];
		} else if ($Score>=-4){
			$Stance = "You have a neutral Stance to issue " . $_GET["Issue"];
		} else if ($Score>=-9){
			$Stance = "You have a negative Stance to issue " . $_GET["Issue"];
		} else if ($Score>=-14){
			$Stance = "You have a very negative Stance to issue " . $_GET["Issue"];
		} else {
			$Stance = "You have an extremely negative Stance to issue " . $_GET["Issue"];
		}
		echo "<br>" . $Stance . "<br>";
		fwrite($File, $_GET["Issue"] . "\n" . $Score . "\n");
		fclose($File);
	}
}

?>

	<div class="body-flex">
		<form action="QuizA.php" method="get" >
		  	<input type="hidden" name="name" value = "<?php echo $_GET["name"]; ?>">
		    <input type="submit" name="QuizA" value="Quiz A">
		</form>

		<form action="QuizB.php" method="get" >
		  	<input type="hidden" name="name" value = "<?php echo $_GET["name"]; ?>">
		    <input type="submit" name="QuizB" value="Quiz B">
		</form>

		<form action="QuizC.php" method="get" >
		  	<input type="hidden" name="name" value = "<?php echo $_GET["name"]; ?>">
		    <input type="submit" name="QuizC" value="Quiz C">
		</form>
	</div>

</section>



</body>
<footer>
	<h5>&copy; 2018. All rights reserved.</h5> 
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>