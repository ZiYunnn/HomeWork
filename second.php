<?php 
	//7的倍数
	echo "7的倍数：";
	for($i = 1; $i <= 100; $i++){
		if($i % 7 == 0){
			echo $i." ";
		}
	}
	echo "<hr>";

	//个位为7
	echo "个位为7：";
	for($i = 1; $i <= 100; $i++){
		if($i % 10 == 7){
			echo $i." ";
		}
	}
	echo "<hr>";

	//十位为7
	echo "十位为7：";
	for($i = 1; $i <= 100; $i++){
		if(($i - ($i % 10)) / 10 == 7){
			echo $i." ";
		}
	}
	echo "<hr>";

	//与7无关的数
	echo "与7无关的数：";
	for($i = 1; $i <= 100; $i++){
		if($i % 10 != 7 && ($i - ($i % 10)) / 10 != 7 && $i % 7 != 0){
			echo $i." ";
		}
	}
	echo "<hr>";

	//九九乘法表
	echo "九九乘法表：";
	echo "<br>";
	for($i = 1; $i <= 9; $i++){
		for($j = 1; $j <= $i; $j++){
			$result = $i * $j;
			echo $j."×".$i."=".$result." ";
		}
		echo "<br>";
	}
 ?>