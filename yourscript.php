<html>
<body>

<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$x = $_GET["Q1"];
$txt = $x . " Q1\n";
echo $x;
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>