<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aricum Ind</title>
</head>
<body>
    
    <header>
        <nav class="zone blue sticky">
            <a href="index.php" class="logo"><img src="logo.png" alt=""></a>
            <ul class="main-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
            
            <?php
                    if (isset($_SESSION['userId'])) {
                        echo'<form action="includes/logout.inc.php " method="post">
                        <button type="submit" name = logout-submit class = logout >Logout</button>
                    </form>';
                    }else {
                        echo'<form action="includes/login.inc.php" class = "login-form" method="post">
                        <input type="text" name="mailuid" placeholder="Username / E-mail ...">
                        <input type="password" name="pwd" placeholder="Password ...">
                        <button type="submit" name = login-submit>Login</button>
                        <a href="signup.php" class = "sign-up" >Dont have an account? Sign up here</a>
                        </form>';
                    }
            ?>
    </header>