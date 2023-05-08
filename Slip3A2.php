<?php
    $usr = "chetan";
    $psw = "123";
    $name = $_COOKIE['setname'];
    $pass = $_COOKIE['setpass'];
    
    session_start();
    //	$_SESSION['count']=0;
    if($_SESSION['count']<3)
    {
        if (($name == "chetan" && $pass == "123")) 
        {
            echo "WELCOME SIR/MAM Ur LOGIN SUCCESSFULLY DONE...";
        }
        else
        {
            $_SESSION['count'] = $_SESSION['count']+1;
            echo "incorrect login try again...<BR> U have ".(3 - $_SESSION['count']). " chances" ;
        }
    }
    else
    {
        echo "More than 3 chances not allow for incorrect login!!!";
    }
?>