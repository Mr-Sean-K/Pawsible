<?php
session_start();
require_once 'src/DBConnect.php';
require_once 'CRUD/read.php';
require_once 'classes/User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = escape($_POST["username"]);
    $password = escape($_POST["password"]);

    if (!empty($username) && !empty($password)) {

        $users = read('users', ['username' => $username]);

        if (!empty($users)) {
            $user = $users[0];

            if (password_verify($password, $user['password'])) {
                $_SESSION['Username'] = $user['username'];
                $_SESSION['Active'] = true;
                header("Location: index.php");
                exit;
            } else {
                echo "<p class='result' style='color: red;'>Incorrect password</p>";
            }
        } else {
            echo "<p class='result' style='color: red;'>Username not found</p>";
        }
    } else {
        echo "<p class='result' style='color: red;'>Please enter your username and password.</p>";
    }
}
?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/productDescStyle.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contactStyle.css">
    <title>Pawsible Login</title>
</head>
<body>
    
<div class="login-container">
   <div class="index-headings"> <h2>Login Below!</h2> </div>
    
   <div id class="contact-container">

    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</div>


    <div>
        <div class="index-headings"><h2>If you don't have an account, you can <a href="userRegistration.php">register</a>!</h2></div>
    </div>

</div>

<!-- "most adopted pets" section. dog1 is a real crowd pleaser -->
<div class="mostAdoptedPet-container">
    <div><img src="images/pictures/cat1.jpg" height="200" width="150" alt="cat1"></div>
    <div><img src="images/pictures/cat2.jpg" height="200" width="150" alt="cat2"></div>
    <div><img src="images/pictures/dog1.jpg" height="200" width="150" alt="dog1"></div>
    <div><img src="images/pictures/dog2.jpg" height="200" width="150" alt="dog2"></div>
</div>

<?php include('Templates/footer.php'); ?>

</body>
</html>
