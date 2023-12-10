  <?php
  session_start();
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $roomType = $_POST['room'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $checkIn = $_POST['check-in'];
    $checkOut = $_POST['check-out'];
    $numRooms = $_POST['num-rooms'];

    // Validate the form data (perform your validation checks here)


    // Connect to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel_management";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the booking details into the database
    $sql = "INSERT INTO bookings (room, name, email, adults, children, check_in, check_out, num_rooms) 
    VALUES ('$room','$name','$email','$adults', '$children', '$checkIn', '$checkOut', '$numberOfRooms')";

//$result = $mysqli->query("INSERT INTO bookings (room_type, adults, children, check_in, check_out, num_rooms) VALUES ('$roomType', '$adults', '$children', '$checkIn', '$checkOut', '$numRooms')");

    // Close the database connection
    $conn->close();
}
?>

<!-- Your HTML code -->
<!DOCTYPE html>
<html>
<head>
  <title>Room Booking</title>
  <style>
    /* CSS styles for the booking form */
    .booking-form {
      max-width: 400px;
      margin: 0 auto;
    }

    .booking-form label {
      display: block;
      margin-bottom: 5px;
    }

    .booking-form input[type="text"],
    .booking-form input[type="number"],
    .booking-form input[type="date"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
    }

    .booking-form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <<h2>Room Booking</h2>
  <form action="confirmation.php" method="post" class="booking-form">
    <label for="room">Select Room:</label>
    <select id="room" name="room" required>
      <option value="Deluxe Room">Deluxe Room</option>
      <option value="Luxury Room">Luxury Room</option>
      <option value="Deluxe Suite">Deluxe Suite</option>
      <option value="Premium Suite">Premium Suite</option>
      <option value="Executive Suite">Executive Suite</option>
    </select>
    
    <label for="name">Name of Customer</label>
    <input type="text" name="name" placeholder="Your Name" required>
    <label for="email">Email of Customer</label>
    <input type="email" name="email" placeholder="Your Email" required>
  
    <label for="adults">Number of Adults:</label>
  <input type="number" id="adults" name="adults" min="1" max="10" required>

  <label for="children">Number of Children:</label>
  <input type="number" id="children" name="children" min="0" max="10" required>

  <label for="check-in">Check-in Date:</label>
  <input type="date" id="check-in" name="check-in" required>

  <label for="check-out">Check-out Date:</label>
  <input type="date" id="check-out" name="check-out" required>

  <label for="num-rooms">Number of Rooms:</label>
  <input type="number" id="num-rooms" name="num-rooms" min="1" max="5" required>

  <input type="submit" value="Book Now">

  </form>

  <script>
    // JavaScript code to handle the form submission
    document.querySelector('.booking-form').addEventListener('submit', function(e) {
      // Prevent the default form submission
      e.preventDefault();

      // Submit the form
      this.submit();
    });
  </script>
</body>
</html>
