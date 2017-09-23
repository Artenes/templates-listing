<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Facades\PriceCalculatorFacade as Price;

class Template extends Model
{

    public static function findOrFailBySlug($slug)
    {

        return static::where('slug', $slug)->firstOrFail();

    }

    public function getPriceAttribute()
    {

        return Price::calculate($this->price_real);

    }

}
