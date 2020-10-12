<?php

	function primeNumber($bil){
		$arrPrime = [];
		for($i = 1; $i<$bil; $i++){

			if($i/2 == 1 || $i/3 == 1 || $i/5 == 1){
				array_push($arrPrime, $i);
			}else if($i%2 != 0 && $i%3 !=0 && $i%5 != 0){
				array_push($arrPrime, $i);
			}
		}
		return $arrPrime;
	}

	echo "Bilangan Prima : <br>";
	echo implode(" , ",primeNumber(200));
?>