<?php

// classi astratte

// parte anteriore con gli attacchi
abstract class ParteAnteriore{

    abstract public function attack();
}

//parte posteriore con le difese
abstract class PartePosteriore{

    abstract public function defend();
}


//attacchi
class CatThrower extends ParteAnteriore{

    public function attack(){
        echo "MEOWWWWWWWWWW\n";
    }
}

class KungFuPandasFingerMove extends ParteAnteriore{

    public function attack(){
        echo "KABOOM !!\n";
    }
}

class PeterGriffinsPunch extends ParteAnteriore{

    public function attack(){
        echo "Maledetto Pollo !!";
    }
}

class Mjöllnir extends ParteAnteriore{

    public function attack(){
        echo "Jonathaaan !!";
    }
}


//difese

class MegShield extends PartePosteriore{

    public function defend(){
        echo "Stai zitta Meg !!";
    }
}

class CheekSqueeze extends PartePosteriore{

    public function defend(){
        echo "Bello di nonna !!";
    }
}

class FakeDeath extends PartePosteriore{

    public function defend(){
        echo "aarghhghhh !!";
    }
}

class BlameSomeoneElse extends PartePosteriore{

    public function defend(){
        echo "E' stato lui ";
    }
}

class Batmobile{

    public $attacco;
    public $difesa;

    public function __construct(ParteAnteriore $parteAnteriore, PartePosteriore $partePosteriore){
        $this->attacco = $parteAnteriore;
        $this->difesa = $partePosteriore;
    }

    public function attacca(){
        $this->attacco->attack();
    }

    public function difendi(){
        $this->difesa->defend();
    }
}

$batmobile1 = new Batmobile(new Mjöllnir, new BlameSomeoneElse);
$batmobile2 = new Batmobile(new PeterGriffinsPunch, new FakeDeath);
$batmobile3 = new Batmobile(new KungFuPandasFingerMove, new CheekSqueeze);

echo("\nBatmobile 1:\n");
$batmobile1->attacca();
$batmobile1->difendi();
echo("\nBatmobile 2:\n");
$batmobile2->attacca();
$batmobile2->difendi();
echo("\nBatmobile 3:\n");
$batmobile3->attacca();
$batmobile3->difendi();
