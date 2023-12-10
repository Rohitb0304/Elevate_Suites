<link rel="stylesheet" href="hotel_management/css/styleHM.css">
<?php
    // Check if the username and password are valid, and redirect to the dashboard if successful
    if ($_POST['username'] == 'employee' && $_POST['password'] == 'employee') {
        // Start session and store the employee username
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('Location: employee_dashboard.php');
        exit;
    } else {
        // Invalid credentials, redirect back to the login page
        header('Location: employee_login.html');
        exit;
    }
?>
