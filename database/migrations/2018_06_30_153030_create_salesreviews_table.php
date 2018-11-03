<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesreviews', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->unsignedTinyInteger('user_id');
            $table->unsignedTinyInteger('sale_id');
            $table->dateTime('date');
            $table->smallInteger('rating');
            $table->string('comment',300);
            $table->timestamps();
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salesreviews');
    }
}
