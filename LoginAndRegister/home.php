<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Smartfarm - Profile</title>
    <link rel="stylesheet" href="home.css">
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
    <div class="profile">
        <?php
            $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
            if(mysqli_num_rows($select) > 0){
                $fetch = mysqli_fetch_assoc($select);
            }
            if($fetch['image'] == ''){
                echo '<img src="uploaded_img/avatar.png">';
            }else{
                echo '<img src="uploaded_img/'.$fetch['image'].'">';
            }
        ?>
        <h3><?php echo $fetch['name']; ?></h3>
        <a href="update.php" class="btn">update profile</a>
        <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
        
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

<script src="homeJS.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>