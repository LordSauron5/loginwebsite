<?php
    require "header.php";
?>

<main>

    <h1 class = signup-header>Signup</h1>
    <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class = "signuperror"> Fill in all fields!</p>';
            }
            elseif ($_GET['error'] == "invalidmail") {
                echo '<p class = "signuperror"> Invalid e-mail!</p>';
            }
            elseif ($_GET['error'] == "invalidmail") {
                echo '<p class = "signuperror"> Invalid e-mail!</p>';
            }
            elseif ($_GET['error'] == "invaliduid") {
                echo '<p class = "signuperror"> Invalid username!</p>';
            }
            elseif ($_GET['error'] == "passwordcheck") {
                echo '<p class = "signuperror"> Your passwords do not match!</p>';
            }
            elseif ($_GET['error'] == "usertaken") {
                echo '<p class = "signuperror"> username is already taken!</p>';
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
    <form action="includes/signup.inc.php" class = "signup-form" method="post">
        <input type="text" name = "uid" placeholder = "username">
        <input type="text" name = "mail" placeholder = "E-Mail">
        <input type="password" name = "pwd" placeholder = "Password">
        <input type="password" name = "pwd-repeat" placeholder = "Repeat password">
        <button type="submit" name = signup-submit>Signup</button>
    </form>
</main>

<?php
require "footer.php";
?>