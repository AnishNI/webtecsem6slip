<?php
    $conn=pg_connect("host=linux1 dbname=tybsc091 user=tybsc091 password=qwe");
    $name=$_GET['q'];
    $q="select * from emp where ename='$name'";
    $result=pg_query($conn,$q);
    echo "<table border=1>";
    echo "<tr><th>Emp No.</th><th>Name</th></tr>";
    while($row=pg_fetch_assoc($result))
    {
        echo "<tr><td>";
        echo $row['eno']."</td>";
        echo "<td>".$row['ename']."</td> ";
    }
    echo "</tr></table>";
?>