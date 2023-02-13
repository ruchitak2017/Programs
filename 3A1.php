<?php
include("3A1fun.php");
$n1=2;//$n1= $_GET["n1"];
$n2=3;//$n2= $_GET["n2"];
$v='fact';
switch($v)
{
	case 'mod':$output= mod($n1,$n2);
		echo("Mod=".$output);
		break;
	case 'pow':$output=power($n1,$n2);
		echo("Power=".$output);
		break;
	case 'sum':$output=sum($n1);
		echo("Sum=".$output);
		break;
	case 'fact':$output= fact($n2);
		echo("Factorial=".$output);
		break;
}
?>

