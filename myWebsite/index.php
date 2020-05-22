<?php
    require "header.php";
?>

<main>
    <?php

        if (isset($_SESSION['userId'])) {
            echo'<p class = "login-form" >You are logged in!</p>';
        }else {
            echo'<p class = "login-form" >You are logged out!</p>';
        }

    ?>

<?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class = "signuperror"> Fill in all fields!</p>';
            }
            elseif ($_GET['error'] == "wrongpassword") {
                echo '<p class = "loginerror"> Incorrect password!</p>';
            }
            elseif ($_GET['error'] == "nouser") {
                echo '<p class = "loginerror"> invalid username or e-mail!</p>';
            }
        } 
        if (isset($_GET['signup'])) {
            if ($_GET['signup'] == "success") {
                echo '<p class = "signupsuccess"> Signup successful! You can now log in. </p>';
            }
            elseif ($_GET['signup'] == "signup.php") {
                echo '<p class = "register"> Register a new account!</p>';
            }
        }
    ?>
</main>

<?php
require "footer.php";
?>