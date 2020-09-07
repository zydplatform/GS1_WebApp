<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('productname');
            $table->BigInteger('productprice');
            $table->string('productbrand');
            $table->string('productdetails');
            $table->string('productqty');
            $table->dateTime('mfgdate');
            $table->dateTime('expdate');
            $table->BigInteger('item_reference_number')->unique();
            // $table->foreign('userproduct_id')->references('id')->on('users')->onDelete('cascade');
            // $table->BigInteger('userproduct_id')->unsigned()->index();
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
        Schema::dropIfExists('products');
    }
}
