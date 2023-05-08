<?php
    session_start();

    echo "Employee Name ".$_SESSION['name'];
    echo "<br>Employee number ".$_SESSION['no'];
    echo "<br>Employee Address ".$_SESSION['addr'];

    $bas=$_REQUEST['bas'];
    $da=$_REQUEST['da'];
    $hra=$_REQUEST['hra'];
    $total=$bas+$da+$hra;

    echo "<br><br>Basic salary : ".$_REQUEST['bas'];
    echo "<br>DA salary: ".$_REQUEST['da'];
    echo "<br>HRA salary: ".$_REQUEST['hra'];
    echo "<br>Total salary: ".$total;
    session_destroy();
?>