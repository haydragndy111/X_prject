<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSosWithoutHandleBagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sos_without_handle_bags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('material_colors');
            $table->decimal('base_width',5,2);
            $table->decimal('base_height',5,2);
            $table->decimal('bag_height',5,2);
            $table->decimal('bag_width',5,2);
            $table->integer('quantity_per_item')->nullable();
            $table->integer('quantity_per_tons')->nullable();
            $table->decimal('paper_thickness',5,2);
            $table->string('print_type');
            $table->string('effects');
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
        Schema::dropIfExists('sos_without_handle_bags');
    }
}
