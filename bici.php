<?php

class Bike{

    public $gear = 0;
    public $speed = 0;
    public $cadence = 0;

    public function __construct($gear, $speed, $cadence){
        $this->gear = $gear;
        $this->speed = $speed;
        $this->cadence = $cadence;
    }

    public function speedUp($acceleration, $gearUp){
        $this->speed += $acceleration;
        $this->gear += $gearUp;
    }

    public function slowDown($deceleration, $gearDown){
        $this->speed -= $deceleration;
        $this->gear -= $gearDown;
    }
}

class MB extends Bike{

    public $seatHeight;

    public function __construct($gear, $speed, $cadence, $seatHeight){
        parent::__construct($gear, $speed, $cadence);
        $this->seatHeight = $seatHeight;
    }

    public function adjustSeat($seatHeight){
        $this->seatHeight = $seatHeight;
    }
}

echo("Salgo sulla bici e parto...\n");
$mb = new MB(1, 5, 3, 5);
echo("Gear: $mb->gear, Velocità: $mb->speed, Cadenza: $mb->cadence, Altezza sellino: $mb->seatHeight.\n");
echo("Accelero...\n");
$mb->speedUp(15,1);
echo("Gear: $mb->gear, Velocità: $mb->speed, Cadenza: $mb->cadence, Altezza sellino: $mb->seatHeight.\n");
echo("Accelero...\n");
$mb->speedUp(20,1);
echo("Gear: $mb->gear, Velocità: $mb->speed, Cadenza: $mb->cadence, Altezza sellino: $mb->seatHeight.\n");
echo("Curva, freno...\n");
$mb->slowDown(15,1);
echo("Gear: $mb->gear, Velocità: $mb->speed, Cadenza: $mb->cadence, Altezza sellino: $mb->seatHeight.\n");
echo("Accelero...\n");
$mb->speedUp(20,1);
echo("Gear: $mb->gear, Velocità: $mb->speed, Cadenza: $mb->cadence, Altezza sellino: $mb->seatHeight.\n");
echo("Accelero ancora...\n");
$mb->speedUp(25,1);
echo("Gear: $mb->gear, Velocità: $mb->speed, Cadenza: $mb->cadence, Altezza sellino: $mb->seatHeight.\n");
echo("Una macchina mi taglia la strada, freno di colpo...\n");
$mb->slowDown(30,2);
echo("Gear: $mb->gear, Velocità: $mb->speed, Cadenza: $mb->cadence, Altezza sellino: $mb->seatHeight.\n");
$mb->slowDown(30,1);
echo("Gear: $mb->gear, Velocità: $mb->speed, Cadenza: $mb->cadence, Altezza sellino: $mb->seatHeight.\n");
$mb->slowDown(10,1);
echo("Gear: $mb->gear, Velocità: $mb->speed, Cadenza: $mb->cadence, Altezza sellino: $mb->seatHeight.\n");
echo("Mi sono fermato e sto insultando l'automobilista...\n");
