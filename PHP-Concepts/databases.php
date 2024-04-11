<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hari";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from subjects table
$sql = "SELECT * FROM subjects";
$result = $conn->query($sql);
// Fetch data from subjects table
$sql = "SELECT menu_name, position, visible FROM subjects";
$result = $conn->query($sql);

// Display data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Menu Name: " . $row["menu_name"] . "<br>";
        echo "Position: " . $row["position"] . "<br>";
        echo "Visible: " . $row["visible"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No subjects found.";
}

// Close connection
$conn->close();

