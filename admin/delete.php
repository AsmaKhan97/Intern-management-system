<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imsproj";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the CV ID is provided in the URL parameter
if(isset($_GET['id'])) {
    $cv_id = $_GET['id'];
    
    // Delete the CV record from the database
    $sql = "DELETE FROM cv_table WHERE id = $cv_id";
    $result = $conn->query($sql);
    
    if ($result === TRUE) {
        echo "CV deleted successfully.";
    } else {
        echo "Error deleting CV: " . $conn->error;
    }
} else {
    echo "CV ID not provided.";
}
header("Location: viewcv.php");
exit;
// Close the database connection
$conn->close();
?>
