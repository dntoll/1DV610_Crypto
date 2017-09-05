<?php 

/*
 * Handle html output
 */
class CryptoView {
	public function showForm() {
		echo $this->toHTML();
	}

	public function showConvertion($convertion) {
		echo "<p>" . $convertion . "</p>";
	}

	public function toHTML() {
		$ret = "
		<h2>Konvertera till rövarspråket</h2>
		<form action='index.php' method='get'>
			<input type='text' name='text' />
			<button type='submit' name='chosen_language' value='robber'>Rövarspråket</button>
			<button type='submit' name='chosen_language' value='swedish'>Svenska</button>
		</form>";

		return $ret;
	}
}
