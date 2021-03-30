<?php
function tabliczkaMnozenia($bok){
	for($x=1; $x<=$bok;$x++){
		for($i=1;$i<=$bok;$i++){
			echo ($x * $i). str_repeat('&nbsp;', 4);;
		}
		echo "<br>";
	}

return 0;
}
tabliczkaMnozenia(10);
?>