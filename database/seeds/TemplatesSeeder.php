<?php

use App\Template;
use Illuminate\Database\Seeder;

class TemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        collect(config('templates'))->each(function ($data) {

            factory(Template::class)->create($data);

        });

    }
}
