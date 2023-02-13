<?php
 $s1 = $_GET['s1'];
 $s2 = $_GET['s2'];
 $op = $_GET['op'];
 $l1 = strlen($s1);
 $l2 = strlen($s2);
 if($l1 > $l2){
    $small = $s2;
    $large = $s1;
 }
 else{
    $small = $s1;
    $large = $s2;
 }
 switch($op){
     case 'a': {
                     $output = strpos($large, $small);
                     if($output == 0)
                        printf("The %s appears at the start of the %s ", $small, $large);
                    else
                    printf("The %s does not appear at the start of the %s ", $small,$large);
                     break;
     }
     case 'b':{
                     $output =strpos($large, $small);
                     printf("The position of the %s in the %s is :  %d", $small,$large, $output+1 );
                     break;
     }
     case 'c':{
                    $n = $_GET['n'];
                     $output = strncmp($large, $small, $n);
                     if($output == 0)
                        printf("STRING 1 : %s and STRING 2: %s till %d CHARACTERS are equal",  $large, $small, $n);
                     else
                        printf("STRING 1 : %s and STRING 2: %s till %d CHARACTERS are NOT equal",  $large, $small, $n);
                     break;
     }
}

?>