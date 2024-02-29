<!DOCTYPE html>
<html>
<head>
    <title>Read Article</title>
    <link rel="stylesheet" href="ReadArticleStyle.css">
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
    <div>
    <div class="center">

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
    $stmt = $conn->prepare("SELECT title, content FROM articles WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Set parameters and execute
    $id = $_GET['id'];
    $stmt->execute();

    // Bind result variables
    $stmt->bind_result($title, $content);

    // Fetch and display the result
    if ($stmt->fetch()) {
        echo "<div class='article-container'>";
        echo "<div class='article'>";
        echo "<h1 class='article-heading'>Title name:<h1> " . $title . "</h1></h1>";
        echo "<p>" . $content . "</p>";
        echo "</div>";
    } else {
      echo "No article found with id " . $id;
    }

    $stmt->close();
    $conn->close();
    ?>
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
    <script src="ReadArticleJS.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>