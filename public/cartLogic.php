<?php
session_start();
// initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// adding items to cart
if (isset($_POST['add_to_cart'])) {
    $pet = [
        'type' => $_POST['pet_type'],
        'name' => $_POST['pet_name'],
        'breed' => $_POST['pet_breed'],
        'age' => $_POST['pet_age'],
        'location' => $_POST['pet_location'],
        'price' => $_POST['pet_price'],
        'image' => $_POST['pet_image']
    ];

    // add pet to cart and send user to view their cart
    $_SESSION['cart'][] = $pet;

    header("Location: cart.php");
    exit();
}

    if (isset($_POST['remove_from_cart'])) {
        $index = $_POST['index'];
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); 
    }
    
    // discount code
    $discount = 0;
    $discountMsg = "";

    if (isset($_POST['apply_discount'])) {
        if ($_POST['discount_code'] == "PAWSIBLE20") {
            $discount = 0.20; 
            $discountMsg = "Discount applied: 20% off!";
        } else {
            $discountMsg = "Invalid discount code.";
        }
    }



    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'];
    }

    // apply discount if code is correct
    if ($discount > 0) {
        $total = $total * (1 - $discount);
    }



?>