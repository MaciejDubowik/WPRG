
<?php

$liczba = $_POST['podanaLiczba'];

function pierwsza($liczba){
	$licznik = 0;
    if ($liczba == 1){
    return false;
	}
	
    for ($i = 2; $i <= $liczba/2; $i++){
    	$licznik++;
        if ($liczba % $i == 0){
                    echo "ilosc iteracji pętli:";
                    echo $licznik;
                    echo "<br>";
            return false;
        }
       	
    }
    echo "ilosc iteracji pętli:";
    echo $licznik;
    echo "<br>";
    return true;
}
  

$czyJest = pierwsza($liczba);
if ($czyJest == true){
    echo "wybrana liczba jest liczba pierwsza";
    echo "<br>";
    
}
else{
    echo "wybrana liczba nie jest liczba pierwsza";
}
?>
