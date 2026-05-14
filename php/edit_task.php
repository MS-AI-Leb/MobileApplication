<?php

$servername = "localhost";
$username = "id21659624_tasks";
$password = "rayan2swaiD!";
$dbname = "id21659624_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$importance = $_POST['importance'];

$sql = "UPDATE tasks SET name='$name', description='$description', importance='$importance' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Task updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>