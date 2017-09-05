<?php 

class CryptoConverter {
	public $textToConvert;
	public $chosenLanguage;
	
	public function __construct($textInput) {
		$this->textToConvert = $textInput["text"];
		$this->chosenLanguage = $textInput["chosen_language"];
	}
	
	public function convertToRobberLanguage() {
		
	}
	
	public function convertToSwedish() {
		
	}
	
	public function show() {
		echo $this->textToConvert;
		echo "Språk:" . $this->chosenLanguage;
	}
}