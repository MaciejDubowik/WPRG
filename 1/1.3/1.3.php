<?php
function cenzura($wyraz){
	$keyword[0] = 'ziemniak';
	$keyword[1] = 'kotki';
	$keyword[2] = 'pieski';

 echo str_replace($keyword, "*", $wyraz);

	

	
	
}


echo cenzura('pieski znalazly kotki na ulicy obok zabki');

?>