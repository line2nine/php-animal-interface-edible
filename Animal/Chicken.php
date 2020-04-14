<?php
include_once(dirname(__FILE__) . "/../Interface/Edible.php");
include_once(dirname(__FILE__) . "/../AbstractClass/Animal.php");
//include_once "../AbstractClass/Animal.php";

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