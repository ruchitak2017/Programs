<?php
                $a=array("Ruchita" , "Vaishali" ,"Gautami" , "Sonali" , "Sakshi");
                $q=$_GET['q'];

if(strlen($q)>0)
                {
                                $match="";
for($i=0;$i<count($a);$i++)
                                {
                                                if(strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
                                                                {
if($match=="")
                                                                                {
                                                                                                $match=$a[$i];
                                                                                }
else
                                                                                {
                                                                                                $match=$match.",".$a[$i];
                                                                                }
                                                                }
                                }

if($match=="")
                                {
echo "No Suggestios";
                                }
else
                                {
echo $match;
                                }
                }
    ?>
