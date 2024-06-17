<?php
// Sertakan file 'Person.php'
require_once 'Person.php';
require_once 'Doctor.php';


// Buat objek dari kelas 'Person'
$person1 = new Person("John", 30);
$person2 = new Person("Alice", 25);
$doctor1 = new Doctor("Dzikri", 27);


// Panggil metode untuk menampilkan informasi orang
echo "Person 1: ";
$person1->displayInfo();
echo "<br>";

echo "Person 2: ";
$person2->displayInfo();
echo "<br>";

echo "Doctor 2: ";
$doctor1->displayInfo();



