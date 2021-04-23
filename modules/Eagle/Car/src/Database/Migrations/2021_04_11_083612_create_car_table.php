<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTable extends Migration
{

    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("parking_id")->unsigned()->nullable();
            $table->enum("car_type", \Eagle\Car\Models\Car::$CARS_TYPE);
            $table->string("tag");
            $table->enum("color", \Eagle\Car\Models\Car::$COLORS);
            $table->bigInteger("model");
            $table->timestamps();
            $table->foreign("user_id")
                ->references('id')
                ->on("users")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");

            $table->foreign("parking_id")
                ->references('id')
                ->on("parkings")
                ->onDelete("SET NULL")
                ->onUpdate("CASCADE");
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
