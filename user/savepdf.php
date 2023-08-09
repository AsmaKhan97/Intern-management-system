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
        
        // Specify the directory path to save the PDF files
        $directory = $_SERVER['DOCUMENT_ROOT'] . '/last/admin/pdf_files';

        // Generate a unique filename for the PDF
        $filename = uniqid() . '.pdf';

        // Save the PDF file to the specified directory
        $filePath = $directory . $filename;
        file_put_contents($filePath, base64_decode($cvContent));

        // Return the response
        echo $response;
    } else {
        $response = "Error: " . mysqli_error($conn);
        echo $response;
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>
