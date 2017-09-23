<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceCalculator extends Model
{

    protected $config;

    public function __construct($config)
    {

        $this->config = $config;

    }

    public function calculate($priceInReais)
    {

        $price = $priceInReais / $this->config['exchange'];

        $taxTransaction = $price * ($this->config['paypal_tax_percentage'] / 100);
        $tazExchange = $price * ($this->config['paypal_tax_exchange'] / 100);

        $total = $price + $taxTransaction + $tazExchange + $this->config['paypal_tax_fixed'];

        $gain = $total * ($this->config['gain_percentage'] / 100);

        return ceil($total + $gain);

    }

}
