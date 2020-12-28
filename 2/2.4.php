<?php
	echo " Первый аргумент: ", $arg1 = rand( -99, 99);
	echo " Второй аргумент: ", $arg2 = rand( -99, 99);
	echo " Выбранная операция ", $operation = '+';
		function mathOperation($arg1, $arg2, $operation) {
			switch ($operation){
                
                case "+":
				return $arg1+$arg2;
				break;
 
				case "-":
				return $arg1-$arg2;
				break;
 
				case "*":
				return $arg1*$arg2;
				break;
 
				case "/":
				return $arg1/$arg2;
				break;
			} 
       }
    echo " ", $arg1, $operation, $arg2, " = ", mathOperation($arg1, $arg2, $operation);
?>