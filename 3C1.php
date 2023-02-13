<?php
/*
Write a PHP script for the following: Design a form to accept the marks of 5 different subjects
of a student, havingserial number, subject name & marks out of 100. Display the result in the
tabular format which will have total, percentage and grade. Use only 3 text boxes.(Use array
of form parameters)
*/
    $srno = $_GET['srno'];
    $sname = $_GET['sname'];
    $marks = $_GET['marks'];
    $srnos = explode(",",$srno);
    $snames = explode(",",$sname;
    $smarks = explode(",",$marks);
    echo "<table border='1'>";
    echo "<th>Sr No</th><th>Subject Name </th><th> Marks </th>"
    for($i=0;$i<5;$i++){
        echo"<td>$srnos[$i]</td><td>$snames[$i]</td><td>$smarks[$i]</td>";
        $total = $smarks[$i];
    }
    echo "</table>";

?>