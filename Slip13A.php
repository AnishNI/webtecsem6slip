<?php
    //Get the name entered by the user
    $name = $_POST['name'];

    //Check if the name is empty
    if(empty($name))
    {
        echo 'Stranger, please tell me your name!';
    }

    //Check if the name is one of the masters names
    else if($name == 'Rohit' || $name == 'Virat' || $name == 'Dhoni' || $name == 'Ashwin' || $name == 'Harbhajan')
    {
        echo 'Hello,master!';
    }

    //Otherwise, the server doesn't know the user
    else
    {
        echo $name.',I dont know you!';
    }
?>