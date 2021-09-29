<?php

	// Kofiguration -----------------
	setlocale (LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');

	// Tag Der Woche ------------------
	$weekday = strftime('%A');

	// Tag Monat und Jahr
	$day = strftime('%d');
	$month = strftime('%B');
	$year = strftime('%Y');

	// Ausgabe in php
	/* echo $weekday; */

?>
<html>
<head>
	<title>KALENDER WIDGET</title>
	<meta charset="UTF-8">
</head>
<body style="background:#222; display: flex; justify-content:center; align-items:center; 
flex-direction: column;">

<h3 style="color:#fff;">KALENDER WIDGET</h3>

<div style="border:1px solid white;border-top:5px solid #fff; color:#fff; width:200px; height:250px;text-align:center;">
	<h2><?php echo $weekday; ?></h2>

	
	<span style="font-size:100px;font-weight:bold; color:#fff;"><?php echo $day;?></span>
	<h2 style="color:#fff;"><?php echo $month.' '.$year; ?></h2>
</div>

</body>
</html>