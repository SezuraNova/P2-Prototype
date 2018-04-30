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

		<input type="hidden" name= "Issue" value = "C">

		<p class="question">1. How much do you agree with C1?</p>        

		<input type="radio" id="C1VP" name="Q1" value="VP">
		<label for="C1VP">Agree a lot</label><br>

		<input type="radio" id="C1P" name="Q1" value="P">
		<label for="C1P">Agree a little</label><br>   

		<input type="radio" id="C1U" name="Q1" value="U">
		<label for="C1U">Undecided</label><br>    

		<input type="radio" id="C1N" name="Q1" value="N">
		<label for="C1N">Disagree a little</label><br>

		<input type="radio" id="C1VN" name="Q1" value="VN">
		<label for="C1VN">Disagree a lot</label><br>

		<p class="question">2. How much do you agree with C2?</p>        

		<input type="radio" id="C2VP" name="Q2" value="VP">
		<label for="C2VP">Agree a lot</label><br>

		<input type="radio" id="C2P" name="Q2" value="P">
		<label for="C2P">Agree a little</label><br>   

		<input type="radio" id="C2U" name="Q2" value="U">
		<label for="C2U">Undecided</label><br>    

		<input type="radio" id="C2N" name="Q2" value="N">
		<label for="C2N">Disagree a little</label><br>

		<input type="radio" id="C2VN" name="Q2" value="VN">
		<label for="C2VN">Disagree a lot</label><br>

		<p class="question">3. How much do you agree with C3?</p>        

		<input type="radio" id="C3VP" name="Q3" value="VP">
		<label for="C3VP">Agree a lot</label><br>

		<input type="radio" id="C3P" name="Q3" value="P">
		<label for="C3P">Agree a little</label><br>   

		<input type="radio" id="C3U" name="Q3" value="U">
		<label for="C3U">Undecided</label><br>    

		<input type="radio" id="C3N" name="Q3" value="N">
		<label for="C3N">Disagree a little</label><br>

		<input type="radio" id="C3VN" name="Q3" value="VN">
		<label for="C3VN">Disagree a lot</label><br>

		<p class="question">4. How much do you agree with C4?</p>        

		<input type="radio" id="C4VP" name="Q4" value="VP">
		<label for="C4VP">Agree a lot</label><br>

		<input type="radio" id="C4P" name="Q4" value="P">
		<label for="C4P">Agree a little</label><br>   

		<input type="radio" id="C4U" name="Q4" value="U">
		<label for="C4U">Undecided</label><br>    

		<input type="radio" id="C4N" name="Q4" value="N">
		<label for="C4N">Disagree a little</label><br>

		<input type="radio" id="C4VN" name="Q4" value="VN">
		<label for="C4VN">Disagree a lot</label><br>

		<p class="question">5. How much do you agree with C5?</p>        

		<input type="radio" id="C5VP" name="Q5" value="VP">
		<label for="C5VP">Agree a lot</label><br>

		<input type="radio" id="C5P" name="Q5" value="P">
		<label for="C5P">Agree a little</label><br>   

		<input type="radio" id="C5U" name="Q5" value="U">
		<label for="C5U">Undecided</label><br>    

		<input type="radio" id="C5N" name="Q5" value="N">
		<label for="C5N">Disagree a little</label><br>

		<input type="radio" id="C5VN" name="Q5" value="VN">
		<label for="C5VN">Disagree a lot</label><br>          

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