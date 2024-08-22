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


$id = $_POST['id'];
$name = $_POST['name'];
$pic = $_POST['pic'];
$languages = $_POST['languages'];
$theatres = $_POST['theatres'];
$timings = $_POST['timings'];
$duration = $_POST['duration'];
$genre = $_POST['genre'];
$datefrom = $_POST['datefrom'];
$dateto = $_POST['dateto'];
$youtube = $_POST['youtube'];




// Check if the form is submitted
if(isset($_POST['submit'])) 
{
    // Retrieve the posted values
    $update_query = "UPDATE movie SET  name='$name', pic='$pic', languages='$languages', theatres='$theatres', timings='$timings', duration='$duration', genre='$genre', datefrom='$datefrom', dateto='$dateto', youtube='$youtube' WHERE id='$id'";
    $result = mysqli_query($conn, $update_query);
    if($result) {
        echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
 
}
elseif(isset($_POST['delete'])) {

    $name = $_POST['name'];
    
  $delete="DELETE FROM movie WHERE name='$name'";
  $result = mysqli_query($conn, $delete);


  if($result) {
    echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}







}


   
   

