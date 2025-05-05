<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contactStyle.css">
    <link rel="stylesheet" href="css/ProductDescStyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php include('Templates/header.php'); ?>



    <div id="description">
        <p>Have any questions? Fill out the form below, and we will get back you soon!</p>
    </div>

    <div class="contact-container">
        <form action="email.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="f" name="fullname" placeholder="fullname" required>
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="email" required>
            <label for="question">Question :</label>
            <textarea id="question" name="question" rows="5" placeholder="Type your question here" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
    <div class="index-headings"><h2>How to Contact Us</h2></div>
        <div class="contact-container">
            <div class="contact-box">
                <h3>Email</h3>
                <a href="mailto:pawsible@gmail.com">pawsible@gmail.com</a>
            </div>
            <div class="contact-box">
                <h3>Phone</h3>
                <p>+353 (0)89 989 889</p>
            </div>
            <div class="contact-box">
                <h3>Address</h3>
                <p>123  Main Street, Dublin, Ireland D15 F3Y0</p>
            </div>
    </div>  

    <?php include('Templates/footer.php'); ?>

</body>
</html>
