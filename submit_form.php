<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

// Create a new PDO instance
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Insert form data into the database
  $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, message) VALUES (:name, :email, :message)");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':message', $message);

  try {
    $stmt->execute();
    echo "Form submission successful!";
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
?>
