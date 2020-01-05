<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilldetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billdetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('billID');
            // $table->foreign('billID')->references('id')->on('bill');

            $table->unsignedBigInteger('productID');
            // $table->foreign('productID')->references('id')->on('products');

            $table->integer('amount');
            $table->string('money');
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
        Schema::dropIfExists('billdetail');
    }
}
