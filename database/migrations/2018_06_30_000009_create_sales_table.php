<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->dateTime('date');
            $table->string('payment_method');
            $table->unsignedTinyInteger('shipping_id');
            $table->smallInteger('status');
            $table->timestamps();
            $table->foreign('shipping_id')->references('id')->on('shipings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
