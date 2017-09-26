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

    public function calculate($priceInReais, $priceInDollars)
    {

        $price = $priceInReais / $this->config['exchange'];

        $taxTransaction = $price * ($this->config['paypal_tax_percentage'] / 100);
        $taxExchange = $price * ($this->config['paypal_tax_exchange'] / 100);

        $total = $price + $taxTransaction + $taxExchange + $this->config['paypal_tax_fixed'];

        $isTotalGreaterThan50Percent = $total >= ($priceInDollars * 0.5);

        $percentage =  $isTotalGreaterThan50Percent ? $this->config['low_gain_percentage'] : $this->config['gain_percentage'];

        $gain = $total * ($percentage / 100);

        return ceil($total + $gain);

    }

}
