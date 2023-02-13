<?php
functionis_odd($var)
{
if($var%2==1)
return $var;
}

$choice=$_POST['ch'];

        $arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>6,'g'=>7,'h'=>8);
        $arr1=array('l'=>11,'m'=>22,'n'=>33,'o'=>44,'p'=>55,'q'=>66,'r'=>77,'s'=>88);
        $arr2=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'p'=>23,'q'=>64,'r'=>37,'s'=>78);
        $array1 = array("a" => "green", "red", "blue");
        $array2 = array("b" => "green", "yellow", "red");
switch($choice)
        {
case 1:
print_r(array_chunk($arr,2,true));
print_r($arr);
break;
case 2:
asort($arr);
echo "Array in ascending order:<br>";
print_r($arr);
break;
case 3:
print_r(array_filter($arr,'is_odd'));
break;
case 4:
print_r(array_merge($arr,$arr1));
break;
case 5:
                        $result = array_intersect($array1, $array2);
print_r($result);
break;
case 6:
                        $union=array_merge($arr,$arr1);
print_r(array_unique($union));
break;
case 7:
print_r(array_diff($arr,$arr1));
break;
        }
?>
