<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name_product',200);
            $table->string('description',800);
            $table->string('position');
            $table->string('category')->nullable();
            $table->float('price');
            $table->integer('stock');
            $table->integer('discount')->nullable();
            $table->string('img1',150);
            $table->string('img2',150);
            $table->string('img3',150);
            $table->string('img4',150);

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
