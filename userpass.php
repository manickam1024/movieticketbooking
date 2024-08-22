<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "deliviry";

// Create connection
$db = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($db === false) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["email"];
    $password = $_POST["password"];

    // Check if username and password are not empty
    if (empty($username) || empty($password)) {
        echo "Username or password cannot be empty";
    } else {
        // Prepare the SQL statement
        $sql = "SELECT * FROM deliviry WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($db, $sql);

        // Check if the statement was prepared successfully
        if ($stmt) {
            // Bind parameters to the query
            mysqli_stmt_bind_param($stmt, 'ss', $username, $password);

            // Execute the query
            mysqli_stmt_execute($stmt);

            // Get the result
            $result = mysqli_stmt_get_result($stmt);
            $ROW = mysqli_fetch_array($result);

            // Check if the query returned a result and if the credentials match
            if ($ROW && $ROW["username"] == $username && $ROW["password"] == $password) {
                $_SESSION['username'] = $username;
                header("location:userhome.php");
            } else {
                echo "Incorrect username or password";
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "SQL statement preparation failed: " . mysqli_error($db);
        }
    }
}

// Close the database connection
mysqli_close($db);
?>
