<?php require_once('cartLogic.php'); ?>

<!DOCTYPE html>
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
    <title>Cart</title>
    <link rel="stylesheet" href="css/productDescStyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="cart-header">
    <div id ="title" >
        <a href="index.php"><img src="images/pawsibleLogo.png" alt="logo" height="100px" width="120px"></a>
        <a href="index.php"><div id="pawsible-title"><h1>Pawsible</h1></div></a>
    </div>
</div>

    <div class="index-headings"><h1>Your Cart</h1></div>


 <div class = "info-background">
    <?php if (!empty($_SESSION['cart'])): ?>
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Age</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Empty Cart</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                    <tr>
                    <div id="cart-headings">
                        <td><?php echo htmlspecialchars($item['type']); ?></td>
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td><?php echo htmlspecialchars($item['breed']); ?></td>
                        <td><?php echo htmlspecialchars($item['age']); ?></td>
                        <td><?php echo htmlspecialchars($item['location']); ?></td>
                        <td><?php echo htmlspecialchars($item['price']); ?></td>
                        <td><img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" width="50"></td>
                        <td>
                    </div>
                            <form action="cart.php" method="POST">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" name="remove_from_cart" class="button">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    <?php else: ?>
        <p>Your cart is empty.</p>

    <?php endif; ?>
    </div>

    <form action="cart.php" method="POST">
    <input type="text" name="discount_code" placeholder="Enter discount code" required>
    <button type="submit" name="apply_discount">Apply Discount</button>
</form>

        <?php
            if (!empty($discountMsg)) {
                echo "<p>$discountMsg</p>";
            }

            echo '<div class="index-headings">Total: ' . $total . '</div>';

        ?>


    <div class="index-headings"><a href="productDescription.php">Continue Shopping</a></div>

    </body>
 <?php include('Templates/footer.php'); ?>

</html>