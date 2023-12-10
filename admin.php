
<?php
session_start();

// Check if the user is logged in as admin, otherwise redirect to the login page
// Implement your authentication logic here

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the bookings table
$bookingsSql = "SELECT * FROM bookings";
$bookingsResult = $conn->query($bookingsSql);

// Retrieve data from the contact_us table
$contactSql = "SELECT * FROM contact_us";
$contactResult = $conn->query($contactSql);

// Add a new customer manually
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize the input data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validate and sanitize the input here

    // Insert the customer data into the customers table
    $insertSql = "INSERT INTO customers (name, email) VALUES ('$name', '$email')";
    $insertResult = $conn->query($insertSql);

    if ($insertResult === true) {
        // Customer added successfully
        // Redirect or display a success message
    } else {
        // Error occurred while adding the customer
        // Display an error message
    }
}

// Close the database connection
$conn->close();
?>

<!-- HTML code for the admin page -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <!-- Include any required CSS or stylesheets -->
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>

    <h2>Bookings</h2>
    <table>
        <!-- Display the bookings data retrieved from the database -->
    </table>

    <h2>Contact Messages</h2>
    <table>
        <!-- Display the contact messages data retrieved from the database -->
    </table>

    <h2>Add Customer</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <input type="submit" value="Add Customer">
    </form>

    <!-- Include any required JavaScript or scripts -->
</body>
</html>
