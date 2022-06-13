<?php

namespace App\BMW;

use App\AdditionalVehicleCapabilities;
use App\ArrowInterface;
use App\CarFeatures;
use App\EachCarClass;
use JetBrains\PhpStorm\Pure;

class BMWi4M50 extends AdditionalVehicleCapabilities implements CarFeatures, ArrowInterface
{
    use EachCarClass;
}