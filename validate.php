<?php

// Function to validate the name input
function validateName($name) {
    // Name should be between 2 and 50 characters and only contain letters, apostrophes, hyphens, and spaces
    return preg_match("/^[a-zA-Z-' ]{2,50}$/", $name);
}

// Function to validate the email input
function validateEmail($email) {
    // Simple email validation
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate the event selection
function validateEvent($eventName) {
    // Example list of valid event names
    $validEvents = [
        "Day at the Estate",
        "Wing Night",
        "Bid Day"
    ];
    return in_array($eventName, $validEvents, true);
}

?>
