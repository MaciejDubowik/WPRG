<?php

function wybranieWhile(){
	echo $tab[] = rand(1,100); 
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100); 

	$x = 0;
	$najwieksza = 0;
	while($x < count($tab)){
		if($tab[$x]> $najwieksza){
			$najwieksza = $tab[$x];
			$x++;
		}
		else{
			$x++;
		}
	}
	echo "</br>"; 
	echo "najwieksza liczba: ";
	return $najwieksza;
}

function wybranieFor(){
	echo $tab[] = rand(1,100); 
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100); 
	$najwieksza = 0;
	for($x = 0; $x<count($tab); $x++){
		if($tab[$x]> $najwieksza){
			$najwieksza = $tab[$x];
			$x++;
		}
		else{
			$x++;
		}
	}
	echo "</br>"; 
	echo "najwieksza liczba: ";
	return $najwieksza;

}	


function wybranieDoWhile(){
	echo $tab[] = rand(1,100); 
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100); 

	$najwieksza = 0;
	$x = 0;
	do {
		if($tab[$x]> $najwieksza){
			$najwieksza = $tab[$x];
			$x++;
		}
		else{
			$x++;
		}		
	}while($x < count($tab));

	echo "</br>"; 
	echo "najwieksza liczba: ";
	return $najwieksza;


}


function wybranieForEach(){
	echo $tab[] = rand(1,100); 
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100);
	echo " ";
	echo $tab[] = rand(1,100); 
	$najwieksza = 0;
	foreach( $tab as $najwieksza){
		$najwieksza = max($tab);
	}
	echo "</br>"; 
	echo "najwieksza liczba: ";
	return $najwieksza;
}


echo wybranieFor();

?>