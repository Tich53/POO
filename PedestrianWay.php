<?php
    require_once 'HighWay.php';

    final class PedestrianWay extends HighWay
    {
        // PROPRIETES
        protected array $currentVehicles;
        protected int $nbLane;
        protected int $maxSpeed;

        // CONSTRUCTEUR
        public function __construct(array $currentVehicles = [], int $nbLane = 1, int $maxSpeed = 10)
        {
            parent::__construct($currentVehicles, $nbLane, $maxSpeed);
        }

        // IMPLEMENT ABSTRACT METHOD
        public function addVehicle(Vehicle $vehicle) : void
        {
            if ($vehicle instanceof Bicycle OR $vehicle instanceof Skateboard){
                $this -> currentVehicles[] = $vehicle;
            }
        }
    }
?>