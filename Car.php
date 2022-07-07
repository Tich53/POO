<?php
    require_once 'Vehicle.php';

    class Car extends Vehicle{

        public const ALLOWED_ENERGIES = [
            'fuel',
            'electric',
        ];

        private bool $hasParkBrake = true;
        private string $energy = "";
        private int $energyLevel = 0;

        public function setParkBrake(bool $hasParkBrake): void
        {
                $this -> hasParkBrake = $hasParkBrake;
        }

        public function start() : string
        {
            if ($this -> hasParkBrake){
                throw new Exception("Attention, le frein à main est enclenché !");
            }
            return "Pas de frein, fonces !";
        }

        public function __construct(string $color, int $nbSeats, string $energy)
        {
            parent::__construct ($color, $nbSeats);
            $this->energy= $energy;
        }

        public function setEnergy(string $energy): Car
        {
                if (in_array($energy, self::ALLOWED_ENERGIES)) {
                    $this->energy = $energy;
                }
                return $this;
        }
        public function getEnergy () : string
        {
            return $this->energy;
        }
        public function getEnergyLevel () : int
        {
            return $this->energyLevel;
        }
    }
?>

