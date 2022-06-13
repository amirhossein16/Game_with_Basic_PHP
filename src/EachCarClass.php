<?php

namespace App;

use App\BMW\BMWi4M50;
use App\BMW\BMWiX;
use App\BMW\BMWiXM60;
use App\Ford\MUSTANGGT;
use JetBrains\PhpStorm\Pure;

trait EachCarClass
{
    private array $Location = [];
    private array $result = [];


    #[Pure] public function fuelLevel(): int
    {
        return $this->getFuel();
    }

    #[Pure] public function currentLocation(): array
    {
        return parent::getTheCurrentLocation();
    }

    #[Pure] public function destinationLocation(): array
    {
        return parent::getDestinationLocation();
    }

    public function moveUp(): static
    {
        parent::ChangeMoveUp(self::SpeedConfident, self::FuelRatio);
        $this->Location = parent::getTheCurrentLocation();
        echo "You MovedUp : " . PHP_EOL;
        print_r(parent::getCurrentLocation());
        echo "You need to go Right " . self::Tips()["RIGHT"] . " more moves" . PHP_EOL .
            "You need to go up " . self::Tips()["UP"] . " more moves" . PHP_EOL;
        return $this;
    }

    public function moveDown(): static
    {
        parent::ChangeMoveDown(self::SpeedConfident, self::FuelRatio);
        $this->Location = parent::getTheCurrentLocation();
        echo "You MovedDown : " . PHP_EOL;
        print_r(parent::getCurrentLocation());
        echo "You need to go Right " . self::Tips()["RIGHT"] . " more moves" . PHP_EOL .
            "You need to go up " . self::Tips()["UP"] . " more moves" . PHP_EOL;
        return $this;
    }

    public function moveRight(): static
    {
        parent::ChangeMoveRight(self::SpeedConfident, self::FuelRatio);
        $this->Location = parent::getTheCurrentLocation();
        echo "You MovedRight : " . PHP_EOL;
        print_r(parent::getCurrentLocation());
        echo "You need to go Right " . self::Tips()["RIGHT"] . " more moves" . PHP_EOL .
            "You need to go Up " . self::Tips()["UP"] . " more moves" . PHP_EOL;
        return $this;
    }

    public function moveLeft(): static
    {
        parent::ChangeMoveLeft(self::SpeedConfident, self::FuelRatio);
        $this->Location = parent::getTheCurrentLocation();
        echo "You MovedLeft : " . PHP_EOL;
        print_r(parent::getCurrentLocation());
        echo "You need to go Right " . self::Tips()["RIGHT"] . " more moves" . PHP_EOL .
            "You need to go Up " . self::Tips()["UP"] . " more moves" . PHP_EOL;
        return $this;
    }

    public function Tips()
    {
        $current = self::currentLocation();
        $destination = self::destinationLocation();
        foreach ($current as $key => $value) {
            $this->result[$key] = $destination[$key] - $value;
        }
        return $this->result;
    }

    public function result()
    {
        if (self::getFuel() >= 0) {
            if (self::destinationLocation() == self::currentLocation()) {
                echo "\e[0;32;47m You have reached your destination.\e[m" . PHP_EOL;
            } else {
                echo "\e[1;37;41m You have not reached your destination!!!" . PHP_EOL . "Your Destination is : \e[0m" . PHP_EOL;
                print_r(self::destinationLocation());
            }
        } else {
            echo "\e[1;37;41m Your fuel is gone. \e[0m" . PHP_EOL;
        }
    }
}