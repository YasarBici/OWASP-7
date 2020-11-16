<!DOCTYPE html>
<html>
<head>
	<title>OWASP7</title>
</head>
<body>
	<h1>Zoekopdracht</h1>

	<form action="index.php" method="post">
		<input type="text" name="zoekopdracht" placeholder="Zoekopdracht ">
		<input type="submit" name="submit" value="Zoek">
	</form>

</body>
</html>

<?php
	if (isset($_POST["submit"])) {
		echo "De zoekopdracht is: " . $_POST["zoekopdracht"] . "<br/>";
		echo "Geen resultaat gevonden!";
	}
?>