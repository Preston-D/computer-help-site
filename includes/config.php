<?php
// includes/config.php

// Site-wide settings
$siteName = "My PHP Site";
$baseUrl = "http://localhost:8000"; // Change this when deployed

// Error reporting (DEV mode)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Optional: database connection (commented out)
// $db = new mysqli("localhost", "root", "", "mydb");
// if ($db->connect_error) {
//     die("Database connection failed: " . $db->connect_error);
// }
