<?php
    function createMsg($sname= "Shilpa", $cname="Kaveri College", $msg="Welcome "){
        echo " $cname $msg $sname";
    }

    $sname = $_GET['sname'];
   $cname = $_GET['cname'];
   $msg = $_GET['msg'];
   echo "<br> $cname $msg $sname<br>";
    if($sname == null && $cname==null && $msg==null)
        createMsg();
    if($sname != null && $cname==null && $msg==null)
        createMsg($sname);
    if($sname != null && $cname !=null && $msg==null)
        createMsg($sname, $cname);
    if($sname != null && $cname !=null && $msg!=null)
        createMsg($sname, $cname,$msg);
?>