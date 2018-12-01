
<?php 
function getFinal($num){
	$r="";
	$to = rand(0, $num);
	for ($i = 0; $i < $to; $i++) 
	{
		$r.="_";
	}
	return $r;
}
?>
