<?php

abstract class HighWay
{
    // PROPRIETES
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    // CONSTRUCTEUR
    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        $this -> currentVehicles = $currentVehicles;
        $this -> nbLane = $nbLane;
        $this -> maxSpeed = $maxSpeed;
    }

    // GETTERS AND SETTERS
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }
    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
    abstract public function addVehicle(Vehicle $vehicle);
}
?>






