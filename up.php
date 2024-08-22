<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


    $movieName = $_POST["movieName"];
    $moviepic=$_POST["url"];


    $language = implode(", ", $_POST["language"]);


    $genre = $_POST["genre"];
    $from = $_POST["from"];

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
    $des=$_POST["des"];
    $bg=$_POST["bg"];

    $youtube=$_POST["youtube"];


    // Prepare SQL statement
    $sql = "INSERT INTO upcoming (name,pic, languages,  genre,youtube,date,id,des,bg) 
            VALUES ('$movieName','$moviepic','$language', '$genre','$youtube','$formattedDate',$id ,'$des','$bg')";
            $q=mysqli_query($conn,$sql);

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Movie added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo $des;
        echo $bg;
        
    }

$conn->close();
?>


