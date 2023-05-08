<?php
    // Create a new DOM document
    $doc = new DOMDocument();

    // Create the root element
    $cricketTeam = $doc->createElement("CricketTeam");

    // Create the first team element for Australia
    $teamAustralia = $doc->createElement("Team");
    $teamAustralia->setAttribute("country", "Australia");

    // Create the player element and set its value
    $player1 = $doc->createElement("player", "Steve Smith");
    $teamAustralia->appendChild($player1);

    // Create the runs element and set its value
    $runs1 = $doc->createElement("runs", "7090");
    $teamAustralia->appendChild($runs1);

    // Create the wicket element and set its value
    $wicket1 = $doc->createElement("wicket", "17");
    $teamAustralia->appendChild($wicket1);

    // Append the team element to the root element
    $cricketTeam->appendChild($teamAustralia);

    // Create the second team element for India
    $teamIndia = $doc->createElement("Team");
    $teamIndia->setAttribute("country", "India");

    // Create the player element and set its value
    $player2 = $doc->createElement("player", "Virat Kohli");
    $teamIndia->appendChild($player2);

    // Create the runs element and set its value
    $runs2 = $doc->createElement("runs", "12169");
    $teamIndia->appendChild($runs2);

    // Create the wicket element and set its value
    $wicket2 = $doc->createElement("wicket", "4");
    $teamIndia->appendChild($wicket2);

    // Create the category element and set its value
    $category = $doc->createElement("category", "Captain");
    $teamIndia->appendChild($category);

    // Append the team element to the root element
    $cricketTeam->appendChild($teamIndia);

    // Append the root element to the document
    $doc->appendChild($cricketTeam);

    // Save the XML file
    $doc->save("cricket.xml");
    echo "Elements added successfully!";
?>