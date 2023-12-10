<link rel="stylesheet" href="hotel_management/css/styleHM.css">
<?php
    // Check if the username and password are valid, and redirect to the dashboard if successful
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
        // Start session and store the admin username
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('Location: admin_dashboard.php');
        exit;
    } else {
        // Invalid credentials, redirect back to the login page
        header('Location: admin_login.html');
        exit;
    }
?>

