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

	Welcome <?php echo $_GET["name"]; ?> <br>

<form action="yourscript.php" method="get">

       	<input type="hidden" name="name" value = "<?php echo $_GET["name"]; ?>" >
        <!-- E-mail: <input type="text" name="email"><br> -->

        <input type="hidden" name= "Issue" value = "B">

        <p class="question">1. How much do you agree with B1?</p>        

        <input type="radio" id="B1VP" name="Q1" value="VP">
        <label for="B1VP">Agree a lot</label><br>

        <input type="radio" id="B1P" name="Q1" value="P">
        <label for="B1P">Agree a little</label><br>   

        <input type="radio" id="B1U" name="Q1" value="U">
        <label for="B1U">Undecided</label><br>    

        <input type="radio" id="B1N" name="Q1" value="N">
        <label for="B1N">Disagree a little</label><br>

        <input type="radio" id="B1VN" name="Q1" value="VN">
        <label for="B1VN">Disagree a lot</label><br>

        <p class="question">2. How much do you agree with B2?</p>        

        <input type="radio" id="B2VP" name="Q2" value="VP">
        <label for="B2VP">Agree a lot</label><br>

        <input type="radio" id="B2P" name="Q2" value="P">
        <label for="B2P">Agree a little</label><br>   

        <input type="radio" id="B2U" name="Q2" value="U">
        <label for="B2U">Undecided</label><br>    

        <input type="radio" id="B2N" name="Q2" value="N">
        <label for="B2N">Disagree a little</label><br>

        <input type="radio" id="B2VN" name="Q2" value="VN">
        <label for="B2VN">Disagree a lot</label><br>

        <p class="question">3. How much do you agree with B3?</p>        

        <input type="radio" id="B3VP" name="Q3" value="VP">
        <label for="B3VP">Agree a lot</label><br>

        <input type="radio" id="B3P" name="Q3" value="P">
        <label for="B3P">Agree a little</label><br>   

        <input type="radio" id="B3U" name="Q3" value="U">
        <label for="B3U">Undecided</label><br>    

        <input type="radio" id="B3N" name="Q3" value="N">
        <label for="B3N">Disagree a little</label><br>

        <input type="radio" id="B3VN" name="Q3" value="VN">
        <label for="B3VN">Disagree a lot</label><br>

        <p class="question">4. How much do you agree with B4?</p>        

        <input type="radio" id="B4VP" name="Q4" value="VP">
        <label for="B4VP">Agree a lot</label><br>

        <input type="radio" id="B4P" name="Q4" value="P">
        <label for="B4P">Agree a little</label><br>   

        <input type="radio" id="B4U" name="Q4" value="U">
        <label for="B4U">Undecided</label><br>    

        <input type="radio" id="B4N" name="Q4" value="N">
        <label for="B4N">Disagree a little</label><br>

        <input type="radio" id="B4VN" name="Q4" value="VN">
        <label for="B4VN">Disagree a lot</label><br>

        <p class="question">5. How much do you agree with B5?</p>        

        <input type="radio" id="B5VP" name="Q5" value="VP">
        <label for="B5VP">Agree a lot</label><br>

        <input type="radio" id="B5P" name="Q5" value="P">
        <label for="B5P">Agree a little</label><br>   

        <input type="radio" id="B5U" name="Q5" value="U">
        <label for="B5U">Undecided</label><br>    

        <input type="radio" id="B5N" name="Q5" value="N">
        <label for="B5N">Disagree a little</label><br>

        <input type="radio" id="B5VN" name="Q5" value="VN">
        <label for="B5VN">Disagree a lot</label><br>          

        <input type="submit" value="Submit" >

    </form>


</section>




<footer>
    <h5>&copy; 2018. All rights reserved.</h5> 
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>