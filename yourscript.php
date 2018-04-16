<html>
<body>

Welcome <?php echo $_GET["name"]; ?> <br>
<!-- Your email address is: <?php echo $_GET["email"]; ?> <br>
 -->

<?php
//Writing answers to text file
$myfile = fopen("newfile.txt", "w+") or die("Unable to open file!");
$x = $_GET["Q1"];
$txt =$x . "\n";
fwrite($myfile, $txt);

$x = $_GET["Q2"];
$txt = $x . "\n";
fwrite($myfile, $txt);

$x = $_GET["Q3"];
$txt = $x . "\n";
fwrite($myfile, $txt);

$x = $_GET["Q4"];
$txt = $x . "\n";
fwrite($myfile, $txt);

$x = $_GET["Q5"];
$txt = $x . "\n";
fwrite($myfile, $txt);

//echo file_get_contents("newfile.txt") . "<br>";
rewind($myfile);


//Answer Analysis
$A = 0;

while(!feof($myfile)) {
  $value = fgets($myfile);
  if (strcmp($value, "VP\n")==0) {
  	$A = $A + 3;
  } else if (strcmp($value, "P\n")==0) {
  	$A = $A + 1;
  } else if (strcmp($value, "N\n")==0) {
  	$A = $A - 1;
  } else if (strcmp($value, "VN\n")==0) {
  	$A = $A - 3;
  }   
}
fclose($myfile);

echo $_GET["Issue"] . "<br>";

//echo "A = " . $A . "<br>";

//Creates/(adds to) a user's profile.txt 
$myprofile = fopen($_GET["name"] . " Profile.txt", "a+") or die("Unable to open file!");
if ($A==15){
	$Stance = "You have an extremely positive Stance to issue " . $_GET["Issue"];
} else if ($A>=10){
	$Stance = "You have a very positive Stance to issue " . $_GET["Issue"];
} else if ($A>=5){
	$Stance = "You have a positive Stance to issue " . $_GET["Issue"];
} else if ($A>=-4){
	$Stance = "You have a neutral Stance to issue " . $_GET["Issue"];
} else if ($A>=-9){
	$Stance = "You have a negative Stance to issue " . $_GET["Issue"];
} else if ($A>=-14){
	$Stance = "You have a very negative Stance to issue " . $_GET["Issue"];
} else {
	$Stance = "You have an extremely negative Stance to issue " . $_GET["Issue"];
}

fwrite($myprofile, $Stance);
echo file_get_contents($_GET["name"] . " Profile.txt") . "<br>";
fclose($myprofile);

?>

</body>
</html>