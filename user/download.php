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
    
    // Fetch the CV record from the database
    $sql = "SELECT cv_file FROM cv_table WHERE id = $cv_id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cv_file = $row["cv_file"];
        
        // Set the appropriate headers for file download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="cv_file.pdf"');
        
        // Output the PDF file content to the response
        echo $cv_file;
    } else {
        echo "CV not found.";
    }
} else {
    echo "CV ID not provided.";
}

// Close the database connection
$conn->close();
?>
