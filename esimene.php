<?php
#muutujad
$myName = "S";
$myFamilyName = "J";

$hourNow = date("H");

#ajaga seotud muutujad

$schoolDayStart = date("d.m.Y") ."". "8.15";

#strtotime, lisab aja sekundites alates jaanuarist 1970 00:00:00 GMT mingi antud ajahetkeni, now paneb hetkeaja
$schoolBegin = strtotime($schoolDayStart);
$timeNow = strtotime("now");

#arvutused
$minutesPassed = round(($timeNow - $schoolBegin) / 60);
$hoursPassed = round($minutesPassed / 60 , 2);

echo "<p>" . "It has been " . $minutesPassed . " minutes or " . $hoursPassed . " hours since school started." . "</p>";

#if laused
$partOfDay = "";
if ($hourNow < 8) {
	$partOfDay = "early morning";
} 
elseif ($hourNow >= 8 and $hourNow < 16) {
	$partOfDay = "school hours";
}
else {
	$partOfDay = "idle time";
}


?>


<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Here is the title</title>
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
