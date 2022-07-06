<?php
    require_once 'HighWay.php';

    final class MotorWay extends HighWay
    {
        // PROPRIETES
        protected array $currentVehicles;
        protected int $nbLane;
        protected int $maxSpeed;

        // CONSTRUCTEUR
        public function __construct(array $currentVehicles = [], int $nbLane = 4, int $maxSpeed = 130)
        {
            parent::__construct($currentVehicles, $nbLane, $maxSpeed);
        }

        // IMPLEMENT ABSTRACT METHOD
        public function addVehicle(Vehicle $vehicle) : void
        {
            if ($vehicle instanceof Car){
                $this -> currentVehicles[] = $vehicle;
            }
        }
    }

      
    

?>




