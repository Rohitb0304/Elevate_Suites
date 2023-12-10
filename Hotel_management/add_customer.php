<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO customers (employee_id, name, email, phone, address, check_in_date, check_out_date) VALUES (?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssss", $employeeID, $name, $email, $phone, $address, $checkInDate, $checkOutDate);

    // Set the input values
    $employeeID = "id";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $checkInDate = $_POST['check_in_date'];
    $checkOutDate = $_POST['check_out_date'];

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Close the statement and connection
        $stmt->close();
        $conn->close();

        // Redirect back to employee_dashboard.php with a confirmation message
        echo '<script>alert("Customer added successfully."); window.location.href = "employee_dashboard.php";</script>';
        exit();
    } else {
        echo "Error adding customer: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
