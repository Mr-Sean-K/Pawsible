<?php session_start();
//if the user isn't logged in then open the login page
    if($_SESSION['Active'] == false){ 
        header("location:userLogin.php");
        exit;
    }

?>

<header>
        <div id="title">
        <a href="index.php"><img src="images/pawsibleLogo.png" alt="logo" height="100px" width="120px"></a>
        <a href="index.php"><div id="pawsible-title"><h1>Pawsible</h1></div></a>
        <nav class="navbar">
            <ul>
                <li><a href="aboutUs.php">About</a></li>
                <li><a href="productDescription.php">View Available Pets</a></li>
                <li><a href="petcareguide.php">Pet Care Guide</a></li>
                <li><a href="sponsor.php">Sponsor</a></li>
                <li><a href="contactPage.php">Contact</a></li>
                <li><a href="cart.php"><img src="images/icons/cart.png" alt="cart icon" height="50px" width="50px"></a></li>
            </ul>
        </nav> 
    </div>
</header>