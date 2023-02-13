<?php

function  len($s){
    for($i=0;$s[$i] != null ;$i++);
    return $i;
}
function  VCount($s){
    $v = array('a','A','e','E','i','I','o','O','u','U');
    $len = strlen($s);
    $num = 0;
    for($i=0; $i<$len; $i++){
        if(in_array($s[$i], $v))
        {
            $num++;
        }
    }
    /*
    preg_match_all('/[aeiou]/i', $string, $num);
    return count($num[0]);
    */
    return $num;
}
function  Strlwr($s){

    return strtolower($s);
}
function  Strttl($s){
    return ucwords($s,' ');
}
function  Strpad1($s){
    return str_pad($s, 100, '*',STR_PAD_BOTH);
}
function  Strtrim($s){
    return ltrim($s);
}

?>