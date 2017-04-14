<html>
	<head>
		<?php
			$browserLanguage = "";
			if(isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]))
			{
				$browserLanguage = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
			}
			else
			{
				$browserLanguage = "en";
			}
			setcookie("langCode", $browserLanguage);
			$cssFileName = "css/css_".$browserLanguage.".css";
		?>
		<title><?php echo "Lan-".$browserLanguage;?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo $cssFileName ?>" >
	</head>
	<body>
		<a href="abc.php">Click</a></br>
		<p class="lbl">Test CSS</p>
	</body>
</html>