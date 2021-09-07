<?php
class FuelGauge{
    private int $liters;

    public function __construct(int $liters = 0){
        $this->liters = $liters;
    }

    public function getFuel(): int
    {
        return $this->liters;
    }

    public function fuelVehicle(): int
    {
        return $this->liters++;
    }

    public function burnFuel(): int
    {
        return $this->liters--;
    }
}

class Odometer{
    private int $mileage;
    private int $distance = 0;
    private FuelGauge $liters;

    public function __construct(int $mileage, FuelGauge $liters){
        $this->mileage = $mileage;
        $this->liters = $liters;
    }

    public function getMileage() : int
    {
        return $this->mileage;
    }

    public function incrementMileage() : void
    {
        $this->distance++;
        if ($this->mileage >= 999){
            $this->mileage = 0;
        } else {
            $this->mileage++;
        }
        if ($this->distance % 10 === 0){
            $this->liters->burnFuel();
        }
    }

}

$fuel = new FuelGauge();

if ($fuel->getFuel() === 0){
    for ($i = 0; $i <= 70; $i++){
        $fuel->fuelVehicle();
    }
}

$odometer = new Odometer(0, $fuel);

while($fuel->getFuel() > 0){
    time_nanosleep(0, 10000000);
    $odometer->incrementMileage();
    echo "Mileage: " . $odometer->getMileage() . "km" . PHP_EOL;
    echo "Fuel: " . $fuel->getFuel() . "l" . PHP_EOL;
    echo "---------" . PHP_EOL;

    if ($fuel->getFuel() < 1){
        echo "You are out of fuel!" . PHP_EOL;
    }
}








