<?php
	$fi = rand( 0, 999);
		echo "переменная fi = ", $fi;
	$se = rand( 0, 999);
		echo " переменная se = ", $se, " " ;
    
        function sum($fi, $se)
			{
			 return $fi+$se;
			}
        
            echo sum($fi, $se), " - сумма двух парметров ";
 
		function raz($fi, $se)
		    {
			 return $fi-$se;
			}
        
            echo raz($fi, $se), " - разность двух парметров ";
 
		function pro($fi, $se)
            {
			 return $fi*$se;
			}
    
            echo pro($fi, $se), " - произведение двух парметров ";
 
		function cha($fi, $se)
			{
			 return $fi/$se;
			}
                    
            echo cha($fi, $se), " - частное двух парметров ";
?>