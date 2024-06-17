<?php

class Doctor extends Person{
    public function displayInfo() {
        echo "Name: " . $this->name . ", Age: " . $this->age . " years old. is a doctor";
    }

}