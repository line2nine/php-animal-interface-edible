<?php
include "Animal/Chicken.php";
include "Animal/Tiger.php";
include "Fruit/Apple.php";
include "Fruit/Orange.php";

echo('---- Động vật ----<br><br>');

$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br><br>';
    if ($animal instanceof Chicken){
        echo $animal->howToEat();
    }
}

echo ('<br><br>---- Fruits ----<br><br>');

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br><br>';
}
