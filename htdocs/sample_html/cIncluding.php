<?php
class cIncluding {
	private $testMsg;

	public function checkGlobals($passMsg)
	{
		$testMsg = "Testing";
		$GLOBALS['testMsg'] = $testMsg ;
		print_r ("<br><br>".$GLOBALS['testMsg']);
		$testMsg = $passMsg;
		$GLOBALS['testMsg'] = $testMsg ;
	}
}
?>