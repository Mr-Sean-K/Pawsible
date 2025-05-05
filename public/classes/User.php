<?php

class User {
    private $username;
    private $firstName;
    private $surname;
    private $email;
    private $password;
    private $phoneNumber;
    private $address;

    // constructor
    public function __construct($username, $firstName, $surname, $email, $password, $phoneNumber, $address) {
        $this->username = $username;
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
    }

    // get and set methods
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }
}