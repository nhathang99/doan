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
            $table->unsignedBigInteger('productID')->nullable();
            $table->integer('quality');
            $table->unsignedBigInteger('billID')->nullable();
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
