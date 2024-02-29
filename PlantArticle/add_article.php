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

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO articles (title, content, date) VALUES (?, ?, NOW())");
$stmt->bind_param("ss", $title, $content);

// Set parameters and execute
$title = $_POST['title'];
$content = $_POST['content'];
$stmt->execute();

echo "New article created successfully";
header('Location: PlantArticleMain.php');
$stmt->close();
$conn->close();
?>