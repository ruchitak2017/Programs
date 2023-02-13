<?php

    $s = $_GET['s1'];
    $a[]=explode("@",$s);
     $b=$a[0][0];
     $c=$a[0][1];
        if(substr_count($s,"@")>1)
        {
          echo "The email Id is Invalid";
          echo "<br> more than two @ sign";
        }elseif(substr_count($b,".")>1)
       {
          echo "The email Id is Invalid";
          echo "<br> The dot (.) can appear at the most once before @";
       }elseif((substr_count($c,".")<1)||(substr_count($c,".")>2))
         {  
            echo "the email id is invalid";
             echo "<br> . symbol at the most twice or at least once after @ symbol";
          }

        elseif((str_starts_with($b,"$")) || (str_starts_with($b,"@")) || (str_starts_with($b,"_")) || (str_starts_with($b,".")) || (str_starts_with($b,"?")))
        {
          echo "Invalid Email ID";
          echo "<br>The substring before @ should not begin with a digit or underscore or dot or @ or any other special character";
        }
       else
         {
             echo "Email ID is Valid";
          }

?>
