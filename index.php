<?php

require_once("CryptoView.php");
require_once("CryptoConverter.php");

$view = new CryptoView();

if (isset($_GET["text"])) {
	$converter = new CryptoConverter($_GET);
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf8'>
		<title>Crypto</title>
	</head>
	<body>
		<?php 
			$view->showForm(); 
			
			//If form is submited then show convertion
			if(isset($_GET["text"]) ) {
				$view->showConvertion($converter->getConvertion());
			}
		?>
	</body>
</html>