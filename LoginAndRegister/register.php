<?php

include 'config.php';

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/' . $image;

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'user already exist';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm password not matched!';
        } elseif ($image_size > 2000000) {
            $message[] = 'image size is too large!';
        } else {
            $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, 
         image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'registered successfully!';
                header('location:login.php');
            } else {
                $message[] = 'registeration failed!';
            }
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginStyle.css">
    <title>Register</title>
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
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Register</h3>
                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<div class="message">' . $message . '</div>';
                    }
                }
                ?>
                <input type="text" name="name" placeholder="enter username" class="box" required>
                <input type="email" name="email" placeholder="enter email" class="box" required>
                <input type="password" name="password" placeholder="enter password" class="box" required>
                <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
                <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
                <input type="submit" name="submit" value="register now" class="btn">
                <p>already have an account? <a href="login.php">login now</a></p>
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
    <script src="LoginJs.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>