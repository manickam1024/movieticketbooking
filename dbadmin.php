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
    $theatres = implode(", ", $_POST["theatres"]);
    $timings = implode(", ", $_POST["timings"]);


    $duration = $_POST["duration"];
    $genre = $_POST["genre"];
    $from=$_POST["from"];
    $to=$_POST["to"];
    $id=$_POST["id"];
    $des=$_POST["des"];

    $youtube=$_POST["youtube"];



    // Prepare SQL statement
    $sql = "INSERT INTO movie (name,pic, languages, theatres, timings,  duration, genre,id,datefrom,dateto,youtube,des) 
            VALUES ('$movieName','$moviepic','$language', '$theatres', '$timings', '$duration', '$genre',$id,'$from','$to','$youtube','$des' )";
            $q=mysqli_query($conn,$sql);

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Movie added successfully";
    } else {
        echo "Movie added successfully";
    }

$conn->close();
?>
