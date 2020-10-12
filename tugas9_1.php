<?php
	function fibbo($bil){
		$arrFibbo = [];
		$num1 = 0;
		$num2 = 1;
		for ($i = 0; $i<$bil;$i++){
			if($i < 2){
				array_push($arrFibbo, $i);
			}else{
				$temp = $arrFibbo[$i-1] + $arrFibbo[$i-2];
				array_push($arrFibbo, $temp);
			}
		}
		return $arrFibbo;
	}

	echo "Fibbonacci 0 sampai 20 : <br>";
	echo implode(" ", fibbo(20));
?>