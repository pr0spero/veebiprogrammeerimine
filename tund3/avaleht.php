<?php
#muutujad
$myName = "S";
$myFamilyName = "J";

#kuu nimed eesti keeles
$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
#var_dump($monthNamesEt);
#echo $monthNamesEt[3];

$monthNow = $monthNamesEt[date("n") - 1];

#echo $monthNow;

$hourNow = date("H");

#ajaga seotud muutujad

$schoolDayStart = date("d.m.Y") ."". "8.15";

#strtotime, lisab aja sekundites alates jaanuarist 1970 00:00:00 GMT mingi antud ajahetkeni, now paneb hetkeaja
$schoolBegin = strtotime($schoolDayStart);
$timeNow = strtotime("now");

#arvutused
$minutesPassed = round(($timeNow - $schoolBegin) / 60);
$hoursPassed = round($minutesPassed / 60);
$hoursMinutesPassed = round($minutesPassed % 60);

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

	<!--date related php-->
	<?php
	echo "<p>Today is ";
	echo date("d ") . $monthNow . date(" Y") . " and it's " . $partOfDay;
	echo ".<p>";
	echo "<p>It was " .date("H:i:s"). " when this page was opened.<p>";
	echo "<p>" . "It has been " . $minutesPassed . " minutes or " . $hoursPassed . " hours and ". $hoursMinutesPassed ." minutes since school started." . "</p>";
	?>
	
	<h2>Some links</h2>
	<p><a href="http://www.tlu.ee">We study in Tallinn University</a></p>
	<p>My first php page is <a href="../esimene.php">here</a></p>
	<p>My teachers page is <a href="../../../~rinde">here</a></p>
	<p>You can see pictures of the University <a href="foto.php">here</a></p>
	
	
</body>	
</html>

