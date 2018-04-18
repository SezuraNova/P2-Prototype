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
$Score = 0;

while(!feof($myfile)) {
  $value = fgets($myfile);
  if (strcmp($value, "VP\n")==0) {
  	$Score = $Score + 3;
  } else if (strcmp($value, "P\n")==0) {
  	$Score = $Score + 1;
  } else if (strcmp($value, "N\n")==0) {
  	$Score = $Score - 1;
  } else if (strcmp($value, "VN\n")==0) {
  	$Score = $Score - 3;
  }   
}
fclose($myfile);

echo $_GET["Issue"] . "<br>";

//echo "A = " . $Score . "<br>";

//Creates/(adds to) a user's profile.txt 
$profilecheck = ($_GET["name"] . " Profile.txt");
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

?>

</body>
</html>