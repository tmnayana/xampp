<?php
	include "/localization/localization.php";
?>
<html>
	<head>
		<?php
			$browserLanguage = "en";
			$local = new ePALocalization();

			//echo "<script type='text/javascript' src='./localization/localization.js'></script>";
			//echo "<script type='text/javascript' src='./localization/".$browserLanguage."_flow1.js'></script>";

			include "/localization/".$browserLanguage."_res1.php";
			$stringToAppend = sprintf($localization['deleteImageWarning'], "sr1", "sr2", "sr3");

			translateDBStrings("\nabc xyz");
			translateDBStrings("\nabcMRN");

			function translateDBStrings($dbString)
			{
				$dbKey = str_replace(" ", "_", $dbString);
				// call the translate method from here
				echo $dbKey;
			}
		?>
		<script language="JavaScript">
			//alert(hello + " taken from resource file");
			//alert(translateConcatString("Hello %s ! %s \n Try JS %s", "PHP^Good morning^Team"));
		</script>
	</head>
	<body>
		<font color="brown">Label - <?php echo $local->translateString($localization['firstName']); ?></font></br></br>
		<font color="red"><?php echo $local->translateString($stringToAppend);?></font>
	</body>
</html>