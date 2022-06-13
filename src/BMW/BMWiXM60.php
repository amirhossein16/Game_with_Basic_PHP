<?php

namespace App\BMW;

use App\AdditionalVehicleCapabilities;
use App\ArrowInterface;
use App\CarFeatures;
use App\EachCarClass;
use JetBrains\PhpStorm\Pure;

class BMWiXM60 extends AdditionalVehicleCapabilities implements CarFeatures, ArrowInterface
{
    const SpeedConfident = 3;
    const FuelRatio = 4;
    use EachCarClass;
}