<?php
if (isset($_GET['id'])) {
    $customerID = $_GET['id'];

    // Perform the deletion in your database
    // Replace this code with your actual database logic

    // Example code:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel_management";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete the customer from the database
    $sql = "DELETE FROM customers WHERE id = $customerID";
    if ($conn->query($sql) === TRUE) {
        // Redirect back to employee_dashboard.php after successful deletion
        header("Location: employee_dashboard.php");
        exit; // Make sure to exit after redirection to prevent further script execution
    } else {
        echo "Error deleting customer: " . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    echo "Invalid customer ID.";
}
?>
