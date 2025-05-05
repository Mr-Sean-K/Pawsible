<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawsible Home</title>
    <link rel="stylesheet" href="css/productDescStyle.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include('Templates/header.php'); ?>

    <main>
        <div class="index-headings"><h1> Welcome, you are logged in as: <?php echo $_SESSION['Username']; ?></h1></div>
      
        <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
        <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>

        <p>Take a look at our most adopted pets!</p>

        <?php
            $mostAdopted = ["Corgi", "Pug", "Labrador", "Husky", "Shih Tzu"];

            echo "<ul>";
            for ($i = 0; $i < count($mostAdopted); $i++) {
                echo "<li>" . $mostAdopted[$i] . "</li>";
            }
            echo "</ul>";
        ?>
    <div class="mostAdoptedPet-container">
        <div><img src="images/dogs/corgi.jpg" height="200" width="150" alt="corgi-mostadopted"></div>
        <div><img src="images/dogs/chico.jpeg" height="200" width="150" alt="pug-mostadopted"></div>
        <div><img src="images/dogs/labrador.jpg" height="200" width="150" alt="lab-mostadopted"></div>
        <div><img src="images/dogs/husky.jpg" height="200" width="150" alt="husky-mostadopted"></div>
        <div><img src="images/dogs/shih-tzu.jpg" height="200" width="150" alt="shihtzu-mostadopted"></div>
    </div>

        <p>Want to see more? Browse our pets available for adoption near you <a href="productDescription.php">here</a>!</p>
        <p>Interested in adopting one of our furry friends? <a href="adoptionApplication.php">Fill out our adoption application!</a></p>

    <div class = "information-flex-box">
        <div class = "info-background">
           <div class="index-headings"> <h2>About Pawsible</h2> </div>
            <p>Pawsible is dedicated to finding loving homes for cats and dogs in need. Our mission is to ensure that every pet has a chance to find their furever home.</p>
            <p>We work remotely with a network of shelters and foster homes to provide the best care for our animals. Our team of dedicated volunteers and staff work tirelessly to match pets with the perfect families.</p>
            <img src= "images/dogs/groupOfDogs2.jpg" width="280" height="300" alt="group of dogs">
        </div>
    


        <div class = "info-background"> 
           <div class = "index-headings"> <h2>How We Facilitate Rehoming</h2> </div>

            <p>At Pawsible, we follow a thorough process to ensure that each pet is matched with the right home:</p>
            <ul>
                <li>Initial Assessment: Through a thorough interview process, we assess each pet's health, behavior, and needs.</li>
                <li>Foster Care: Pets are placed in foster homes where they receive love and care.</li>
                <li>Adoption Events: We host regular adoption events to introduce pets to potential adopters, please see our <a href="sponsor.php">sponsorships page</a> for more information!</li>
                <li>Home Visits: We conduct home visits to ensure a safe and suitable environment for the pet.</li>
                <li>Follow-Up: We provide ongoing support to adopters to ensure a smooth transition.</li>
            </ul>
            <p>Our goal is to make the rehoming process as smooth and stress-free as possible for both the pets and their new families.</p>
        </div>
    </div>
    </main>

    <?php include('Templates/footer.php'); ?>
    
</body>
</html>