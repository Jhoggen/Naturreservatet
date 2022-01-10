<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

abstract class Animal {

    abstract function makeSound();

    
}


class Apor extends Animal {
    function makeSound() {
        $soundToMake = "<script>alert('WHOOAHAHHAA')</script>";
        echo $soundToMake;
    }
}

$apa = new Apor();
$apa->makeSound();


class Tigrar extends Animal {
    function makeSound() {
        $soundToMake = "<script>alert('ROAR')</script>";
        echo $soundToMake;
    }
}

$tiger = new Tigrar;
$tiger->makeSound();


class Giraffer extends Animal {
    function makeSound() {
        $soundToMake = "<script>alert('RIIIEEEEEEEEEEEE')</script>";
        echo $soundToMake;
    }
}

$giraff = new Giraffer;
$giraff->makeSound();


class Kokosnötter extends Animal {
    function makeSound() {
        $soundToMake = "<script>alert('DONK')</script>";
        echo $soundToMake;
    }
}

$kokosnöt = new Kokosnötter;
$kokosnöt->makeSound();




if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["apa"]) && isset($_POST["tiger"]) && isset($_POST["giraff"]) && isset($_POST["kokosnöt"])) {

        $apa = $_POST["apa"];
        $tiger = $_POST["tiger"];
        $giraff = $_POST["giraff"];
        $kokosnöt = $_POST["kokosnöt"];
        
        echo $apa." apor, ";
        echo $tiger." tigrar, ";
        echo $giraff." giraffer, ";
        echo $kokosnöt." kokosnötter, ";
    }

    else {
        echo "Fail";
    }
}

?>
</body>
</html>

