<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$inputValue = $_POST["get-data"];
$filteredHotels = [];

foreach ($hotels as $hotel) {
    if ($hotel['name'] === $inputValue) {
        $filteredHotels[] = $hotel;
    }
}
foreach ($filteredHotels as $hotel) {
    echo "Name: " . $hotel['name'] . "<br>";
    echo "Description: " . $hotel['description'] . "<br>";
    echo "Parking: " . ($hotel['parking'] ? 'Yes' : 'No') . "<br>";
    echo "Vote: " . $hotel['vote'] . "<br>";
    echo "Distance to center: " . $hotel['distance_to_center'] . "<br><br>";
}

?>