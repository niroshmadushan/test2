<?php
// Step 1: Establish a connection to the database
$servername = "sql6.freesqldatabase.com"; // Or your database server address
$username = "sql6685576"; // Your database username
$password = "rxqm97qfzz"; // Your database password
$database = "sql6685576"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Search functionality
if (isset($_POST['search'])) {
    $searchTerm = $_POST['searchTerm'];
    $sql = "SELECT * FROM `user` WHERE id = '$searchTerm' and des='0';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: game.php");
      
    } else {
        // Data not found, display alert
        echo "<script>alert('You have tried before or wrong code.');</script>";
        sleep(3);

        header("Location: index.html");
        
        
    }
}

// Close the connection
$conn->close();
?>