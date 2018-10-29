<?php
$count = 25;
$fibonacci = array();
array_push($fibonacci, 0,1);
	
for ($i=0;$i<$count;$i++) {
	
	$first = $fibonacci[$i];
	$j = $i+1;
	$second = $fibonacci[$j];
	$third = $first+$second;
	array_push($fibonacci, $third);
	echo $fibonacci[$i];
	echo ", ";
	
}

?>