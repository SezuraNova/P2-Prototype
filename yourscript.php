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

		if(strcmp($_GET["Issue"], "ProfileName")==0){
			if(!file_exists($profilecheck))
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
				$myprofile = fopen($profilecheck, "a+") or die("Unable to open file!");
				while(!feof($myprofile)) {
					$IssueCheck = fgetc($myprofile);
					if (strcmp($IssueCheck, $_GET["Issue"] )==0) {
						$IssueDone = true;
						echo ("True");
					}
				}
				if ($IssueDone){
					echo ("True and I did nothing"); 
					//do nothing if Issue already answered
				} else {
					echo ("False and I did something");
					AddToProfile($myprofile);
				}
			}
			else {
				echo ("File exists false");
				$myprofile = fopen($profilecheck, "w+") or die("Unable to open file!");
				AddToProfile($myprofile);
			}
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
			if($Score>=0)
				fwrite($File, $_GET["Issue"] . " +" . $Score . " ");
			else	
				fwrite($File, $_GET["Issue"] . " " . $Score . " ");
			fclose($File);
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

		<div id="demo">
			<h4>Look at profile with AJAX</h4>
			<button type="button" onclick="loadDoc()">Look at Text File</button>
		</div>
		
		<script src="node_modules/chart.js/dist/Chart.bundle.js"> </script>
		<canvas id="myChart" width="400" height="400"></canvas>
		<script>


			function loadDoc() {
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("demo").innerHTML = this.responseText;
					}
				};
				xhttp.open("POST", "<?php echo ($_GET["name"] . " Profile.txt"); ?>", true);
				xhttp.send();
			}

			
			function addData(){
					xhttp.onreadystatechange = function(chart) {
						if (this.readyState == 4 && this.status == 200) {
							console.log("I MADE IT HERE");
							var newDataset = {
						        label: "random",
						        backgroundColor: bGroundColor[counter],
						        borderColor: borColor[counter],
						        borderWidth: 1,
						        data: [A, B, C],
						    }
						    chart.data.datasets.push(newDataset);
						    chart.update();
						    counter ++;
							}
						};
					xhttp2.open("POST", matchRuleShort("Profile.txt", "*profile*"), true);
					xhttp2.send();
			}

			var ctx = document.getElementById("myChart").getContext('2d');
			
			//var myChart = new Chart(ctx);
			var A, B, C;
			var bGroundColor = [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
								];
			var borColor =[
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
								];
			var myChart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: ["A", "B", "C"],
							datasets: [{ }]
						},
						options: {
							scales: {
								yAxes: [{
									ticks: {
										beginAtZero:false
									}
								}]
							}
						}
					});
			var xhttp= [];
			var counter = 1;
			for (var i = 1; i < 6; i++) {
				xhttp[i] = new XMLHttpRequest();
				xhttp[i].onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						profileDat = this.responseText;
						console.log(profileDat);
						ready = true;
						if (profileDat.search("A")!= -1){
							A = profileDat.substring((profileDat.search("A") + 2),(profileDat.search("A") + 5));
						}						
						if (profileDat.search("B")!= -1){
							B = profileDat.substring((profileDat.search("B") + 2),(profileDat.search("B") + 5));
						}						
						if (profileDat.search("C")!= -1){
							C = profileDat.substring((profileDat.search("C") + 2),(profileDat.search("C") + 5));
						}
						if(counter==1)
							var labelName = '<?php echo ($_GET["name"]); ?>';
						else
							var labelName = "Profile " + counter;
						var newDataset = {
									label: labelName,
									data: [A, B, C],
									backgroundColor: bGroundColor[counter],
									borderColor: borColor[counter],
									borderWidth: 1
								}
						myChart.data.datasets.push(newDataset);
					    myChart.update();
					    counter ++;
					}
				};
				if(i==1)
					xhttp[i].open("POST", "<?php echo ($_GET["name"] . " Profile.txt"); ?>", true);
				if(i==2)
					xhttp[i].open("POST", "<?php echo ("AAA Profile.txt"); ?>", true);
				if(i==3)
					xhttp[i].open("POST", "<?php echo ("BBB Profile.txt"); ?>", true);
				if(i==4)
					xhttp[i].open("POST", "<?php echo ("CCC Profile.txt"); ?>", true);
				if(i==5)
					xhttp[i].open("POST", "<?php echo ("DDD Profile.txt"); ?>", true);
				xhttp[i].send();
			}



	</script>

	</section>

	<!-- file to load "<?php echo ($_GET["name"] . " Profile.txt"); ?>" -->


<footer>
	<h5>&copy; 2018. All rights reserved.</h5> 
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<!-- <script src = "ChartData.js"></script> -->

</body>
</html>