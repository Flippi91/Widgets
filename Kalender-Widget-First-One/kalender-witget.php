<?php

	// Kofiguration -----------------
	setlocale (LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');

	// Tag Der Woche ------------------
	$weekday = strftime('%A');

	// Tag Monat und Jahr --------------
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
<body>

<h3 style="color:#999999;">KALENDER WIDGET</h3>

<div style="border:1px solid black;border-top:5px solid #000000; width:200px; height:250px;text-align:center;">
	<h2><?php echo $weekday; ?></h2>

	
	<span style="font-size:100px;font-weight:bold;"><?php echo $day;?></span>
	<h2><?php echo $month.' '.$year; ?></h2>
</div>

</body>
</html>