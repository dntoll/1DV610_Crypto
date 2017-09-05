<?php 

class CryptoConverter {
	public $textToConvert;
	
	public function __construct($textInput) {
		$this->textToConvert = $textInput;
	}
	
	public function show() {
		echo $this->textToConvert;
	}
}