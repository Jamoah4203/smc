<!DOCTYPE html>
<html>
<head>
    <title>SMC Database Setup</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            width: 50%;
            margin: 50px auto;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 18px;
        }
        .success {
            background: green;
            color: white;
            padding: 10px;
            margin: 10px;
            text-align: center;
        }
        .error {
            background: red;
            color: white;
            padding: 10px;
            margin: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smc_db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "✅ Database 'smc_db' created or already exists.<br>";
} else {
    die("❌ Failed to create database: " . $conn->error);
}

// Select the database
$conn->select_db($dbname);

// Create users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "✅ Table 'users' created successfully.<br>";
} else {
    echo "❌ Error creating users table: " . $conn->error . "<br>";
}

// Create newsletter table
$sql = "CREATE TABLE IF NOT EXISTS newsletter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "✅ Table 'newsletter' created successfully.<br>";
} else {
    echo "❌ Error creating newsletter table: " . $conn->error . "<br>";
}

// Create messages table
$sql = "CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150),
    email VARCHAR(150),
    message TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "✅ Table 'messages' created successfully.<br>";
} else {
    echo "❌ Error creating messages table: " . $conn->error . "<br>";
}

// Create safety_tips table
$sql = "CREATE TABLE IF NOT EXISTS safety_tips (
    id INT AUTO_INCREMENT PRIMARY KEY,
    app_name VARCHAR(100),
    tip_title VARCHAR(255),
    tip_content TEXT
)";
if ($conn->query($sql) === TRUE) {
    echo "✅ Table 'safety_tips' created successfully.<br>";
} else {
    echo "❌ Error creating safety_tips table: " . $conn->error . "<br>";
}

// Insert sample tips
$sql = "INSERT INTO safety_tips (app_name, tip_title, tip_content) VALUES
('Instagram', 'Use Private Account', 'Set your profile to private to control who sees your content.'),
('Snapchat', 'Enable Ghost Mode', 'Use Ghost Mode to hide your location from other users.'),
('WhatsApp', 'Enable 2FA', 'Turn on two-step verification to add extra security to your account.')
";

if ($conn->query($sql) === TRUE) {
    echo "✅ Sample safety tips inserted.<br>";
} else {
    echo "ℹ️ Sample data may already exist or failed to insert: " . $conn->error . "<br>";
}

$conn->close();
?>

</body>
</html>
