<html>
<body>
    <!--
Q1) Write a program to read a flat file “item.dat”, which contains details of 5 different items such
as Item code, Item Name, unit sold, and Rate. Display the Bill in tabular format.
   -->
</body>
</html>
<?php
    $f = file("item.dat");
    for($i=0;$i<count($f);$i++)
    {
        $d = explode(" ",$f[$i]);

var_dump($d);
echo "<br >";
    }
        
    

?>