<?php

class Zoo{

    public $brandName;
    public $location;
    public $species;

    public function __construct($brandName, $location, $species){
        $this->brandName = $brandName;
        $this->location = $location;
        $this->species = $species;
    }

    public function infoZoo(){
        echo "\nQuesto è lo zoo $this->brandName, si trova a $this->location ed ospita $this->species specie di animali.\n";
    }

}

class Plant extends Zoo{

    public $name;
    public $height;
    public $habitat;
    public $section;

    public function __construct($brandName, $location, $species, $name, $height, $habitat, $section){
        parent:: __construct($brandName, $location, $species);
        $this->name = $name;
        $this->height = $height;
        $this->habitat = $habitat;
        $this->section = $section;
    }

    public function infoPlant(){
        echo "\n$this->name è una pianta alta fino a $this->height metri il cui habitat naturale è il $this->habitat; si trova nella sezione $this->section dello zoo $this->brandName.\n";
    }
}

class Animal extends Zoo{

    public $name;
    public $length;
    public $weight;
    public $section;
    
    public function __construct($brandName, $location, $species, $name, $length, $weight, $section){
        parent:: __construct($brandName, $location, $species);
        $this->name = $name;
        $this->length = $length;
        $this->weight = $weight;
        $this->section = $section;
    }

    public function infoAnimal(){
        echo "\n$this->name è un animale che pesa fino a $this->weight chili, è lungo $this->length metri e si trova nella sezione $this->section dello zoo $this->brandName.\n";
    }

}

class Fish extends Animal{

    public $habitat;
    public $family;

    public function __construct($brandName, $location, $species, $name, $length, $weight, $section, $habitat, $family){
        parent:: __construct($brandName, $location, $species, $name, $length, $weight, $section);
        $this->habitat = $habitat;
        $this->family = $family;
    }

    public function infoFish(){
        echo "\n$this->name è un pesce che pesa fino a $this->weight chili, è lungo $this->length metri e si trova nella sezione $this->section dello zoo $this->brandName.\nIl suo habitat naturale è $this->habitat e fa parte della famiglia dei $this->family.\n";
    }

}

class Bird extends Animal{

    public $habitat;
    public $flying;

    public function __construct($brandName, $location, $species, $name, $length, $weight, $section, $habitat, $flying){
        parent:: __construct($brandName, $location, $species, $name, $length, $weight, $section);
        $this->habitat = $habitat;
        $this->flying = $flying;
    }

    public function infoBird(){
        if($this->flying){
            echo "\n$this->name è un uccello volante che pesa fino a $this->weight chili, è lungo $this->length metri e si trova nella sezione $this->section dello zoo $this->brandName. Il suo habitat naturale è l'$this->habitat.\n";
        }else{
            echo "\n$this->name è un uccello che non vola, pesa fino a $this->weight chili, è lungo $this->length metri e si trova nella sezione $this->section dello zoo $this->brandName. Il suo habitat naturale è $this->habitat.\n";
        }
    }

}


$parcoNaturaViva = new Zoo("Parco Natura Viva", "Bussolengo, Verona", 250);
$parcoNaturaViva->infoZoo();

$ippopotamo = new Animal("Parco Natura Viva", "Bussolengo, Verona", 250, "Ippopotamo", 5, 1800, 2);
$ippopotamo->infoAnimal();

$pesceMartello = new Fish("Parco Natura Viva", "Bussolengo, Verona", 250, "Pesce Martello", 6, 84, 3, "oceano", "grossi pesci d'acqua marina");
$pesceMartello->infoFish();

$struzzo = new Bird("Parco Natura Viva", "Bussolengo, Verona", 250, "Struzzo", 2.5, 140, 4, "terra", false);
$struzzo->infoBird();

$alga = new Plant("Parco Natura Viva", "Bussolengo, Verona", 250, "Alga", 70, "fondale marino", 3);
$alga->infoPlant();

// print_r($parcoNaturaViva);
// print_r($ippopotamo);
// print_r($pesceMartello);
// print_r($struzzo);
// print_r($alga);