<?php 

class CryptoView {
	public function show() {
		echo $this->toHTML();
	}

	public function toHTML() {
		$ret = "
		<h2>Konvertera till rövarspråket</h2>
		<form action='index.php' method='get'>
			<input type='text' name='text' />
			<button type='submit'>Rövarspråket</button>
			<button type='submit'>Svenska</button>
		</form>";

		return $ret;
	}
}
