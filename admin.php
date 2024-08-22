<?php 
$host = "localhost";
$user = "root";
$password = '';
$db = 'admin';

$data = mysqli_connect($host, $user, $password, $db);
if ($data == false) {
    echo "connection error";
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Check if username and password are not empty
    if (empty($username) || empty($password)) {
        echo "Username or password cannot be empty";
    } else {
        $sql = "SELECT * FROM adminlogin WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($data, $sql);
        
        // Bind parameters to the query
        mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
        
        // Execute the query
        mysqli_stmt_execute($stmt);
        
        // Get the result
        $result = mysqli_stmt_get_result($stmt);
        $ROW = mysqli_fetch_array($result);
        
        // Check if the query returned a result and if the credentials match
        if ($ROW && $ROW["username"] == $username && $ROW["password"] == $password) {
            header("location:adminhome.php");
        } else {
            echo "Incorrect username or password";
        }
    }
}
?>
