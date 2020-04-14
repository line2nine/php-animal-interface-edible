<?php
include_once "AbstractClass/Animal.php";
include_once "Interface/Edible.php";

class Chicken extends Animal implements Edible
{

    public function makeSound()
    {
        return "Gà gáy: Ò ó o Oooooooo!!!";
    }

    public function howToEat()
    {
        return "Ăn thóc";
    }
}