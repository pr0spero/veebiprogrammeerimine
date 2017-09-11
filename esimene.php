<?php
#muutujad
$myName = "S";
$myFamilyName = "J";

$hourNow = date("H");

#Use $hourNow value to decide what time of day it is using if statements

$schoolDayStart = date("d.m.Y") ."". "8.15";

$schoolBegin = strtotime($schoolDayStart);
$timeNow = strtotime("now");

echo $schoolBegin;

echo $timeNow;

$minutesPassed = round(($timenow - $schoolBegin) / 60);



$partOfDay = "";
if ($hourNow < 8) {
	$partOfDay = "early morning";
} 
if ($hourNow >= 8 and $hourNow < 16) {
	$partOfDay = "school hours";
}
if ($hourNow >= 16) {
	$partOfDay = "free time";
}




?>


<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>no title</title>
</head>
<body>
<br>
	<h1>
	<?php
	echo $myName . " " . $myFamilyName;
	?>
	</h1>
	<!--<p>üääöõäüöüõäööüõäöõäöüõäöüõäö</p>-->

	<?php
	echo "<p>First php message<p>";
	echo "<p>Today is ";
	echo date("d.m.Y") . " and it's " . $partOfDay;
	echo ".<p>";
	echo "<p>It was " .date("H:i:s"). " when this page was opened.<p>";
	?>

</body>	
</html>
