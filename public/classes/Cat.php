<?php

require_once('Pet.php');

class Cat extends Pet {
    private $traits;
    private $interests;

    // constructor
    public function __construct($name, $breed, $age, $location, $traits, $interests, $price, $imagePath) {
        parent::__construct('Cat', $name, $breed, $age, $location, $price, $imagePath); 
        $this->traits = $traits;
        $this->interests = $interests;
    }

    // get and set methods
    public function getTraits() {
        return $this->traits;
    }

    public function setTraits($traits) {
        $this->traits = $traits;
    }

    public function getInterests() {
        return $this->interests;
    }

    public function setInterests($interests) {
        $this->interests = $interests;
    }

    public function printCatDetails() {
        return "
            <div class='list-of-pets'>
                <h2>{$this->name}</h2>
                <div class='pet-info'>
                    <img src='{$this->getImage()}' alt='{$this->name}' />
                    <p>{$this->breed} | Age: {$this->age}</p>
                    <p>Location: {$this->location}</p>
                    <p>Price: {$this->price}</p>
                    <p>Traits: {$this->traits}</p>
                    <p>Interests: {$this->interests}</p>
                    <form action='cart.php' method='POST'>
                        <input type='hidden' name='pet_type' value='{$this->type}'>
                        <input type='hidden' name='pet_name' value='{$this->name}'>
                        <input type='hidden' name='pet_breed' value='{$this->breed}'>
                        <input type='hidden' name='pet_age' value='{$this->age}'>
                        <input type='hidden' name='pet_location' value='{$this->location}'>
                        <input type='hidden' name='pet_price' value='{$this->price}'>
                        <input type='hidden' name='pet_image' value='{$this->imagePath}'>
                        <input type='hidden' name='pet_traits' value='{$this->traits}'>
                        <input type='hidden' name='pet_interests' value='{$this->interests}'>
                        <button type='submit' name='add_to_cart'>Add to Cart</button>
                    </form>
                </div>
            </div>
        ";
    }
}