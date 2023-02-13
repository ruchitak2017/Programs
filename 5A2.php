<?php
    /*
    Q2. Consider the following entities and their relationships
Event (eno , title , date )
Committee ( cno , name, head , from_time ,to_time , status)
Event and Committee have many to many relationship. Write a script to accept title of event and
modify status committee as working. 
    */
    $title = $_GET['title'];
    $host = "host=192.168.1.51";
    $port = "port=5432";
    $dbname = "dbname = ty1";
    $credentials = "user = ty11 password='' ";
 
    $db = pg_connect( "$host $port $dbname $credentials" );

    if(!$db)  echo "Error : Unable to open database\n";
    else  echo "Opened database successfully\n";

    $sql ="UPDATE committee 
    set status = 'Working' 
    where cno = (select cno from ce, event where ce.eno = (select eno from event where title = '$title'));";

    $ret = pg_query($db, $sql);
    if(!$ret) {
        echo pg_last_error($db);
        exit;
    } else   echo "Record updated successfully\n";
    $sql = "SELECT * from event, committee, ce where event.eno = ce.eno and committee.cno = ce.cno ";
    $ret = pg_query($db, $sql);
    if(!$ret) {
        echo pg_last_error($db);
        exit;
    }
    echo " <table border=1>";
    echo"<tr><th>ENO</th><th>TITLE</th><th>DATE</th><th>COMMITTEE NAME</th><th>COMMITTEE HEAD</th><th>FROM TIME</th>
    <th>TO TIME</th><th>STATUS</th></tr>";

    while($row = pg_fetch_row($ret)) {
       echo "<tr><td>$row['eno']</td><td>$row['title']</td><td>$row['date']</td><td>$row['name']</td><td>$row['head']</td><td>$row['from_time']</td>
       <td>$row['to_time']</td><td>$row['status']</td></tr>";
    }
    echo "</table>";
    pg_close($db);
?>