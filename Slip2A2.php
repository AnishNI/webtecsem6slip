<?php
    $style = $_COOKIE['set1'];
    $size = $_COOKIE['set2'];
    $color = $_COOKIE['set3'];
    $b_color = $_COOKIE['set4'];

    $msg = "Welcome to PVGCOS";
    echo "<body bgcolor=$b_color>";
    echo "<font color=$color size=$size>$msg ";
    echo "</font></body>";
?>