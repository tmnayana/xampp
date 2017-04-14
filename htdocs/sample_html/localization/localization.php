<?php

class ePALocalization
{
	//echo 'hi from localization';
	var $flagAppendText = True;
	var $textToAppend = "WWWWW";

	function translateString($stringToTranslate) {
		if($this->flagAppendText) {
			$stringToTranslate = $this->textToAppend.$stringToTranslate.$this->textToAppend;
		}

		return $stringToTranslate;
	}
}

?>