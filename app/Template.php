<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Facades\PriceCalculatorFacade as Price;

class Template extends Model
{

    protected $appends = ['demo', 'price', 'buy'];

    public static function search($search = '')
    {

        return static::where('name', 'like', "%{$search}%")
            ->orWhere('title', 'like', "%{$search}%")
            ->orWhere('tags', 'like', "%{$search}%")
            ->paginate()->toArray();

    }

    public static function findOrFailBySlug($slug)
    {

        return static::where('slug', $slug)->firstOrFail();

    }

    public function getBuyAttribute()
    {

        return route('checkout.show', $this->slug);

    }

    public function getDemoAttribute()
    {

        return route('demos.show', $this->slug);

    }

    public function getPriceAttribute()
    {

        return Price::calculate($this->price_real);

    }

}
