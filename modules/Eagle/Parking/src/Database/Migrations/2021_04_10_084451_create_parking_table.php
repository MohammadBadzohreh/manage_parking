<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingTable extends Migration
{

    public function up()
    {
        Schema::create('parkings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("title");
            $table->bigInteger("price")->default(0);
            $table->bigInteger("capacity");
            $table->enum("type", \Eagle\Parking\Models\Parking::$TYPES)
                ->default(\Eagle\Parking\Models\Parking::CASH_TYPE);
            $table->enum("status", \Eagle\Parking\Models\Parking::$STATUSES)
                ->default(\Eagle\Parking\Models\Parking::NOT_FILLED_STATUS);
            $table->string("avatar");
            $table->text("address")->nullable();
            $table->longText("description")->nullable();
            $table->bigInteger("uses")->default(0);
            $table->timestamps();

            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("CASCADE")
                ->onUpdate("CASCADE");
        });
    }

    public function down()
    {
        Schema::dropIfExists('parkings');
    }
}
