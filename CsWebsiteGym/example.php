<?php
include_once "database.php";

// Example write
$database = new Database();
$result = $database->run("INSERT INTO cards SET name='Testy test';");

if ($result === true) {
    echo "Row inserted<br>";
} else {
    echo "Failed to insert row";
}


// Example read
$database = new Database();
$results = $database->fetch("SELECT * FROM cards;");

foreach ($results as $row) {
    echo "RowId: " . $row->id . "<br>";
}
