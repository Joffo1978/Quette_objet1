<?php
class Car

{

        private int $nbWheels=4;

        private int $currentSpeed =80;

        private string $color;

        private int $nbSeats;

        private string $energy;

        private int $energyLevel=3;

        public function __construct(string $color, int $nbSeats, string $energy)

{
    
    $this->color = $color;

    $this->nbSeats = $nbSeats;

    $this->energy = $energy;
}
public function forward(): string

{

    $this->currentSpeed = 15;


    return "Go !";

}


public function brake(): string

{

   $sentence = "";

   while ($this->currentSpeed > 0) {

       $this->currentSpeed--;

       $sentence .= "Brake !!!";

   }

   $sentence .= "I'm stopped !";

   return $sentence;

}

public function start(): string

{



}
public function getnbWheels():int

{

    return $this->nbWheels;
}
public function getcurrentSpeed():int

{

    return $this->currentSpeed;
}

public function getColor():string

{

    return $this->color;
}
public function getNbSeats():string

{

    return $this->nbSeats;
}

public function getEnergy():string

{

    return $this->energy;
}

public function getEnergyLevel():int

{

    return $this->EnergyLevel;
}

}

$Ford = new Car('blue',4,'gaz');
var_dump($Ford);
echo($Ford->forward());
echo($Ford->brake());
