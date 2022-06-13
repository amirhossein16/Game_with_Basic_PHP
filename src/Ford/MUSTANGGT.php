<?php

namespace App\Ford;

use App\AdditionalVehicleCapabilities;
use App\ArrowInterface;
use App\CarFeatures;
use App\EachCarClass;
use JetBrains\PhpStorm\Pure;

class MUSTANGGT extends AdditionalVehicleCapabilities implements CarFeatures, ArrowInterface
{
    const SpeedConfident = 1;
    const FuelRatio = 2;
    use EachCarClass;
}