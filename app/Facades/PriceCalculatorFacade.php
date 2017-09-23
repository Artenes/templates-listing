<?php

namespace App\Facades;

use App\PriceCalculator;
use Illuminate\Support\Facades\Facade;

class PriceCalculatorFacade extends Facade
{

    public static function getFacadeAccessor()
    {

        return PriceCalculator::class;

    }

}
