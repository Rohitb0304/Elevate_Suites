<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
         body {
            color: #4196f7bb;
            font: bolder;
            background-color: #ebdc86; /* Set the background color */
            margin: 0;
            padding: 0;
            display: flex;
            font-weight: bolder;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #4f515f; /* Set the background color for the container */
            padding: 20px;
            border: 1px solid #ccc; /* Add a border to the container */
            box-shadow: 10 10 10px rgba(0, 0, 0, 0.1); /* Add a box shadow for a nicer look */
        }
        .welcom {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #444; /* Add a border to table cells */
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2; /* Set background color for table headers */
        }
        .logout-btn {
            text-align: right;
            margin-top: 10px;
        }

        .logout-link {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }

        .logout-link:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="logout-btn">
            <a href="admin_login.html" class="logout-link">Logout</a>
    </div>
    
        <h2 class="welcom">Welcome to Admin Dashboard</h2>

        <div class="view-customers">
            <h3 class="welcom">Customer's List</h3>
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
                            <th>Check in date</th>
                            <th>Check out date</th>
                            <th>Actions</th>
                        </tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["phone"] . "</td>
                            <td>" . $row["address"] . "</td>
                            <td>" . $row["check_in_date"] . "</td>
                            <td>" . $row["check_out_date"] . "</td>
                            <td><a href='view_customer.php?id=" . $row["id"] . "'>View Details</a></td>
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
