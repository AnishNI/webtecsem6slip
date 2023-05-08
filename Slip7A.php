<?php
    $xmldata = simplexml_load_file("movie.xml") or die("Failed to load");
    foreach($xmldata->children() as $mov)
    {
        echo $mov->MovieNo . ", ";
        echo $mov->MovieTitle . ", ";
        echo $mov->ActorName . ", ";
        echo $mov->ReleaseYear . "<br>";
    }
?>