<?php
	function is_number($num){
		if (!is_numeric($num)){
			echo "<h1 style=\"color:red\" >The parameter is not a number.";
		}
	}
	function is_in_range($num){
		if($num > 19999 || $num < 0)
			echo "<h1 style=\"color:red\" >The parameter is not within the range [0,19999].";
	}
	function is_prime($num){
		if (is_numeric($num)){
			if ($num == 1 || $num == 2)
				return true;
			for ($i=2; $i<$num; $i++){
				$a=$num%$i;
				if ($a == 0){
					return false;
					break;
				}else if ($i+1 == $num) {
					return true;
				}
			}
		}
	}
	function find_3_prime($array){
		$cnt=0;
		foreach ($array as $value){
			if (is_prime($value)){
				++$cnt;
			}
			if ($cnt == 3){
				echo "$value \n";
				break;
			}
		}
		
	}

	function check_exists ($array){
		foreach (array(146, 284, 871)  as $value){
			if(in_array($value, $array)){
				echo "The number $value exists in the array. ";
			}else{
				echo "The number $value does not exist in the array. ";
			}
		}
	}

?>