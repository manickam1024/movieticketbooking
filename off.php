<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


    $ofername = $_POST["name"];
    $bg=$_POST["bg"];
    $from = $_POST["date"];

    if (!empty($from)) {
        // Create a DateTime object from the input value
        $date = DateTime::createFromFormat('Y-m-d', $from);

        // Check if the date is valid
        if ($date) {
            // Format the date as "day-month-year"
            $formattedDate = $date->format('d-m-Y');
        }
    }
    $id=$_POST["id"];
   



    // Prepare SQL statement
    $sql = "INSERT INTO offer (name,bg,date,id) 
            VALUES ('$ofername','$bg','$formattedDate',$id )";
            $q=mysqli_query($conn,$sql);

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Movie added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
   
        
    }

$conn->close();
?>


