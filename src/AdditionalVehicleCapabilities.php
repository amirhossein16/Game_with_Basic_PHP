<?php

namespace App;

abstract class AdditionalVehicleCapabilities
{
    private static int $Fuel = 0;
    private static array $CurrentLocation = [];
    private static array $DestinationLocation = [];

    /**
     * @param $Fuel
     * @param $CurrentLocation
     * @param $DestinationLocation
     */
    public function __construct($Fuel, $CurrentLocation, $DestinationLocation)
    {
        self::$Fuel = $Fuel;
        self::$CurrentLocation["UP"] = $CurrentLocation[0];
        self::$CurrentLocation["RIGHT"] = $CurrentLocation[1];
        self::$DestinationLocation["UP"] = $DestinationLocation[0];
        self::$DestinationLocation["RIGHT"] = $DestinationLocation[1];
    }

    /**
     * @return int
     */
    public static function getFuel(): int
    {
        return self::$Fuel;
    }

    /**
     * @return array
     */
    public static function getCurrentLocation(): array
    {
        return self::$CurrentLocation;
    }

    /**
     * @return array
     */
    public static function getDestinationLocation(): array
    {
        return self::$DestinationLocation;
    }

    /**
     * @param int $CurrentLocation
     */
    public static function ChangeMoveUp(int $CurrentLocation, int $FuelRatio): void
    {
        self::$CurrentLocation["UP"] += $CurrentLocation;
        self::$Fuel -= $FuelRatio;
    }

    public static function ChangeMoveDown(int $CurrentLocation, int $FuelRatio): void
    {
        self::$CurrentLocation["UP"] -= $CurrentLocation;
        self::$Fuel -= $FuelRatio;
    }

    public static function ChangeMoveRight(int $CurrentLocation, int $FuelRatio): void
    {
        self::$CurrentLocation["RIGHT"] += $CurrentLocation;
        self::$Fuel -= $FuelRatio;
    }

    public static function ChangeMoveLeft(int $CurrentLocation, int $FuelRatio): void
    {
        self::$CurrentLocation["RIGHT"] -= $CurrentLocation;
        self::$Fuel -= $FuelRatio;
    }

    public function increaseFuel($fuel): int
    {
        return self::$Fuel += $fuel;
    }

    public function getTheCurrentLocation(): array
    {
        return self::$CurrentLocation;
    }

    public function getTheDestinationLocation(): array
    {
        return self::$DestinationLocation;
    }
}