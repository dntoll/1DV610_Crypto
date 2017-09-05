<?php 

class CryptoConverter {
	private $textToConvert;
	private $chosenLanguage;
	
	private $consonants = array("b", "c", "d", "f", "g", "h", 
		"j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "x", "z");
	
	/*
		Initiates object of this class
		@param (array textInput)
	 */
	public function __construct($textInput) {
		$this->textToConvert = strtolower($textInput["text"]);
		$this->chosenLanguage = $textInput["chosen_language"];
	}
	
	/*
		Converts swedish to robber language
		@return (string convertedText)
	 */
	public function convertToRobberLanguage() {
		$convertedText = "";
		$textToConvertArray = str_split ($this->textToConvert, 1);

		//Algorithm that encrypts swedish to robber language.
		//If this character in the sentence is a consonant then add letter 'o' 
		//and the same consonant into the converted sentence.
		foreach($textToConvertArray as $char){
			if ($this->isConsonant($char)) {
				$convertedText .= $char . "o" . $char;
			} else{
				$convertedText .= $char;
			}
		}
		return $convertedText;
	}

	/*
		Converts robber language to swedish
		@return (string convertedText)
	 */
	public function convertToSwedish() {
		$convertedText = "";
		$textToConvertArray = str_split ($this->textToConvert, 1);

		//Algorithm that decrypts robber language to swedish
		for ($i = 0; $i < count($textToConvertArray) - 1; $i++){
			if ($this->isConsonant($textToConvertArray[$i])) {
				$convertedText .= $textToConvertArray[$i];
				$i += 2;
			} else{
				$convertedText .= $this->textToConvert[$i];
			}
		}
		return $convertedText;
	}

	private function isConsonant($char){
		return in_array($char, $this->consonants);
	}

	public function getConvertion() {
		if ($this->chosenLanguage == "robber") {
			return "Språk: " . $this->chosenLanguage . " Översättning: " . $this->convertToRobberLanguage();
		} else if($this->chosenLanguage == "swedish") {
			return "Språk: " . $this->chosenLanguage . " Översättning: " . $this->convertToSwedish();
		} 
	}
}