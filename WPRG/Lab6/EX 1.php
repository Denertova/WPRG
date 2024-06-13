<?php

class NewCar {
    protected $model;
    protected $priceInEuro;
    protected $exchangeRate;

    public function __construct($model, $priceInEuro, $exchangeRate) {
        $this->model = $model;
        $this->priceInEuro = $priceInEuro;
        $this->exchangeRate = $exchangeRate;
    }

    public function calculatePrice() {
        return round($this->priceInEuro * $this->exchangeRate, 2);
    }

    public function getModel() {
        return $this->model;
    }

    public function getPriceInEuro() {
        return $this->priceInEuro;
    }

    public function getExchangeRate() {
        return $this->exchangeRate;
    }
}

class CarWithExtras extends NewCar {
    private $alarm;
    private $radio;
    private $airConditioning;

    public function __construct($model, $priceInEuro, $exchangeRate, $alarm, $radio, $airConditioning) {
        parent::__construct($model, $priceInEuro, $exchangeRate);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->airConditioning = $airConditioning;
    }

    public function calculatePrice() {
        $basePriceInPLN = parent::calculatePrice();
        $extrasPrice = $this->alarm + $this->radio + $this->airConditioning;
        return round($basePriceInPLN + ($extrasPrice * $this->exchangeRate), 2);
    }

    public function getAlarm() {
        return $this->alarm;
    }

    public function getRadio() {
        return $this->radio;
    }

    public function getAirConditioning() {
        return $this->airConditioning;
    }
}

class Insurance extends CarWithExtras {
    private $insuranceRate;
    private $yearsOwned;

    public function __construct($model, $priceInEuro, $exchangeRate, $alarm, $radio, $airConditioning, $insuranceRate, $yearsOwned) {
        parent::__construct($model, $priceInEuro, $exchangeRate, $alarm, $radio, $airConditioning);
        $this->insuranceRate = $insuranceRate;
        $this->yearsOwned = $yearsOwned;
    }

    public function calculatePrice() {
        $carPriceWithExtras = parent::calculatePrice();
        $depreciationFactor = (100 - $this->yearsOwned) / 100;
        $insuranceCost = $this->insuranceRate * $carPriceWithExtras * $depreciationFactor;
        return round($carPriceWithExtras + $insuranceCost, 2);
    }

    public function getInsuranceRate() {
        return $this->insuranceRate;
    }

    public function getYearsOwned() {
        return $this->yearsOwned;
    }
}

$car = new Insurance("Model S", 50000, 4.5, 300, 200, 1000, 0.05, 3);
echo "Całkowita cena samochodu: " . $car->calculatePrice() . " PLN\n";

?>
