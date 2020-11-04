<?php

require_once 'vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var int
     */
    public $loading = 0; //chargement

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->energy =$energy;

    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function isFullOrNot(): string
    {
        $sentence = "";
        if ($this->loading >= $this->storageCapacity) {
            $sentence = 'Full';
        } else {
            $sentence = 'In filling';
        }
        return $sentence;
    }
}