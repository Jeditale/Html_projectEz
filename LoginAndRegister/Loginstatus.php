<?php
// Start the session
session_start();

// Prepare an array to hold our response data
$response = array();

// Check if the user_id is set in the session
if(isset($_SESSION['user_id'])) {
    // If it is, the user is logged in
    $response['loggedIn'] = true;
    $response['userId'] = $_SESSION['user_id'];
} else {
    // If it's not, the user is not logged in
    $response['loggedIn'] = false;
}

// Set the Content-Type to application/json
header('Content-Type: application/json');

// Send the response data as JSON
echo json_encode($response);