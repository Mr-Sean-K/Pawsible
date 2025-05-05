<?php
require_once 'src/DBConnect.php';
require_once 'CRUD/create.php';
require_once 'src/common.php';
require_once 'classes/User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = escape($_POST["username"]);
    $email = escape($_POST["email"]);
    $password = escape($_POST["password"]);

    if (!empty($username) && !empty($email) && !empty($password)) {
        // no input in form post for first name, surname, phone number, and address so they just get set to empty string :(
        $user = new User($username, '', '', $email, $password, '', '');

        $data = [
            'username' => $user->getUsername(),
            'firstName' => $user->getFirstName(),
            'surname' => $user->getSurname(),
            'email' => $user->getEmail(),
            'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
            'phoneNumber' => $user->getPhoneNumber(),
            'address' => $user->getAddress(),
        ];

        // Insert user into the users table
        $createdUser = create('users', $data);

        if ($createdUser) {
            header("Location: userLogin.php");
            exit;
        } else {
            $message = "<p class='result' style='color: red;'>Registration Failed. Please try again.</p>";
        }
    } else {
        $message = "<p class='result' style='color: red;'>Please fill in all fields.</p>";
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
    <title>Pawsible</title>
</head>
<body>
     
    <div id class="contact-container">
           <div id class="index-headings"><h2>User Registration</h2></div>
            <form action="" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>

              <a href="userLogin.php">  <button type="submit">Register</button></a>
            </form>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </div>

    <div class="mostAdoptedPet-container">
        <div><img src="images/pictures/cat1.jpg" height="200" width="150" alt="cat1"></div>
        <div><img src="images/pictures/cat2.jpg" height="200" width="150" alt="cat2"></div>
        <div><img src="images/pictures/dog1.jpg" height="200" width="150" alt="dog1"></div>
        <div><img src="images/pictures/dog2.jpg" height="200" width="150" alt="dog2"></div>

    </div>
    
    <?php include('Templates/footer.php'); ?>
    
</body>
</html>