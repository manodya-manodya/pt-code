<?php
// Simulate task completion (replace with actual logic as needed)
$taskCompleted = true; // Change to true after the task is completed

// Check if the 'file' parameter is set
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    // Construct the file path directly since flag.txt is in the same directory
    $filepath = "flag.txt";

    // Check if the task is completed
    if ($taskCompleted) {
        // Only show the flag if the task is completed
        if ($file === 'get_flag') {
            // Debugging: Output the attempted file path
            echo "Trying to access: " . htmlspecialchars($filepath) . "<br>";

            // Check if the file exists at the constructed path
            if (file_exists($filepath)) {
                echo "<h2>Displaying flag:</h2>";
                echo "<pre>" . htmlspecialchars(file_get_contents($filepath)) . "</pre>";
            } else {
                echo "<h2>File not found! Please check the file path and permissions.</h2>";
            }
        } else {
            echo "<h2>Invalid file request! Use the correct payload to access the flag.</h2>";
        }
    } else {
        // If the task is not completed, do not show the flag
        echo "<h2>Task not completed! Complete the task to access the flag.</h2>";
    }
} else {
    // 'file' parameter not set
    echo "<h2>No file specified! Please specify a file in the URL parameter.</h2>";
}
?>
