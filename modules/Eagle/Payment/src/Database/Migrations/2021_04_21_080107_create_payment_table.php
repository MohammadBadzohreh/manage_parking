<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{

    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("buyer_id")->unsigned()->nullable();//
            $table->bigInteger("seller_id")->unsigned()->nullable();
            $table->foreignId("paymentable_id");//
            $table->string("paymentable_type");//
            $table->string("amount", 10);//
            $table->string("invoice_id", 255);
            $table->string("getway");
            $table->enum("status", \Eagle\Payment\Models\Payment::$statuses);//
            $table->timestamps();

            $table->foreign("seller_id")
                ->references("id")
                ->on("users")
                ->onDelete("SET NULL")
                ->onUpdate("CASCADE");

            $table->foreign("buyer_id")
                ->references("id")
                ->on("users")
                ->onDelete("SET NULL")
                ->onUpdate("CASCADE");
        });
    }


    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
