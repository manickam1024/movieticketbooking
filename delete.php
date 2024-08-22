<?php

// Database connection parameters
$hostname = "localhost";
$username = "root";
$password = ""; // Password may be empty if not set
$database = "movie";

// Establish connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve the posted values
 

    // You can perform an update query here to update the database with the new values
    // For example:
    // $update_query = "UPDATE movie SET name='$name', pic='$pic', languages='$languages', theatres='$theatres', timings='$timings', duration='$duration', genre='$genre', datefrom='$datefrom', dateto='$dateto', youtube='$youtube' WHERE id='$id'";
    // $result = mysqli_query($conn, $update_query);
    // if($result) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    // }
}


echo "<div class='d'> <h1> DELETE OR MODIFY</h1> </div>";
// Query to select all data from the movie table
$select = "SELECT * FROM movie";
$result = mysqli_query($conn, $select);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Output the form once
    while ($row = mysqli_fetch_assoc($result)) {
        // Output data from each row
        echo '<form id="updateForm" action="new.php" method="post">';
        echo '<div class="movie-container">';
        echo 'ID: <input type="text" name="id" value="' . $row["id"] . '"><br>';
        echo 'Name: <input type="text" name="name" value="' . $row["name"] . '"><br>';
        echo 'Pic: <input type="text" name="pic" value="' . $row["pic"] . '"><br>';
        echo 'Languages: <input type="text" name="languages" value="' . $row["languages"] . '"><br>';
        echo 'Theatres: <input type="text" name="theatres" value="' . $row["theatres"] . '"><br>';
        echo 'Timings: <input type="text" name="timings" value="' . $row["timings"] . '"><br>';
        echo 'Duration: <input type="text" name="duration" value="' . $row["duration"] . '"><br>';
        echo 'Genre: <input type="text" name="genre" value="' . $row["genre"] . '"><br>';
        echo 'Date From: <input type="text" name="datefrom" value="' . $row["datefrom"] . '"><br>';
        echo 'Date To: <input type="text" name="dateto" value="' . $row["dateto"] . '"><br>';
        echo 'YouTube: <input type="text" name="youtube" value="' . $row["youtube"] . '"><br>';
        echo '</div>';
        echo '<br>';
        echo '<div class="btn1"><button type="submit" name="submit" style="height: 40px; width: 170px;  position: relative; 
        top: -300px ; left: 900px;  border-radius: 10px; border:none"><h3 style="  position:relative; top:-6px;  font-family: Montserrat, helvetica, arial, sans-serif">Submit</h3></button> </div>';
        echo '<div class="btn2"><button type="submit" name="delete" value="delete" style="height: 40px; width: 170px; position:relative;  top: -200px ; left: 900px; border-radius: 10px; border:none"><h3 style="      position:relative; top:-6px;  font-family: Montserrat, helvetica, arial, sans-serif;
        ">delete</h3></button> </div>';

        echo '</form>';
    }
  
} else {
    echo "No records found";
}

// Close connection
mysqli_close($conn);

?>

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800');

    .movie-container {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
        background-color: #ff6868;
        width: 1000px;
        position: relative;
        left: 250px;
        top: 50px;
        height: max-content;
        padding: 20px;
        padding-left: 50px;
        border-radius: 20px;
        font-family: 'Montserrat', helvetica, arial, sans-serif;
font-weight: 600;
padding-top: 70px;
    }
  
    .movie-container button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none; font-family: 'Montserrat', helvetica, arial, sans-serif;

        cursor: pointer;
    }
    .movie-container button:hover {
        background-color: #0056b3;
    }
    .d
    {
     position: relative;
     left: 550px;
     top: 30px; font-family: 'Montserrat', helvetica, arial, sans-serif;

    }
    .movie-container input
    {

        border-width: 1px;
        margin-bottom: -20px;
        position: relative;
        height: 25px;
        padding: 10px;
        border-radius: 5px;
        left: 140px; font-family: 'Montserrat', helvetica, arial, sans-serif;
        display: grid;
        top: -25px;
        width: 270px;

        
    }
    .movie-container button    {
        font-family: 'Montserrat', helvetica, arial, sans-serif;

        border-radius: 10px;
        border-width: 1px;
        
        margin-bottom: 10px;
        position: relative;
        height: 25px;
        padding: 10px;
        left: 10px; 


        
    }



    
    
</style>
