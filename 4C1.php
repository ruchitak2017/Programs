<?php
$choice=$_POST['ch'];
{
        $a=array('sophia'=>"31", 'Jacob'=>"41",'William'=>"39",'Ramesh'=>"40");
switch($choice)
        {
case 1: echo"<br>";
sort($a);
print_r($a);
break;
case 2: echo"<br>";
ksort($a);
print_r($a);
break;
case 3: echo"<br>";
arsort($a);
print_r($a);
break;
case 4: echo"<br>";
krsort($a);;
print_r($a);
break;

        }
}

?>
