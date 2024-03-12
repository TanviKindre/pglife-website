<?php
$conn = mysqli_connect("localhost:3306", "root", "Tanvi@root12", "pglife");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}