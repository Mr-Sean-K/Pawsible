<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawsible Donation Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/productDescStyle.css">
    <link rel="stylesheet" href="css/contactStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    
<?php include('Templates/header.php'); ?>

<div id="bannerDog">
        <img src=images/dogs/groupOfDogs.jpg alt="banner" height=550px width= "100%">
    </div>

    <div class="index-headings"><h2>Don't have the right lifestyle to adopt your own pet?</h2></div>

    <p>Dont worry! You can still support our furry friends via our sponsorship donation program!</p>
    <p>Sponsoring Pawsible pets comes with a variety of benefits, including:</p>
    <ul>
        <li>Regular updates on your sponsored pet</li>
        <li>Access to exclusive events</li>
        <li>Monthly Pawsible Care Package</li>
    </ul>
    
    
    <p>All donation proceeds go towards the upkeep of our furry friends, ensuring they have a comfortable and happy life.</p>
    <div id class="contact-container">
    <p>We are currently accepting donations in the form of:</p>
    <ul>
        <li>Paypal</li>
        <li>Revolut</li>
        <li>Bank Transfer</li>
    </ul>



    <form action="sponsor.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="amount">Donation Amount:</label>
        <input type="number" id="amount" name="amount" required><br><br>
        <input type="submit" value="Donate">
    </form>
</div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = escape($_POST['name']);
        $email = escape($_POST['email']);
        $amount = escape($_POST['amount']);

        
        echo "<p>Thank you, $name, for your generous donation of $$amount!</p>"; // no db function, only a print confirming input
    }
    ?>

</body>

<?php include('Templates/footer.php'); ?>
</html>