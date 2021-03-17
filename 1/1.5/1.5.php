<?php
echo 'jaka figure chcesz obliczyć? (trojkat, prostokat, trapez)';

function poleTrojkata($bokTrojkata, $wysokoscTrojkata){
	$powierzchniaTrojkata = ($bokTrojkata * $wysokoscTrojkata)/2;
	return $powierzchniaTrojkata;
}

function poleProstokata($bokProstokata, $bokProstokata1){
	$powierzchniaProstokata = $bokProstokata * $bokProstokata1;
	return $powierzchniaProstokata;
}

function poleTrapezu($dluzszaPodstawa, $krotszaPostawa, $wysokosc){
	$powierzchniaTrapezu = (($dluzszaPodstawa + $krotszaPostawa) * $wysokosc)/2;
	return $powierzchniaTrapezu;
}
$figura = 'trapez';
switch($figura){
	case 'trojkat':
		echo poleTrojkata(2, 2);
		break;
	case 'prostokat':
		echo poleProstokata(2,2);
		break;
	case 'trapez':
		echo poleTrapezu(2,2,2);
		break;
	default:
		echo "blad! Nie znaleziono danej figury.";
}


?>