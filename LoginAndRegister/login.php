<?php
session_start(); // This should be the first line

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = []; // Initialize $message as an empty array

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        echo json_encode(['success' => true]);
        exit();
    } else {
        $message[] = 'incorrect email or password!';
    }

    if (!empty($message)) { // Check if $message is not empty instead of isset($message)
        header('Content-Type: application/json');
        echo json_encode(['message' => $message]);
        exit();
    }

    // If no messages, return an empty JSON object
    header('Content-Type: application/json');
    echo json_encode([]);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginStyle.css">
    <title>Login</title>

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

    <div class="container">
        <div class="login-container">

            <form id="loginForm" method="post" enctype="multipart/form-data">
                <h3>Login</h3>
            
                <div class="post">
                <input type="email" name="email" placeholder="enter email" class="box" required>
                <input type="password" name="password" placeholder="enter password" class="box" required>
                <input type="submit" name="submit" value="login now" class="btn">
                <p>Forgot password? <a href="forgot.html">reset now</a></p>
                <p>don't have an account? <a href="register.php">regiser now</a></p>
                </form>
                </div>
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
    <script src="LoginJs.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>