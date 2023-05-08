<?php
    setCookie("setname",$_POST['username'],time()+60*60*1);
    setCookie("setpass",$_POST['password'],time()+60*60*1);
?>

<html>
    <body>
        <form action ="Slip3A2.php">
            <input type = "submit" name ="submit">
        </form>
    </body>
</html>