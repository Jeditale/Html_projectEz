<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "articles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Set parameter
$id = $_GET['id'];

// Prepare and bind

$stmt = $conn->prepare("DELETE FROM articles WHERE id = ?");
$stmt->bind_param("i", $id);

// execute

$stmt->execute();

header('Location: PlantArticleMain.php');

$stmt->close();
$conn->close();
?>