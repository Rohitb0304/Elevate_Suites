<!DOCTYPE html>
<html>
<head>
    <title>View Customers</title>
    <style>
/* Center the container and set some padding */
.container {
  margin: 0 auto;
  max-width: 1200px; /* Increase the width as per your preference */
  padding: 50px;
}

/* Apply background color to the table header */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  background-color: #444444;
}

th {
  background-color: #444444;
  color: white;
}

/* Apply background color to alternate rows and set font to bold */
tr:nth-child(even) {
  background-color: #60a5eb;
}

tr:nth-child(odd) {
  background-color: #60a5eb;
}

td, th {
  padding: 12px; /* Increase the padding for larger cells */
  text-align: left;
  font-weight: bold;
}
.welcom{
    text-align: center;
    color: #444444;
}
    </style>
</head>
<body>
    <div class="container">
        <h1 class="welcom">Customer's List</h1>

        <div class="view-customers">
            <?php
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

            // Fetch customers from the database
            $sql = "SELECT * FROM customers";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Check-in Date</th>
                            <th>Check-out Date</th>
                           </tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["phone"] . "</td>
                            <td>" . $row["address"] . "</td>
                            <td>" . $row["check_in_date"] . "</td>
                            <td>" . $row["check_out_date"] . "</td>
                           </tr>";
                }

                echo "</table>";
            } else {
                echo "No customers found.";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
