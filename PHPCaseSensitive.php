<!DOCTYPE html>

<html>
	<h1>PHP Case SEnsitivity</h1>
	<body>
	<?php
	echo "echo in small<br>";
	EcHo "imagine EcHo works too<br>";
	ECHO "Same as ECHO<br>";
	echo "But in variables it is Sensitive<br>";
	
	$color = "blue";
	echo "My Car is ". $color ." in color.<br>";
	echo "My Car is ". $COLOR ." in color.<br>";
	echo "My Car is ". $coLOR ." in color.<br>";
	?>
	
	
	</body>
</html>