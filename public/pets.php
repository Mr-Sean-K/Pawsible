<?php 
require_once 'src/DBConnect.php'; 
require_once 'CRUD/read.php';
require_once 'classes/Pet.php';
require_once 'classes/Dog.php';
require_once 'classes/Cat.php';

// pull pet data from pets table
$petsData = read('pets');

// initialize array to store pet objects
$pets = [];

foreach ($petsData as $petData) {
    if ($petData['type'] == 'Dog') {
        // get size and energyLevel attributes from the dogs table using pet_id - rest is from parent table
        $dogData = read('dogs', ['pet_id' => $petData['id']])[0];
        $pets[] = new Dog(
            $petData['name'], 
            $petData['breed'], 
            $petData['age'], 
            $petData['location'], 
            $dogData['size'], 
            $dogData['energyLevel'], 
            $petData['price'],
            $petData['imagePath']
        );
    } elseif ($petData['type'] == 'Cat') {
        $catData = read('cats', ['pet_id' => $petData['id']])[0];
        $pets[] = new Cat(
            $petData['name'], 
            $petData['breed'], 
            $petData['age'], 
            $petData['location'], 
            $catData['traits'], 
            $catData['interests'], 
            $petData['price'],
            $petData['imagePath']
        );
    }
}
?>

<div class="flex-container">
    <?php foreach ($pets as $pet): ?>
        <?php if ($pet instanceof Dog): ?>
            <?php echo $pet->printDogDetails(); ?>
        <?php elseif ($pet instanceof Cat): ?>
            <?php echo $pet->printCatDetails(); ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>