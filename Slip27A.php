<?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $nationality = $_POST['nationality'];
    if(preg_match('/[^A-Z]/', $name)){
        echo 'Name should be in upper case letters only.';
    }
    elseif($age < 18)
    {
        echo 'Age should not be less than 18 years.';
    }
    elseif(strcasecmp($nationality, 'Indian') != 0)
    {
        echo 'Nationality should be Indian.';
    }
    else
    {
        echo 'Validation successful. Voter details: <br>Name: '.$name.'<br>Age: '.$age.'<br>Nationality: '.$nationality;
    }
?>