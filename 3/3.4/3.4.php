
<?php

$liczba =43;

function pierwsza($liczba){
	$licznik = 0;
    if ($liczba == 1){
    return false;
	}
	
    for ($i = 2; $i <= $liczba/2; $i++){
    	$licznik++;
        if ($liczba % $i == 0){
            return false;
        }
       	
    }
    echo $licznik;


    
    return true;
}
  

$czyJest = pierwsza($liczba);
if ($czyJest == true){
    echo "wybrana liczba jest liczba pierwsza";
}
else{
    echo "wybrana liczba nie jest liczba pierwsza";
}
?>