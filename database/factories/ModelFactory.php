<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Template::class, function (Faker $faker) {

    return [

        'uuid' => $faker->uuid,
        'thumbnail' => 'https://reidostemplates.com.br/wp-content/uploads/2017/09/ADFOREST1.jpg',
        'title' => 'Classified Ads WordPress Theme',
        'slug' => 'classified-ads-wordpress-theme-adforest',
        'name' => 'AdForest',
        'tags' => 'wordpress;classified;template',
        'price_dollar' => 49,
        'price_real' => 65,
        'demo_url' => 'http://adforest.scriptsbundle.com/',
        'source_url' => 'https://reidostemplates.com.br/produto/tema-site-wordpress-para-classificados/',
        'original_source_url' => 'https://themeforest.net/item/adforest-classified-wordpress-theme/19481695?ref=scriptsbundle'

    ];

});
