<?php 
	
	$numbers = range(1, 10);
	$romans = ["I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X"];

	foreach($numbers as $indexNumber => $number) {
		foreach($romans as $indexRoman => $roman) {
			if($indexNumber === $indexRoman) {
				echo "<strong>$number</strong> 
				<em>convertendo numero romano:</em> 
				<strong>$roman </strong><br>";
			}
		}
	}

?>