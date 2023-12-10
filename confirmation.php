<?php
// Database connection details
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'hotel_management';

// Create a new MySQLi object
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

?>
<!--Other code is the same.-->
<!DOCTYPE html>
<html>
<head>
  <title>Confirmation Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #586f7c;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #586f7c;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .header img {
      height: 40px;
      margin-right: 10px;
    }

    .title {
      font-size: 24px;
      font-weight: bold;
    }

    .box {
      text-align: left;
      background-color: #ffffff;
      padding: 20px;
      margin: 0 auto;
      max-width: 400px;
    }

    .booking-details {
      margin-bottom: 20px;
    }

    .booking-details p {
      margin: 0;
    }

    .booking-details strong {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="box">Booking Confirmation</h2>
  
    <div class="box">
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $roomType = $_POST['room'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $adults = $_POST['adults'];
        $children = $_POST['children'];
        $checkIn = $_POST['check-in'];
        $checkOut = $_POST['check-out'];
        $numRooms = $_POST['num-rooms'];
        
        // Assuming $mysqli is your database connection object
        $createdAt = date('Y-m-d H:i:s');
        
        $stmt = $mysqli->prepare("INSERT INTO bookings (room_type, name, email, adults, children, check_in, check_out, num_rooms, created_at) 
                                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $roomType, $name, $email, $adults, $children, $checkIn, $checkOut, $numRooms, $createdAt);
        $result = $stmt->execute();
        
        if (!$result) {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();

      if ($result) {
        echo "<p>Room Type: " . $roomType . "</p>";
        echo "<p>Customer's Name: " . $name . "</p>";
        echo "<p>Customer's Email: " . $email . "</p>";
        echo "<p>Number of Adults: " . $adults . "</p>";
        echo "<p>Number of Children: " . $children . "</p>";
        echo "<p>Check-in Date: " . $checkIn . "</p>";
        echo "<p>Check-out Date: " . $checkOut . "</p>";
        echo "<p>Number of Rooms: " . $numRooms . "</p>";
        echo "<p>Booking Date: " . date('Y-m-d H:i:s') . "</p>"; // Display the current timestamp
     //   echo "<p>Thank you for your booking! We look forward to welcoming you.</p>";
      }
       else {
        echo "Error: " . $stmt->error;
      }

     }
    
    ?>
    </div>
  
    <p class="box">Thank you for your booking! We look forward to welcoming you.</p>
  </div>
</body>
</html>
