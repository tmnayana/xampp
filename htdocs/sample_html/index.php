<?php
	include_once 'cIncluding.php';
?>
<html>
	<head>
		<?php
			$browserLanguage = "";
			$objInc = new cIncluding();

			if(isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]))
			{
				$browserLanguage = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
			}
			else
			{
				$browserLanguage = "en";
			}
			setcookie("langCode", $browserLanguage);
			echo "Lan-".$browserLanguage;
		?>
	</head>
	<body>
		<a href="abc.php">Click</a>
		<?php
			$objInc->checkGlobals("Test again");
			$myTemp = $GLOBALS['testMsg'];
			echo "<br><br>".$myTemp;
		?>
	</body>
</html>