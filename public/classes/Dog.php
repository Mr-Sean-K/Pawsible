<?php

require_once('Pet.php');

class Dog extends Pet {
    private $size;
    private $energyLevel;

    // constructor
    public function __construct($name, $breed, $age, $location, $size, $energyLevel, $price, $imagePath) {
        parent::__construct('Dog', $name, $breed, $age, $location, $price, $imagePath);
        $this->size = $size;
        $this->energyLevel = $energyLevel;
    }

    // get and set methods
    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getEnergyLevel() {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel) {
        $this->energyLevel = $energyLevel;
    }

    public function printDogDetails() {
        return "
            <div class='list-of-pets'>
                <h2>{$this->name}</h2>
                <div class='pet-info'>
                    <img src='{$this->getImage()}' alt='{$this->name}' />
                    <p>{$this->breed} | Age: {$this->age}</p>
                    <p>Location: {$this->location}</p>
                    <p>Size: {$this->size}</p>
                    <p>Price: {$this->price}</p>
                    <p>Energy Level: {$this->energyLevel}</p>
                    <form action='cart.php' method='POST'>
                        <input type='hidden' name='pet_type' value='{$this->type}'>
                        <input type='hidden' name='pet_name' value='{$this->name}'>
                        <input type='hidden' name='pet_breed' value='{$this->breed}'>
                        <input type='hidden' name='pet_age' value='{$this->age}'>
                        <input type='hidden' name='pet_location' value='{$this->location}'>
                        <input type='hidden' name='pet_price' value='{$this->price}'>
                        <input type='hidden' name='pet_image' value='{$this->imagePath}'>
                        <input type='hidden' name='pet_size' value='{$this->size}'>
                        <input type='hidden' name='pet_energy_level' value='{$this->energyLevel}'>
                        <button type='submit' name='add_to_cart'>Add to Cart</button>
                    </form>
                </div>
            </div>
        ";
    }
}