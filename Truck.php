<?php
    require_once 'Vehicle.php';

    class Truck extends Vehicle{
        private int $storeCapacity;
        private int $loading = 0;
        private string $energy;
        private int $energyLevel;

        public const ALLOWED_ENERGIES = [
            'fuel',
            'electric',
        ];
    
 

        public function __construct(string $color, int $nbSeats, int $storeCapacity, int $loading)
        {
            parent::__construct ($color, $nbSeats);
            $this->storeCapacity = $storeCapacity;
            $this->loading = $loading;
        }

        public function setEnergy(string $energy): Truck
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

        public function getLoading(): int
        {
            return $this->loading;
        }

        public function setLoading(int $loading): void
        {
            $this->loading = $loading;
        }

        public function isFull(): string
        {
            $sentence = "";
            if ($this->loading == $this->storeCapacity){
                return $sentence = "full";
            } elseif ($this->loading > $this->storeCapacity) {
                return $sentence = "The loading can't be over the store capacity !";
            } else {
                return $sentence = "is filling";
            }
        }
    }
?>