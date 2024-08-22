
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT seatid, status,moviename,theatre FROM seat ";
$result = $conn->query($sql);

$seats = array();
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $seats[] = $row;
  }
 
  echo json_encode($seats);
} else {
  echo "0 results";
}
$conn->close();
?>
