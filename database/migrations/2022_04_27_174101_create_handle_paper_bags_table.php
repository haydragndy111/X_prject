<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHandlePaperBagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handle_paper_bags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('material_type');
            $table->string('material_colors');
            $table->decimal('paper_thickness',5,2);
            $table->string('handle_model');
            $table->decimal('base_width',5,2);
            $table->decimal('base_height');
            $table->string('print_type');
            $table->string('effects');
            $table->integer('quantity_per_item');
            $table->integer('quantity_per_tons');
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
        Schema::dropIfExists('handle_paper_bags');
    }
}
