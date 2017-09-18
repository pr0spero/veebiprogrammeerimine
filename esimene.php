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
$hoursPassed = round($minutesPassed / 60);
$hoursMinutesPassed = round($minutesPassed % 60);

echo "<p>" . "It has been " . $minutesPassed . " minutes or " . $hoursPassed . " hours and ". $hoursMinutesPassed ." minutes since school started." . "</p>";

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

#Birth related variables
$myAge = 0;
$ageNote = "";
$myBirthYear;
$yearsOfMyLife = "";

#var_dump($_POST);
#echo $_POST["birthYear"];

#Birth calculations

if (isset($_POST["birthYear"]) and $_POST["birthYear"] != 0) {
	$myBirthYear = $_POST["birthYear"];
	$myAge = date("Y") - $myBirthYear;
	#echo $myAge;
	$ageNote = "<p>You are about " . $myAge . " years old.</p>";
	}
	
	$yearsOfMyLife = "<ol> \n";
	$yearNow = date("Y");
	
	for ($i = $myBirthYear; $i <= $yearNow; $i++) {
		$yearsOfMyLife .= "<li>" . $i . "</li> \n";
	}
	$yearsOfMyLife .= "</ol> \n";
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
	
	<!--form input-->
	<p>Enter your date of birth to calculate your age!</p>
	<form method="POST">
		<label>Your date of birth: </label>
		<input name="birthYear" id="birthYear" type="number" min="1900" max="2017" value="<?php echo $myBirthYear; ?>">
		
		<input id="submitBirthYear" type="submit" value="S u b m i t">
	</form>
	
	<?php
	if ($ageNote != "") {
		echo $ageNote;
	}
	if ( $yearsOfMyLife !=""){
		echo "\n <h3> You've lived in the following years </h3> \n" . $yearsOfMyLife;
	}
	?>
	
	<p> Or other way around: </p>
	
	<ul>
		<?php
		for ($i = $yearNow; $i >= $myBirthYear; $i = $i - 1) {
			echo "<li>" . $i . "</li> \n";
		}
		?>
	</ul>
	
</body>	
</html>

