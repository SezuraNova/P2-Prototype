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



<section class="body-section">
	
	<h3>
		Welcome <?php echo $_GET["name"]; ?> <br>
	</h3>

	<form action="yourscript.php" method="get">

		<input type="hidden" name="name" value = "<?php echo $_GET["name"]; ?>" >
		<!-- E-mail: <input type="text" name="email"><br> -->

		<input type="hidden" name= "Issue" value = "A">

		<p class="question">1. How much do you agree with A1?</p>        

		<input type="radio" id="A1VP" name="Q1" value="VP">
		<label for="A1VP">Agree a lot</label><br>

		<input type="radio" id="A1P" name="Q1" value="P">
		<label for="A1P">Agree a little</label><br>   

		<input type="radio" id="A1U" name="Q1" value="U">
		<label for="A1U">Undecided</label><br>    

		<input type="radio" id="A1N" name="Q1" value="N">
		<label for="A1N">Disagree a little</label><br>

		<input type="radio" id="A1VN" name="Q1" value="VN">
		<label for="A1VN">Disagree a lot</label><br>

		<p class="question">2. How much do you agree with A2?</p>        

		<input type="radio" id="A2VP" name="Q2" value="VP">
		<label for="A2VP">Agree a lot</label><br>

		<input type="radio" id="A2P" name="Q2" value="P">
		<label for="A2P">Agree a little</label><br>   

		<input type="radio" id="A2U" name="Q2" value="U">
		<label for="A2U">Undecided</label><br>    

		<input type="radio" id="A2N" name="Q2" value="N">
		<label for="A2N">Disagree a little</label><br>

		<input type="radio" id="A2VN" name="Q2" value="VN">
		<label for="A2VN">Disagree a lot</label><br>

		<p class="question">3. How much do you agree with A3?</p>        

		<input type="radio" id="A3VP" name="Q3" value="VP">
		<label for="A3VP">Agree a lot</label><br>

		<input type="radio" id="A3P" name="Q3" value="P">
		<label for="A3P">Agree a little</label><br>   

		<input type="radio" id="A3U" name="Q3" value="U">
		<label for="A3U">Undecided</label><br>    

		<input type="radio" id="A3N" name="Q3" value="N">
		<label for="A3N">Disagree a little</label><br>

		<input type="radio" id="A3VN" name="Q3" value="VN">
		<label for="A3VN">Disagree a lot</label><br>

		<p class="question">4. How much do you agree with A4?</p>        

		<input type="radio" id="A4VP" name="Q4" value="VP">
		<label for="A4VP">Agree a lot</label><br>

		<input type="radio" id="A4P" name="Q4" value="P">
		<label for="A4P">Agree a little</label><br>   

		<input type="radio" id="A4U" name="Q4" value="U">
		<label for="A4U">Undecided</label><br>    

		<input type="radio" id="A4N" name="Q4" value="N">
		<label for="A4N">Disagree a little</label><br>

		<input type="radio" id="A4VN" name="Q4" value="VN">
		<label for="A4VN">Disagree a lot</label><br>

		<p class="question">5. How much do you agree with A5?</p>        

		<input type="radio" id="A5VP" name="Q5" value="VP">
		<label for="A5VP">Agree a lot</label><br>

		<input type="radio" id="A5P" name="Q5" value="P">
		<label for="A5P">Agree a little</label><br>   

		<input type="radio" id="A5U" name="Q5" value="U">
		<label for="A5U">Undecided</label><br>    

		<input type="radio" id="A5N" name="Q5" value="N">
		<label for="A5N">Disagree a little</label><br>

		<input type="radio" id="A5VN" name="Q5" value="VN">
		<label for="A5VN">Disagree a lot</label><br>          

		<input type="submit" value="Submit" >

	</form>
</section>
</body>


<footer>
	<h5>&copy; 2018. All rights reserved.</h5> 
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>