<?php

// Get data from the POST request
$twitter_data = json_decode(file_get_contents('php://input'), true);

if ($twitter_data != '') { // If data is found
    // Sort the data by key
    asort($twitter_data);

    // Iterate through each element in the data array
    foreach ($twitter_data as $key => $value) {
        // Echo the key and value
        echo $key . ": " . $value . "<br>";
    }
} else { // If no data is found
    echo "Data unavailable.";
}
