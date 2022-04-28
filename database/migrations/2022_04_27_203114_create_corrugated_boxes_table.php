<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrugatedBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corrugated_boxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('product_shape');
            $table->string('material_type');
            $table->string('material_color');
            $table->string('model');
            $table->decimal('box_length',5,2);
            $table->decimal('box_height',5,2);
            $table->decimal('box_width',5,2);
            $table->decimal('flat_box_height',5,2);
            $table->decimal('flat_box_width',5,2);
            $table->integer('quantity_per_item');
            $table->string('solovan_layer');
            $table->string('merged_normal_paper');
            $table->string('finger_print_layer');
            $table->string('uv_layer');
            $table->string('coverage');
            $table->integer('glue_points_number');
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
        Schema::dropIfExists('corrugated_boxes');
    }
}
