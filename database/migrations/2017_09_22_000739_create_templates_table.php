<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('thumbnail');
            $table->string('cover');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('tags');
            $table->decimal('price_dollar');
            $table->decimal('price_real');
            $table->string('demo_url');
            $table->string('source_url');
            $table->string('original_source_url');
            $table->unsignedInteger('views')->default(0);
            $table->boolean('on_sale')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templates');
    }
}
