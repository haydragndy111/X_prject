<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlasticBagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plastic_bags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('length',5,2);
            $table->decimal('width',5,2);
            $table->decimal('height',5,2);
            $table->decimal('weight',5,2);
            $table->decimal('bag_thickness',5,2);
            $table->string('base_type');
            $table->integer('quantity_per_item');
            $table->integer('quantity_per_tons');
            $table->string('model');
            $table->string('effects');
            $table->string('material_type');
            $table->string('material_color');
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
        Schema::dropIfExists('plastic_bags');
    }
}
