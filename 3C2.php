<?php
    $s = $_GET['s1'];
    $s3 = $_GET['s2'];
    $pos = $_GET['s3'];
    $big = "My Name is Ashish";
    $small = "Great";
    $op = $_GET['op'];
    switch($op){

        Case 'a':{

            $variable = substr($s, 0, strpos($s, "s"));
            print_r($variable);
            break;
        }
        Case 'b':{
            $var = substr_replace( $s, $s3, $pos, 0 );
            echo"Given String is : " .$var;
            break;
        }
        Case 'c':{
            echo "Before replacement String is : " .$big;
            $var1 = substr_replace($big, "Excellent",0, 5);
            echo "<br>After replacement String is : " .$var1;
            break;
        }
        Case 'd':{
		            echo"<br>replace a specific char to string -->".str_replace("i","I",$big);
		            break;
        }
    }
?>
