<?php
    session_start();
    $_SESSION['name'] = $_POST['Ename']; 
    $_SESSION['no'] = $_POST['Eno']; 
    $_SESSION['addr'] = $_POST['Address']; 
?>

<html>
    <body>
        <form action="Slip4A2.php" method=POST>
            Enter Basic Salary : <input type=text name=bas><br><br>
            Enter DA Salary : <input type=text name=da><br><br>
            Enter HRA Salary : <input type=text name=hra><br><br>
            <input type=submit name=submit value=Info>
        </form>
    </body>
</html>
