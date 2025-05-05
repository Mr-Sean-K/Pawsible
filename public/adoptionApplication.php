<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adoption Application Form</title>
        <link rel="stylesheet" href="css/application.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/ProductDescStyle.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <?php include('Templates/header.php'); ?>

        <div class="form-container">
            <form action="adoptionApplication.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required class="ageBox">

                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="Pet Type">Pet Type: 
                    <input type="radio" id="dog" name="petType" value="Dog" required> Dog 
                    <input type="radio" id="cat" name="petType" value="Cat" required> Cat 
                </label>

                <label for="breed">Breed:</label>
                <input type="text" id="breed" name="breed" required>

                <input type="submit" value="Submit">
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once 'src/DBConnect.php';
            require_once 'CRUD/create.php'; 
            require_once 'src/common.php';

            // sanitize input data
            $name = escape($_POST["name"]);
            $age = escape($_POST["age"]);
            $gender = escape($_POST["gender"]);
            $address = escape($_POST["address"]);
            $petType = escape($_POST["petType"]);
            $breed = escape($_POST["breed"]);

            $data = [
                'name' => $name,
                'age' => $age,
                'gender' => $gender,
                'address' => $address,
                'petType' => $petType,
                'breed' => $breed
            ];

            $inserted = create('applications', $data);

            // feedback to user to show if the application was submitted successfully
            if ($inserted) {
                echo "<h2>Pet Application Submitted Successfully!</h2>";
                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Age:</strong> $age</p>";
                echo "<p><strong>Gender:</strong> $gender</p>";
                echo "<p><strong>Address:</strong> $address</p>";
                echo "<p><strong>Pet Type:</strong> $petType</p>";
                echo "<p><strong>Breed:</strong> $breed</p>";
            } else {
                echo "<p>Error: Failed to submit the application. Please review all of the above fields to ensure they are filled.</p>";
            }
        }
        ?>
    </body>
    
    <?php include('Templates/footer.php'); ?>
</html>