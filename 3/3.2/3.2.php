<?php
function rzutKostka($ilosc){
$tab = [];
 
for($i = 1; $i<=$ilosc; $i++){	
	$rzut = rand(1,6);
	array_push($tab, $rzut);
}

echo "<pre>";
print_r($tab);
echo "</pre>";

	
	
return 0;
} 
rzutKostka(5);

?>