<?php

namespace app;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Migrations\Migration;

class Migrations extends Migration
{
    public function up()
    {
        Capsule::schema()->create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //varchar 255
            $table->timestamps();
        });

        Capsule::schema()->create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //varchar 255
            $table->float('price')->default(0.00);
            $table->text('description');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')->on('category');
            $table->timestamps();
        });
    }

    public function down()
    {
        Capsule::schema()->dropIfExists('goods');
        Capsule::schema()->dropIfExists('category');
    }
}