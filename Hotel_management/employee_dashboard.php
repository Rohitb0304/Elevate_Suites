<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.dashboard-heading {
    color: #4CAF50;
    text-align: center;
}

.section-heading {
    color: #4CAF50;
    margin-bottom: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #ffffff;
    border: 1px solid #dddddd;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #dddddd;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e6e6e6;
}

.add-customer-form {
    margin-top: 30px;
    color: #444444;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.submit-btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.submit-btn:hover {
    background-color: #45a049;
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
<body>
<div class="logout-btn">
            <a href="employee_login.html" class="logout-link">Logout</a>
    </div>
    <div class="container">
        <h2>Welcome to Employee Dashboard</h2>

        <!-- Customer Listing -->
        <div class="customer-listing">
            <h3>Customer's List</h3>
            <?php
            // Fetch and display the customer data from the database
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

            // Fetch the customer data
            $sql = "SELECT * FROM customers";
            $result = $conn->query($sql);

            // Display the customer data in a table
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Check-In Date</th><th>Check-Out Date</th><th>Action</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["check_in_date"] . "</td>";
                    echo "<td>" . $row["check_out_date"] . "</td>";
                    echo "<td><a href='delete_customer.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this customer?')\">Delete</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No customers found.";
            }

            // Close the connection
            $conn->close();
            ?>
        </div>

        <!-- Add Customer Form -->
        <div class="add-customer-form">
            <h3>Add Customer</h3>
            <form action="add_customer.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required><br>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required><br>

                <label for="check_in_date">Check-In Date:</label>
                <input type="date" id="check_in_date" name="check_in_date" required><br>

                <label for="check_out_date">Check-Out Date:</label>
                <input type="date" id="check_out_date" name="check_out_date" required><br>

                <input type="submit" value="Add Customer">
            </form>
        </div>
    </div>
</body>
</html>
