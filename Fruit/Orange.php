<?php
include_once(dirname(__FILE__) . "/../AbstractClass/Fruit.php");

class Orange extends Fruit
{

    public function howToEat()
    {
        return "Cam nhiều nước";
    }
}