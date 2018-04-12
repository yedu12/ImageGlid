<?php include("connection.php");
    $q=mysql_query("select count(*) as c from stack where status='1'");
    $c=mysql_fetch_assoc($q);
    echo $c['c'];
    ?>
