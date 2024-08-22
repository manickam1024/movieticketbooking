<?php
// Check if seat ID is provided via POST
if(isset($_POST['seatId'])) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $dbname = "movie"; // Replace with your database name
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Sanitize the input to prevent SQL injection
    $seatId = $conn->real_escape_string($_POST['seatId']);
    
    // Construct your delete query (adjust table and column names as per your database schema)
    $query = "DELETE * FROM seats WHERE seatid = '$seatId'";
    
    // Execute the query
    if ($conn->query($query) === TRUE) {
        // Return success message if deletion is successful
        echo "Ticket with Seat ID $seatId has been cancelled successfully.";
    } else {
        // Return error message if deletion fails
        echo "Error: " . $conn->error;
    }
    
    // Close connection
    $conn->close();
} else {
    // Return error message if seat ID is not provided
    echo "Error: Seat ID not provided.";
}
?>
