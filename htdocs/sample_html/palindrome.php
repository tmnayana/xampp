<?php
   if( isset($_POST["txtPalin"])) {
   	  $txtPalin = $_POST['txtPalin'];
      echo "Enter text - ". $txtPalin . " is " . (checkPalin($txtPalin) ? "A Palindrome" : "NOT a Palindrome") . "<br />";
      exit();
   }
?>
<html>
   <body>

      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Enter Text: <input type = "text" name = "txtPalin" />
         <input type = "submit" value="Check for Palindrome" />
      </form>

   </body>
</html>

<?php
	function checkPalin($txtPalin)
	{
		$arrPalin = str_split($txtPalin);
		$arrLen = count($arrPalin);
		$isPalin = true;

		for($intI=0; $intI<count($arrPalin); $intI++)
		{
			if($arrPalin[$intI] != $arrPalin[$arrLen - 1])
			{
				$isPalin = false;
				break;
			}
    		$arrLen--;
    	}
    	return $isPalin;
	}
?>