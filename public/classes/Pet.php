<?php

class Pet {
    protected $type;
    protected $breed;
    protected $age;
    protected $name;
    protected $location;
    protected $price;
    protected $imagePath;

    // constructor
    public function __construct($type, $name, $breed, $age, $location, $price,$imagePath) {
        $this->type = $type;
        $this->name = $name;
        $this->breed = $breed;
        $this->age = $age;
        $this->location = $location;
        $this->price = $price;
        $this->imagePath = $imagePath;
    }

    // get and set methods
    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getBreed() {
        return $this->breed;
    }

    public function setBreed($breed) {
        $this->breed = $breed;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getImage() {
        return $this->imagePath;
    }

    public function setImage($imagePath) {
        $this->imagePath = $imagePath;
    }

    public function displayPet() {
        return "
            <div class='list-of-pets'>
                <h2>{$this->name}</h2>
                <div class='pet-info'>
                    <img src='{$this->getImage()}' alt='{$this->name}' />
                    <p>{$this->breed} | Age: {$this->age}</p>
                    <p>Location: {$this->location}</p>
                    <p>Price: {$this->price}</p>
                    <form action='cart.php' method='POST'>
                        <input type='hidden' name='pet_type' value='{$this->type}'>
                        <input type='hidden' name='pet_name' value='{$this->name}'>
                        <input type='hidden' name='pet_breed' value='{$this->breed}'>
                        <input type='hidden' name='pet_age' value='{$this->age}'>
                        <input type='hidden' name='pet_location' value='{$this->location}'>
                        <input type='hidden' name='pet_price' value='{$this->price}'>
                        <input type='hidden' name='pet_image' value='{$this->imagePath}'>
                        <button type='submit' name='add_to_cart'>Add to Cart</button>
                    </form>
                </div>
            </div>
        ";
    }
}