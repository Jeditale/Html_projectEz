<?php
$servername = "localhost";
$username = "root"; // default username for XAMPP is root
$password = ""; // default password for XAMPP is empty
$dbname = "articles"; // replace with your database name
include '../LoginAndRegister/config.php';
session_start();
$user_id = $_SESSION['user_id'];

// Connection to the 'articles' database
$conn_articles = new mysqli($servername, $username, $password, 'articles');

// Connection to the 'user_db' database
$conn_user_db = new mysqli($servername, $username, $password, 'user_db');

// Check connection
if ($conn_articles->connect_error || $conn_user_db->connect_error) {
  die("Connection failed: " . $conn_articles->connect_error . $conn_user_db->connect_error);
}

// Enable error reporting for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Start session and check if user is admin
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $stmt = $conn_user_db->prepare("SELECT * FROM `user_form` WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
    }

    if ($user['is_admin'] == 1) {
        $_SESSION['is_admin'] = true;
    } else {
        $_SESSION['is_admin'] = false;
    }
} else {
    $_SESSION['is_admin'] = false;
}

$result = $conn_articles->query("SELECT id, title, date FROM articles");

$articles = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $articles[] = $row;
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plant Articles</title>
    <link rel="stylesheet" href="PlantArticleMainStyle.css">
</head>
<body>
<header id="navbar">
        <a href="../Index.html"><img class="logo" src="../Pictures/Icons/IFarm.png" alt="My Smartfarm Logo"></a>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <nav class="nav-links">
        <a href="../Weather/Weather.html" >Weather</a>
        <a href="../PlantArticle/PlantArticleMain.php" >Planting Article</a>
        <a href="../Quizz/quiz.html" >Planting Recommendation</a>
        <a href="../PlantEnclopedia.html" >Plant Bibliography</a>
        </nav>
        <a class="profile-link" href="../LoginAndRegister/login.php">Login</a>
    </header>
    
    <h1 class="welcometext">Welcome to Plant Articles</h1>
    
    
    <!-- Article List -->
<!-- Article List -->
<div id="article-list-container">
    <table id="article-list">
        <!-- Table headers -->
        <tr>
            <th>Articles</th>
            <th>Dates</th>
            <?php 
            // Only display the delete header if the user is an admin
            if ($_SESSION['is_admin']) {
                echo '<th>Delete</th>';
            }
            ?>
        </tr>
        <!-- Articles will be dynamically added here -->
        <?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <a href="read_article.php?id=<?php echo $article['id']; ?>">
                <?php echo $article['title']; ?>
            </a>
        </td>
        <td>
            <?php echo $article['date']; ?> <!-- Replace with the actual date field -->
        </td>
        <?php 
        // Only display the delete data if the user is an admin
        if ($_SESSION['is_admin']) {
            echo '<td><a href="delete_article.php?id=' . $article['id'] . '">Delete</a></td>'; // Add the delete link here
        }
        ?>
    </tr>
<?php endforeach; ?>
    </table>
    <?php 
        // Only display the delete link if the user is an admin
        if ($_SESSION['is_admin']) {
            echo '<button id="add-article-button">Add Article</button>';
        }
     ?>
    

<!-- Add Article Form -->
<div id="add-article-form" style="display: none;">
    <form action="add_article.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</div>
</div>

    
    
    <div class="secoundfooter">
      <div class="footer-content">
        <div class="footer-section">
            <h4>IFARM</h4>
            <p>© 2024 IFARM. All rights reserved.</p>
            <p>Tel: 092-661-4519</p>
        </div>
        <div class="footer-section">
            <h4>Follow us</h4>
            <ul class="socials">
                <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
  </div>
  
  <div class="mobile-warning">Please use a PC to view this page.</div>
    </div>
    
    <footer id="footer">
        <img class="footer-logo" src="../Pictures/Icons/IFarm.png" alt="My Smartfarm Logo">
        <div class="footer-images">
            <a href="https://www.facebook.com" target="_blank"><img class="footer-image" src="../Pictures/Icons/Facebook.png" alt="Image 1" width="50" height="50"></a>
            <a href="https://www.instagram.com" target="_blank"><img class="footer-image" src="../Pictures/Icons/Instagram.png" alt="Image 2" width="50" height="50"></a>
            <a href="https://youtu.be/qWNQUvIk954?si=TMbQXLvdXUw2d2lJ" target="_blank"><img class="footer-image" src="../Pictures/Icons/Youtube.png" alt="Image 3" width="50" height="50"></a>
        </div>
    </footer>
    <script src="PlantArticleMainJS.js"></script>
</body>
</html>