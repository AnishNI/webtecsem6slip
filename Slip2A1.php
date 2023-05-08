<?php
    echo "style is ".$_GET['fstyle'].
        "<br>size is ".$_GET['fsize'].
        "<br>color is ".$_GET['fcolor'].
        "<br>Background color is ".$_GET['fbgcolor'];
    setcookie("set1",$_GET['fstyle'],time()+3600);
    setcookie("set2",$_GET['fsize'],time()+3600);
    setcookie("set3",$_GET['fcolor'],time()+3600);
    setcookie("set4",$_GET['fbgcolor'],time()+3600);
?>

<html>
    <body>
        <form action="Slip2A2.php">
            <input type=submit value=OK>
        </form>
    </body>
</html>