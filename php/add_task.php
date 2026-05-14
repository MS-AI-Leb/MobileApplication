<?php

$servername = "localhost";
$username = "id21659624_tasks";
$password = "rayan2swaiD!";
$dbname = "id21659624_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$description = $_POST['description'];
$isCompleted = $_POST['isCompleted'];
$importance = $_POST['importance'];

$sql = "INSERT INTO tasks (name, description, is_completed, importance) VALUES ('$name', '$description', '$isCompleted', '$importance')";

if ($conn->query($sql) === TRUE) {
    echo "Task added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>