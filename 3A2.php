<?php
    require('3A2fun.php');
    $s = $_GET['s1'];
    $op = $_GET['op'];
    switch($op){

        Case 'Len':{
            $output = len($s);
            printf("<br> Length of string %s is : %d<br>", $s, $output);
            break;
        }
        Case 'VCnt':{
            $output = VCount($s);
            printf("<br> Total vowel Count in %s is %d", $s, $output);
            break;
        }
        Case 'Strlwr':{
            $output = Strlwr($s);
            printf("<br> Lowercase string of %s is : <br> %s", $s, $output);
            $output = Strttl($s);
            printf("<br> Title Case of %s is : <br> %s ", $s, $output);
            break;
        }
        Case 'Strpad':{
            $output = Strpad1($s);
            printf("<br> String padding of '*' in %s is  : <br> %s", $s, $output);
            break;
        }
        Case 'Strtrim':{
            $output = Strtrim($s);
            printf("<br> Remove leading spaces from %s is  : <br> %s", $s, $output);
            break;
        }
        Case 'Strrev':{
            $output = strrev($s);
            printf("<br> String reverse of %s  is  : <br> %s", $s, $output);
            break;
        }
    }
?>