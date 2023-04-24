<?php

// for($i = 0; $i<100; $i++){

$items = array(
	'friend'         => 50,
	'public'       => 25,
	'recommended' => 10,
	'e-learning'     => 15,
);

$max = 0;

foreach ($items as $item => $weight)
{
	$max		  += $weight;
	$items[$item]  = $max;
}

$random = mt_rand(1, $max);

foreach ($items as $item => $max) 
{   
	if ($random <= $max)
	{
		break;
	}
}

echo 'The selected item is "' . $item . '"';
// }
?>