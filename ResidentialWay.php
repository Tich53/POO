<?php
    require_once 'HighWay.php';

    final class ResidentialWay extends HighWay
    {
        // PROPRIETES
        protected array $currentVehicles;
        protected int $nbLane;
        protected int $maxSpeed;

        // CONSTRUCTEUR
        public function __construct(array $currentVehicles = [], int $nbLane = 2, int $maxSpeed = 50)
        {
            parent::__construct($currentVehicles, $nbLane, $maxSpeed);
        }

        // IMPLEMENT ABSTRACT METHOD
        public function addVehicle(Vehicle $vehicle) : void
        {
                $this -> currentVehicles[] = $vehicle;
        }
    }

?>