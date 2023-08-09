<?php
// Assuming you have established a database connection
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "imsproj";

// Establish a database connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process the POST data
if (isset($_POST['name']) && isset($_POST['content'])) {
    $cvName = $_POST['name'];
    $cvContent = $_POST['content'];
    $userId = 1; // Replace with the actual user ID or retrieve it dynamically from the session or user authentication

    // Get the current timestamp
    $timestamp = date('Y-m-d H:i:s');

    // Prepare the SQL query
    $sql = "INSERT INTO cv_table (cv_name, cv_file, user_id, timestamp) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ssis', $cvName, $cvContent, $userId, $timestamp);

    // Execute the query
    if (mysqli_stmt_execute($stmt)) {
        $response = "CV file saved successfully!";
        
        // Set the appropriate headers for downloading the PDF
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $cvName . '.pdf"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . strlen($cvContent));
        ob_clean();
        flush();
        echo $cvContent;
        exit;
    } else {
        $response = "Error: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);

    // Return the response
    echo $response;
}

// Close the database connection
mysqli_close($conn);
?>
