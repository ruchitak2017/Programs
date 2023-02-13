<?php
function mod($n1,$n2)
{
	$mod=$n1%$n2;
	return $mod;
}
function power($n1,$n2)
{
	$pow=pow($n1,$n2);
	return $pow;
}
function sum($n1)
{
	$sum=0;
	while($n1>0)
	{
		$sum+=$n1;
		$n1--;
	}
	return $sum;
}
function fact($n2)
{
	$fact= 1;
	while($n2>0)
	{
		$fact*=$n2;
		$n2--;
	}
	return $fact;	
}
?>

