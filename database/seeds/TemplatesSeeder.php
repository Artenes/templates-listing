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

            $data['slug'] = $this->clean($data['name']);
            $data['thumbnail'] = '/templates/thumbnails/' . $data['slug'] . '.jpg';
            $data['cover'] = '/templates/covers/' . $data['slug'] . '.jpg';

            factory(Template::class)->create($data);

        });

    }

    protected function clean($string)
    {

        return mb_strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '', $string)));

    }

}
