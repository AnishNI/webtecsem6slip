<?php
    $xmldata = simplexml_load_file("book.xml") or die("Failed to load");
    echo "Name       Rate      Quantity<br>";
    foreach($xmldata->children() as $book)
    {
        echo $book->book_name.",  ";
        echo $book->book_rate.", ";
        echo $book->book_quantity."<br>";
    }
?>