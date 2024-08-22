<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the seat ID sent via POST
    session_start();
    $name=$_SESSION['username'];
    $seatId = $_POST['key'];
    $moviename=$_SESSION['moviename'];
    $theatre=$_SESSION["selected_theatre"];



    // Connect to the database
    $con = mysqli_connect("localhost", "root", "", "movie");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
      
    // Prepare the SQL query without quotes for integer value
    $query = "INSERT INTO seat (seatid,names,status,moviename,theatre) VALUES ('$seatId', '$name','occupied','$moviename','$theatre')";

    // Execute the query
    if (mysqli_query($con, $query)) {
        // Success
        echo "Data inserted successfully";
        echo gettype($seatId);
    } else {
        // Error
        echo "Error: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
