<?php
	date_default_timezone_set('Europe/Amsterdam');
	$time = date('H');
	$text = "";
	$background = "";

	if($time <6){
		$text = "Goede nacht";
		$background = "images/night.png";
	}
	elseif($time >= 6 && $time < 12){
		$text = "Goede morgen";
		$background = "images/morning.png";
	}
	elseif($time >= 12 && $time < 18){
		$text = "Goede middag";
		$background = "images/afternoon.png";
	}
	elseif($time >= 18){
		$text = "Goede avond";
		$background = "images/evening.png";
	}




?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="dag.css">

	<title>Dag</title>
</head>
	<body class="body">
	<img src="<?= $background ?>" class="foto">

	<div id="tekst">
		<h1><?= $text ?></h1>
		<h1><?= "Het is nu " .date('H:i') ?>
	</h1>

	</div>
</body>
</html>