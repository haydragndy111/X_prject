<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperWrapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_wraps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('width',5,2);
            $table->decimal('height',5,2);
            $table->string('material_type');
            $table->string('material_colors');
            $table->decimal('paper_thickness',5,2);
            $table->integer('quantity_per_item');
            $table->decimal('item_weight');
            $table->string('pe_layer');
            $table->decimal('merged_layer_thickness',5,2);
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
        Schema::dropIfExists('paper_wraps');
    }
}
