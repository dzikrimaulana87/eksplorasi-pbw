<?php
include_once('./Abstract1.php');
class Person extends Abstract1{
    // Properti
    public $name;
    public $age;
    
    // Konstruktor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    // Metode untuk menampilkan informasi tentang orang
    public function displayInfo() {
        echo "Name: " . $this->name . ", Age: " . $this->age . " years old.";
    }


}
