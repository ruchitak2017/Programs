<?php

    //require('3A2Fun.php');
    $s = $_GET['s1'];
    $seperator = $_GET['seperator'];
    $s1 = $seperator;
    $seperator = "/$seperator/";
    $op = $_GET['op'];
    switch($op){

        Case 'a':{
           
            $output = preg_split($seperator, $s);
            print_r($output);
            break;
        }
        Case 'b':{
            $output = preg_replace($seperator, "^", $s);
            printf("<br> Original String : %s <br> Replaced String %s", $s, $output);
            break;
        }
        Case 'c':{
            $output = strrchr($s, $s1);
            printf("<br> Lowercase string of %s is : <br> %s", $s, $output);
            break;
        }
    }
?>