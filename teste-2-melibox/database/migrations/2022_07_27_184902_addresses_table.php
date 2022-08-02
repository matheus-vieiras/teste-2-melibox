<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("addresses", function($blueprint){

            $blueprint->id();
            $blueprint->string("description");
            $blueprint->string("number");
            $blueprint->string("complement")->nullable();
            $blueprint->string("zipcode", 8);
            $blueprint->string("district");
            $blueprint->string("city");
            $blueprint->string("state");
            $blueprint->string("country");
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("addresses");
    }
}
