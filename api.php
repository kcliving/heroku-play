<?php

    //this is the basic way of getting a database handler from PDO, PHP's built in quasi-ORM
    $dbhandle = new PDO("sqlite:scrabble.sqlite") or die("Failed to open DB");
    if (!$dbhandle) die ($error);
 
    if($_GET["button"] == "getrack"){
    $query = "SELECT rack, words FROM racks WHERE length=7 order by random() limit 0, 1";
    $statement = $dbhandle->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($results);
    }
?>