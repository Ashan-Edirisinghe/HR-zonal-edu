<?php
session_start();
require 'dbcon.php';

/**
 * User Login Handler
 * Handles user authentication and session management
 */

// Check if login form was submitted
if (isset($_POST['userlogin'])) {
    
    // Get and sanitize input data
    $userID = trim($_POST['userID']);
    $userPassword = trim($_POST['userpsw']);
    
    // Validate input
    if (empty($userID) || empty($userPassword)) {
        $_SESSION['error'] = "Please enter both Employee ID and Password";
        header("Location: ../UserLogin.php");
        exit();
    }
    
    try {
        // Prepare statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT EMPId, Password FROM employee WHERE EMPId = :empid");
        $stmt->bindParam(':empid', $userID);
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Check if user exists and password matches
        if ($user && verifyPassword($user['Password'], $userPassword)) {
            // Login successful
            $_SESSION['empid'] = $user['EMPId'];
            $_SESSION['login_time'] = time();
            
            // Clear any previous error messages
            unset($_SESSION['error']);
            
            // Redirect to dashboard
            header("Location: ../UserDashboard.php");
            exit();
        } else {
            // Login failed
            $_SESSION['error'] = "Invalid Employee ID or Password";
            header("Location: ../UserLogin.php");
            exit();
        }
        
    } catch (PDOException $e) {
        // Database error
        $_SESSION['error'] = "Database error occurred. Please try again.";
        header("Location: ../UserLogin.php");
        exit();
    }
}

/**
 * Password verification function
 * @param string $storedPassword - Password from database
 * @param string $inputPassword - Password entered by user
 * @return bool - True if passwords match
 */
function verifyPassword($storedPassword, $inputPassword) {
    // Simple password comparison (consider using password_hash/password_verify for better security)
    return $storedPassword === $inputPassword;
}

// If accessed directly without POST data, redirect to login page
if (!isset($_POST['userlogin'])) {
    header("Location: ../UserLogin.php");
    exit();
}
?>