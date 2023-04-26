<?php

// for($i = 0; $i<100; $i++){

	function feed_content(){
$items = array(
	'friend'         => 70,
	'public'       => 5,
	'recommended' => 5,
	'e-learning'     => 20,
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
	}
// }

feed_content();
?>