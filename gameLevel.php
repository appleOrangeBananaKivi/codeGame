<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Code Game</title>

	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/gameLevel.css">
</head>
<body>
	<div id="gameZone">
		<div id="levelHeader">Level 1</div>
		<form action="#" id="codeBlock" method="post">
			<div id="contentBlock">Content</div>
			<div id="writeCodeText">Kod ýazyň</div>
			<textarea id="commandLine"></textarea>
			<input id="runButton" type="submit" name="submit" value="Işlet">
		</form>
		<!-- <img id="sprite1" class="sprite" src="assets/assets/Previews/blockSnowRoundedLarge.png">
		<img id="sprite2" class="sprite" src="assets/assets/Previews/blockSnowRoundedLarge.png">
		<img id="sprite3" class="sprite" src="assets/assets/Previews/blockSnowRoundedLarge.png"> -->
		<?php 
			for ($i = 0; $i < 10; $i++){
				for ($j = 0; $j < 10; $j++){
		?>
					<img style="left: <?php echo(strval(300 + $j * 65 - $i * 28).'px'); ?>; top: <?php echo(200 + strval($j * 14 + $i * 40).'px'); ?>" class="sprite" src="assets/assets/Previews/blockSnowRoundedLarge.png">
		<?php
				}
			}
		?>
	</div>
</body>
</html>