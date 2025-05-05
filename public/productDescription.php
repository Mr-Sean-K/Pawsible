

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
    <title><?php echo "Pawsible"; ?></title>
    <link rel="stylesheet" href="css/ProductDescStyle.css">
</head>
<body>
    
<?php include('Templates/header.php'); ?>
    
    <div id="description">
        <p>Choosing to adopt a pet from Pawsible gives rescue animals a second chance of happiness. Find your perfect pet companion!</p>
    </div>
    
    <div class="flex-container">
        <div class="pet-card">
            <h2><?php echo "View Dogs"; ?></h2>
            <div class="pet-info"> <p>Thank you for choosing to adopt a dog from Pawsible. To adopt a dog/puppy you must be 18+ years old, provide photo ID and photos of your home for the dog. If you have another dog, a dog meet must be arranged.</p></div>
        <img src="images\dogs\pom.jpg" alt="dog">
        </div>
        
        <div class="pet-card">
            <h2><?php echo "View Cats"; ?></h2>
           <div class="pet-info"> <p>Thank you for choosing to adopt a cat from Pawsible. To adopt a cat/kitten you must be 18+ years old, provide photo ID and photos of your home for the cat.</p> </div>
           <div id = "cat-img">   <img src="images\cats\cat.jpg" alt="cat"></div>
        </div>
    </div>

    <?php include('pets.php'); ?>

</body> 

<?php include('Templates/footer.php'); ?>

</html>

